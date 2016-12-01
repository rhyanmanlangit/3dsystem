<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class component_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('fullwidth-sidebar');
		$this->load->js('assets/themes/default/hero_files/bootstrap-modal.js');
		$this->load->js('assets/themes/novio/js/rpm-alert.js');
	}

	public function index()
	{
		$this->load->model('Component_model');
		$data['component_type_list'] = $this->Component_model->get_allComponentType();

		$this->load->model('manufacturer_model');
		$data['manufacturer_list'] = $this->manufacturer_model->get_allManufacturer();

		$this->output->set_common_meta('Components | 3DFABLAB SYSTEM', ' ', ' ');
		$this->load->section('sidebar', 'sidebar_panel/sidebar_admin');
		$this->load->view('vw_component/component', $data);
	}

	public function component_type(){
		$this->load->model('Component_model');
		$data['component_type_list'] = $this->Component_model->get_allComponentType();

		$this->output->set_common_meta('Components Type | 3DFABLAB SYSTEM', ' ', ' ');
		$this->load->section('sidebar', 'sidebar_panel/sidebar_admin');
		$this->load->view('vw_component/component_type', $data);
	}

	public function add_component_type(){
		$this->load->model('Component_model');

		$cc_alias = strtoupper($this->input->post('cc_alias'));
		$cc_alias_val = $this->Component_model->validate_componentAlias($cc_alias);

		if ($cc_alias_val == "true") {
			$this->session->set_flashdata('messageErr', 'Alias already in used.');
			redirect(base_url('component_controller/component_type'), 'refresh');
		}
		else{
			$data = array(
			'component_type_name' => $this->input->post('cc_name'),
			'component_type_alias' => $cc_alias
			);

			$this->Component_model->add_componentType($data);
			$this->session->set_flashdata('messageSuc', 'New Component type added');
			redirect(base_url('component_controller/component_type'), 'refresh');
		} 
	}

	function add_component(){

		$this->load->model('Component_model');
		$component_type_id = $this->input->post('c_type');
		$data['bcode_type_alias'] = $this->Component_model->get_componenttype_alias($component_type_id);
		$bcode_type_count = $this->Component_model->get_component_lastcount();
		$temp_bcode = $bcode_type_count+1;
		$component_barcode = $data['bcode_type_alias']->component_type_alias.''.str_pad($temp_bcode, 4, '0', STR_PAD_LEFT);
	
		$data = array(
			'component_barcode' => $component_barcode,
			'component_name' => $this->input->post('c_name'),
			'component_type_id' => $this->input->post('c_type'),
			'component_description' => $this->input->post('c_description'),
			'manufacturer_id' => $this->input->post('supplier_id'),
			'component_3d_drawing' => $this->input->post('c_3drawing'),
			'component_2d_drawing' => $this->input->post('c_2drawing'),
			'component_unit' => $this->input->post('c_unit'),
			'component_qty_porder' => $this->input->post('qty_per_ordr'),
			'component_prod_stock' => $this->input->post('c_pstock'),
			'component_us_price_porder' => $this->input->post('c_us_priceo'),
			'component_us_price_ppcs' => $this->input->post('c_us_pricep'),
			'component_rp_price' => $this->input->post('c_rp_price'),
			'component_img' => $this->input->post('input-1c'),
			'component_remarks' => $this->input->post('c_rermarks')
			);
		
		echo '<pre>';
		print_r($data);
	}	
}