<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	function __construct()
	{
		parent::__construct();   
		$this->load->model('article_model');


    $this->load->model('files_model');

		$this->load->library('Myhtml');
		
		$this->funcName="Gallery";
		$this->breadcrumb=array(
			array('name'=>'Home','link'=>'#','class'=>'','icon'=>'fa fa-home'),
			array('name'=>$this->funcName,'link'=>'#','class'=>'active','icon'=>''),
			);
		$this->viewLayout='backend/default/layout/layout.php';
		$this->viewPath='backend/default/article/gallery/';
		$this->currentControl='admin/gallery/gallery/';
	}
	// public function index()
	// {

	// 	$list=$this->article_model->getList(3);
	// 	$dataout=$list;
	// 	$data=array(
	// 		'info'=>array(
	// 			'title'=>$this->funcName.' Management',
	// 			'page'=>$this->funcName,
	// 			'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
	// 			'control'=>$this->currentControl,
	// 			),
	// 		'temp'=>$this->viewPath.'list.php',
	// 		'data'=>$dataout,
	// 		);
	// 	$this->load->view($this->viewLayout,$data);
	// }
	public function index()
	{

		// $list=$this->article_model->getList(3);
		// $dataout=$list;
		$data=array(
			'info'=>array(
				'title'=>$this->funcName.' Management',
				'page'=>$this->funcName,
				'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
				'control'=>$this->currentControl,
				),
			'temp'=>$this->viewPath.'manager.php',
			// 'data'=>$dataout,
			);
		$this->load->view($this->viewLayout,$data);
	}
	public function upload_file1()
	{
		$output_dir = "uploads/";
		$this->load->model('Files_Model');

		if(isset($_FILES["myfile"]))
		{
			$ret = array();
			
		//	This is for custom errors;	
		/*	$custom_error= array();
			$custom_error['jquery-upload-file-error']="File already exists";
			echo json_encode($custom_error);
			die();
		*/
			$error =$_FILES["myfile"]["error"];
			//You need to handle  both cases
			//If Any browser does not support serializing of multiple files using FormData() 
			if(!is_array($_FILES["myfile"]["name"])) //single file
			{
		 	 	$fileName = $_FILES["myfile"]["name"];
		 	 	$this->files_model->insert_file($fileName);
		 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
		    	$ret[]= $fileName;
			}
			else  //Multiple files, file[]
			{
			  $fileCount = count($_FILES["myfile"]["name"]);
			  for($i=0; $i < $fileCount; $i++)
			  {
			  	$fileName = $_FILES["myfile"]["name"][$i];
			  	$this->files_model->insert_file($fileName);
					move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
			  	$ret[]= $fileName;
			  }
			
			}
		    echo json_encode($ret);
		 }
		 // $valid_formats = array("jpg", "png", "gif", "bmp");
			// $name = $_FILES['myfile']['name'];
			// $size = $_FILES['myfile']['size'];
			// $path = "uploads/";
			// if(strlen($name))
			// 	{
			// 	list($txt, $ext) = explode(".", $name);
			// 	if(in_array($ext,$valid_formats) && $size<(1024*1024))
			// 	{
			// 		$actual_image_name = "manisha.".$ext;
			// 		$tmp = $_FILES['myfile']['tmp_name'];
			// 		if(move_uploaded_file($tmp, $path.$actual_image_name))
			// 		{
			// 			//mysql_query("UPDATE personaldetails SET profile_pic='$actual_image_name' WHERE user_id=1");
			// 			$auth = $this->session->get('auth');
			// 			$user_id = $auth['id'];
			// 			$personaldetails = Personaldetails::findFirst("user_id =".$user_id);
			// 			$personaldetails->setProfilePic($actual_image_name);
			// 			if($personaldetails->save())
			// 			{
			// 				$image="<h1>Please drag on the image</h1><img src=\'uploads/".$actual_image_name."\' id=\'photo\' style=\'max-width:500px\'>";
			// 			}
			// 		}
			// 		else
			// 		{
			// 			$image = "failed to upload";
			// 		}
			// 	} 
			// 	else {
			// 		$image = "Invalid file formats..!";
			// 	}
			// }	else {
			// 	$image = "Please select image..!";
			// }
			// return $image;
	}
	
	public function load_file1()
	{
		$dir=base_url()."uploads";

		$ret= array();

		
		// $files = scandir($dir);
		// foreach($files as $file)
		// {
		// 	if($file == "." || $file == "..")
		// 		continue;
		// 	$filePath=$dir."/".$file;
		// 	$details = array();
		// 	$details['name']=$file;
		// 	$details['path']=$filePath;
		// 	$details['size']=filesize($filePath);
		// 	$ret[] = $details;
		// }

		$this->load->model('Files_Model');
		$files=$this->files_model->get_files();
		foreach($files as $file)
		// foreach($files as $file)
		{
			// if($file == "." || $file == "..")
				// continue;
			$filePath=$dir."/".$file->filename;
			$details = array();
			$details['name']=$file->filename;
			$details['path']=$filePath;
			$details['size']=0;
			// $details['size']=filesize($filePath);
			$ret[] = $details;
		}
		echo json_encode($ret);
		
	}
	public function delete_file1()
	{
		$output_dir = "./uploads/";
		// $output_dir = base_url()."uploads/";
		// echo $output_dir;
		// echo "<script type=\"text/javascript\">
  //   alert(\"$output_dir\");
  //   </script>";
		// echo "<script>alert(".$output_dir.")</script>";
		
		if(isset($_POST["op"]) && $_POST["op"] == "delete" && isset($_POST['name']))
		{
			$fileName =$_POST['name'];
			$this->load->model('Files_Model');
			$this->files_model->delete_file_byFilename($fileName);
			$fileName=str_replace("..",".",$fileName); //required. if somebody is trying parent folder files	
			$filePath = $output_dir. $fileName;
			if (file_exists($filePath)) 
			{
		        @unlink($filePath);
		        // echo "Deleted File ".$fileName."<br>";
		         // @unlink("./upload/".$data['a_photo']);
		    }
			// echo "Deleted File ".$fileName."<br>";
		}
		echo json_encode($output_dir);
	}
									// public function upload_file()
								 //   {
								 //      $status = "";
								 //      $msg = "";
								 //      $file_element_name = 'userfile';
								       
								 //      if (empty($_POST['title']))
								 //      {
								 //         $status = "error";
								 //         $msg = "Please enter a title";
								 //      }
								       
								 //      if ($status != "error")
								 //      {
								 //         $config['upload_path'] = './files/';
								 //         $config['allowed_types'] = 'gif|jpg|png|doc|txt';
								 //         $config['max_size']  = 1024 * 8;
								 //         $config['encrypt_name'] = TRUE;
								    
								 //         $this->load->library('upload', $config);
								    
								 //         if (!$this->upload->do_upload($file_element_name))
								 //         {
								 //            $status = 'error';
								 //            $msg = $this->upload->display_errors('', '');
								 //         }
								 //         else
								 //         {
								 //            $data = $this->upload->data();
								 //            $file_id = $this->files_model->insert_file($data['file_name'], $_POST['title']);
								 //            if($file_id)
								 //            {
								 //               $status = "success";
								 //               $msg = "File successfully uploaded";
								 //            }
								 //            else
								 //            {
								 //               unlink($data['full_path']);
								 //               $status = "error";
								 //               $msg = "Something went wrong when saving the file, please try again.";
								 //            }
								 //         }
								 //         @unlink($_FILES[$file_element_name]);
								 //      }
								 //      echo json_encode(array('status' => $status, 'msg' => $msg));
								 //   }

									// public function files()
									// {
									//    $files = $this->files_model->get_files();
									//    $this->load->view('files', array('files' => $files));
									// }

									// public function delete_file($file_id)
									// {
									//    if ($this->files_model->delete_file($file_id))
									//    {
									//       $status = 'success';
									//       $msg = 'File successfully deleted';
									//    }
									//    else
									//    {
									//       $status = 'error';
									//       $msg = 'Something went wrong when deleteing the file, please try again';
									//    }
									//    echo json_encode(array('status' => $status, 'msg' => $msg));
									// }

	// public function add()
	// {
	// 	$dataout=array();
		
	// 	$formselect=$this->myhtml->selectStatusActive('active',1);
	// 	$dataout['active']=$formselect;
	// 	$data=array(
	// 		'info'=>array(
	// 			'title'=>$this->funcName.' Management',
	// 			'page'=>$this->funcName,
	// 			'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
	// 			'control'=>$this->currentControl,
	// 			),
	// 		'temp'=>$this->viewPath.'add.php',
	// 		'data'=>$dataout,
	// 		);
		
	// 	$this->load->library('form_validation');
	//  	$this->form_validation->set_rules('title', 'Title', 'trim|required');
	//  	// $this->form_validation->set_rules('Photo', 'Photo', 'required');
	//  	// $this->form_validation->set_rules('content', 'Content', 'trim|required');
	// 	if ($this->form_validation->run() == FALSE)
 //    {
 //    	$datain=$this->input->post();
	// 		$this->go(!empty($datain['btn']['_Cancel']));
	// 		var_dump($datain);
 //      $this->load->view($this->viewLayout,$data);
 //    }
 //    else
 //    {
 //        $data=$this->input->post();
	// 			if(!empty($data['btn'])){ //Nút Save hoặc nút Cancel đc click
					
	// 				if(!empty($data['btn']['_Submit']))//Save click
	// 				{
	// 					array_pop($data); //Xóa phần tử $data['btn']
	// 					// var_dump($_FILES);
	// 					// var_dump($_FILES);
					
	// 					if (!empty($_FILES['Photo']['name'])) {
	// 						// $config['upload_path'] = base_url('upload/');
	// 						$this->load->helper('string');
	// 						// $this->load->library('image_lib');
							
	// 						$config['upload_path'] = 'upload/';
	// 		        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	// 		        $config['file_name'] = random_string('alnum',6)."-".$_FILES['Photo']['name'];

	// 		        $this->load->library('upload', $config);
	// 		        $this->upload->initialize($config);
	// 		        // $this->upload->do_upload('Photo');
	// 		        // var_dump($this->upload->display_errors());
	// 		        if ($this->upload->do_upload('Photo')) {
	// 		          $uploadData = $this->upload->data();
	// 		          $data["photo"] = $uploadData['file_name'];
	// 		          // var_dump($uploadData['image_size_str']);//['width'],['height']
	// 		          // var_dump($uploadData['image_width']);//['width'],['height']
	// 		          $width=$uploadData['image_width'];
	// 		          $height=$uploadData['image_height'];
	// 		          // Resize Photo - begin
	// 		          $config['image_library'] = 'gd2';
	// 							// $config['source_image'] = '/path/to/image/mypic.jpg';
	// 							$config['source_image'] = './upload/'.$data["photo"];
	// 							$config['create_thumb'] = FALSE;//True là tạo thumb, False là Xử lý trên file gốc
	// 							$config['maintain_ratio'] = TRUE;
	// 							if($width > 1000){
	// 								$config['width']= 1000;
	// 							}
	// 							if($width > 600){
	// 								$config['height']= 600;
	// 							}
	// 							// $config['height'] = 50;

	// 							$this->load->library('image_lib', $config);

	// 							// $this->image_lib->resize();
	// 							// if ( ! $this->image_lib->crop())
	// 							if ( ! $this->image_lib->resize())//Xử lý resize
	// 							{
	// 				        echo $this->image_lib->display_errors();
	// 							}
	// 							// Resize Photo - End

	// 		          // echo "Thanh cong";//.$uploadData['upload_path']
	// 		          $data['active']=1;
	// 		          // var_dump($data);
	// 		          $this->article_model->Add($data,$cate=3);

	// 		          // die();
	// 							redirect(base_url($this->currentControl.'index'),'refresh');
	// 		        } else{
	// 		          $data["photo"] = '';
	// 		        }
	// 		      }else{
	// 		        $data["photo"] = '';
	// 		      }
	// 		          var_dump($data);
	// 					redirect(base_url($this->currentControl.'index'),'refresh');
	// 				}
	// 			}	
 //    }

	// }
	// public function edit()
	// {
	// 	// $dataout=array();
		
	// 	// $formselect=$this->myhtml->selectStatusActive('active',1);
	// 	// $dataout['active']=$formselect;
	// 	// $data=array(
	// 	// 	'info'=>array(
	// 	// 		'title'=>$this->funcName.' Management',
	// 	// 		'page'=>$this->funcName,
	// 	// 		'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
	// 	// 		'control'=>$this->currentControl,
	// 	// 		),
	// 	// 	'temp'=>$this->viewPath.'add.php',
	// 	// 	'data'=>$dataout,
	// 	// 	);
		
	// 	// $this->load->library('form_validation');
	//  // 	$this->form_validation->set_rules('title', 'Title', 'trim|required');
	//  // 	$this->form_validation->set_rules('Photo', 'Photo', 'trim|required');
	//  // 	// $this->form_validation->set_rules('content', 'Content', 'trim|required');
	// 	// if ($this->form_validation->run() == FALSE)
 //  //   {
 //  //   	$datain=$this->input->post();
	// 	// 	$this->go(!empty($datain['btn']['_Cancel']));
 //  //     $this->load->view($this->viewLayout,$data);
 //  //   }
 //  //   else
 //  //   {
 //  //       $data=$this->input->post();
	// 	// 		if(!empty($data['btn'])){ //Nút Save hoặc nút Cancel đc click
					
	// 	// 			if(!empty($data['btn']['_Submit']))//Save click
	// 	// 			{
	// 	// 				// print_r($data);
	// 	// 				// print_r($_FILES);
	// 	// 				if (!empty($_FILES['Photo']['name'])) {
	// 	// 					// $config['upload_path'] = base_url('upload/');
	// 	// 					$config['upload_path'] = 'upload/';
	// 	// 	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	// 	// 	        $config['file_name'] = $_FILES['Photo']['name'];

	// 	// 	        $this->load->library('upload', $config);
	// 	// 	        $this->upload->initialize($config);
	// 	// 	        // $this->upload->do_upload('Photo');
	// 	// 	        // var_dump($this->upload->display_errors());
	// 	// 	        if ($this->upload->do_upload('Photo')) {
	// 	// 	          $uploadData = $this->upload->data();
	// 	// 	          $data["photo"] = $uploadData['file_name'];
	// 	// 	          // echo $data["image"];
	// 	// 	          // echo "Thanh cong";//.$uploadData['upload_path']

	// 	// 	          $this->article_model->Add($data,$cate=3);
	// 	// 						redirect(base_url($this->currentControl.'index'),'refresh');
	// 	// 	        } else{
	// 	// 	          $data["image"] = '';
	// 	// 	        }
	// 	// 	      }else{
	// 	// 	        $data["image"] = '';
	// 	// 	      }
	// 	// 			}
	// 	// 		}	
 //  //   }
	// }

	
	// public function delete($id)
	// {
	// 	$data=$this->article_model->getOne_byid($id);
	// 	// var_dump($data['a_photo']);
	// 	$file_delete=base_url()."upload/".$data['a_photo'];
	// 	 @unlink("./upload/".$data['a_photo']);
	// 	 // @unlink($file_delete);
	// 	$this->article_model->Delete($id);
	// 	redirect(base_url($this->currentControl.'index'),'refresh');
		
	// }

	// public function go($dk=null)
	// {
	// 	if (!empty($dk))
	// 		if ($dk) {//Cancel click
	// 			return redirect(base_url($this->currentControl.'index'),'refresh');
	// 		}
	// 	else
	// 		return redirect(base_url($this->currentControl.'index'),'refresh');
	// }

}
/* End of file Gallery.php */
/* Location: ./application/controllers/admin/gallery/Gallery.php */