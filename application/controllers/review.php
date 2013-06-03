<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review extends CI_Controller {


	public function Review() {
		parent::__construct();
	}

	public function index() {
		$this->layout->view('review/index');
	}

}