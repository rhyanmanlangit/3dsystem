<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('fullwidth');

	}

	public function index()
	{
		$this->output->set_common_meta('Login | 3DFABLAB SYSTEM', ' ', ' ');
		$this->load->view('login');
	}

}