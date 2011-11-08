<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 	Allows Vanilla Forums to integrate with PyroCMS authentication system,
 *  more information can be found at http://vanillaforums.org/page/singlesignon
 *
 * @author			Anthony Sterling
 * @package			PyroCMS
 * @subpackage	VanillaForumsProxyConnect Module
 * @category		Modules
 * @license			Apache License v2.0
 */
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