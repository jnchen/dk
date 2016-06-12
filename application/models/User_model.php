<?php defined('BASEPATH') OR exit('No direct script access allowed');
/***
* @author jnchen
* @version 1.0
* @email caojingchen@live.com
***/
class User_model extends CI_Model {

	public $id;
	public $username;
	public $password;
	public $email;
	public $tailuntil;
	public $update_time;
	public $parent_id;
	public $role_id;
	public $pwm_id;

	public function __construct(){
		$this->load->database();
		parent::__construct();
	}

	public function insert($user,$password,$email,$tailuntil,$parent_name,$role_id,$pwm_id){
		$this->username = $user;
		$this->password = $password;
		$this->email = $email;
		$this->tailuntil = $tailuntil;
		$this->parent_name = $parent_name;
		$this->role_id = $role_id;
		$this->pwm_id = $pwm_id;

		$this->db->insert('users',$this);

		return !($this->db->affected_rows()==0);
	}

	public function delete(){

	}
	public function select(){
		$query = $this->db->get('users');
		return $query->result();
	}
	public function update(){

	}
}