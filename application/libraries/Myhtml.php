<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Myhtml {
    private $ci;
    function __construct(){
        $this->ci=& get_instance();
        // $this->ci->load->helper(array('form', 'url'));
        // $this->ci->load->library(array('session'));
    }
    
    public function breadcrumb($data=array())
    {

    	$str='';
    	if (!empty($data)) {
    		$str.='<ol class="breadcrumb">';
    		foreach ($data as $key => $set) {
    					$str.=	"<li>";
    					$str.=	"<a href='".$set['link']."' class='".$set['class']."'>";
    					$str.="<i class='".$set['icon']."'></i>".$set['name']."</a>";
    					$str.="</li>";
    		}
    		$str.='</ol>';
    	}
    	return $str;
    }

    public function selectDropdown($data=array(),$name='',$selected='')
    {   
    	$str='';
    	if (!empty($data)) {
    		$str.= "<select name='$name'>";
    		foreach ($data as $key => $set) {
    					$str.=	"<option value=";
    					$str.=	"'".$key."' ";
    					if ($key==$selected) {
    						$str.=	"selected";
    					}
    					$str.=	">";
    					$str.=	$set;
    					$str.=	"</option>";
    					
    		}
    		$str.='</select>';
    	}
    	return $str;
    }
    public function selectStatusActive($name,$selected)
    {   
    	$select=array(
				1=>'Active',
				0=>'Disable',
			);
			$str=$this->selectDropdown($select,$name,$selected);
    	return $str;
    }
    public function UploadFile($FileFieldName)
    {   
    	// if (!empty($_FILES[$FileFieldName]['name'])) {
							// $config['upload_path'] = base_url('upload/');
							$this->ci->load->helper('string');
							// $this->load->library('image_lib');

							$config['upload_path'] = 'upload/';
			        $config['allowed_types'] = 'jpg|jpeg|png|gif';
			        $config['file_name'] = random_string('alnum',6)."-".$_FILES[$FileFieldName]['name'];

			        $this->ci->load->library('upload', $config);
			        $this->ci->upload->initialize($config);
			        // $this->upload->do_upload($FileFieldName);
			        // var_dump($this->upload->display_errors());
			        if ($this->ci->upload->do_upload($FileFieldName)) {
			          $uploadData = $this->upload->data();
			          $data["photo"] = $uploadData['file_name'];
			          // var_dump($uploadData['image_size_str']);//['width'],['height']
			          // var_dump($uploadData['image_width']);//['width'],['height']
			          $width=$uploadData['image_width'];
			          $height=$uploadData['image_height'];
			          // Resize Photo - begin
			          $config['image_library'] = 'gd2';
								// $config['source_image'] = '/path/to/image/mypic.jpg';
								$config['source_image'] = './upload/'.$data["photo"];
								$config['create_thumb'] = FALSE;//True là tạo thumb, False là Xử lý trên file gốc
								$config['maintain_ratio'] = TRUE;
								if($width > 1000){
									$config['width']= 1000;
								}
								if($width > 600){
									$config['height']= 600;
								}
								// $config['height'] = 50;

								$this->ci->load->library('image_lib', $config);

								// $this->image_lib->resize();
								// if ( ! $this->image_lib->crop())
								if ( ! $this->image_lib->resize())//Xử lý resize
								{
					        echo $this->image_lib->display_errors();
								}
								// Resize Photo - End

			          // echo "Thanh cong";//.$uploadData['upload_path']
			          // $data['active']=1;
			          // var_dump($data);
			          // $this->article_model->Add($data,$cate=3);

			          // die();
								// redirect(base_url($this->currentControl.'index'),'refresh');
			        } else{
			          $data["photo"] = '';
			        }
			      // }else{
			      //   $data["photo"] = '';
			      // }
    }
    public function DeQuyCate($parent=0,$data=NULL, $step='',$type="dropdown")
    {
    	if (isset($data) && is_array($data)) {
    		foreach ($data as $key => $val) {
	    		if ($val['cate_parent_id'] == $parent) {
	    			if ($type=='dropdown') {
	    				$this->DeQuyCate[$val['cate_id']]=$step.' '.$val['cate_name'];
	    			} else if ($type=='dropdown'){
	    				$this->DeQuyCate[$val['cate_id']]=$val['cate_name'];
	    			}
	    			$this->DeQuyCate($val['cate_id'],$data,$step.'|--- ',$type);
	    		}
	    	}	    	
    	}
    	return $this->DeQuyCate;
    }
    public function dropdown($default='',$data=NULL)
    {
    	$temp[0]=$default;
    	if (isset($data) && is_array($data)) {
    		foreach ($data as $key => $val) {
    			$temp[$key]=$val;
    		}
    	}
    	return $temp;
    }

    public function dropdown_serv($default='',$data=NULL)
    {
    	// $temp[0]=$default;
    	if (isset($data) && is_array($data)) {
    		foreach ($data as $key => $val) {
    			$temp[$key]=$val;
    		}
    	}
    	return $temp;
    }

}
