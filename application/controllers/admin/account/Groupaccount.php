<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groupaccount extends CI_Controller {
	function __construct()
	{
		parent::__construct();   
		$this->load->model('Groupaccount_model');
		$crumb=array(
			array('name'=>'Home','link'=>'1'),
			array('name'=>'Accounts','link'=>'1'),
			array('name'=>'Groups','link'=>'')
			);
		$this->s->assign('breadcrumb',$crumb);
		$this->s->assign('page_name','Group');

		//Phân quyền
		// $currentPage="group_account";
		// $role=array(
		// 	'account',
		// 	'report',
		// 	'group_account'
		// 	);
		// $this->s->assign('myrole',$role);
		// if(in_array($currentPage,$role))
		// 	$this->s->assign('note',"Accept Access this page");
		// else			
		// 	$this->s->assign('note',"Can't Access this page");
		// 	// echo "Can't Access this page";
		$this->pathController='admin/account/groupaccount/';
		$this->s->assign('pathControl',$this->pathController);
		$this->pathView='backend/default/account/groupaccount/';
	}
	public function index()
	// {getList
	{
		$list=$this->Groupaccount_model->getList(0);
		$this->s->assign('list',$list);
		$this->s->display($this->pathView.'list.tpl');
	}

	public function add()
	{
		// print_r($_POST);
		$this->s->assign('myOptions', array(
		    1 => 'Active',
		    0 => 'Disable',
    	)
    );
		$this->s->assign('mySelect', 1);
		$this->s->display($this->pathView.'add.tpl');
	}
	public function addaction()
	{
		// print_r($_POST);
		$data=$this->input->post();
		if(!empty($data['btn'])){ //Nút Save hoặc nút Cancel đc click
			
			if(!empty($data['btn']['_Submit']))//Save click
			{
				// echo "Submited<br>";
				array_pop($data); //Xóa phần tử $data['btn']
				// print_r($data);
				$this->Groupaccount_model->Add($data);
				redirect(base_url($this->pathController.'index'),'refresh');
			}
			elseif (!empty($data['btn']['_Cancel'])) {//Cancel click
				// echo "Canceled<br>";
				array_pop($data); //Xóa phần tử $data['btn']
				// print_r($data);
				redirect(base_url($this->pathController.'index'),'refresh');
				// redirect(base_url('admin/blog/blog/index'),'refresh');
			}
		}		

	}
	public function edit()
	{
		$this->s->assign('myOptions', array(
		    1 => 'Active',
		    0 => 'Disable',
    	)
    );
		$this->s->assign('mySelect', 1);
		$this->s->display('backend/default/account/groupaccount/edit.tpl');
	}
	
	public function delete($id)
	{
		$set=$this->Groupaccount_model->Delete($id);
		redirect(base_url($this->pathController.'index'),'refresh');
		
	}

}

/* End of file Groupaccount.php */
/* Location: ./application/controllers/admin/account/Groupaccount.php */