<?php

class protector_postcommon_post_htmlpurify4guest extends ProtectorFilterAbstract {

	if(!is_file(XOOPS_ROOT_PATH.'/libraries/htmlpurifier/HTMLPurifier.standalone.php'))
	{
		var $purifier ;
	}

	function execute()
	{
		global $xoopsUser ;

		// HTMLPurifier runs with PHP5 only
		if( substr( PHP_VERSION , 0 , 1 ) == '4' ) {
			die( 'Turn postcommon_post_htmlpurify4guest.php off because this filter cannot run with PHP4' ) ;
		}

		if( is_object( $xoopsUser ) ) {
			return true ;
		}

		if(is_file(XOOPS_ROOT_PATH.'/libraries/htmlpurifier/HTMLPurifier.standalone.php'))
		{
			if(function_exists('icms_html_purifier'))
			{
				$prot_purifier = &icms_HTMLPurifier::getPurifierInstance();
				$_POST = $prot_purifier->icms_html_purifier($_POST, 'protector');
			}
			else
			{
				if(!function_exists('purify'))
				{
					require_once XOOPS_ROOT_PATH.'/libraries/htmlpurifier/HTMLPurifier.standalone.php'
					require_once XOOPS_ROOT_PATH.'/libraries/htmlpurifier/HTMLPurifier.autoload.php'
				}
				$config = HTMLPurifier_Config::createDefault();
				$config->set('Cache', 'SerializerPath', XOOPS_TRUST_PATH.'/modules/protector/configs');
				$config->set('Core', 'Encoding', _CHARSET);
				//$config->set('HTML', 'Doctype', 'HTML 4.01 Transitional');

				$this->purifier = new HTMLPurifier($config);

				$_POST = $this->purify_recursive( $_POST ) ;
			}
		}
		else
		{
			require_once dirname(dirname(__FILE__)).'/library/HTMLPurifier.auto.php' ;
			$config = HTMLPurifier_Config::createDefault();
			$config->set('Cache', 'SerializerPath', XOOPS_TRUST_PATH.'/modules/protector/configs');
			$config->set('Core', 'Encoding', _CHARSET);
			//$config->set('HTML', 'Doctype', 'HTML 4.01 Transitional');

			$this->purifier = new HTMLPurifier($config);

			$_POST = $this->purify_recursive($_POST);
		}
	}

	function purify_recursive($data)
	{
		if(is_array($data)) {return array_map(array($this, 'purify_recursive'), $data);}
		else {return strlen($data) > 32 ? $this->purifier->purify($data) : $data;
		}
	}
}
?>