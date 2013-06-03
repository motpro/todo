<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function Client() {
		parent::__construct();
		$this->load->helper('excel');
		$this->load->helper('csv');
	}

	public function index()
	{
		$this->layout->view('client/index');
	}

	public function member() {
		$this->load->model('client/client_member' , 'model_member');
		$users = $this->model_member->get_users(1,100,'');
		$this->layout->view( 'client/member', array( 'members' => $users));
	}

	public function excel() {

		if( $this->input->post('upload')){
			
			if( isset( $_FILES['excel'])){
				preg_match('/[.].+$/', $_FILES['excel']['name'], $match);

				if( '.xls' === $match[0]){

				move_uploaded_file( $_FILES['excel']['tmp_name'], FCPATH.'uploads/temp.xls');
				$result = readexcel( FCPATH.'uploads/temp.xls');

				//使用 client_excel model
				$this->load->model('client/client_excel');

				$row_id = $this->client_excel->insert_row_info( json_encode( $result[0]));
				unset( $result[0]);
				foreach ($result as $re) {
					$this->client_excel->insert_row_data( $row_id , json_encode( $re));
				}
				header('Location: '.base_url().'index.php/client/excel');
				//$this->layout->view('client/excel'  , array( 'result' => $result));
				}

				header('Location: '.base_url().'index.php/client/excel');
			}
		}else{

			$this->load->model('client/client_excel');

			$row_record = $this->client_excel->fetch_excel_rows();

			$this->layout->view('client/excel' , array( 'record' => $row_record));
		}


	}

	public function csv() {

		if( $this->input->post('upload')) {
			if( isset( $_FILES['csv'])){
				preg_match('/[.].+$/', $_FILES['csv']['name'], $match);
				if( '.csv' === $match[0]){
					move_uploaded_file( $_FILES['csv']['tmp_name'], FCPATH.'uploads/temp.csv');
					readcsv( FCPATH.'uploads/temp.csv');
				}
			}

		}

		$this->layout->view('client/csv');
	}

	public function manage_excel( $id) {
		$id = intval( $id);
		$this->load->model('client/client_excel');

		$row = $this->client_excel->fetch_excel_row_by_id( $id);
		$data = $this->client_excel->fetch_excel_row_info( $id);

		$this->layout->view('client/manage_excel' , array( 'row' => json_decode( $row[0]['row']), 'infos' => $data));
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */