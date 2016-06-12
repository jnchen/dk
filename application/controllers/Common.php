<?php defined('BASEPATH') OR exit('No direct script access allowed');
/***
* @author jnchen
* @version 1.0
* @email caojingchen@live.com
***/
class Common extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function login(){
		echo 'Login Page';
		$data['title'] = '登录';
		$this->load->view('login',$data);
	}
}
