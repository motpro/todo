<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bugtrack extends CI_Controller {


	public function Bugtrack() {
		parent::__construct();
	}

	public function index() {
		$this->layout->view('bugtrack/index');
	}

}