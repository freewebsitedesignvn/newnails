<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

    public $page='trangchu';
    
    function __construct() {
        parent::__construct();        
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('frontend');
        
        $this->layout=$this->frontend->layout();
        // if (!isset($_SESSION['lang']))
        //   $_SESSION['lang']='vn';   
    }

    public function index() {
   	 // if (!isset($_SESSION['lang']))
     //      $_SESSION['lang']='vn';   
      // $data= $this->frontend->home();
    	$data=array(
        'seo'=> array(          
            'breadcrumb_title'=>'Trang chủ'
            ,'breadcrumb_title_en'=>'Home'
            ,'page_active'=>$this->page

          // "title"=>"Làm lại từ đâu? Làm lại từ đầu", //Tiêu đề trang
          // "description"=>"My description", //mô tả trang
          // "keywords"=>"My keywords", //Từ khóa trang
        ) 
        ,'temp'=>"frontend/theme01/home.php"//File Chứa nội dung hiển thị;
        ,'popup'=>1
        ,'layout'=>$this->layout     
        // ,'data'=>$data
      );
      // echo $_SESSION['lang'];
   	   $this->load->view("frontend/theme01/layout/layout",$data);
   	   // $this->load->view("frontend/theme01/layout/layout");
      // $this->myclass->indulieu($_SESSION['lang']);
      // $this->myclass->showlang();
      // echo $this->myclass->Showlang('Tieng Viet','Tieng Anh');
    }

}


/* End of file index.php */
/* Location: ./application/controllers/home/index.php */