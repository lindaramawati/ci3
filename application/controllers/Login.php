<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function Login()
	{
		$this->load->view('Admin/login.php');
	}
}
