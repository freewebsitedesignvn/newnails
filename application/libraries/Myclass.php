<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Myclass {
    private $ci;
    public function __construct(){
        $this->ci=& get_instance();
        $this->ci->load->helper(array('form', 'url'));
        $this->ci->load->library(array('session'));
    }
    //Chuyển đổi có dấu thành không dấu
    public function khongdau($str){
        if(!$str) return false;
        $utf8 = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);
        return $str;
    }

    //In Dữ liệu xuất
    public function indulieu($data){        
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    //In định dạng Giá tiền kèm đơn vị
    public function Price_Unit($price,$unit=""){     
        if($price>0){
          if (!empty($unit)) {
            $result=number_format($price,0,'.',',').' đ / '.$unit; 
          }
          else
            $result=number_format($price,0,'.',',').' đ'; 
        }
        else
          $result="Liên hệ 0989 760 702";          
        return $result;
    }
    //Hiển thị hình ảnh
    public function photo($path,$photo,$size="230x250",$bg="33b00a",$color="ffffff"){     
        if(!empty($photo))
          echo $path.$photo;
        else
          echo "https://dummyimage.com/".$size."/".$bg."/".$color.".png&text=No Photo";         
        // return $result;
    }
    //Hiển thị hình ảnh đại diện youtube
    public function photoyt($idVideoYT){     
        // if(!empty($photo))
        //   echo $path.$photo;
        // else
          echo "http://img.youtube.com/vi/".$idVideoYT."/0.jpg";         
        // return $result;
    }
    //Mã hóa mật khẩu
    public function mahoamatkhau($pass,$user){
        $result=md5($pass.sha1($user.md5($pass.$user)));
        return $result;
    }
    //Kiểm tra tình trạng Login
    public function chklogin(){
        $this->ci->load->library('session');
        if (!$this->session->userdata("@dm1n"))
            go("login");
    }
    //thiết lập Login
    public function logout(){//------------------OK
//        echo LOGINED;
        session_destroy();
         redirect(site_url("bqt-cp/dang-nhap"));
//        else
//            redirect("bqt/index");
    }//thiết lập session login
    //Kiểm tra tình trạng Login
    public function logined(){//------------------OK
//        echo LOGINED;
        if (!isset($_SESSION['@dm1n']))
            redirect(site_url("bqt-cp/dang-nhap"));
//        else
//            redirect("bqt/index");
    }//thiết lập session login
    public function set_log($data){//------------------OK
//        echo LOGINED;

        if (empty($data))
            redirect(site_url("bqt-cp/dang-nhap"));
       else
       {
           $_SESSION['@dm1n']=$data['user'];
           $_SESSION['group']=$data['group'];
           // echo $_SESSION['group'];
       }
//            redirect("bqt/index");

    }
    //chuyển đổi dạng asdf-sasd-sa
    public function slug($str){
        $str=str_replace(' ','-',strtolower($this->khongdau($str)));
        $temp = NULL;
        for ($i=10;$i>=1;$i--)
            $temp[]=str_repeat('-',$i);
        $str=str_replace($temp,'-',$str);
        $str=preg_replace('/[^a-z0-9-]+/i','',$str);
        if(substr($str,-1)=='-') $str=substr($str,0,-1);
        return $str;
    }
    function word_random($length=10,$phuctap=true) {
        ($phuctap)?$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789":$chars = "0123456789";
        $size = strlen( $chars );
        $str=null;
        for( $i = 0; $i < $length; $i++ ) {
            $str .= $chars[ rand( 0, $size - 1 ) ];
        }
        return $str;
    }
    //Giờ Việt nam
    public function timetoVN($value){
        //vn : UP3; -3
        //Đức: UM1
        $timezone = 'UP3';
        $daylight_saving = TRUE;
        $tg=gmt_to_local($value, $timezone, $daylight_saving);
        $tgshow=unix_to_human($tg,true,'us');
        return $tgshow;
    }
    //Ngày hiện tại Ngày-tháng-năm
    public function datenow(){
        //vn : UP3; -3
        //Đức: UM1
        $date=unix_to_human(gmt_to_local(time(), 'UP3',TRUE), TRUE);
        return $date;
    }
    //Giờ Đức
    public function timetoGER($value){
        //vn : UP4; -3
        //Đức: UM1
        $timezone = 'UM1';
        $daylight_saving = TRUE;
        $tg=gmt_to_local($value, $timezone, $daylight_saving);
        $tgshow=unix_to_human($tg,true,'us');
        return $tgshow;
    }
    //Hiển thị thời gian dạng số về định dạng giờ VN
    public function FormatTimeVN($value){
        // $datestring = "%d/%m/%Y - %h:%i:%s %a";
        // return mdate($datestring, $value);
        return nice_date($value, 'd-m-Y h:i:s a');
    }
    //Giờ Đức
    //Hiển thị thời gian dạng số về định dạng ngày VN
    public function FormatDateVN($value){
        // $datestring = "%d/%m/%Y";
        return nice_date($value, 'd/m/Y');
    }
    //Giờ Đức
    public function go($action="index"){
        header("location:".$action);
    }
    public function upload($path,$namefile){
        $a_Data = array();
        $b_Check = false;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if($_FILES["file"][$namefile]){ # Tạo thư mục
//                $album_dir = 'public/uploads/images/';
                $album_dir = $path;
                if(!is_dir($album_dir)){
                    mkdir($album_dir,0777,TRUE);

//                    create_dir($album_dir);
                } #upload.
                $config['upload_path']	= $album_dir;
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                $config['max_size'] = 5120;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $image = $this->upload->do_upload("file");
                $image_data = $this->upload->data();
                if($image) { #upload execute.
                    $info['source'] =	$config['upload_path'].$image_data['file_name'];
                    $b_Check = true; $this->session->set_userdata('album', $image_data);
                    redirect(base_url('file/show'));
                }
                else {
                    $b_Check = false;
                }
            }
        }
    }

    /**
     *
     * Chuyển đổi chuỗi kí tự thành dạng slug dùng cho việc tạo friendly url.
     *
     * @access    public
     * @param    string
     * @return    string
     */

    function urlfriend($string) {
        $search = array (
            '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
            '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
            '#(ì|í|ị|ỉ|ĩ)#',
            '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
            '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
            '#(ỳ|ý|ỵ|ỷ|ỹ)#',
            '#(đ)#',
            '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
            '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
            '#(Ì|Í|Ị|Ỉ|Ĩ)#',
            '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
            '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
            '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
            '#(Đ)#',
            "/[^a-zA-Z0-9\-\_]/",
        ) ;
        $replace = array (
            'a',
            'e',
            'i',
            'o',
            'u',
            'y',
            'd',
            'A',
            'E',
            'I',
            'O',
            'U',
            'Y',
            'D',
            '-',
        ) ;
        $string = preg_replace($search, $replace, $string);
        $string = preg_replace('/(-)+/', '-', $string);
        $string = strtolower($string);
        return $string;
    }

}
