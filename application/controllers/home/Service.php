<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Service extends CI_Controller {

    public $page='trangchu';
    
    function __construct() {
        parent::__construct();        
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('frontend');
        
        $this->layout=$this->frontend->layout();
        // $this->load->model('Files_model');
        // $this->load->model('Article_model');
        $this->load->model('Service_cate_model','cate');
        $this->load->model('Service_model','serv');


		$this->DirPhoto='upload/cate/';
    }

    public function index() {

    	// $list=$this->Article_model->get_files();
      // $data=$this->frontend->service();
    	// $this->show($data);die();
    	$data=array(
        'seo'=> array(          
            'breadcrumb_title'=>'Service'
            // ,'breadcrumb_title_en'=>'Home'
            ,'page_active'=>$this->page

          // "title"=>"Làm lại từ đâu? Làm lại từ đầu", //Tiêu đề trang
          // "description"=>"My description", //mô tả trang
          // "keywords"=>"My keywords", //Từ khóa trang
        ) 
        ,'temp'=>"frontend/theme01/servicedemo.php"//File Chứa nội dung hiển thị;
        // ,'temp'=>"frontend/theme01/service.php"//File Chứa nội dung hiển thị;
        ,'popup'=>0
        ,'dirPhoto'=>$this->DirPhoto
        ,'layout'=>$this->layout     
        // ,'data'=>$list
      );
      // echo $_SESSION['lang'];
   	   $this->load->view("frontend/theme01/layout/layout",$data);
    }
    public function show($data)
	{
		return $this->myclass->indulieu($data);
	}
}

/* End of file Service.php */
/* Location: ./application/controllers/home/Service.php */