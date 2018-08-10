<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct()
	{
		parent::__construct();   

		$this->load->model('article_model');
		$this->load->library('Myhtml');
		
		$this->funcName="Blog";
		$this->breadcrumb=array(
			array('name'=>'Home','link'=>'#','class'=>'','icon'=>'fa fa-home'),
			array('name'=>$this->funcName,'link'=>'#','class'=>'active','icon'=>''),
			);

		//Phân quyền
		// $currentPage="account";
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
		
		$this->viewLayout='backend/default/layout/layout.php';
		$this->viewPath='backend/default/article/blog/';
		$this->currentControl='admin/blog/blog/';
		
	}
	public function index()
	{
		$list=$this->article_model->getList(1);
		$dataout=$list;
		$data=array(
			'info'=>array(
				'title'=>$this->funcName.' Management',
				'page'=>$this->funcName,
				'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
				'control'=>$this->currentControl,
				),
			'temp'=>$this->viewPath.'list.php',
			'data'=>$dataout,
			);
		$this->load->view($this->viewLayout,$data);
	}

	public function add()
	{
	
		$dataout=array();
		
		$formselect=$this->myhtml->selectStatusActive('active',1);
		$dataout['active']=$formselect;
		$data=array(
			'info'=>array(
				'title'=>$this->funcName.' Management',
				'page'=>$this->funcName,
				'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
				'control'=>$this->currentControl,
				),
			'temp'=>$this->viewPath.'add.php',
			'data'=>$dataout,
			);
		
		$this->load->library('form_validation');
	 	$this->form_validation->set_rules('title', 'Title', 'trim|required');
	 	$this->form_validation->set_rules('description', 'Description', 'trim|required');
	 	$this->form_validation->set_rules('content', 'Content', 'trim|required');
		if ($this->form_validation->run() == FALSE)
    {
    	$datain=$this->input->post();
			$this->go(!empty($datain['btn']['_Cancel']));
      $this->load->view($this->viewLayout,$data);
    }
    else
    {
        $data=$this->input->post();
				if(!empty($data['btn'])){ //Nút Save hoặc nút Cancel đc click
					
					if(!empty($data['btn']['_Submit']))//Save click
					{
						array_pop($data); //Xóa phần tử $data['btn']
						$this->article_model->Add($data,$cate=1);
						// $this->go();
						redirect(base_url($this->currentControl.'index'),'refresh');
					}
				}	
    }
    
	}
	

	public function edit($id)
	{
		$dataout=$this->article_model->getOne_byid($id,0,1);

		$formselect=$this->myhtml->selectStatusActive('active',$dataout['a_active']);
		$dataout['active']=$formselect;
		// var_dump($formselect);
		// die();
		$data=array(
			'info'=>array(
				'title'=>$this->funcName.' Management',
				'page'=>$this->funcName,
				'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
				'control'=>$this->currentControl,
				),
			'temp'=>$this->viewPath.'edit.php',
			'data'=>$dataout,
			);
		
			$this->load->library('form_validation');
		 	$this->form_validation->set_rules('title', 'Title', 'trim|required');
		 	$this->form_validation->set_rules('description', 'Description', 'trim|required');
		 	$this->form_validation->set_rules('content', 'Content', 'trim|required');
	
			if ($this->form_validation->run() == FALSE)
	    {
	    	$datain=$this->input->post();
				$this->go(!empty($datain['btn']['_Cancel']));
	      $this->load->view($this->viewLayout,$data);
	    }
	    else
	    {
	        $data=$this->input->post();
					if(!empty($data['btn'])){ //Nút Save hoặc nút Cancel đc click
						
						if(!empty($data['btn']['_Submit']))//Save click
						{
							array_pop($data); //Xóa phần tử $data['btn']
							$this->article_model->Update($id,$data);
							$this->go(!empty($data['btn']['_Submit']));
						}
						redirect(base_url($this->currentControl.'index'),'refresh');		
					}	
	    }
		
	
	}
	public function go($dk=null)
	{
		if (!empty($dk))
			if ($dk) {//Cancel click
				return redirect(base_url($this->currentControl.'index'),'refresh');
			}
		else
			return redirect(base_url($this->currentControl.'index'),'refresh');
	}
	// public function editaction($id)
	// {
	// 	$data=$this->input->post();
	// 	if(!empty($data['btn'])){ //Nút Save hoặc nút Cancel đc click
			
	// 		if(!empty($data['btn']['_Submit']))//Save click
	// 		{
	// 			// echo "Submited<br>";
	// 			array_pop($data); //Xóa phần tử $data['btn']
	// 			// print_r($data);
	// 			$this->article_model->Update($id,$data);
	// 			redirect(base_url($this->pathController.'index'),'refresh');
	// 		}
	// 		elseif (!empty($data['btn']['_Cancel'])) {//Cancel click
	// 			// echo "Canceled<br>";
	// 			array_pop($data); //Xóa phần tử $data['btn']
	// 			// print_r($data);
	// 			redirect(base_url($this->pathController.'index'),'refresh');
	// 		}
	// 	}
		
		
	// 	// $this->article_model->Add($this->input->post(),$cate=1);
	// 	// redirect(base_url('admin/blog/blog/index'),'refresh');

	// }
	public function delete($id)
	{
		$set=$this->article_model->Delete($id);
		redirect(base_url($this->currentControl.'index'),'refresh');
		
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/admin/blog/Blog.php */