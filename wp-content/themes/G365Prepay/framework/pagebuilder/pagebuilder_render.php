<?php
if (!function_exists('rowStart')) {
    function rowStart($colCounter,$size){
        if($colCounter===0||$colCounter===12||$colCounter+$size>12 ){return array($size,'true');}
        return array($colCounter+$size,'false');
    }
}
if (!function_exists('pbGetContentBuilderItem')) {
    function pbGetContentBuilderItem($item_array) {
        global $eva_pbItems,$eva_layoutSize;
        ob_start();
        $itemSlug = $item_array['slug'];
        $itemSettingsArray = $item_array['settings'];
        $defaultItem=$eva_pbItems[$itemSlug];
        $defaultItemSettingsArray=$defaultItem['settings'];
        $itemClass = !empty($item_array['item_title_alignment']) ? $item_array['item_title_alignment'] : '';
		$itemSize = !empty($item_array['item_title_size']) ? $item_array['item_title_size'] : '';
        if($item_array['size']!=='shortcode-size'){
            echo '[eva_item size="'. esc_attr( pbTextToFoundation($item_array['size']) ) .'" layout_size="'.esc_attr( pbTextToFoundation($eva_layoutSize) ).'" row_type="'.(isset($item_array['row-type'])?esc_attr( $item_array['row-type'] ):'row-fluid').'"]';
        }
		if(!empty($item_array['item_title'])){
			echo '<div class="eva-title-container"><'.esc_attr( $itemSize ).' class="eva-title '.esc_attr( $itemClass ).'">'.apply_filters('widget_title', $item_array['item_title']).'</'.esc_attr( $itemSize ).'></div>';
		}
		$content_slug=  empty($defaultItem['content'])?'':$defaultItem['content'];
		echo '[eva_' . esc_attr( $itemSlug );
			if($itemSlug==='portfolio'){echo ' layout_size="'.esc_attr( pbTextToFoundation($eva_layoutSize) ).'"';}
			foreach($defaultItemSettingsArray as $settings_slug=>$default_settings_array){
				if( $content_slug !== $settings_slug
                    // && $default_settings_array['type'] != 'category'
                    // && $default_settings_array['type'] != 'button'
                    // && $default_settings_array['type'] != 'fa'
                ) {
					$settings_val=isset($itemSettingsArray[$settings_slug])?$itemSettingsArray[$settings_slug]:(isset($default_settings_array['default'])?$default_settings_array['default']:'');
					echo ' '.esc_attr( $settings_slug ).'="'.str_replace('"','&quot;',rawUrlDecode($settings_val)).'"';
				}
			}
		echo ']';
		if($content_slug){
			$settings_val='';
			if($defaultItemSettingsArray[$content_slug]['type']==='container'&&isset($defaultItemSettingsArray[$content_slug]['default'][0])){
				$defaultContainarItem=$defaultItemSettingsArray[$content_slug]['default'][0];
				$containarItemArray =$itemSettingsArray[$content_slug];
				foreach($containarItemArray as $index=>$containarItem){
					$containarItemContent='';
					$settings_val .= '[eva_'.$itemSlug.'_item';
					foreach($containarItem as $slug=>$value){
						if($defaultContainarItem[$slug]['type']!='category'&&$defaultContainarItem[$slug]['type']!='button'&&$defaultContainarItem[$slug]['type']!='fa'){
							if($defaultContainarItem[$slug]['type']==='textArea'){
								$containarItemContent=rawUrlDecode($value);
							}else{
								$settings_val .= ' '.$slug.'="'.str_replace('"','&quot;',rawUrlDecode($value)).'"';
							}
						}
					}
					$settings_val .= ']';
					if(!empty($containarItemContent)){
						$settings_val .= $containarItemContent.'[/eva_'.$itemSlug.'_item]';
					}
				}
			}else{
				$settings_val=isset($itemSettingsArray[$content_slug])?$itemSettingsArray[$content_slug]:$defaultItemSettingsArray[$content_slug]['default'];
				$settings_val=rawUrlDecode($settings_val);
			}
			echo esc_attr( $settings_val ) . '[/eva_'. esc_attr( $itemSlug ) .']';
		}
        if($item_array['size']!=='shortcode-size'){ echo '[/eva_item]';}
        $output = ob_get_clean();
        return $output;
    }
}
if (!function_exists('pbGetContentBuilder')) {
    function pbGetContentBuilder() {
        global $post, $eva_startPrinted,$eva_pbItems;
        $endPrint=false;
        ob_start();
        $_pb_layout_array=json_decode(rawUrlDecode(get_post_meta($post->ID, '_pb_content', true)),true);
        if(empty($_pb_layout_array)){
            return false;
        }else{
            $layoutsEcho='';
            $layoutColCounter=0;
            $layoutStart='true';
            foreach($_pb_layout_array as $_pb_layout){
                $eva_startPrinted = false;
                if($_pb_layout['size']!=='size-0-0'){
                    global $eva_layoutSize;
                    $eva_layoutSize = $_pb_layout['size'];
                    list($layoutColCounter,$layoutStart)=rowStart($layoutColCounter,$eva_layoutSize);
                    $layoutsEcho .= '[eva_layout size="'.pbTextToFoundation($_pb_layout['size']).'" start="'.$layoutStart.'"]';
                    $eva_startPrinted=false;
                    $colCounter=0;
                    $start='true';
                    foreach ($_pb_layout['items'] as $item_array){
                        list($colCounter,$start)=rowStart($colCounter,pbTextToFoundation($_pb_layout['size'])==='span3'?12:pbTextToInt($item_array['size']));
                        $endPrint=true;
                        $rowClass = $item_array['row-type'] = !empty($eva_pbItems[$item_array['slug']]['row-type'])?$eva_pbItems[$item_array['slug']]['row-type']:'row-fluid';
                        if($start === "true") {
                            if($eva_startPrinted){
                                $layoutsEcho .= '</div><div class="'.$rowClass.'">';
                            }else{
                                $eva_startPrinted=true;
                                $layoutsEcho .= '<div class="'.$rowClass.'">';
                            }
                        }
                        $layoutsEcho .= pbGetContentBuilderItem($item_array);
                    }
                    //row Close
                    if($eva_startPrinted){$layoutsEcho.="</div>";}
                    $layoutsEcho .= '[/eva_layout]';

                }
            }
            if($endPrint){
                echo htmlspecialchars_decode( esc_html( $layoutsEcho ) );
            }else{
                return false;
            }
        }
        $output = ob_get_clean();
        return $output;
    }
}
