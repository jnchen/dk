<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('User_model');

		$this->User_model->is_login();
	}
}