<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	function __construct()
	{
		parent::__construct();   
		$this->load->model('article_model');
		$crumb=array(
			array('name'=>'Home','link'=>'#'),
			array('name'=>'Gallery','link'=>'#'),
			// array('name'=>'Blog','link'=>'')
			);
		$this->s->assign('breadcrumb',$crumb);
		$this->s->assign('page_name','Gallery');
		// $this->s->assign('timenow',date("d/m/Y"));

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
		$this->pathController='admin/gallery/gallery/';
			$this->s->assign('pathControl',$this->pathController);
		$this->pathView='backend/default/article/gallery/';
		// $this->pathView='backend/default/account/account/';
	}
	public function index()
	{
		// echo "string";

		$list=$this->article_model->getList(3);
		$this->s->assign('list',$list);
		$this->s->display($this->pathView.'list.tpl');
	}

	public function add()
	{
		// print_r($_POST);
		// $this->s->assign('Codephones', array(
		//     1 => 'USA (+1)',
		//     84 => 'Vietnam (+84)',
  //   	)
  //   );
		// $this->s->assign('codephoneSelect', 1);
		$this->s->assign('Actives', array(
		    1 => 'Active',
		    0 => 'Disable',
    	)
    );
		$this->s->assign('ActiveSelect', 1);
		// $this->s->assign('typeAccount', array(
		//     1 => 'Owner',
		//     2 => 'Agent',
		//     3 => 'Other',
  //   	)
  //   );
  //   $this->s->assign('typeSelect', 1);
		// $this->s->assign('group', array(
		//     1 => 'Admin',
		//     2 => 'Sale',
		//     3 => 'PM',
  //   	)
  //   );
    // $this->s->assign('groupSelect', 2);
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
				// print_r($_FILES);
				if (!empty($_FILES['Photo']['name'])) {
					// $config['upload_path'] = base_url('upload/');
					$config['upload_path'] = 'upload/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['Photo']['name'];

	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        // $this->upload->do_upload('Photo');
	        // var_dump($this->upload->display_errors());
	        if ($this->upload->do_upload('Photo')) {
	          $uploadData = $this->upload->data();
	          $data["photo"] = $uploadData['file_name'];
	          // echo $data["image"];
	          // echo "Thanh cong";//.$uploadData['upload_path']

	          $this->article_model->Add($data,$cate=3);
						redirect(base_url($this->pathController.'index'),'refresh');
	        } else{
	          $data["photo"] = '';
	        }
	      }else{
	        $data["photo"] = '';
	      }
				// $this->article_model->Add($data,$cate=1);
				// redirect(base_url($this->pathController.'index'),'refresh');
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
		// $this->s->assign('Codephones', array(
		//     1 => 'USA (+1)',
		//     84 => 'Vietnam (+84)',
  //   	)
  //   );
		// $this->s->assign('codephoneSelect', 1);
		$this->s->assign('Actives', array(
		    1 => 'Active',
		    0 => 'Disable',
    	)
    );
		$this->s->assign('ActiveSelect', 1);
		// $this->s->assign('typeAccount', array(
		//     1 => 'Owner',
		//     2 => 'Agent',
		//     3 => 'Other',
  //   	)
  //   );
  //   $this->s->assign('typeSelect', 1);
		// $this->s->assign('group', array(
		//     1 => 'Admin',
		//     2 => 'Sale',
		//     3 => 'PM',
  //   	)
  //   );
  //   $this->s->assign('groupSelect', 2);
		$this->load->library('form_validation');
	 	$this->form_validation->set_rules('title', 'Title', 'required');
	 	// $this->form_validation->set_rules('description', 'Description', 'required');
	 	// $this->form_validation->set_rules('content', 'Content', 'required');
		if ($this->form_validation->run() == FALSE)
    {
            $this->s->display($this->pathView.'add.tpl');
    }
    else
    {
        $data=$this->input->post();
        array_pop($data); //Xóa phần tử $data['btn']
        print_r($data);
        // $this->article_model->Add($data,$cate=3);
				// redirect(base_url($this->pathController.'index'),'refresh');
				// if(!empty($data['btn'])){ //Nút Save hoặc nút Cancel đc click
					
				// 	if(!empty($data['btn']['_Submit']))//Save click
				// 	{
				// 		// echo "Submited<br>";
				// 		array_pop($data); //Xóa phần tử $data['btn']
				// 		print_r($data);
				// 		die();
				// 		$this->article_model->Add($data,$cate=2);
				// 		redirect(base_url($this->pathController.'index'),'refresh');
				// 	}
				// 	// elseif (!empty($data['btn']['_Cancel'])) {//Cancel click
				// 	// 	// echo "Canceled<br>";
				// 	// 	array_pop($data); //Xóa phần tử $data['btn']
				// 	// 	// print_r($data);
				// 	// 	redirect(base_url($this->pathController.'index'),'refresh');
				// 	// 	// redirect(base_url('admin/blog/blog/index'),'refresh');
				// 	// }
				// }	
    }
		// $this->s->display($this->pathView.'edit.tpl');
	}

	
	public function delete($id)
	{
		$set=$this->article_model->Delete($id);
		redirect(base_url($this->pathController.'index'),'refresh');
		
	}

}
/* End of file Gallery.php */
/* Location: ./application/controllers/admin/gallery/Gallery.php */