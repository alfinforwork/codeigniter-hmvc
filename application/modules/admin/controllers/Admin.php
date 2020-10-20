<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * AdminController
 */
class Admin extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "admin";
		// $this->load->view('welcome', $data);
	}
}

/* End of file AdminController.php */
/* Location: ./application/modules/Admin/controller/AdminController.php */