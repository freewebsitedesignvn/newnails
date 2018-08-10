<?php
class Promotionfiles_model extends CI_Model {
   public function __construct(){
        parent::__construct();
//        $ci &=get_instance();
        $this->load->database();
        $this->tbl='sr_photo_promotion';
    }
    // -----------------------------------------------------------------------------
   function Add($datain)//---------------OK
   {
      // echo "check_login model";
      // var_dump($data);
      // die();
      $data=array();
      foreach ($datain as $key => $value) {
         $data['photo_promo_'.$key]=$value;
      }
      // $data['catea_id']=$cate;
      // var_dump($data);
      // die();
      $this->db->insert($this->tbl, $data);  
      // print $this->db->last_query(); //In lệnh SQL
   }
   function getList($limit=0,$detail=0,$sort='ASC')//---------------OK
   {
      // echo "check_login model";
      // var_dump($data);
      // $thistbl=$this->tbl;
      if ($detail == 1)
         $this->db->select('*');
      else
         $this->db->select('
            photo_promo_id
            ,photo_promo_name
            ,photo_promo_type_id
            ,photo_promo_filename
            ');         
      $this->db->from($this->tbl);
      // ->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id');
      
      if ($sort=='ASC')
      {        
         // $this->db->order_by('a_order', $sort);
         $this->db->order_by('photo_promo_id', $sort);
      }
      else
      {
         // $this->db->order_by('a_order', 'DESC');
         $this->db->order_by('photo_promo_id', 'DESC');
      }
      
      if ($limit>0)
         $this->db->limit($limit);
      $result=$this->db->get()->result_array();
      if(isset($result) && !empty($result))
         return $result;
      // print $this->db->last_query(); //In lệnh SQL
   }

   // function getList_byParent($parent,$limit=0,$detail=0,$sort='DESC')//---------------OK
   // {
   //    // echo "check_login model";
   //    // var_dump($data);
   //    // $thistbl=$this->tbl;
   //    if ($detail == 1)
   //       $this->db->select('*');
   //    else
   //       $this->db->select('
   //          photo_promo_id
   //          ,photo_promo_type_id
   //          ,photo_promo_filename
   //          ');         
   //    $this->db->from($this->tbl);
   //    // ->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id');
   //    $this->db->where('cate_parent_id',$parent);
   //    if ($sort=='ASC')
   //    {        
   //       // $this->db->order_by('a_order', $sort);
   //       $this->db->order_by('cate_id', 'ASC');
   //    }
   //    else
   //    {
   //       // $this->db->order_by('a_order', 'DESC');
   //       $this->db->order_by('cate_id', 'DESC');
   //    }
      
   //    if ($limit>0)
   //       $this->db->limit($limit);
   //    $result=$this->db->get()->result_array();
   //    if(isset($result) && !empty($result))
   //       return $result;
   //    // print $this->db->last_query(); //In lệnh SQL
   // }
   function getOne_byid($aId)//---------------OK
   {
      // echo "check_login model";
      // var_dump($data);
      // $thistbl=$this->tbl;
      // if ($detail == 1)
         $this->db->select('*');
      // else
      //    $this->db->select('
      //       cate_id
      //       ,cate_name
      //       ,cate_description
      //       ,cate_photo
      //       ,cate_parent_id
      //       ');         
      $this->db->from($this->tbl);
      // ->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id');
      if (is_array($aId))
         $this->db->where_in($this->tbl.'.photo_promo_id', $aId);
      else        
         $this->db->where_in($this->tbl.'.photo_promo_id', $aId);
      // $this->db->where('a_active','1');
      // ->get()->row_array();
      // if ($sort=='ASC')
      // {        
      //    // $this->db->order_by('a_order', $sort);
      //    $this->db->order_by('cate_id', $sort);
      // }
      // else
      // {
      //    // $this->db->order_by('a_order', 'DESC');
      //    $this->db->order_by('cate_id', 'DESC');
      // }
      
      // if ($limit>0)
      //    $this->db->limit($limit);
      $result=$this->db->get()->row_array();
      if(isset($result) && !empty($result))
         return $result;
      // print $this->db->last_query(); //In lệnh SQL
   }
   function Delete($id)//---------------OK
   // function Delete($id,$path)//---------------OK
   {
      // $get=$this->getOne_byid($id);
      // // Tìm các Cate con của cate CHA xóa và thay parent_id bằng id của Cate ÔNG 
      // $subcate=$this->getList_byParent($id);
      // // print_r($subcate);
      // if (!empty($subcate)){
      //    foreach ($subcate as $key => $val) {
      //       $datasub=array();
      //       $datasub['cate_parent_id']=$get['cate_parent_id'];
      //       $this->db->where('cate_id', $val['cate_id']);
      //       $this->db->update($this->tbl, $datasub);
      //    }
      // }
      // // die();
    
      // // Xóa File trong Thư mục
      // $listPhoto=json_decode($get['cate_photo']);
      // if(!empty($listPhoto)){
      //    foreach ($listPhoto as $key => $set) {
      //       $filePath=$path.$set;
      //          if (file_exists($filePath)) 
      //          {
      //         @unlink($filePath);
      //        } 
      //    }
         
      // }

      // $filePath=$path.$get['cate_photo'];
      // if (file_exists($filePath)) 
      //    {
  //       @unlink($filePath);
    //    } 
      $this->db->where('cate_id', $id);
      $this->db->delete($this->tbl);
      // print $this->db->last_query(); //In lệnh SQL
   }
   function Update($id,$datain)//---------------OK
   {
      $data=array();
      foreach ($datain as $key => $value) {
         $data['photo_promo'.$key]=$value;
      }
      // print_r($data);
      // $data['catea_id']=$cate;
      $this->db->where('photo_promo_id', $id);
      $this->db->update($this->tbl, $data);
      // print $this->db->last_query(); //In lệnh SQL
   }
//    public function insert_file($filename, $title='')
//    {
//       $data = array(
//          'photo_promo_filename'     => $filename,
//          // 'title'        => $title
//       );
//       $this->db->insert($this->tbl, $data);
//       return $this->db->insert_id();
//    }

//    public function get_files()
//    {
//       return $this->db
//             // ->select('*')
//             // ->from('files')
//             ->get($this->tbl)
//             ->result();
//    }

// // public function delete_file($file_id)
// // {
// //    $file = $this->get_file($file_id);
// //    if (!$this->db->where('id', $file_id)->delete('files'))
// //    {
// //       return FALSE;
// //    }
// //    unlink('./files/' . $file->filename);  
// //    return TRUE;
// // }
// public function delete_file_byFilename($filename)
// {
//    $file = $this->get_file_byFilename($filename);
//    $this->db->where('photo_promo_filename', $file->filename)->delete($this->tbl);
//    // print $this->db->last_query(); //In lệnh SQL
//    // die();
//    // if (!$this->db->where('id', $file_id)->delete('files'))
//    // {
//    //    return FALSE;
//    // }
//    // unlink('./files/' . $file->filename);  
//    // return TRUE;
// }
 
// public function get_file($file_id)
// {
//    return $this->db->select()
//          ->from($this->tbl)
//          ->where('photo_promo_id', $file_id)
//          ->get()
//          ->row();
// } 
// public function get_file_byFilename($filename)
// {
//    return $this->db->select()
//          ->from($this->tbl)
//          ->where('photo_promo_filename', $filename)
//          ->get()
//          ->row();
// }
//    // function getList($DmaId,$limit=0,$detail=0,$sort='DESC')//---------------OK
//    public function getList()//---------------OK
//    {
//       // echo "check_login model";
//       // var_dump($data);
//       // $thistbl=$this->tbl;
//       // if ($detail == 1)
//          $this->db->select('*');
//       // else
//       //    $this->db->select('
//       //       id
//       //       ,filename
//       //       ');         
//       $this->db->from($this->tbl);
//       // ->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id');
//       // if (is_array($DmaId))
//       //    $this->db->where_in($this->tbl.'.catea_id', $DmaId);
//       // else        
//       //    $this->db->where($this->tbl.'.catea_id',$DmaId);
//       // // $this->db->where('a_active','1');
//       // // ->get()->row_array();
//       // if ($sort=='ASC')
//       // {        
//       //    // $this->db->order_by('a_order', $sort);
//       //    $this->db->order_by('a_id', $sort);
//       // }
//       // else
//       // {
//       //    // $this->db->order_by('a_order', 'DESC');
//       //    $this->db->order_by('a_id', 'DESC');
//       // }
      
//       // if ($limit>0)
//       //    $this->db->limit($limit);
//       $result=$this->db->get()->result_array();
//       if(isset($result) && !empty($result))
//          return $result;
//       // print $this->db->last_query(); //In lệnh SQL
//       // die();
//    }



}
?>