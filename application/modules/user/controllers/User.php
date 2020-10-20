<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * UserController
 */
class User extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "user";
		// $this->load->view('welcome', $data);
	}
}

/* End of file UserController.php */
/* Location: ./application/modules/User/controller/UserController.php */