<?php

class protector_postcommon_post_htmlpurify4guest extends ProtectorFilterAbstract {

	if(defined('ICMS_VERSION_BUILD') <=10 || !file_exists(XOOPS_ROOT_PATH.'/class/icms.htmlpurifier.php'))
	{
		var $purifier;
	}

	function execute()
	{
		global $xoopsUser;

		// HTMLPurifier runs with PHP5 only
		if(substr(PHP_VERSION, 0, 1) == '4') {die('Turn postcommon_post_htmlpurify4guest.php off because this filter cannot run with PHP4');}

		if(is_object($xoopsUser)) {return true;}

		if(!file_exists(XOOPS_ROOT_PATH.'/class/icms.htmlpurifier.php'))
		{
			require_once dirname(dirname(__FILE__)).'/library/htmlpurifier/HTMLPurifier.standalone.php' ;
			require_once dirname(dirname(__FILE__)).'/library/htmlpurifier/HTMLPurifier.autoload.php' ;
			$config = HTMLPurifier_Config::createDefault();
			$config->set('Cache', 'SerializerPath', XOOPS_TRUST_PATH.'/modules/protector/configs');
			$config->set('Core', 'Encoding', _CHARSET);
			if(strtolower(_CHARSET) !== 'utf-8')
			{
				$config->set('Core', 'EscapeNonASCIICharacters', true); // escapes Non ASCII characters that non utf-8 character sets recognise.
			}
			//$config->set('HTML', 'Doctype', 'HTML 4.01 Transitional');
			$this->purifier = new HTMLPurifier($config);

			$_POST = $this->purify_recursive($_POST);
		}
		else
		{
			if(file_exists(ICMS_ROOT_PATH.'/class/icms.htmlpurifier.php'))
			{
				if(!class_exists('icms_HTMLPurifier'))
				{
					include_once ICMS_ROOT_PATH.'/class/icms.htmlpurifier.php';
				}
				$pure = & icms_HTMLPurifier::getPurifierInstance();

				$_POST = $pure->icms_html_purifier($_POST, 'protector');
			}
		}
	}


	function purify_recursive( $data )
	{
		if( is_array( $data ) ) {
			return array_map( array( $this , 'purify_recursive' ) , $data ) ;
		} else {
			return strlen( $data ) > 32 ? $this->purifier->purify( $data ) : $data ;
		}
	}

}

?>