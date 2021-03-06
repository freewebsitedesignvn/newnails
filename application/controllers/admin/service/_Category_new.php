<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	function __construct()
	{
		parent::__construct();   
		$this->load->helper('string');
		$this->load->model('Service_cate_model','cate');
		$this->load->model('Photo_cateser_model','photo');
		$this->load->library('Myhtml');

		$this->funcName="Category";
		$this->breadcrumb=array(
			array('name'=>'Home','link'=>'#','class'=>'','icon'=>'fa fa-home'),
			array('name'=>'Service','link'=>'#','class'=>'','icon'=>''),
			array('name'=>$this->funcName,'link'=>'#','class'=>'active','icon'=>''),
			);

		
		$this->viewLayout='backend/default/layout/layout.php';
		$this->viewPath='backend/default/service/category/';
		$this->currentControl='admin/service/category/';
		$this->DirPhoto='upload/cate/';

	}
	public function index()
	{
		// echo "string";
		$list=$this->cate->getList();
		$dataout=$list;
		$data=array(
			'info'=>array(
				'title'=>$this->funcName.' Management',
				'page'=>$this->funcName,
				'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
				'control'=>$this->currentControl,
				'DirPhoto'=>$this->DirPhoto,
				),
			'temp'=>$this->viewPath.'list.php',
			'data'=>$dataout,
			);
		$this->load->view($this->viewLayout,$data);

	}

	public function add()
	{
		$dataout=array();
		
		
		// $formselect=$this->myhtml->selectStatusActive('active',1);
		// $dataout['active']=$formselect;
		$data=array(
			'info'=>array(
				'title'=>$this->funcName.' Management',
				'page'=>$this->funcName,
				'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
				'control'=>$this->currentControl,
				),
			'temp'=>$this->viewPath.'add.php',
			// 'data'=>$dataout,
			);
		
		$this->load->library('form_validation');
	 	$this->form_validation->set_rules('name', 'Name', 'trim|required');
	 	$this->form_validation->set_rules('description', 'Description', 'trim|required');
	 	// $this->form_validation->set_rules('photo', 'Photo', 'trim|required');
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
						// Upload Photo
						if (!empty($_FILES['photo']['name'])) {
							// $config['upload_path'] = base_url('upload/');
							$config['upload_path'] = $this->DirPhoto;
			        $config['allowed_types'] = 'jpg|jpeg|png|gif';
			        // $config['file_name'] = $_FILES['photo']['name'];
			        $config['file_name'] = random_string('alnum',6)."-".$_FILES['photo']['name'];
			        $this->load->library('upload', $config);
			        $this->upload->initialize($config);
			        if ($this->upload->do_upload('photo')) {
			          $uploadData = $this->upload->data();
			          $data["photo"] = $uploadData['file_name'];

								// redirect(base_url($this->currentControl.'index'),'refresh');
			        } else{
			          $data["photo"] = '';
			        }
			      }else{
			        $data["photo"] = '';
			      }
						$this->cate->Add($data);
						redirect(base_url($this->currentControl.'index'),'refresh');
					}
				}	
    }
	}
	public function edit($id)
	{
		$dataout=$this->cate->getOne_byid($id);

		// $formselect=$this->myhtml->selectStatusActive('active',$dataout['a_active']);
		// $dataout['active']=$formselect;
		// var_dump($formselect);
		// die();
		$data=array(
			'info'=>array(
				'title'=>$this->funcName.' Management',
				'page'=>$this->funcName,
				'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
				'control'=>$this->currentControl,
				'DirPhoto'=>$this->DirPhoto,
				),
			'temp'=>$this->viewPath.'edit.php',
			'data'=>$dataout,
			);
		
			$this->load->library('form_validation');
		 	$this->form_validation->set_rules('name', 'Name', 'trim|required');
		 	$this->form_validation->set_rules('description', 'Description', 'trim|required');
		 	// $this->form_validation->set_rules('content', 'Content', 'trim|required');
	
			if ($this->form_validation->run() == FALSE)
	    {
	    	$datain=$this->input->post();
				$this->go(!empty($datain['btn']['_Cancel']));
	      $this->load->view($this->viewLayout,$data);
	    }
	    else
	    {
	        $data=$this->input->post();
	        // print_r($data);die();
					if(!empty($data['btn'])){ //Nút Save hoặc nút Cancel đc click
						
						if(!empty($data['btn']['_Submit']))//Save click
						{
							array_pop($data); //Xóa phần tử $data['btn']
							if (!empty($_FILES['photo']['name'])) { //Hình mới được cập nhật
								// echo "new photo file";die();
								$config['upload_path'] = $this->DirPhoto;
				        $config['allowed_types'] = 'jpg|jpeg|png|gif';
				        // $config['file_name'] = $_FILES['photo']['name'];
				        $config['file_name'] = random_string('alnum',6)."-".$_FILES['photo']['name'];
				        $this->load->library('upload', $config);
				        $this->upload->initialize($config);
				        if ($this->upload->do_upload('photo')) {
				          $uploadData = $this->upload->data();
				          $data["photo"] = $uploadData['file_name'];

			          }
			          //Xóa hình cũ
			          // Cách 1:
				     //      $filePath=$this->DirPhoto.$dataout['cate_photo'];
									// if (file_exists($filePath)) 
									// {
						   //      @unlink($filePath);
							  //   }	
						    // Cách 2:
						    $this->DeletePhotoFile($this->DirPhoto.$dataout['cate_photo']);
							}
							else //khi File Upload rỗng HOẶC file hình bị click = btn DELETE
							{
								//Xóa hình cũ
								$data["photo"]='';
								$this->DeletePhotoFile($this->DirPhoto.$dataout['cate_photo']);
							}							
							// $this->go(!empty($data['btn']['_Submit']));
							$this->cate->Update($id,$data);//Save data
							redirect(base_url($this->currentControl.'index'),'refresh');		

						}
						else{ //Click btn Cancel
							redirect(base_url($this->currentControl.'index'),'refresh');		
						}

						
					}	
	    }
	}
	public function delete($id)
	{
		$set=$this->cate->Delete($id,$this->DirPhoto);
		redirect(base_url($this->currentControl.'index'),'refresh');
		
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
	function DeletePhotoFile($fullPathFile)
	{
		if (file_exists($fullPathFile)) 
		{
      @unlink($fullPathFile);
    }	
	}
	// ---------------AJAX Process File

	public function upload_file()
	{

		// $output_dir = $this->DirPhoto;
		$output_dir = "uploads/";
		// echo $output_dir;die();

		if(isset($_FILES["myfile"]))
		{
			$ret = array();
			
		//	This is for custom errors;	
			// $custom_error= array();
			// $custom_error['jquery-upload-file-error']="File already exists";
			// echo json_encode($custom_error);
			// die();
		
			$error =$_FILES["myfile"]["error"];
			//You need to handle  both cases
			//If Any browser does not support serializing of multiple files using FormData() 
			if(!is_array($_FILES["myfile"]["name"])) //single file
			{
		 	 	$fileName = $_FILES["myfile"]["name"];
		 	 	// $fileName = random_string('alnum',6)."-".$_FILES["myfile"]["name"];
		 	 	$this->photo->insert_file($fileName);
		 	 	// $this->photo->insert_file($fileName,'testSessionID');
		 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
		    	$ret[]= $fileName;
			}
			else  //Multiple files, file[]
			{
			  $fileCount = count($_FILES["myfile"]["name"]);
			  for($i=0; $i < $fileCount; $i++)
			  {
			  	$fileName = $_FILES["myfile"]["name"][$i];
			  	$this->photo->insert_file($fileName);
			  	// $this->photo->insert_file($fileName,'testSessionID');
					move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
			  	$ret[]= $fileName;
			  }
			
			}
		    echo json_encode($ret);
		 }
		
	}

	public function add_load_file()
	{
		// $dir=$this->DirPhoto;
		$dir=base_url().$this->DirPhoto;

		$ret= array();

		// $sessionId='testSessionID';
		// $files=$this->photo->get_files_sessID($sessionId);
		// $custom_error= array();
			// $custom_error['jquery-upload-file-error']="File already exists";
			// echo json_encode($custom_error);
			// die();
		foreach($files as $file)
		{
			$filePath=$dir.$file->filename;
			// $filePath=$dir."/".$file->filename;
			$details = array();
			$details['name']=$file->filename;
			$details['path']=$filePath;
			$details['size']=0;
			// $details['size']=filesize($filePath);
			$ret[] = $details;
		}
		echo json_encode($ret);
		
	}






}

/* End of file Category.php */
/* Location: ./application/controllers/admin/service/Category.php */