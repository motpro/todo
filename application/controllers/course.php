<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {


	public function Course() {
		parent::__construct();
	}

	public function index() {
		$this->load->model('course/course_course' , 'course');
		$list = $this->course->list_course();
		$this->layout->view('course/index' , array('list' => $list));
	}

	public function add_course() {

	}

	public function edit_course( $id = 1) {

		$this->load->model('course/course_course' , 'course');
		$this->load->model('course/course_page' , 'page');

		$course = $this->course->get_course_by_id( $id);
		$category = $this->course->get_category();

		$pages = $this->page->get_pages_by_lessonid( $id);

		$this->layout->view('course/edit_course' , array('course'=> $course , 'category'=> $category , 'pages' => $pages));
	}

	public function add_category() {
		if( $this->input->post('add_category')){
			print_r( $_POST);
		}

		$this->layout->view('course/add_category');
	}

	public function edit_category() {

		$this->load->model('course/course_category');
		$categories_list = $this->course_category->get_categories();
		$this->layout->view('course/edit_category' , array('list' => $categories_list));
	}

}