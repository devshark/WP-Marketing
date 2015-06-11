var $currentContentEditor='content';
var $currentContentEditorInterval=0;
var $currentDeleteModal=false;
var $pbSavingDone=true;
var $pbSavingLast=0;
// Reset Content width
jQuery(function(){
    $homeURI = script_data.home_uri;
	$homeURI+='/';
    if($homeURI[$homeURI.length-1]==='/'){$homeURI=$homeURI.substring(0,$homeURI.length-1);}
    evaSortDragg();
    // init Source Datas
    evaInitSourceDatas(jQuery('#pagebuilder-area-source>div'));
    // Click to Add Item
    jQuery('#pagebuilder-elements-container>.item').click(function(){
        jQuery('#pagebuilder-area>div').eq(1).append(jQuery(this).clone());
        pbSaveData();
        pbInitEvents();
    });
    // Layout Change
    jQuery('#pagebuilder-select-layout>.sidebar').bind('click').bind('click',function(e){e.preventDefault();
        var $currentLayout = jQuery(this);
        var $currentValueArray = $currentLayout.attr('data-value').split(',');
        var $currentLayoutInput=$currentLayout.siblings('.page-layout');
        $currentLayout.addClass('active').siblings('.sidebar').removeClass('active');
        $currentLayoutInput.attr("value",$currentLayout.attr('data-input'));
        if($currentValueArray[0]!==''){
            var $currentBuilderArea='';
            var $currentBuilderAreaClasses='';
            for(var i = 0, length=$currentValueArray.length ; i<length; i++){
                $currentBuilderArea=jQuery('#pagebuilder-area').children('.builder-area').eq(i);
                $currentBuilderAreaClasses=$currentBuilderArea.attr('class').split(' ');
                for(var ind=0,len=$currentBuilderAreaClasses.length;ind<len;ind++){if($currentBuilderAreaClasses[ind].search('size-')!==-1){$currentBuilderArea.removeClass($currentBuilderAreaClasses[ind]).addClass('size-'+$currentValueArray[i]);break;}}
            }
            //START - Sidebar elements moving
            var $oldSidebar=false;
            var $newSidebar=false;
            if($currentLayoutInput.val()=='left'){
                jQuery('#pagebuilder-area').children('.builder-area').eq(1).removeClass('right-sidebar').removeClass('no-sidebar').addClass('left-sidebar');
                $oldSidebar=jQuery('#pagebuilder-area').children('.builder-area').eq(-1);
                $newSidebar=jQuery('#pagebuilder-area').children('.builder-area').eq(0);
            }else if($currentLayoutInput.val()=='right'){
                jQuery('#pagebuilder-area').children('.builder-area').eq(1).removeClass('left-sidebar').removeClass('no-sidebar').addClass('right-sidebar');
                $oldSidebar=jQuery('#pagebuilder-area').children('.builder-area').eq(0);
                $newSidebar=jQuery('#pagebuilder-area').children('.builder-area').eq(-1);
            }else{
                jQuery('#pagebuilder-area').children('.builder-area').eq(1).removeClass('left-sidebar').removeClass('right-sidebar').addClass('no-sidebar');
            }
            if($oldSidebar&&$newSidebar){
                if($newSidebar.children().length===0){
                    $newSidebar.html($oldSidebar.html());
                    $oldSidebar.html('');
                }
            }
            //END   - Sidebar elements moving
            pbSaveData();
            pbInitEvents();
        }
    });
    jQuery('#pagebuilder-select-layout>.sidebar.active').click();
    pbInitEvents();
    pbInitTemplateEvents();
    pbSaveData();
});
function pbInitTemplateEvents(){
    // Template Action
    jQuery('.template-add').unbind('click').bind('click',function(e){e.preventDefault();
        var $currentTemplateName   = prompt('Template Name?');
        var $currentTemplateLayout = jQuery('input[name="pb-page-layout"]')       .val();
        var $currentTemplateContent=encodeURIComponent(jQuery('#pagebuilder-area').html());        
        if($currentTemplateName==null){
            return false;
        }else if($currentTemplateName!='' && $currentTemplateLayout!=''){
            jQuery.ajax({
                type: "POST",
                url: ajaxurl,
                data: {
                    'action':'template_add',
                    'template_name':$currentTemplateName,
                    'template_content':$currentTemplateContent,
                    'template_layout':$currentTemplateLayout
                },
                success: function(response){
                    if(jQuery('.succes',response).text()!=''){
                        jQuery('ul.template-container').append('<li class="template-item"><a class="template-name">'+$currentTemplateName+'</a><span class="template-delete">X</span></li>');
                        pbInitTemplateEvents();
//                        alert(jQuery('.succes',response).text());
                    }else if(jQuery('.error',response).text()!=''){
                        alert(jQuery('.error',response).text());
                    }
                }
            });
        }else{
            alert('Template name is empty!!! Try again.');
        }
        jQuery('#template-save').removeClass('active').children('.template-container').slideUp();
    });
    jQuery('.template-name').unbind('click').bind('click',function(e){e.preventDefault();
        var $currentTemplateName = jQuery(this).text();
        var $currentResponse = 'waitingajax';
        if($currentTemplateName){
            jQuery.ajax({
                type: "POST",
                url: ajaxurl,
                data: {
                    'action':'template_get',
                    'template_name':$currentTemplateName
                },
                success: function(response){
                    $currentResponse=response;
                }
            });
            if(confirm("Your old contents are will delete ?")){
                var templateAjaxInt=setInterval(function(){
                    if($currentResponse!=='waitingajax'){
                        clearInterval(templateAjaxInt);
                        if(jQuery('.data',$currentResponse).html()!=''){
                            jQuery('#pagebuilder-select-layout>[data-input="'+jQuery('.data>.layout',$currentResponse).text()+'"]').click();
                            jQuery('#pagebuilder-area').html('');
                            var tmp=jQuery($currentResponse).clone();
                            jQuery('>.data>.content>div',tmp).each(function(){
                                jQuery('#pagebuilder-area').append(jQuery(this).html(''));
                            });
                            evaSortDragg();
                            // init Source Datas
                            evaInitSourceDatas(jQuery('>.data>.content>div',$currentResponse));
                            pbSaveData();
                            pbInitEvents();
                        }else if(jQuery('.error',$currentResponse).text()!=''){
                            alert(jQuery('.error',$currentResponse).text());
                        }
                    }
                },100);
            }
        }
        jQuery('#template-save').removeClass('active').children('.template-container').slideUp();
    });
    jQuery('.template-delete').unbind('click').bind('click',function(e){e.preventDefault();
        var $this = jQuery(this);
        var $currentTemplateName = $this.closest('.template-item').find('.template-name').text();
        if($currentTemplateName && confirm("Are you delete this template ?")){
            jQuery.ajax({
                type: "POST",
                url: ajaxurl,
                data: {
                    'action':'template_remove',
                    'template_name':$currentTemplateName
                },
                success: function(response){
                    $this.closest('.template-item').remove();
                    if(jQuery('.error',response).text()!=''){    
                        alert(jQuery('.error',response).text());
                    }
                }
            });
        }
        jQuery('#template-save').removeClass('active').children('.template-container').slideUp();
    });
    // Template Style
    jQuery('#template-save>.template').unbind('click').bind('click',function(e){e.preventDefault();
        if(jQuery('#template-save').hasClass('active')){
            jQuery('#template-save').removeClass('active').children('.template-container').slideUp();
        }else{
            jQuery('#template-save').addClass('active').children('.template-container').slideDown();
        }
    });
}

