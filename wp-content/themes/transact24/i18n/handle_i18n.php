<?php
	
	function load_i18n_result($language){
		
		$file_name = get_i18n_file_name($language);
		load_i18n_file($file_name);
		return get_result();
	}
	
	function get_i18n_file_name($language){

		$file_list = array(
				"" => "i18n.default.php",
				"en" => "i18n.default.php",
				"zh_cn" => "i18n.zh_cn.php",
				"zh_hk" => "i18n.zh_hk.php"
			);

		return isset($file_list[$language]) ? $file_list[$language] : $file_list["en"];
	}

	function load_i18n_file($file_name){
		require_once($file_name);
	}
	
	function get_result(){
		return call_user_func('get_language');
	}

?>
