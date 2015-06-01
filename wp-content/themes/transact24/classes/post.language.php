<?php

$base_path = ABSPATH;
$includes_path = ABSPATH.WPINC;

// langcode => language
function get_languages(){
	return array( 
		LANG_EN => 'en',
		LANG_CN => 'zh_cn',
		LANG_HK => 'zh_hk');
}

function acme_post_exists($post_id)
{
	if( ! function_exists('get_post_status') ){
		require_once($includes_path . '/post.php');
	}
	return is_string(get_post_status($post_id));
}

function check_language_input($langcode, $default = LANG_EN){
	$languages = get_languages();
	if( ! array_key_exists($langcode, $languages) ){
		throw new LanguageNotDetectedException('Language code does not exist!');
	}
	//$langcode = isset($languages[$langcode]) ? $langcode : $default;
	return $langcode;
}

// one class for each language and post pair
class PostLanguageMapper{
	protected $_postid = null;
	protected $_langcode = null;
	
	protected $_post = null;
	
	public function __construct($postid, $langcode)
	{
		$langcode = check_language_input($langcode);
		if( ! acme_post_exists( $postid )){
			throw new PostLanguageException('Post/Page #' . $postid . ' does not exist!');
		}
		$this->_postid = $postid;
		$this->_langcode = $langcode;
	}
	public function getLangCode()
	{
		return $this->_langcode;
	}
	
	public function getPost()
	{
		global $includes_path;
		if( ! function_exists('get_post')){
			require_once($includes_path . '/post.php');
		}
		if ($this->_post != null){
			return $this->_post;
		}
		$this->_post = get_post($this->_postid);
		if( function_exists('get_field') ){
			$this->_post->description = get_field('description',$this->_postid);
		}
		return $this->_post;
	}
}

// collection of PostLanguagePair
class PostLanguageCollection{
	protected $_posts = array();
	
	public function __construct($post_language_pair)
	{
		$this->add($post_language_pair);
	}
	
	public function add($post_language_pair)
	{
		if( is_array($post_language_pair) ){
			foreach($post_language_pair as $post){
				if( ! $post instanceof PostLanguagePair){
					throw new PostLanguageException('Item is not an instance of PostLanguagePair!');
				}
				$this->_posts[] = $post;
			}
		}elseif ($post_language_pair instanceof PostLanguagePair){
			$this->_posts[] = $post_language_pair;
		}else{
			throw new PostLanguageException('Item is not an instance of PostLanguagePair!');
		}
	}
	
	public function getPost($post_id, $langcode){
		$langcode = check_language_input($langcode);
		foreach($this->_posts as $post){
			if($post->contains_post_id($post_id)){
				return $post->getPost($langcode);
			}
		}
		return false;
	}
	
}

// set or group of related posts by language
class PostLanguagePair{
	protected $_posts = array();
	protected $_post_id = array();
	
	public function __construct($post_language_mapper_array)
	{
		if( is_array($post_language_mapper_array) ){
			
			foreach($post_language_mapper_array as $post){
				if( ! $post instanceof PostLanguageMapper){
					throw new PostLanguageException('Item is not an instance of PostLanguageMapper!');
				}
				$this->_post_id[] = $post->getPost()->ID;
			}
			$this->_posts = $post_language_mapper_array;
		}elseif($post_language_mapper_array instanceof PostLanguageMapper){
			$this->_posts = array($post_language_mapper_array);
			$this->_post_id = array($post_language_mapper_array->getPost()->ID);
		}else{
			throw new PostLanguageException('Item is not an instance of PostLanguageMapper!');
		}
	}
	
	public function contains_post_id($post_id)
	{
		return in_array($post_id, $this->_post_id);
	}
	
	public function getPost($langcode){
		$langcode = check_language_input($langcode);
		foreach($this->_posts as $post){
			if ($post->getLangCode() == $langcode){
				return $post->getPost();
			}
		}
		return false;
	}
	
	public function addExplicit($post_id, $langcode){
		$langcode = check_language_input($langcode);
		$this->_posts[] = new PostLanguageMapper($post_id, $langcode);
	}
	
	public function addPair($post_language_mapper){
		if( ! $post_language_mapper instanceof PostLanguageMapper){
			throw new PostLanguageException('Item is not an instance of PostLanguageMapper!');
		}
		$this->_posts[] = $post_language_mapper;
	}
}


// custom exception class
class PostLanguageException extends Exception{ }

class LanguageNotDetectedException extends Exception{ }
