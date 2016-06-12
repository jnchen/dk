<?php defined('BASEPATH') OR exit('No direct script access allowed');
/***
* @author jnchen
* @version 1.0
* @email caojingchen@live.com
***/
class Pwstrategy_model extends CI_Model {

	public $id;
	public $strategy_desc;
	public $time_inter;

	public function __construct(){
		$this->load->database();
		parent::__construct();
	}

	public function insert($strategy_desc,$time_inter){
		$this->strategy_desc = $strategy_desc;
		$this->time_inter = $time_inter;
		$this->db->insert($this);
		return !($this->db->affected_rows()==0);
	}
	public function select(){
		return $this->db->get('pwstrategy')->result();
	}
	public function select($id){
		return $this->db->select('*')->from('pwstrategy')->where('id',$id)->get()->result();
	}

	public function delete($id){
		$this->db->where('id',$id);
		$this->db->delete('pwstrategy');

		return !($this->db->affected_rows()==0);
	}

	public function update_desc($id,$desc){
		$this->db->set('strategy_desc');
		$this->db->where('id',$id);
		$this->db->update('strategy');
		return !($this->db->affected_rows()==0);

	}
	public function update_time_inter($id,$time_inter){
		$this->db->set('time_inter');
		$this->db->where('id',$id);
		$this->db->update('strategy');
		return !($this->db->affected_rows()==0);
	}
}