<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotionphoto extends CI_Controller {
	function __construct()
	{
		parent::__construct();   

		$this->load->helper('string');
		
		// $this->load->model('article_model');
    $this->load->model('Promotionfiles_model');

		$this->load->library('Myhtml');
		
		$this->funcName="Promotion photo";
		$this->breadcrumb=array(
			array('name'=>'Home','link'=>'#','class'=>'','icon'=>'fa fa-home'),
			array('name'=>'Discount','link'=>'#','class'=>'','icon'=>''),
			array('name'=>$this->funcName,'link'=>'#','class'=>'active','icon'=>''),
			);
		$this->viewLayout='backend/default/layout/layout.php';
		$this->viewPath='backend/default/discount/promotionphoto/';
		$this->currentControl='admin/discount/promotionphoto/';
		$this->DirPhoto='upload/promotion/';
		// $this->DirPhoto='upload/promotion/';
	}

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
	public function upload_file()
	{
		// $output_dir = $this->DirPhoto;
		$output_dir = "upload/";
		$this->load->model('Promotionfiles_model');

		if(isset($_FILES["myfile"]))
		{
			$ret = array();
			
		//	This is for custom errors;	
			// $custom_error= array();
			// $custom_error['jquery-upload-file-error']="File already exists";
			// echo json_encode($custom_error);
			// die();
		
			$error =$_FILES["myfile"]["error"];
			// var_dump($error);die();
			//You need to handle  both cases
			//If Any browser does not support serializing of multiple files using FormData() 
			if(!is_array($_FILES["myfile"]["name"])) //single file
			{
		 	 	$fileName = $_FILES["myfile"]["name"];
		 	 	// $fileName = random_string('alnum',6)."-".$_FILES["myfile"]["name"];
		 	 	$this->promotionfiles_model->insert_file($fileName);
		 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
		    	$ret[]= $fileName;
			}
			else  //Multiple files, file[]
			{
			  $fileCount = count($_FILES["myfile"]["name"]);
			  for($i=0; $i < $fileCount; $i++)
			  {
			  	$fileName = $_FILES["myfile"]["name"][$i];
			  	$this->promotionfiles_model->insert_file($fileName);
					move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
			  	$ret[]= $fileName;
			  }
			
			}
		    echo json_encode($ret);
		 }
		
	}
	
	public function load_file1()
	{
		$dir=base_url().$this->DirPhoto;
		// $dir=base_url()."uploads";

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

		$this->load->model('Promotionfiles_model');
		$files=$this->promotionfiles_model->get_files();
		foreach($files as $file)
		// foreach($files as $file)
		{
			// if($file == "." || $file == "..")
				// continue;
			$filePath=$dir."/".$file->filename;
			$details = array();
			$details['name']=$file->filename;
			$details['path']=$filePath;
			$details['size']=filesize($this->DirPhoto.$file->filename);
			// $details['size']=0;
			// $details['size']=filesize($filePath);
			$ret[] = $details;
		}
		echo json_encode($ret);
		
	}
	public function delete_file1()
	{
		$output_dir = $this->DirPhoto;
		// $output_dir = "./uploads/";
		// $output_dir = base_url()."uploads/";

		
		if(isset($_POST["op"]) && $_POST["op"] == "delete" && isset($_POST['name']))
		{
			$fileName =$_POST['name'];
			$this->load->model('Promotionfiles_model');
			$this->promotionfiles_model->delete_file_byFilename($fileName);
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
	

}

/* End of file Promotionphoto.php */
/* Location: ./application/controllers/admin/discount/Promotionphoto.php */