function pbInitEvents(){
    // height repaire
    var $builderMaxHeight=0;
    jQuery('#pagebuilder-area>div').css('min-height','');
    jQuery('#pagebuilder-area>div').each(function(){if(jQuery(this).height()>$builderMaxHeight){$builderMaxHeight=jQuery(this).height();}});
    jQuery('#pagebuilder-area>div').css('min-height',$builderMaxHeight+'px');
    // Sortable Draggable
    evaSortDragg();
    //resize
    jQuery(".builder-area>.item>.list>.size-sizer-container>.sizer>a.down").unbind("click").bind("click",function(e){e.preventDefault();
        var $this = jQuery(this);
        var $sizeList=jQuery('#size-list').clone();
        var $currentItem     = $this.closest('.item');
        var $currentSizeText = jQuery('.list>.size-sizer-container>.size',$currentItem).text();
        var $currentSizeList = jQuery('li[data-text="'+$currentSizeText+'"]',$sizeList);
        $currentItem.removeClass($currentSizeList.attr('data-class'));
        if($currentItem.attr('data-min')){$sizeList.find('[data-class="'+$currentItem.attr('data-min')+'"]').addClass('min').siblings('.min').removeClass('min');}
        if($currentSizeList.hasClass('min')){
//            $currentSizeList=$currentSizeList.siblings('.max');
        }else{
            $currentSizeList=$currentSizeList.prev();
        }
        $currentItem.addClass($currentSizeList.attr('data-class'));
        jQuery('.list>.size-sizer-container>.size',$currentItem).text($currentSizeList.attr('data-text'));
        pbSaveData();
    });
    
    jQuery(".builder-area>.item>.list>.size-sizer-container>.sizer>a.up").unbind("click").bind("click",function(e){e.preventDefault();
        var $this = jQuery(this);
        var $sizeList=jQuery('#size-list').clone();
        var $currentItem     = $this.closest('.item');
        var $currentSizeText = jQuery('.list>.size-sizer-container>.size',$currentItem).text();
        var $currentSizeList = jQuery('li[data-text="'+$currentSizeText+'"]',$sizeList);
        $currentItem.removeClass($currentSizeList.attr('data-class'));
        if($currentItem.attr('data-min')){$sizeList.find('[data-class="'+$currentItem.attr('data-min')+'"]').addClass('min').siblings('.min').removeClass('min');}
        if($currentSizeList.hasClass('max')){
//            $currentSizeList=$currentSizeList.siblings('.min');
        }else{
            $currentSizeList=$currentSizeList.next();
        }
        $currentItem.addClass($currentSizeList.attr('data-class'));
        jQuery('.list>.size-sizer-container>.size',$currentItem).text($currentSizeList.attr('data-text'));
        pbSaveData();
    });
		
    //duplicate
    jQuery(".builder-area>.item>.list>.actions>a.action-duplicate").unbind("click").bind("click",function(e){e.preventDefault();
        evaPublishEnable('disable');
        var $parent = jQuery(this).closest('.item');
        var $newItem = $parent.clone().addClass('hidded').css('display','none');
        $parent.after($newItem).promise().done(function(){
            jQuery('.builder-area>.item.hidded').removeClass('hidded').fadeIn('slow').promise().done(function(){
                pbSaveData();pbInitEvents();
            });
        });
    });
    //edit
    jQuery(".builder-area>.item>.list>.actions>a.action-edit").unbind("click").bind("click",function(e){e.preventDefault();
        $parent = jQuery(this).closest('.item');
        $parent.addClass('item-modalled').siblings('.item-modalled').removeClass('item-modalled');
        var $videoURL = jQuery(this).attr('data-video');
        html = $parent.children('.data').html();
        //pbInitModalSave
        jQuery( '<div id="pb-modal-container" class="'+$parent.attr('data-slug')+'" />' ).append(html).dialog({
            closeOnEscape: true,
            title: $parent.children('.list').children('.name').text(),
            resizable: false,
            width: 700,
            modal: true,
            open: function(event, ui){
                jQuery(this).closest('.ui-dialog').addClass('eva-pb-main-container');
                jQuery(this).closest('.ui-dialog').focus();
                pbModalInitActions(jQuery(this));
            },
            close: function(){
                $currentContentEditor='content';
                jQuery('#pb-modal-container').closest('.ui-dialog').remove();
                jQuery('body>#pb-modal-container').remove();
            },
            buttons: {
                "Save": function() {
                    pbModalSave(jQuery(this));
                    jQuery(this).dialog("close");
                    pbSaveData();
                },
                "Cancel": function() {
                    jQuery(this).dialog("close");
                }
            }
        });
    });
    //remove item
    jQuery(".builder-area>.item>.list>.actions>a.action-delete").unbind("click").bind("click",function(e){e.preventDefault();
        $currentDeleteModal = jQuery(this).closest('.item');
        //pbInitModalSave
        jQuery( '<div id="pb-delete-modal-container" />' ).append('Are you sure to delete this?').dialog({
            closeOnEscape: true,
            title: 'Confirm',
            resizable: false,
            width: 800,
            modal: true,
            open: function(event, ui){
                jQuery(this).closest('.ui-dialog').addClass('eva-pb-main-container');
                jQuery(this).closest('.ui-dialog').find('.ui-dialog-buttonset>.ui-button').first().focus();
            },
            close: function(){
                $currentDeleteModal=false;
                jQuery('#pb-delete-modal-container').closest('.ui-dialog').remove();
                jQuery('body>#pb-delete-modal-container').remove();
            },
            buttons: {
                "Yes": function() {
                    $currentDeleteModal.remove();
                    $currentDeleteModal=false;
                    pbSaveData();
                    jQuery(this).dialog("close");
                },
                "No": function() {
                    jQuery(this).dialog("close");
                }
            }
        });
    });
}
	
