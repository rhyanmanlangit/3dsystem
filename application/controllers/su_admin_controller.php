<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class su_admin_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('fullwidth-sidebar');
	}

	public function index()
	{
		$this->output->set_common_meta('Admin Dashboard | 3DFABLAB SYSTEM', ' ', ' ');
		$this->load->section('sidebar', 'sidebar_panel/sidebar_admin');
		$this->load->view('vw_su_admin/su_admin_dashboard');
	}
}