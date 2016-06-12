<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/***
* @author jnchen
* @version 1.0
* @email caojingchen@live.com
***/
class Home extends CI_Controller {
	public function index(){
		$this->load->view("homepage");
	}
	public function testGet(){
		$this->load->model('User_model');
		echo var_dump($this->User_model->select());
	}
}