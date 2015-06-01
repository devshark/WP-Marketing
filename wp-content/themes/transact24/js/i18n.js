function switch_lang(){
	var lang = get_current_lang_set();
	var lang_set = [];	
	if(lang == 'zh_hk'){
		lang_set = {
			"required":"此為必填項目", 
			"minlength":"請輸入至少{0}位字符。",
			"email":"請輸入有效的郵箱地址。",
			"digits":"請輸入有效的電話號碼。",
			"url":"請確認你的網址是否正確。",
			"re_weburl":"請輸入有效的網頁地址。"
		};
	}else if(lang == 'zh_cn'){
		lang_set = {
			"required":"此为必填项目", 
			"minlength":"请输入至少{0}位字符。",
			"email":"请输入有效的邮箱地址。",
			"digits":"请输入有效的电话号码。",
			"url":"请确保你的网址是否正确。",
			"re_weburl":"请输入有效的网页地址。"
		};
	}else{
		lang_set = {
			"required":"This field is required.", 
			"minlength":"Please enter at least {0} characters.",
			"email":"Please enter a valid email address.",
			"digits":"Please enter a valid phone number.",
			"url":"Please enter a valid URL.",
			"re_weburl":"This field must be a valid URL."
		};
	}
	return lang_set;
}

function get_current_lang_set(){
	var lang = $('#lang').val();
	return lang;
}