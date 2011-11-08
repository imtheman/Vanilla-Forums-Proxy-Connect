<?php defined('BASEPATH') or exit('No direct script access allowed');

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