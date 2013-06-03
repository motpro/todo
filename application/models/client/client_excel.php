<?php

class Client_excel extends CI_Model {

	private $info = 'admin_client_info';
	private $row = 'admin_client_row';

	public function __construct() {
		parent::__construct();
	}


	//excel字段信息
	public function insert_row_info( $row) {
		$this->db->insert( $this->row, array('row' => $row , 'update_date' => time()));
		return $this->db->insert_id();
	}
	//excel行数据
	public function insert_row_data( $row_id , $rowdata) {
		$this->db->insert( $this->info , array('row_id' => $row_id , 'row_content' => $rowdata));
	}
	//读取所有导入的字段记录 
	public function fetch_excel_rows() {
		return $this->db->get( $this->row)->result_array();
	}

	public function fetch_excel_row_by_id( $id) {
		return $this->db->where( array( 'id' => $id))->from( $this->row)->get()->result_array();
	}

	public function fetch_excel_row_info( $id) {
		return $this->db->select('id,row_content')->where( array( 'row_id' => $id))->from( $this->info)->get()->result_array();
	}
}