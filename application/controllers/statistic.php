<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statistic extends CI_Controller {


	public function Statistic() {
		parent::__construct();
	}

	public function index() {
		$this->layout->view('statistic/index');
	}

}