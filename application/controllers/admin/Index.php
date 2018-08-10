<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->library('Myhtml');
		$this->funcName="Dashboard";
		$this->viewLayout='backend/default/layout/layout.php';
		$this->viewPath='backend/default/';

		$this->breadcrumb=array(
			array('name'=>'Home','link'=>'#','class'=>'','icon'=>'fa fa-home'),
			array('name'=>'Dashboard','link'=>'#','class'=>'active','icon'=>'fa fa-dashboard'),
			);

	}
	public function index()
	{
		

		$dataout=array();

		$data=array(
			'info'=>array(
				'title'=>$this->funcName.'',
				'page'=>$this->funcName,
				'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
				),
			'temp'=>$this->viewPath.'index.php',
			'data'=>$dataout,
			);
		$this->load->view($this->viewLayout,$data);
		
	}

}
/* End of file index.php */
/* Location: ./application/controllers/admin/index.php */