<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discount extends CI_Controller {
	function __construct()
	{
		parent::__construct();   
		$this->load->helper('string');
		$this->load->library('upload');
		$this->load->model('Discount_type_model','type');
		$this->load->model('Discount_model','discount');
		// $this->load->model('Photo_cateser_model','photo');
		$this->load->library('Myhtml');

		$this->funcName="Discount ";
		$this->breadcrumb=array(
			array('name'=>'Home','link'=>'#','class'=>'','icon'=>'fa fa-home'),
			array('name'=>'Discount','link'=>'#','class'=>'','icon'=>''),
			array('name'=>$this->funcName,'link'=>'#','class'=>'active','icon'=>''),
			);

		
		$this->viewLayout='backend/default/layout/layout.php';
		$this->viewPath='backend/default/discount/discount/';
		$this->currentControl='admin/discount/discount/';
		$this->DirPhoto='upload/promotion/';

	}
	public function index()
	{
		// echo "string";die();
		$list=$this->type->getList();
		// $dataout=(!empty($list))?$this->myhtml->DeQuyCate(0,$list,'','dropdown'):'';
		// $this->show($list);die();
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
	
	public function listpromotion($type)
	{
		// echo "string";die();
		$list=$this->discount->getList($type);
		// $dataout=(!empty($list))?$this->myhtml->DeQuyCate(0,$list,'','dropdown'):'';
		// $this->show($list);die();
		$dataout=$list;
		$data=array(
			'info'=>array(
				'title'=>$this->funcName.' Management',
				'page'=>'Promotion',
				// 'page'=>$this->funcName,
				'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
				'control'=>$this->currentControl,
				'DirPhoto'=>$this->DirPhoto,
				),
			'temp'=>$this->viewPath.'listpromotion.php',
			'data'=>$dataout,
			);
		$this->load->view($this->viewLayout,$data);

	}

	public function listpromotionadd($type)
	{
		$dataout=array();
		$this->load->model('Promotionfiles_model','prophoto');
		// $this->myclass->indulieu($this->cate->getList());die();
		// $datacate=$this->type->getList();
		// $this->myclass->indulieu($datacate);
		// $dataSelect=$this->myhtml->dropdown('--Choose a Category--',$datacate);
		// $dataSelect=(!empty($datacate))?$this->myhtml->dropdown_serv('',$this->myhtml->DeQuyCate(0,$datacate,'','dropdown')):NULL;
		// $formselect=$this->cate->dropdownCate(0);
		// $this->myclass->indulieu($dataSelect);die();
		// $formselect=$this->myhtml->selectStatusActive('active',1);
		// $dataout['active']=$formselect;
		$data=array(
			'info'=>array(
				'title'=>$this->funcName.' Management',
				'page'=>'Promotion',
				// 'page'=>$this->funcName,
				'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
				'control'=>$this->currentControl,
				'DirPhoto'=>$this->DirPhoto,
				),
			'selectPhoto'=>$this->prophoto->getList(),
			'temp'=>$this->viewPath.'addpromotion.php',
			// 'data'=>$dataout,
			);
		// $config = array(
  //       'upload_path'   => $this->DirPhoto,
  //       'allowed_types' => 'jpg|jpeg|png|gif',
  //       'overwrite'     => 1,
  //   );
		$this->load->library('form_validation');
	 	// $this->form_validation->set_rules('name', 'Name', 'trim|required');
	 	// $this->form_validation->set_rules('description', 'Description', 'trim|required');
	 	// $this->form_validation->set_rules('parent_id', 'In Category', 'required');
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
						// $this->show($data);
						// if (!empty($_FILES['photo']['name'][0]))
						// {
						// 		$files = $_FILES;
						// 		$TotalFile = count($_FILES['photo']['name']);
						// 		$filenamesave=array();
						// 		for ($i=0; $i < $TotalFile ; $i++) { 
						// 				$_FILES['photo']['name'] = random_string('alnum',6)."-".$files['photo']['name'][$i];
						// 				$filenamesave[]=$_FILES['photo']['name'];
						// 				$_FILES['photo']['type'] = $files['photo']['type'][$i];
						// 				$_FILES['photo']['tmp_name'] = $files['photo']['tmp_name'][$i];
						// 				$_FILES['photo']['error'] = $files['photo']['error'][$i];
						// 				$_FILES['photo']['size'] = $files['photo']['size'][$i];
						// 				$this->upload->initialize($config);
						// 				if(!($this->upload->do_upload('photo')) || $files['photo']['error'][$i] !=0)
				  //           {
				  //             	print_r($this->upload->display_errors());
				           
				  //           } //End IF Upload file
						// 		}	//End For
								
						// 		$filenamesave=json_encode($filenamesave);
						// 		$data['photo']=$filenamesave;
								
						// }
						// $this->type->Add($data);
						// redirect(base_url($this->currentControl.'index'),'refresh');
					}// End Click Save
				} // End Click btn SAVE or Cancel	
    }//End form_validation
	}
	public function edit($id) //Version2
	{
		$dataout=$this->type->getOne_byid($id);
		// $this->show($dataout);die();
		// $formselect=$this->myhtml->selectStatusActive('active',$dataout['a_active']);
		// $dataout['active']=$formselect;
		// var_dump($formselect);
		// die();
		
		// $listPhoto=json_decode($dataout['cate_photo']);
		
		// $dataout['cate_photo']=$listPhoto;
		// $datacate=$this->type->getList();
		// $dataSelect=$this->myhtml->dropdown('Root',$this->myhtml->DeQuyCate(0,$datacate,'','dropdown'));
		$data=array(
			'info'=>array(
				'title'=>$this->funcName.' Management',
				'page'=>$this->funcName,
				'breadcrumb'=>$this->myhtml->breadcrumb($this->breadcrumb),
				'control'=>$this->currentControl,
				// 'DirPhoto'=>$this->DirPhoto,
				),
			'temp'=>$this->viewPath.'edit.php',
			'selectCate'=>$dataSelect,
			'data'=>$dataout,
			);
			
			// $config = array(
   //      'upload_path'   => $this->DirPhoto,
   //      'allowed_types' => 'jpg|jpeg|png|gif',
   //      'overwrite'     => 1,
   // 		);

			$this->load->library('form_validation');
		 	$this->form_validation->set_rules('name', 'Name', 'trim|required');
		 	// $this->form_validation->set_rules('description', 'Description', 'trim|required');
		 
	
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

							$filenamesave=array();
							$oldfile=$this->input->post('photo');
							// $this->myclass->indulieu($oldfile);
							array_pop($data); //Xóa phần tử $data['btn']
									// if (!empty($_FILES['photo']['name'][0])) //File Upload rỗng
									// {
									// 	$files = $_FILES;

									// 	$TotalFile = count($_FILES['photo']['name']);
									
									// 	for ($i=0; $i < $TotalFile ; $i++) { 
									// 			$_FILES['photo']['name'] = random_string('alnum',6)."-".$files['photo']['name'][$i];
									// 			$filenamesave[]=$_FILES['photo']['name'];
									// 			// $this->myclass->indulieu($filenamesave);
									// 			$_FILES['photo']['type'] = $files['photo']['type'][$i];
									// 			$_FILES['photo']['tmp_name'] = $files['photo']['tmp_name'][$i];
									// 			$_FILES['photo']['error'] = $files['photo']['error'][$i];
									// 			$_FILES['photo']['size'] = $files['photo']['size'][$i];
									// 			$this->upload->initialize($config);
									// 			if(!($this->upload->do_upload('photo')) || $files['photo']['error'][$i] !=0)//Upload file vào thư mục
						   //          {
						   //            	print_r($this->upload->display_errors());
						           
						   //          } //End IF
									// 	}	//End For
									
									// }
									// else{ //File Upload rỗng
										
									// 	// Nếu xóa file cũ 
									// 	// 	thì cập nhật file ảnh cũ chưa xóa vào mảng Photo

									// }
									// $Photo_bandau=$dataout['cate_photo'];
									// $Photo_update=$oldfile;
									// $photo_xoa=array();
									// if (empty($Photo_update))	{// nếu Update rỗng
									// 	$photo_xoa=$Photo_bandau;// Photo xóa là photo ban đầu
									// }
									// else{// nếu Update không rỗng
									// 	foreach ($Photo_bandau as $key => $set) {
											
									// 		if(!in_array($set, $Photo_update)){
									// 			$photo_xoa[]=$set;
									// 		}
											
									// 	}
									// }
						
									// //XÓA FILE TRONG THƯ MỤC
									// if(!empty($photo_xoa)){
									// 	foreach ($photo_xoa as $key => $set) {
									// 		$filePath=$this->DirPhoto.$set;
									// 			if (file_exists($filePath)) 
									// 			{
									//         @unlink($filePath);
									// 	    }	
									// 	}
										
									// }

									// if (!empty($oldfile)) {//Trộn Mảng Photo cũ với Mảng Photo mới
									// 		foreach ($oldfile as $key => $set) {
									// 			$filenamesave[]=$set;
									// 		}
									// 	}

									// $data['photo']=json_encode($filenamesave);
									// unset($data['cate_photo_old']);
							// $this->myclass->indulieu($data);
							// die();
							$this->serv->Update($id,$data);//Save data
							// die();
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
		$set=$this->type->Delete($id,$this->DirPhoto);
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
	
	public function show($data)
	{
		return $this->myclass->indulieu($data);
	}





}
/* End of file Discount.php */
/* Location: ./application/controllers/admin/discount/Discount.php */