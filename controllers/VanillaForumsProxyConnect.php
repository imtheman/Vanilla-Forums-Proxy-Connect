<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class VanillaForumsProxyConnect extends Public_Controller
{
	public function index()
	{
		$this->template->set_layout(null);
		
		if($this->user)
		{
			$this->template->build('index', array(
				'user'	=> array(
					'id'	=> $this->user->id,
					'name'	=> $this->user->username,
					'email'	=> $this->user->email,
				),
			));
		}
	}
}