function pbSaveData(){
    var $currSaving=++$pbSavingLast;
    // Saving Datas
    evaPublishEnable('disable');
    var savingInt=setInterval(function(){
        evaPublishEnable('disable');
        if($pbSavingDone){
            $pbSavingDone=false;
            clearInterval(savingInt);
            var item = '';
            jQuery('#pagebuilder-area>div').each(function(iCont){
                var $currentContainer=jQuery(this);
                var $size='';
                var $classes=$currentContainer.attr('class').split(' ');
                for(var i=0,len=$classes.length;i<len;i++){
                    if($classes[i].search('size-')!==-1){
                        $size=$classes[i];
                        break;
                    }
                }                
                if(iCont){item += ',';}
                item += '"'+iCont+'":{"size":"'+$size+'","items":{';
                $currentContainer.children('.item').each(function(i){
                    var $currentItem=jQuery(this);
                    if(i){item += ',';}
                    item += '"'+i+'":{"slug":"'+$currentItem.attr('data-slug')+'","size":"' + jQuery('.list>.size-sizer-container>.size',$currentItem).text() + '",';
                    jQuery('.data .general-field-container>.field-item>.field-data>.field',$currentItem).each(function(){
                        var $currentField=jQuery(this);
                        item += '"'+$currentField.attr('data-name')+'":"'+$currentField.val()+'",';
                    }).promise().done(function(){
                        item += '"settings":{';
                        jQuery('.data .custom-field-container>.field-item>.field-data>.field',$currentItem).each(function(index){
                            var $currentField=jQuery(this);
                            if(index){item += ',';}
                            if($currentField.attr('data-type')==='container'){
                                item += '"'+$currentField.attr('data-name')+'":{';
                                    $currentField.children('.container-item').each(function(itemIndex){
                                        var $currentContainerItem=jQuery(this);
                                        if(itemIndex){item += ',';}
                                        item += '"'+itemIndex+'":{';
                                            jQuery('.content>.field-item>.field-data>.field',$currentContainerItem).each(function(fieldIndex){
                                                var $currentContainerItemField = jQuery(this);
                                                if(fieldIndex){item += ',';}
                                                item += '"'+$currentContainerItemField.attr('data-name')+'":"'+encodeURIComponent($currentContainerItemField.val())+'"';
                                            });
                                        item += '}';
                                    });
                                item += '}';
                            }else{
                                item += '"'+$currentField.attr('data-name')+'":"'+encodeURIComponent($currentField.val())+'"';
                            }
                        }).promise().done(function(){
                            item += '}}';
                        });
                    });
                }).promise().done(function(){
                    item += '}}';
                });
            }).promise().done(function(){
    //            jQuery('textarea#pb_content').val('{'+item+'}');
                jQuery('textarea#pb_content').val(encodeURIComponent('{'+item+'}'));
                if($currSaving===$pbSavingLast){
                    evaPublishEnable('enable');
                    $pbSavingDone=true;
                }else{
                    $pbSavingDone=true;
                }
            });
        }
    },500);
}
function pbModalInitActions($currentModal){
    //Font Awesome Actions
    jQuery('[data-name="fa_icon"]',$currentModal).each(function(){
        var $currIconField = jQuery(this).closest('.field-item');
        var $currFa = $currIconField.siblings('.field-item.type-fa').hasClass('type-fa')?$currIconField.siblings('.field-item.type-fa'):$currentModal;
        var $currFaFields = $currIconField.parent().children('.field-item');
        //Font Awesome Viewer
        jQuery('[data-name="fa_icon"]',$currFaFields).unbind('input').bind('input',function(){
            var $style='display:block; text-align:center; margin: 0 auto;';
            $style +='color:'           +jQuery('[data-name="fa_color"]',   $currFaFields).val()+';';
			$style +='background-color:'+jQuery('[data-name="fa_bg_color"]',$currFaFields).val()+';';
            jQuery('.fa-viewer',$currFa).html('<i class="fa '+jQuery('[data-name="fa_icon"]', $currFaFields).val()+'"'+$style+'"></i>').css('padding',jQuery('[data-name="fa_padding"]',$currFaFields).val());
        });
        jQuery('[data-name="fa_icon"]',$currFaFields).trigger('input');
        //Font Awesome Modal
        jQuery('.remove-fa',$currFa).unbind('click').bind('click',function(e){e.preventDefault();
            jQuery('[data-name="fa_color"]',   $currFaFields).val('');
            jQuery('[data-name="fa_bg_color"]',$currFaFields).val('');
            jQuery('[data-name="fa_icon"]',    $currFaFields).val('').trigger('input');
        });
        //Font Awesome Modal
        jQuery('.show-fa-modal',$currFa).unbind('click').bind('click',function(e){e.preventDefault();
            var $currentButton=jQuery(this);
            if($currentButton.not('.loading')){
                $currentButton.addClass('loading');
                jQuery.ajax({
                    type: "POST",
                    url: ajaxurl,
                    data: {
                        'action':'get_fontawesome'
                    },
                    success: function(response){
                        if(jQuery(response).hasClass('fontawesome-ajax-data')){
                            jQuery( '<div id="fontawesome_container_dialog" data-current="none" />').append(jQuery(response).html()).dialog({
                                title: 'Font Awesome',
                                resizable: true,
                                width: 800,
            //                    height: 500,
                                modal: true,
                                open: function(){
                                    jQuery(this).closest('.ui-dialog').addClass('eva-pb-main-container');
                                    jQuery(this).closest('.ui-dialog').focus();
                                    pbModalSaveField($currFaFields,jQuery(this).find('.general-field-container').children('.field-item'));
                                    pbModalInitActions(jQuery(this));
                                    pbFaModalInitActions(jQuery(this));
                                },
                                close: function(){
                                    jQuery('#fontawesome_container_dialog').closest('.ui-dialog').remove();
                                    jQuery('body>#fontawesome_container_dialog').remove();
                                },
                                buttons: {
                                    "Insert": function() {
                                        pbModalSaveField(jQuery(this).find('.general-field-container').children('.field-item'),$currentButton.closest('.field-item').parent().children('.field-item'));
                                        $currentButton.closest('.field-item').parent().find('[data-name="fa_icon"]').trigger('input');
                                        jQuery(this).dialog("close");
                                    },
                                    "Cancel": function() {
                                        jQuery(this).dialog("close");
                                    }
                                }
                            });
                        }
                        $currentButton.removeClass('loading');
                    }
                });
            }
        });
    });
    //Upload Button Item
    jQuery('.field-item>.field-data>[data-type="button"]',$currentModal).each(function(){
        var $currentButton=jQuery(this);
        var $currentButtonSaveTo=$currentButton.attr('data-save-to');
        if($currentButtonSaveTo!==''){
            var $currentSaveField = $currentButton.closest('.field-item').siblings('.field-item').find('>.field-data>[data-name="'+$currentButtonSaveTo+'"]',$currentModal);
            $currentButton.unbind('click').bind('click',function(){
                if($currentSaveField.attr('data-type-org')==='gallery'){
                    /* Gallery */
                    var frame;
                    var images = $currentSaveField.val();
                    var selection = twLoadImages(images);
                    // Set options for 1st frame render
                    var options = {
                            title: script_data.label_create,
                            state: 'gallery-edit',
                            frame: 'post',
                            selection: selection
                    };
                    // Check if frame or gallery already exist
                    if( frame || selection ) {
                            options['title'] = script_data.label_edit;
                    }

                    frame = wp.media(options).open();

                    // Tweak views
                    frame.menu.get('view').unset('cancel');
                    frame.menu.get('view').unset('separateCancel');
                    frame.menu.get('view').get('gallery-edit').el.innerHTML = script_data.label_edit;
                    frame.content.get('view').sidebar.unset('gallery'); // Hide Gallery Settings in sidebar

                    frame.on( 'content:render:browse', function( browser ) {
                        if ( !browser ) return;
                        // Hide Gallery Setting in sidebar
                        browser.sidebar.on('ready', function(){
                            browser.sidebar.unset('gallery');
                        });
                        // Hide filter/search as they don't work 
                        browser.toolbar.on('ready', function(){ 
                            if(browser.toolbar.controller._state == 'gallery-library'){ 
                                browser.toolbar.$el.hide(); 
                            } 
                        }); 
                    });

                    // Override insert button
                    function overrideGalleryInsert() {
                        frame.toolbar.get('view').set({
                            insert: {
                                style: 'primary',
                                text: script_data.label_save,
                                click: function() {
                                    var models = frame.state().get('library'),
                                        ids = '';
                                    $currentSaveField.siblings('ul.gallery-images').html('');
                                    models.each( function( attachment ) {
                                        $currentSaveField.siblings('ul.gallery-images').append('<li style="width:100px;"><img src="'+attachment.attributes.url+'" style="width:100%;"></li>');
                                        ids += attachment.id + ','
                                    });

                                    $currentSaveField.attr("value",ids);
                                    this.el.innerHTML = script_data.label_saving;
                                    selection = twLoadImages(ids);
                                    frame.close();
                                }
                            }
                        });
                    }

                    // When we are editing a gallery
                    overrideGalleryInsert();
                    frame.on( 'toolbar:render:gallery-edit', function() {
                        overrideGalleryInsert();
                    });
                }else{
//                    window.original_send_to_editor = window.send_to_editor;
//                    window.custom_editor = true;
//                    window.send_to_editor = function(html){
//                        html = jQuery("<div />").html(html);
//                        $currentSaveField.val(jQuery(html).find('img').attr('src'));
//                        tb_remove();
//                    };
//                    tb_show('Upload', $homeURI+'/wp-admin/media-upload.php?post_ID=' + script_data.post_id + '&type=image&TB_iframe=true',false);
//                    jQuery('#TB_overlay').css('z-index','9998');
//                    jQuery('#TB_window').css('z-index','9999');




                    var _custom_media = true,
                        _orig_send_attachment = wp.media.editor.send.attachment;

//                    var send_attachment_bkp = wp.media.editor.send.attachment;
                    _custom_media = true;
                    wp.media.editor.send.attachment = function(props, attachment){
                        if ( _custom_media ) {
                            $currentSaveField.attr("value",attachment.url);
                        } else {
                          return _orig_send_attachment.apply( this, [props, attachment] );
                        }
                    };
                    jQuery('.add_media').on('click', function(){_custom_media = false;});
                    wp.media.editor.open($currentButton);
                    return false;
                }
            });
        }
    });
    //TextEditor Item
    jQuery('.field-item>.field-data>[data-tinymce="true"]',$currentModal).each(function(){
        var $currentEditor=jQuery(this);
        var $currentEditorName=$currentEditor.attr('data-name')+'-'+$currentContentEditorInterval++;
        pbModalContentEditor($currentEditorName,$currentEditor);
        $currentContentEditor=$currentEditorName;
    });
    //CheckBox Item
    jQuery('.field-item>.field-data>[data-type="checkbox"]',$currentModal).each(function(){
        var $currentCheck=jQuery(this);
        var $currentCheckText=$currentCheck.next('.checkbox-text');
        $currentCheckText.children('.checkbox-true').unbind('click').bind('click',function(){
            $currentCheck.attr("value",true).attr("checked",true).change();
            if($currentCheck.closest('.ui-dialog-content.ui-widget-content').hasClass('accordion')){
                $currentCheck.closest('.container-item').siblings('.container-item').find('.field-item>.field-data>[data-name="'+$currentCheck.attr('data-name')+'"]').next('.checkbox-text').children('.checkbox-false').click();
            }
        });
        $currentCheckText.children('.checkbox-false').unbind('click').bind('click',function(){
            $currentCheck.attr("value",false).attr("checked",false).change();
        });
        $currentCheck.unbind('change').bind('change',function(){
            var $checked=$currentCheck.is(':checked');
            
            if($checked){
                $currentCheckText.removeClass('checked-false').addClass('checked-true');
            }else{
                $currentCheckText.removeClass('checked-true').addClass('checked-false');
            }
        });
        $currentCheck.change();
    });
    //Select Item
    jQuery('.field-item>.field-data>select',$currentModal).each(function(){
        var $currentSelect=jQuery(this);
        var $currentSelectText=$currentSelect.next('.select-text');
        $currentSelectText.width(pbItemRL($currentSelect)+$currentSelect.width()-pbItemRL($currentSelectText)); 
    });
    jQuery('.field-item>.field-data>select',$currentModal).unbind('change').bind('change',function(){
        var $currentSelect=jQuery(this);
        var $currentVal=$currentSelect.val();
        var $currentSelectText=$currentSelect.next('.select-text');
        var $currentSelectOption=$currentSelect.find('option[value="'+$currentVal+'"]');
        var $currentHideArray= $currentSelectOption.attr('hide')?$currentSelectOption.attr('hide').split(','):[""];
        $currentSelectOption.attr('selected','selected').siblings().removeAttr('selected');
        if($currentHideArray[0]!==''){
            $currentSelect.closest('.field-item').parent().children('.field-item.hide-for-select').removeClass('hide-for-select').show();
            for(var i = 0, length=$currentHideArray.length ; i<length; i++){
                if($currentHideArray[i]==='fa'){
                    $currentSelect.closest('.field-item').siblings('.field-item.type-fa').addClass('hide-for-select').hide();
                }else{
                    $currentSelect.closest('.field-item').siblings('.field-item').find('>.field-data>[data-name="'+$currentHideArray[i]+'"]').closest('.field-item').addClass('hide-for-select').hide();
                }
            }
        }
        $currentSelectText.text($currentSelectOption.text());
        if($currentSelect.attr('id')==='style_shortcode'&&$currentVal!=='none'){
            $currentSelect.children('option[value="none"]').attr('selected','selected').siblings().removeAttr('selected');
            evaGetShortcode($currentVal);
        }
    });
    jQuery('.field-item>.field-data>select',$currentModal).change();
    //Color Picker Item
    jQuery('.field-item>.field-data>[data-type="color"]',$currentModal).each(function(){
        var $currentInput=jQuery(this);
        jQuery($currentInput.siblings(".color-info")).ColorPicker({
            onShow: function (colpkr) {
                jQuery(colpkr).find('.colorpicker_hex>input').val($currentInput.val().replace('#','')).change();
                jQuery(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                jQuery(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb, el) {
                $currentInput.siblings('.color-info').css('background-color','#' + hex);
                $currentInput.val('#' + hex).change().trigger('input');
            }
        });
        $currentInput.unbind('input change').bind('input change',function(){
            if(jQuery(this).val()===''){jQuery(this).val(' ');}
            $currentInput.siblings('.color-info').css('background-color',jQuery(this).val());
        });
        jQuery(this).change();
    });
    //Container Item
    jQuery('.field-item>.field-data>[data-type="container"]',$currentModal).each(function(){
        var $currentContainer = jQuery(this);
        jQuery('.field-item>.field-data>[data-name="'+$currentContainer.attr('data-add-button')+'"]',$currentModal).unbind('click').bind('click',function(e){e.preventDefault();
            var $currentButton=jQuery(this);
            var $newElement = $currentButton.next('.data').find('[data-type="container"]');
            if($currentContainer.attr('data-container-type')==='toggle'){
                $currentContainer.append($newElement.html());
                pbModalInitActions($currentModal);
            }else{
                window.original_send_to_editor = window.send_to_editor;
                window.custom_editor = true;
                window.send_to_editor = function(html){
                    html = jQuery("<div />").html(html);
                    jQuery(html).find('img').each(function(){
                        $newElement.find('.image-src').attr('src',jQuery(this).attr('src'));
                        $newElement.find('[data-name="'+$newElement.attr('data-title-as')+'"]').attr('value',jQuery(this).attr('src'));
                        $currentContainer.append($newElement.html());
                    }).promise().done(function(){
                        tb_remove();
                        pbModalInitActions($currentModal);
                    });
                };
                tb_show('Upload', $homeURI+'/wp-admin/media-upload.php?post_ID=' + pID + '&type=image&TB_iframe=true',false);
                jQuery('#TB_overlay').css('z-index','9998');
                jQuery('#TB_window').css('z-index','9999');
            }
        });
        if($currentContainer.attr('data-container-type')==='toggle'){
            jQuery('.container-item>.content>.field-item>.field-data>[data-name="'+$currentContainer.attr('data-title-as')+'"]',$currentContainer).each(function(){
                var $currentChanger=jQuery(this);
                var $currentChangerType=$currentChanger.attr('data-type');
                if($currentChangerType==='select'){
                    $currentChanger.bind('change',function(){
                        $currentChanger.closest('.container-item').children('.list').children('.name').text($currentChanger.val());
                    });
                    $currentChanger.change();
                }else{
                    $currentChanger.unbind('input').bind('input',function(e){e.preventDefault();
                        $currentChanger.closest('.container-item').children('.list').children('.name').text($currentChanger.val());
                    });
                    $currentChanger.trigger('input');
                }
            });
        }
    });
    jQuery('.container-item>.list',$currentModal).unbind('click').bind('click',function(e){e.preventDefault();
        var $containerItem = jQuery(this).closest('.container-item');
        if($containerItem.closest('.container').attr('data-container-type')==='toggle'){
            if($containerItem.hasClass('expanded')){
                jQuery(this).next('.content').slideUp("normal", function(){$containerItem.removeClass('expanded');});
            }else{
                jQuery(this).next('.content').slideDown("normal", function(){$containerItem.addClass('expanded');});
            }
        }
    });
    jQuery('.container-item>.list>.actions>.action-delete',$currentModal).unbind('click').bind('click',function(e){e.preventDefault();
        jQuery(this).closest('.container-item').remove();
    });
    jQuery('.container-item>.list>.actions>.action-duplicate',$currentModal).unbind('click').bind('click',function(e){e.preventDefault();
        var $parent = jQuery(this).closest('.container-item');
        
        var $newItem = $parent.clone().addClass('hidded').css('display','none');
        $parent.after($newItem).promise().done(function(){
            $newItem.removeClass('hidded').fadeIn('slow').promise().done(function(){
                pbModalInitActions($currentModal);
            });
        });
        return false;
    });
    jQuery('.field-item>.field-data>[data-type="container"]',$currentModal).sortable({placeholder: 'container-item placeholding'});
    //Category Item
    function catReseter($currentCategorySelector, $currentSaveTo){
        var $currentCategoryList = $currentCategorySelector.siblings('.category-list-container');
        var $currentSaveToArray=$currentSaveTo.val().split(',');
        $currentCategorySelector.find('option').show();
        $currentCategoryList.html('');
        for (var i = 0, length=$currentSaveToArray.length ; i<length; i++){
            if($currentSaveToArray[i]!==''){
                $currentCategoryList.append('<div class="category-list-item clearfix" data-value="'+$currentSaveToArray[i]+'"><div class="name">'+$currentCategorySelector.find('option[value="'+$currentSaveToArray[i]+'"]').hide().text()+'</div><div class="actions"><a href="#" class="action-delete">X</a></div></div>');
            }
        }
        $currentCategoryList.find(".category-list-item .action-delete").unbind('click').bind('click',function(){
            var $oldArray=$currentSaveTo.val().split(',');
            var $newArray=[];
            var $delValue=jQuery(this).closest(".category-list-item").attr('data-value');
            jQuery(this).closest(".category-list-item").remove();
            for (var i = 0, length=$oldArray.length ; i<length; i++){
                if($oldArray[i]!==$delValue && $oldArray[i]!==''){
                    $newArray.push($oldArray[i]);
                }
            }
            $currentSaveTo.val($newArray.join(','));
            catReseter($currentCategorySelector, $currentSaveTo)
        });
    }
    jQuery('.field-item>.field-data>[data-type="category"]',$currentModal).each(function(){
        var $currentCategorySelector = jQuery(this);
        var $currentCategoryList = $currentCategorySelector.siblings('.category-list-container');
        var $currentSaveTo       = jQuery('.field-item>.field-data>[data-selector="'+$currentCategorySelector.attr('data-name')+'"]',$currentModal);
        $currentCategorySelector.change(function(){
            var $val  = $currentCategorySelector.val();
            var $noProblem = true;
            $currentCategoryList.children(".category-list-item").each(function(){
                if(jQuery(this).attr('data-value') == $val) {
                    $noProblem = false;
                }
            });
            if($val == 0 || $val == '0'){
                return false;
            }else{
                $currentCategorySelector.children('option[value="0"]').attr('selected','selected').siblings().removeAttr('selected');
                $currentCategorySelector.change();
                if($noProblem){
                    var $currentSaveToArray = $currentSaveTo.val().split(',');
                    if($currentSaveToArray.indexOf($val)<0){
                        if($currentSaveToArray[0]===''){
                            $currentSaveToArray[0]=$val;
                        }else{
                            $currentSaveToArray.push($val);
                        }
                        $currentSaveTo.val($currentSaveToArray.join(','));
                    }
                    catReseter($currentCategorySelector,$currentSaveTo);
                }
            }
        });
        catReseter($currentCategorySelector,$currentSaveTo);
    });
    jQuery('textarea',$currentModal).each(function(){
        var $currTextArea=jQuery(this);
        $currTextArea.unbind('input').bind('input',function(){$currTextArea.html($currTextArea.val());});
    });
}
function pbFaModalInitActions($currentFaModal){
    jQuery('ul.unstyled>li',$currentFaModal).unbind('click').bind('click',function(e){e.preventDefault();
        var $iconClass=jQuery(this).children('span').not('.muted');
        
        jQuery('[data-name="fa_icon"]',$currentFaModal).val($iconClass.text().replace(' ','')).trigger('input');
    });
    jQuery('[data-name="fa_size"],[data-name="fa_padding"],[data-name="fa_color"],[data-name="fa_bg_color"],[data-name="fa_rounded"]',$currentFaModal).unbind('input').bind('input',function(){
        jQuery('[data-name="fa_icon"]',$currentFaModal).trigger('input');
    });
}
function pbModalSaveField($from,$to){
    $from.each(function(){
        var $currentField         = jQuery(this).children('.field-data').children('.field');
        var $currentFieldSlug     = $currentField.attr('data-name');
        var $currentFieldType     = $currentField.attr('data-type');
        var $currentFieldAddButton= $currentField.attr('data-add-button');
        var $currentFieldValue    = $currentField.val();
        switch($currentFieldType){
            case 'select':{
                jQuery('>.field-data>.field[data-name="'+$currentFieldSlug+'"] option[value="'+$currentFieldValue+'"]',$to).attr('selected','selected').siblings().removeAttr('selected');
                break;
            }
            case 'textArea':{
                if($currentField.attr('data-tinyMCE')==='true'){
                    if (window.tinymce.majorVersion >= 4) {
                        tinymce.execCommand('mceAddEditor', false, $currentContentEditor);
                    } else {
                        tinymce.execCommand('mceAddControl', false, $currentContentEditor);
                    }
                    var $tmpCont=tinymce.get($currentContentEditor).getContent();
                    jQuery('>.field-data>.field[data-name="'+$currentFieldSlug+'"]',$to).html($tmpCont);
                }else{
                    jQuery('>.field-data>.field[data-name="'+$currentFieldSlug+'"]',$to).html($currentFieldValue);
                }
                break;
            }
            case 'container':{
                var $newContainer = jQuery('>.field-data>.field[data-name="'+$currentFieldSlug+'"]',$to);
                var $template=jQuery('>.field-data>.field[data-name="'+$currentFieldAddButton+'"]',$from).next('.data').children('.field-item').children('.field-data').children('.field').html();
                $template = jQuery('<div/>').append($template);
                $newContainer.html('');
                $currentField.children('.container-item').each(function(){
                    jQuery(this).find('>.content>.field-item>.field-data>.field').each(function(){
                        var $cField         = jQuery(this);
                        var $cFieldSlug     = $cField.attr('data-name');
                        var $cFieldType     = $cField.attr('data-type');
                        var $cFieldValue    = $cField.val();
                        switch($cFieldType){
                            case 'select':{
                                jQuery('.field[data-name="'+$cFieldSlug+'"] option[value="'+$cFieldValue+'"]',$template).attr('selected','selected').siblings().removeAttr('selected');
                                break;
                            }
                            case 'textArea':{
                                jQuery('.field[data-name="'+$cFieldSlug+'"]',$template).html($cFieldValue);
                                break;
                            }
                            case 'checkbox':{
                                jQuery('.field[data-name="'+$cFieldSlug+'"]',$template).attr("value",$cField.is(':checked')).attr("checked",$cField.is(':checked'));
                                break;
                            }
                            default:{
                                jQuery('.field[data-name="'+$cFieldSlug+'"]',$template).attr("value",$cFieldValue);
                                break;
                            }
                        }
                    });
                    $newContainer.append($template.html());
                });
                break;
            }
            case 'checkbox':{
                jQuery('>.field-data>.field[data-name="'+$currentFieldSlug+'"]',$to).attr("value",$currentField.is(':checked')).attr("checked",$currentField.is(':checked'));
                break;
            }
            default:{
                jQuery('>.field-data>.field[data-name="'+$currentFieldSlug+'"]',$to).attr("value",$currentFieldValue);
                break;
            }
        }
		if($currentFieldType ==='gallery'){
            jQuery('>.field-data>.field[data-name="'+$currentFieldSlug+'"]',$to).siblings('ul.gallery-images').html($currentField.siblings('ul.gallery-images').html());
        }
    });
}
function pbModalSave($item){
    var $saveTo   = jQuery('.item.item-modalled');
    $saveTo.removeClass('item-modalled');
    pbModalSaveField($item.find('.general-field-container').children('.field-item'),$saveTo.find('.general-field-container').children('.field-item'));
    pbModalSaveField($item.find('.custom-field-container') .children('.field-item'),$saveTo.find('.custom-field-container') .children('.field-item'));
}
/* Item Right Left Width */
/* ------------------------------------------------------------------- */
function pbItemRL($item){
    $item=jQuery($item);
    var $itemMarginRL  = parseInt($item.css('margin-left') .replace('px',''))      + parseInt($item.css('margin-right').replace('px',''));
    var $itemPaddingRL = parseInt($item.css('padding-left').replace('px',''))      + parseInt($item.css('padding-right').replace('px',''));
    var $itemBorderRL  = parseInt($item.css('border-left-width').replace('px','')) + parseInt($item.css('border-right-width').replace('px',''));
    var $itemRL = $itemMarginRL+$itemPaddingRL+$itemBorderRL;
    return $itemRL;
}
/* Content Editor */
function pbModalContentEditor($id,$currentEditor){
    var $language = jQuery('html').attr('lang');
    var $currentField = $currentEditor.closest('.field-data');
    $language = $language.substr(0,$language.indexOf('-'));
    var $wpFullscreenContentCSS=$homeURI+"/wp-includes/js/tinymce/plugins/wpfullscreen/css/wp-fullscreen.css";
    var $newEditorDiv= jQuery('<div />').append($currentEditor.clone().attr('id',$id));
    $currentEditor.hide().closest('.field-data').append(
        '<div id="wp-content-editor-tools" class="wp-editor-tools eva-editor-menu hide-if-no-js">'+
            '<a id="content-tmce" class="change-to-html wp-switch-editor switch-html" onclick="switchEditors.switchto(this);">Text</a>'+
            '<a id="content-html" class="change-to-visual disabled wp-switch-editor switch-tmce" onclick="switchEditors.switchto(this);">Visual</a>'+
        '</div>'+
        '<div id="wp-content-editor-container" class="eva-editor-content">'+
            $newEditorDiv.html()+
        '</div>'
    ).promise().done(function(){
        tinymce.init({
            theme:"modern",
            skin:"lightgray",
            language:$language,
            formats:{alignleft:[{selector:'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', styles: {textAlign:'left'}},{selector: 'img,table,dl.wp-caption', classes: 'alignleft'}],aligncenter: [{selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', styles: {textAlign:'center'}},{selector: 'img,table,dl.wp-caption', classes: 'aligncenter'}],alignright: [{selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li', styles: {textAlign:'right'}},{selector: 'img,table,dl.wp-caption', classes: 'alignright'}],strikethrough: {inline: 'del'}},
            browser_spellcheck:true,
            fix_list_elements:true,
            entities:"38,amp,60,lt,62,gt",
            entity_encoding:"raw",
            keep_styles:false,
            paste_webkit_styles:"font-weight font-style color",
            preview_styles:"font-family font-size font-weight font-style text-decoration text-transform",
            wpeditimage_disable_captions:false,
            wpeditimage_html5_captions:false,
            plugins:"textcolor wplink",
            external_plugins:{"evashortcodegenerator":$homeURI+"/wp-content/themes/01_black/framework/shortcode/js/shortcode.js"},
            content_css:$homeURI+"/wp-includes/css/dashicons.min.css?ver=3.9,"+$homeURI+"/wp-includes/js/mediaelement/mediaelementplayer.min.css?ver=3.9,"+$homeURI+"/wp-includes/js/mediaelement/wp-mediaelement.css?ver=3.9,"+$homeURI+"/wp-includes/js/tinymce/skins/wordpress/wp-content.css?ver=3.9,"+$homeURI+"/wp-content/themes/01_black/framework/assets/css/pagebuilder.css",
            selector:$id,
            resize:false,
            menubar:false,
            wpautop:true,
            indent:false,
            toolbar:"formatselect bold italic underline alignleft aligncenter alignright alignjustify blockquote bullist numlist undo redo link unlink hr removeformat forecolor backcolor evashortcodegenerator",
            tabfocus_elements:"insert-media-button,save-post",
            body_class:"content post-type-page post-status-publish",
            add_unload_trigger:false
        });
        jQuery('a.change-to-html',$currentField).unbind('click').bind('click',function() {
            jQuery(this).closest('.wp-editor-tools').removeClass('tmce-active').addClass('html-active');
            if (tinymce.majorVersion >= 4) {
                tinymce.execCommand("mceRemoveEditor", true, $id);
            } else {
                tinymce.execCommand("mceRemoveControl", true, $id);
            }
        });
        jQuery('a.change-to-visual',$currentField).unbind('click').bind('click',function() {
            jQuery(this).closest('.wp-editor-tools').removeClass('html-active').addClass('tmce-active');
            if (tinymce.majorVersion >= 4) {
                tinymce.execCommand("mceAddEditor", true, $id);
            } else {
                tinymce.execCommand("mceAddControl", true, $id);
            }
        }).click();
    });
}
function evaInitSourceDatas($from){
    jQuery('#pagebuilder-area>div').each(function(i){
        jQuery(this).html($from.eq(i).html());
    });
}
function evaSortDragg(){
    //Sortables
    jQuery("#pagebuilder-area>div").sortable({
        placeholder: 'item placeholding',
        connectWith: "#pagebuilder-area>div",
        //        helper:'original',
        revert: true,
        update: function(event, ui){
            pbSaveData();
            pbInitEvents();
        },
        start: function(event, ui) {
            var plus;
            if(ui.item.hasClass('size-1-4')) plus = 'size-1-4';
            else if(ui.item.hasClass('size-1-3')) plus = 'size-1-3';
            else if(ui.item.hasClass('size-1-2')) plus = 'size-1-2';
            else if(ui.item.hasClass('size-2-3')) plus = 'size-2-3';
            else if(ui.item.hasClass('size-3-4')) plus = 'size-3-4';
            else if(ui.item.hasClass('size-1-1')) plus = 'size-1-1';
            else plus = 'size-1-3';
            ui.placeholder.addClass(plus);
        }
    });
    // Draggable
    try{
        jQuery('#pagebuilder-elements-container>.item').draggable({
            connectToSortable: '#pagebuilder-area>div',
            helper: 'clone',
            revert: "invalid"
        });
    }catch(err){}
}
function evaPublishEnable($status){
    if($status==='enable'){
        jQuery('#publish').removeAttr('disabled').removeClass('button-primary-disabled').siblings('.spinner').css('display','');
    }else{
        jQuery('#publish').attr('disabled','disabled').addClass('button-primary-disabled').siblings('.spinner').css('display','inline');
    }    
}
function twLoadImages(images) {
        if( images ){
            var shortcode = new wp.shortcode({
                tag:    'gallery',
                attrs:   { ids: images },
                type:   'single'
            });

            var attachments = wp.media.gallery.attachments( shortcode );

            var selection = new wp.media.model.Selection( attachments.models, {
                    props:    attachments.props.toJSON(),
                    multiple: true
            });

            selection.gallery = attachments.gallery;

            // Fetch the query's attachments, and then break ties from the
            // query to allow for sorting.
            selection.more().done( function() {
                    // Break ties with the query.
                    selection.props.set({ query: false });
                    selection.unmirror();
                    selection.props.unset('orderby');
            });

            return selection;
        }
        return false;
}