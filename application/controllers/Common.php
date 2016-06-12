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
		$data['title'] = '登录';
		$data['h1'] = '登录';
		$data['hint_user']='用户名';
		$data['hint_password'] = '密码';
		$data['foget_text'] = '忘记密码？';
		$data['button_text'] = '登录';
		$this->load->view('login',$data);
	}
}
