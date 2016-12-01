<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturer_model extends CI_Model {

	function __construct() {

		parent::__construct();
	}

	public function add_newManufacturer($data){
		$this->db->insert('tbl_manufacturer', $data);
	}

	public function get_allManufacturer(){
		$this->db->select('*');
		$this->db->from('tbl_manufacturer');
		$this->db->order_by('manufacturer_id','desc');
		$query = $this->db->get();
        return $result = $query->result_array();
	}
}