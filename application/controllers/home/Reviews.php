<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Reviews extends CI_Controller {

    public $page='trangchu';
    
    function __construct() {
        parent::__construct();        
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('frontend');
        
        $this->layout=$this->frontend->layout();
    }

    public function index() {
    	$data=array(
        'seo'=> array(          
            'breadcrumb_title'=>'Reviews'
            // ,'breadcrumb_title_en'=>'Home'
            ,'page_active'=>$this->page

          // "title"=>"Làm lại từ đâu? Làm lại từ đầu", //Tiêu đề trang
          // "description"=>"My description", //mô tả trang
          // "keywords"=>"My keywords", //Từ khóa trang
        ) 
        ,'temp'=>"frontend/theme01/reviews.php"//File Chứa nội dung hiển thị;
        ,'popup'=>0
        // // 'banner'=>1,
        ,'layout'=>$this->layout     
        // ,'data'=>$data
      );
      // echo $_SESSION['lang'];
   	   $this->load->view("frontend/theme01/layout/layout",$data);
    }

}
/* End of file Reviews.php */
/* Location: ./application/controllers/home/Reviews.php */