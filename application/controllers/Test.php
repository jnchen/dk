<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends JC_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('User_model');

		$row = $this->User_model->is_login();

		echo var_dump($row);
	}
}