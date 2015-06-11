var $evaInsertShortcodeWaiting=false;
(function() {
    tinymce.PluginManager.requireLangPack('evashortcodegenerator');
    tinymce.create('tinymce.plugins.evashortcodegenerator', {
        init : function(ed, url) {
            ed.addCommand('evashortcodegenerator', function() {
                jQuery( '<div id="shortcode_container_dialog" data-current="none" />').append(jQuery('#eva-shortcode-template').html()).dialog({
                    title: 'Select the Shortcode',
                    resizable: true,
                    width: 800,
//                    height: 500,
                    modal: true,
                    open: function(){
                        jQuery(this).closest('.ui-dialog').addClass('eva-pb-main-container');
                        jQuery(this).closest('.ui-dialog').focus();
                        pbModalInitActions(jQuery(this));
                    },
                    close: function(e){e.preventDefault();
                        jQuery('#shortcode_container_dialog').closest('.ui-dialog').remove();
                        jQuery('body>#shortcode_container_dialog').remove();
                    },
                    buttons: {
                        "Done": function() {
                            var $curr=jQuery(this);
                            $evaInsertShortcodeWaiting=true;
                            evaInsertShortcode();
                            jQuery('#shortcode_container_dialog').addClass('loading-shortcode');
                            jQuery('#shortcode_container_dialog').siblings('.ui-dialog-titlebar').find('.ui-dialog-titlebar-close').hide();
                            jQuery('#shortcode_container_dialog').siblings('.ui-dialog-buttonpane').find('.ui-dialog-buttonset').hide();
                            $evaInsertShortcodeWaitingInt=setInterval(function(){
                                if($evaInsertShortcodeWaiting===false){
                                    clearInterval($evaInsertShortcodeWaitingInt);
                                    $curr.dialog("close");
                                }
                            },100);
                        },
                        "Cancel": function() {
                            jQuery(this).dialog("close");
                        }
                    }
                });
            });
            ed.addButton('evashortcodegenerator', {title : 'Evatheme Shortcode Generator',cmd : 'evashortcodegenerator',image : url + '/../images/eva-sh-icon.png'})
        },
        createControl : function(n, cm) {return null;},
        getInfo : function() {return {longname : "Shortcode",author : '',authorurl : '',infourl : '',version : "1.0"};}
    });
    tinymce.PluginManager.add('evashortcodegenerator', tinymce.plugins.evashortcodegenerator);
})();
// Functions
function evaGetShortcode($itemSlug){
    jQuery('#shortcode_container_dialog').addClass('loading-shortcode');
    jQuery('#shortcode_container_dialog>.custom-field-container').html('');
    jQuery.ajax({
        type: "POST",
        url: ajaxurl,
        data: {
            'action':'get_modal_shortcode',
            'shortcode_name':$itemSlug
        },
        success: function(response){
            jQuery('#shortcode_container_dialog>.custom-field-container').html(jQuery(response).find('.data>.custom-field-container').first().html());
            jQuery("#shortcode_container_dialog").attr('data-current',$itemSlug).removeClass('loading-shortcode');
            pbModalInitActions(jQuery("#shortcode_container_dialog"));
        }
    });
}
function evaInsertShortcode(){
    var $shortcodeContainer = jQuery("#shortcode_container_dialog");
    var $itemSlug = $shortcodeContainer.attr('data-current');
    if($itemSlug!=='none'){
        var item = '';
        $shortcodeContainer.each(function(){
            var $currentItem=jQuery(this);
            item += '{"slug":"'+$itemSlug+'","size":"shortcode-size",';
            item += '"settings":{';
            jQuery('.custom-field-container>.field-item>.field-data>.field',$currentItem).each(function(index){
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
                item +='}}';
            });
        }).promise().done(function(){
            jQuery.ajax({
                type: "POST",
                url : ajaxurl,
                data: {
                    'action':'get_printed_item',
                    'data':encodeURIComponent(item)
                },
                success: function(response){
                    if (window.tinymce.majorVersion >= 4) {
                            window.tinymce.get($currentContentEditor).insertContent(response);
                    } else {
                            window.tinymce.execInstanceCommand($currentContentEditor, 'mceInsertContent', false, response);		
                    }
                    $evaInsertShortcodeWaiting=false;
                }
            });
        });
    }
}