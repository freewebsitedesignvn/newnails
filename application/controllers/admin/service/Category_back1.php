<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	function __construct()
	{
		parent::__construct();   
		$this->load->helper('string');
		$this->load->library('upload');
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
		$config = array(
        'upload_path'   => $this->DirPhoto,
        'allowed_types' => 'jpg|jpeg|png|gif',
        'overwrite'     => 1,
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
						// print_r($_FILES['photo']);// die();
						if (!empty($_FILES['photo']['name'][0]))
						{
								$files = $_FILES;
								// echo "<pre>";
								// print_r($_FILES['photo']); 
								// print_r($files['photo']); 
								// echo "</pre>";
								// die();
								$TotalFile = count($_FILES['photo']['name']);
								$filenamesave=array();
								for ($i=0; $i < $TotalFile ; $i++) { 
										$_FILES['photo']['name'] = random_string('alnum',6)."-".$files['photo']['name'][$i];
										$filenamesave[]=$_FILES['photo']['name'];
										$_FILES['photo']['type'] = $files['photo']['type'][$i];
										$_FILES['photo']['tmp_name'] = $files['photo']['tmp_name'][$i];
										$_FILES['photo']['error'] = $files['photo']['error'][$i];
										$_FILES['photo']['size'] = $files['photo']['size'][$i];
										$this->upload->initialize($config);
										if(!($this->upload->do_upload('photo')) || $files['photo']['error'][$i] !=0)
				            {
				              	print_r($this->upload->display_errors());
				            // }	
				            // else
				            // {
				            //     $this->load->model('uploadModel','um');
				            //     $this->um->insertRecord($user,$name);
				            } //End IF Upload file
								}	//End For
								// print_r(json_decode(json_encode($filenamesave)));
								$filenamesave=json_encode($filenamesave);
								$data['photo']=$filenamesave;
								// echo $filenamesave;
								// die();
										// // Upload Photo
										// if (!empty($_FILES['photo']['name'])) {
										// 	// $config['upload_path'] = base_url('upload/');
										// 	// $config['upload_path'] = $this->DirPhoto;
							   //      // $config['allowed_types'] = 'jpg|jpeg|png|gif';
							   //      foreach ($_FILES as $key => $set) {
							        	
							   //      }
								  //       // $config['file_name'] = $_FILES['photo']['name'];
								  //       $config['file_name'] = random_string('alnum',6)."-".$_FILES['photo']['name'];
								  //       $this->load->library('upload', $config);
								  //       $this->upload->initialize($config);
								  //       if ($this->upload->do_upload('photo')) {
								  //         $uploadData = $this->upload->data();
								  //         $data["photo"] = $uploadData['file_name'];

										// 			// redirect(base_url($this->currentControl.'index'),'refresh');
							   //      } else{
							   //        $data["photo"] = '';
							   //      }
							      // }else{
							      //   $data["photo"] = '';
							      // }
						}
						$this->cate->Add($data);
						redirect(base_url($this->currentControl.'index'),'refresh');
					}// End Click Save
				} // End Click btn SAVE or Cancel	
    }//End form_validation
	}
	public function edit($id) //Version2
	{
		$dataout=$this->cate->getOne_byid($id);
		// echo "<pre>";print_r($dataout);echo "</pre>";die();
		// $formselect=$this->myhtml->selectStatusActive('active',$dataout['a_active']);
		// $dataout['active']=$formselect;
		// var_dump($formselect);
		// die();
		// $listPhoto=$dataout['cate_photo'];
		$listPhoto=json_decode($dataout['cate_photo']);
		// print_r($listPhoto);
		// echo "<pre>";print_r($listPhoto);echo "</pre>";die();
		// echo "<pre>";print_r($dataout);echo "</pre>";
		// array_pop($dataout);
		$dataout['cate_photo']=$listPhoto;
		// echo "<pre>";print_r($dataout);echo "</pre>";

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
			
			$config = array(
        'upload_path'   => $this->DirPhoto,
        'allowed_types' => 'jpg|jpeg|png|gif',
        'overwrite'     => 1,
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

							// echo "Data Post";
							// $this->myclass->indulieu($this->input->post());

							// echo "Old Photo";
							$filenamesave=array();
							$oldfile=$this->input->post('photo');
							// $oldfile=$this->input->post('photo_old');
							// $this->myclass->indulieu($oldfile);
							array_pop($data); //Xóa phần tử $data['btn']
							if (!empty($_FILES['photo']['name'][0])) //File Upload rỗng
							{
								$files = $_FILES;

								$TotalFile = count($_FILES['photo']['name']);
								// $this->myclass->indulieu($TotalFile);
								// $this->myclass->indulieu($_FILES);

								// $filenamesave=array();
								for ($i=0; $i < $TotalFile ; $i++) { 
										$_FILES['photo']['name'] = random_string('alnum',6)."-".$files['photo']['name'][$i];
										$filenamesave[]=$_FILES['photo']['name'];
										// $this->myclass->indulieu($filenamesave);
										$_FILES['photo']['type'] = $files['photo']['type'][$i];
										$_FILES['photo']['tmp_name'] = $files['photo']['tmp_name'][$i];
										$_FILES['photo']['error'] = $files['photo']['error'][$i];
										$_FILES['photo']['size'] = $files['photo']['size'][$i];
										$this->upload->initialize($config);
										if(!($this->upload->do_upload('photo')) || $files['photo']['error'][$i] !=0)//Upload file vào thư mục
				            {
				              	print_r($this->upload->display_errors());
				           
				            } //End IF
								}	//End For
								// echo "New Photo";
								// $this->myclass->indulieu($filenamesave);
								// echo "All Photo";
								// $data['photo']=(!empty($oldfile)|| !empty($filenamesave))?array_merge($oldfile,$filenamesave):NULL;
								// var_dump($oldfile);
												// if (!empty($oldfile)) {//Trộn Mảng Photo cũ với Mảng Photo mới
												// 	foreach ($oldfile as $key => $set) {
												// 		$filenamesave[]=$set;
												// 	}
												// }
												// $data['photo']=json_encode($filenamesave);
								// $filenamesave[]=$oldfile;
								// $data['photo']=((is_array($oldfile) and is_array($filenamesave)) or isset($oldfile) or isset($filenamesave))?array_merge($oldfile,$filenamesave):'';
								// $this->myclass->indulieu($data['photo']);
								// echo "Delete Photo";
								// $deletephoto = (!empty($dataout['cate_photo'])|| !empty($data['photo']))?array_diff($dataout['cate_photo'],$data['photo']):NULL;
								// --$deletephoto = (!empty($data['photo']))?array_diff($dataout['cate_photo'],$data['photo']):'';
								// $this->myclass->indulieu($deletephoto);
								// die();
								// $filenamesave=json_encode($data['photo']);
								// $this->myclass->indulieu($deletephoto);
								// $this->myclass->indulieu($deletephoto);
								// $data['photo']=$filenamesave;//Convert Mảng Photo thành JSON để lưu

								// $this->myclass->indulieu($data['photo']);
								//XÓA FILE ĐÃ XÓA VÀ LƯU DỮ LIỆU MỚI
								//--- if (!empty($deletephoto)){
								// 	foreach ($deletephoto as $key => $set) { // Xóa File đã hủy ở Form
								// 		$this->DeletePhotoFile($this->DirPhoto.$set);
								// 	}
								// }
								// die();
														// if (!empty($_FILES['photo']['name'])) { //Hình mới được cập nhật

														// 	// echo "new photo file";die();
														// 	$config['upload_path'] = $this->DirPhoto;
											   //      $config['allowed_types'] = 'jpg|jpeg|png|gif';
											   //      // $config['file_name'] = $_FILES['photo']['name'];
											   //      $config['file_name'] = random_string('alnum',6)."-".$_FILES['photo']['name'];
											   //      $this->load->library('upload', $config);
											   //      $this->upload->initialize($config);
											   //      if ($this->upload->do_upload('photo')) {
											   //        $uploadData = $this->upload->data();
											   //        $data["photo"] = $uploadData['file_name'];

										    //       }
										    //       //Xóa hình cũ
										    //       // Cách 1:
											   //   //      $filePath=$this->DirPhoto.$dataout['cate_photo'];
														// 		// if (file_exists($filePath)) 
														// 		// {
													 //   //      @unlink($filePath);
														//   //   }	
													 //    // Cách 2:
													 //    $this->DeletePhotoFile($this->DirPhoto.$dataout['cate_photo']);
														// }
														// else //khi File Upload rỗng HOẶC file hình bị click = btn DELETE
														// {
														// 	//Xóa hình cũ
														// 	$data["photo"]='';
														// 	$this->DeletePhotoFile($this->DirPhoto.$dataout['cate_photo']);
														// }							
														// // $this->go(!empty($data['btn']['_Submit']));
							}
							else{ //File Upload rỗng
								
								// Nếu xóa file cũ 
								// 	thì cập nhật file ảnh cũ chưa xóa vào mảng Photo

							}
							$Photo_bandau=$dataout['cate_photo'];
							$Photo_update=$oldfile;
							$photo_xoa=array();
							if (empty($Photo_update))	{// nếu Update rỗng
								$photo_xoa=$Photo_bandau;// Photo xóa là photo ban đầu
							}
							else{// nếu Update không rỗng
								foreach ($Photo_bandau as $key => $set) {
									
									if(!in_array($set, $Photo_update)){
										$photo_xoa[]=$set;
									}
									
								}
							}
							// echo "Photo đã xóa";
							// $this->myclass->indulieu($photo_xoa);
							//XÓA FILE TRONG THƯ MỤC
							if(!empty($photo_xoa)){
								foreach ($photo_xoa as $key => $set) {
									$filePath=$this->DirPhoto.$set;
										if (file_exists($filePath)) 
										{
							        @unlink($filePath);
								    }	
								}
								
							}

							if (!empty($oldfile)) {//Trộn Mảng Photo cũ với Mảng Photo mới
									foreach ($oldfile as $key => $set) {
										$filenamesave[]=$set;
									}
								}

							$data['photo']=json_encode($filenamesave);
							unset($data['cate_photo_old']);
							$this->cate->Update($id,$data);//Save data
							redirect(base_url($this->currentControl.'index'),'refresh');		

						}
						else{ //Click btn Cancel
							redirect(base_url($this->currentControl.'index'),'refresh');		
						}

						
					}	
	    }
	}
	// public function edit($id) //----Version 1
	// {
	// 	$dataout=$this->cate->getOne_byid($id);

	// 	// $formselect=$this->myhtml->selectStatusActive('active',$dataout['a_active']);
	// 	// $dataout['active']=$formselect;
	// 	// var_dump($formselect);
	// 	// die();
	// 	$data=array(
	// 		'info'=>array(
	// 			'title'=>$this->funcName.' Management',
	// 			'page'=>$this->funcName,
	// 			'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
	// 			'control'=>$this->currentControl,
	// 			'DirPhoto'=>$this->DirPhoto,
	// 			),
	// 		'temp'=>$this->viewPath.'edit.php',
	// 		'data'=>$dataout,
	// 		);
		
	// 		$this->load->library('form_validation');
	// 	 	$this->form_validation->set_rules('name', 'Name', 'trim|required');
	// 	 	$this->form_validation->set_rules('description', 'Description', 'trim|required');
	// 	 	// $this->form_validation->set_rules('content', 'Content', 'trim|required');
	
	// 		if ($this->form_validation->run() == FALSE)
	//     {
	//     	$datain=$this->input->post();
	// 			$this->go(!empty($datain['btn']['_Cancel']));
	//       $this->load->view($this->viewLayout,$data);
	//     }
	//     else
	//     {
	//         $data=$this->input->post();
	//         // print_r($data);die();
	// 				if(!empty($data['btn'])){ //Nút Save hoặc nút Cancel đc click
						
	// 					if(!empty($data['btn']['_Submit']))//Save click
	// 					{
	// 						array_pop($data); //Xóa phần tử $data['btn']
	// 						if (!empty($_FILES['photo']['name'])) { //Hình mới được cập nhật
	// 							// echo "new photo file";die();
	// 							$config['upload_path'] = $this->DirPhoto;
	// 			        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	// 			        // $config['file_name'] = $_FILES['photo']['name'];
	// 			        $config['file_name'] = random_string('alnum',6)."-".$_FILES['photo']['name'];
	// 			        $this->load->library('upload', $config);
	// 			        $this->upload->initialize($config);
	// 			        if ($this->upload->do_upload('photo')) {
	// 			          $uploadData = $this->upload->data();
	// 			          $data["photo"] = $uploadData['file_name'];

	// 		          }
	// 		          //Xóa hình cũ
	// 		          // Cách 1:
	// 			     //      $filePath=$this->DirPhoto.$dataout['cate_photo'];
	// 								// if (file_exists($filePath)) 
	// 								// {
	// 					   //      @unlink($filePath);
	// 						  //   }	
	// 					    // Cách 2:
	// 					    $this->DeletePhotoFile($this->DirPhoto.$dataout['cate_photo']);
	// 						}
	// 						else //khi File Upload rỗng HOẶC file hình bị click = btn DELETE
	// 						{
	// 							//Xóa hình cũ
	// 							$data["photo"]='';
	// 							$this->DeletePhotoFile($this->DirPhoto.$dataout['cate_photo']);
	// 						}							
	// 						// $this->go(!empty($data['btn']['_Submit']));
	// 						$this->cate->Update($id,$data);//Save data
	// 						redirect(base_url($this->currentControl.'index'),'refresh');		

	// 					}
	// 					else{ //Click btn Cancel
	// 						redirect(base_url($this->currentControl.'index'),'refresh');		
	// 					}

						
	// 				}	
	//     }
	// }
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
	// // ---------------AJAX Process File

	// public function upload_file()
	// {

	// 	// $output_dir = $this->DirPhoto;
	// 	$output_dir = "uploads/";
	// 	// echo $output_dir;die();

	// 	if(isset($_FILES["myfile"]))
	// 	{
	// 		$ret = array();
			
	// 	//	This is for custom errors;	
	// 		// $custom_error= array();
	// 		// $custom_error['jquery-upload-file-error']="File already exists";
	// 		// echo json_encode($custom_error);
	// 		// die();
		
	// 		$error =$_FILES["myfile"]["error"];
	// 		//You need to handle  both cases
	// 		//If Any browser does not support serializing of multiple files using FormData() 
	// 		if(!is_array($_FILES["myfile"]["name"])) //single file
	// 		{
	// 	 	 	$fileName = $_FILES["myfile"]["name"];
	// 	 	 	// $fileName = random_string('alnum',6)."-".$_FILES["myfile"]["name"];
	// 	 	 	$this->photo->insert_file($fileName);
	// 	 	 	// $this->photo->insert_file($fileName,'testSessionID');
	// 	 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
	// 	    	$ret[]= $fileName;
	// 		}
	// 		else  //Multiple files, file[]
	// 		{
	// 		  $fileCount = count($_FILES["myfile"]["name"]);
	// 		  for($i=0; $i < $fileCount; $i++)
	// 		  {
	// 		  	$fileName = $_FILES["myfile"]["name"][$i];
	// 		  	$this->photo->insert_file($fileName);
	// 		  	// $this->photo->insert_file($fileName,'testSessionID');
	// 				move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
	// 		  	$ret[]= $fileName;
	// 		  }
			
	// 		}
	// 	    echo json_encode($ret);
	// 	 }
		
	// }

	// public function add_load_file()
	// {
	// 	// $dir=$this->DirPhoto;
	// 	$dir=base_url().$this->DirPhoto;

	// 	$ret= array();

	// 	// $sessionId='testSessionID';
	// 	// $files=$this->photo->get_files_sessID($sessionId);
	// 	// $custom_error= array();
	// 		// $custom_error['jquery-upload-file-error']="File already exists";
	// 		// echo json_encode($custom_error);
	// 		// die();
	// 	foreach($files as $file)
	// 	{
	// 		$filePath=$dir.$file->filename;
	// 		// $filePath=$dir."/".$file->filename;
	// 		$details = array();
	// 		$details['name']=$file->filename;
	// 		$details['path']=$filePath;
	// 		$details['size']=0;
	// 		// $details['size']=filesize($filePath);
	// 		$ret[] = $details;
	// 	}
	// 	echo json_encode($ret);
		
	// }






}

/* End of file Category.php */
/* Location: ./application/controllers/admin/service/Category.php */