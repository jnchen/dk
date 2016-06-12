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
	public function is_login(){
		$this->load->helper('cookie');

		$username = get_cookie('username');
		$token = get_cookie('token');
		$id = get_cookie('id');

		$this->db->select('id,username,password');
		$this->db->where('id',$id);
		$this->db->where('username',$username);
		$this->db->like('password',substr($token,0,16),'after');
		$query = $this->db->get('users');

		log_message('info',$username);
		log_message('info',$id);
		log_message('info',$token);


		$row  = $query->row_array();
		log_message('info',isset($row));
		if(isset($row)) 
			return $row;
		else 
			return false;
	}
	public function login(){
		$this->load->helper('url');
		$this->db->select('id,username,password');
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',md5($this->input->post('password')));

		$query = $this->db->get('users');

		$row = $query->row_array();
		if(isset($row))
		{
			$this->input->set_cookie("username",$row['username'],60);
			$this->input->set_cookie('token',generate_token($this->input->post('password')),60);
			$this->input->set_cookie('id',$row['id'],60);
			header('location:'.site_url());
		}else{
			header('location:'.site_url("common/login"));
		}
	}
}