<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller
{
	public function index()
	{
		$this->template->build('admin/index', array(
			'site_url'		=> site_url(),
			'auth_url'		=> site_url('VanillaForumsProxyConnect'),
			'reg_url'			=> site_url('users/register'),
			'signin_url'	=> site_url('users/login'),
			'signout_url'	=> site_url('users/logout'),
		));
	}
}