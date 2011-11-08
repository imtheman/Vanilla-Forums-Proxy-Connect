<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 	This information required by Vanilla Forum's SSO ProxyConnect Authenticator.
 *  More information can be found at http://vanillaforums.org/page/singlesignon
 *
 * @author			Anthony Sterling
 * @package			PyroCMS
 * @subpackage	VanillaForumsProxyConnect Module
 * @category		Modules
 * @license			Apache License v2.0
 */
class Module_VanillaForumsProxyConnect
{
	public $version = '0.0.1';
	
	public function info()
	{
		return array(
			'name'				=> array(
				'en'	=> 'Vanilla Forums Proxy Connect'
			),
			'description'	=> array(
				'en'	=> 'Provides a Single Sign On bridge for Vanilla Forums'
			),
			'menu'				=> null,
			'frontend'		=> true,
			'backend'			=> true
		);
	}
	
	public function install()
	{
		return true;
	}
	
	public function uninstall()
	{
		return true;
	}
	
	public function upgrade($previous_version)
	{
		return true;
	}
	
	public function help()
	{
		return '';
	}
}