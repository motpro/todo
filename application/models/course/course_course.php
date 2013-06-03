<?php

class Course_course extends CI_Model {

	private $_course;
	private $_category;

	public function __construct() {
		parent::__construct();
		$this->_course = 'b_course';
		$this->_category = 'b_category';
	}

	public function list_course() {
		$this->db->select( $this->_course.'.* , '.$this->_category.'.category');
		$this->db->join('b_category', $this->_course.'.category_id = '.$this->_category.'.id' , 'left');
		$this->db->from( $this->_course);
		$this->db->order_by('id,category_id','desc');
		return $this->db->get()->result_array();
	}

	public function get_course_by_id( $id) {
		$this->db->select( '*');
		$this->db->from( $this->_course);
		$this->db->where( array('id' => $id));
		return $this->db->get()->result_array();
	}

	public function get_category() {
		$this->db->select('*');
		$this->db->from('b_category');
		return $this->db->get()->result_array();
	}
}