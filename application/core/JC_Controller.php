<?php defined('BASEPATH') OR exit('No direct script access allowed');
/***
* @author jnchen
* @version 1.0
* @email caojingchen@live.com
***/
class JC_Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("User_model");
		$this->cur_user=$this->User_model->is_login();
		if($this->cur_user===false){
			header('location:'.site_url("common/login"));
		}else{
			$this->input->set_cookie("username",$this->cur_user['username'],60);
			$this->input->set_cookie('password',$this->cur_user['password'],60);
			$this->input->set_cookie('id',$this->cur_user['id'],60);
		}
	}
}
