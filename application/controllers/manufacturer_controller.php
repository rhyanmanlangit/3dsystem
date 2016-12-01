<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class manufacturer_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('fullwidth-sidebar');
		$this->load->js('assets/themes/default/hero_files/bootstrap-modal.js');
	}

	public function index()
	{
		$this->load->model('manufacturer_model');
		$data['manufacturer_list'] = $this->manufacturer_model->get_allManufacturer();

		$this->output->set_common_meta('Manufacturer | 3DFABLAB SYSTEM', ' ', ' ');
		$this->load->section('sidebar', 'sidebar_panel/sidebar_admin');
		$this->load->view('vw_manufacturer/manufacturer',$data);
	}

	function add_manufacturer(){
		$this->load->library('form_validation');
		$this->load->model('manufacturer_model');

		//prevent the NULL value
		if (empty($this->input->post('m_designation')) OR empty($this->input->post('m_fax'))) {
			$designation = $fax_nos = "Not Specified";
		}
		else{
			$designation = $this->input->post('m_designation');
			$fax_nos = $this->input->post('m_fax');
		}

		//get source if active
		if (empty($this->input->post('m_other1'))) {
			$other1 = '';
			$company_name = $this->input->post('m_name');
		}
		else{
			$other1 = $this->input->post('m_other1');
			$company_name = $other1.'-'.$this->input->post('m_name');
		}

		$data = array(
			'manufacturer_name' => $company_name,
			'manufacturer_addrs' => $this->input->post('m_address'),
			'manufacturer_zip' => $this->input->post('m_zipcode'),
			'manufacturer_country' => $this->input->post('m_country'),
			'manufacturer_phone_nos' => $this->input->post('m_phone'),
			'manufacturer_fax_nos' => $fax_nos,
			'manufacturer_email' => $this->input->post('m_email'),
			'manufacturer_incharge' => $this->input->post('m_cperson'),
			'manufacturer_designation' => $designation
		);

		$this->manufacturer_model->add_newManufacturer($data);
		redirect(base_url('manufacturer_controller'), 'refresh'); 
	}
}