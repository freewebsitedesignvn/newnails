<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends CI_Controller {

    public $page='trangchu';
    
    function __construct() {
        parent::__construct();        
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('frontend');
        
        $this->layout=$this->frontend->layout();
        $this->load->model('Article_model');
    }

    public function index() {

    	$list=$this->Article_model->getList(2,0,1);
    	// $this->show($list);
    	$data=array(
        'seo'=> array(          
            'breadcrumb_title'=>'Jobs'
            // ,'breadcrumb_title_en'=>'Home'
            ,'page_active'=>$this->page

          // "title"=>"Làm lại từ đâu? Làm lại từ đầu", //Tiêu đề trang
          // "description"=>"My description", //mô tả trang
          // "keywords"=>"My keywords", //Từ khóa trang
        ) 
        ,'temp'=>"frontend/theme01/jobs.php"//File Chứa nội dung hiển thị;
        ,'popup'=>0
        // // 'banner'=>1,
        ,'layout'=>$this->layout     
        ,'data'=>$list
      );
      // echo $_SESSION['lang'];
   	   $this->load->view("frontend/theme01/layout/layout",$data);
    }
    public function show($data)
	{
		return $this->myclass->indulieu($data);
	}
}

/* End of file Jobs.php */
/* Location: ./application/controllers/home/Jobs.php */