<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Allows Vanilla Forums to integrate with PyroCMS authentication system,
 * more information can be found at http://vanillaforums.org/page/singlesignon
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
			'url'	=> array(
				'site'						=> site_url(),
				'authentication'	=> site_url('VanillaForumsProxyConnect'),
				'registration'		=> site_url('users/register'),
				'sign-in'					=> site_url('users/login'),
				'sign-out'				=> site_url('users/logout')
			)
		));
	}
}