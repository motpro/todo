<?php

class Client_member extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_users( $page = 1 , $offset = 30 , $order = 'desc') {
		$this->db->select('common_member_profile.* , ucenter_members.username , ucenter_members.email');
		$this->db->join('ucenter_members' , 'common_member_profile.uid = ucenter_members.uid' , 'left');
		$this->db->from('common_member_profile');
		$this->db->limit( $offset , ($page - 1)*$offset);
		$this->db->order_by('uid' , $order);
		return $this->db->get()->result_array();
	}
}