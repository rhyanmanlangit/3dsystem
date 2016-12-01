<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Component_model extends CI_Model {

	function __construct() {

		parent::__construct();
	}

	public function add_componentType($data){
		$this->db->insert('tbl_component_type', $data);
	}

	function validate_componentAlias($cc_alias){
		$this->db->where('component_type_alias', $cc_alias);
		$query = $this->db->get('tbl_component_type');
		if ($query->num_rows() > 0) {
			return $cc_alias_validated = 'true';
		}
		else{
			return $cc_alias_validated = 'false';
		}
	}

	function get_allComponentType(){
		$this->db->select('*');
		$this->db->from('tbl_component_type');
		$this->db->order_by('component_type_id','desc');
		$query = $this->db->get();
        return $result = $query->result_array();
	}

	function get_componenttype_alias($cc_id){
		$this->db->select('component_type_alias');
		$this->db->from('tbl_component_type');
		$this->db->where('component_type_id', $cc_id);
		$query = $this->db->get();
        return $result = $query->row();
	}

	function get_component_lastcount(){
		$query = $this->db->query("SELECT component_id FROM tbl_component ORDER BY component_id DESC LIMIT 1");
		return $query->row();
	}
}