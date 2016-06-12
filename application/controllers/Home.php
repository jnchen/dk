<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		$this->load->view("homepage");
	}
	public function testGet(){
		$this->load->model('User_model');
		echo var_dump($this->User_model->select());
	}
}