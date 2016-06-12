<?php defined('BASEPATH') OR exit('No direct script access allowed');
/***
* @author jnchen
* @version 1.0
* @email caojingchen@live.com
***/
class Role_model extends CI_Model {

	public $id;
	public $level_name;
	public $function_list;

	public function __construct(){
		$this->load->database();
		parent::__construct();
	}

	public function insert($level_name,$function_list){
		$this->level_name = $level_name;
		$this->function_list = $function_list;
		$this->db->insert('roles',$this);
		return !($this->db->affected_rows()==0);
	}
	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('roles');
		return !($this->db->affected_rows()==0);
	}

	public function update_level_name($id,$level_name){
		$this->db->set('level_name',$level_name);
		$this->db->where('id',$id);
		$this->db->update('roles');
		return !($this->db->affected_rows()==0);
	}

	public function update_function_list($id,$function_list){
		$this->db->set('function_list',$function_list);
		$this->db->where('id',$id);
		$this->db->update('roles');
		return !($this->db->affected_rows()==0);
	}
	public function select($id){
		return $this->db->select('*')->from('roles')->where('id',$id)->get()->result();

	}
	public function select(){
		return $this->db->get('roles')->result();
	}
}