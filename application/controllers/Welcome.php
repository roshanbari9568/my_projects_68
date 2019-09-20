<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function test()  //this function is inside ci/index.php/welcome/test by default its index here we have just created
	{
		echo 'Hello the is test function';
	}




}
