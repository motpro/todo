<?php

class Course_page extends CI_Model {

	private $lesson_pages;
	private $lesson_video;

	public function __construct() {
		parent::__construct();
		$this->lesson_pages = 'b_lesson_pages';
		$this->lesson_video = 'b_video';
	}

	public function get_pages_by_lessonid( $id) {
		$this->db->select( $this->lesson_pages.'.title , '.$this->lesson_video.'.*');
		$this->db->from( $this->lesson_pages);
		$this->db->join( $this->lesson_video , $this->lesson_pages.'.film_id = '.$this->lesson_video.'.id');
		$this->db->where( array( 'lessonid' => $id));
		return $this->db->get()->result_array();
	}
}