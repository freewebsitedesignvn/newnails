<?php
class Files_model extends CI_Model {
   public function __construct(){
        parent::__construct();
//        $ci &=get_instance();
        $this->load->database();
        $this->tbl='sr_article';
    }
   public function insert_file($filename, $title='')
   {
      $data = array(
         'filename'     => $filename,
         // 'title'        => $title
      );
      $this->db->insert('files', $data);
      return $this->db->insert_id();
   }

   public function get_files()
   {
      return $this->db
            // ->select('*')
            // ->from('files')
            ->get('files')
            ->result();
   }

// public function delete_file($file_id)
// {
//    $file = $this->get_file($file_id);
//    if (!$this->db->where('id', $file_id)->delete('files'))
//    {
//       return FALSE;
//    }
//    unlink('./files/' . $file->filename);  
//    return TRUE;
// }
public function delete_file_byFilename($filename)
{
   $file = $this->get_file_byFilename($filename);
   $this->db->where('filename', $file->filename)->delete('files');
   // print $this->db->last_query(); //In lệnh SQL
   // die();
   // if (!$this->db->where('id', $file_id)->delete('files'))
   // {
   //    return FALSE;
   // }
   // unlink('./files/' . $file->filename);  
   // return TRUE;
}
 
public function get_file($file_id)
{
   return $this->db->select()
         ->from('files')
         ->where('id', $file_id)
         ->get()
         ->row();
} 
public function get_file_byFilename($filename)
{
   return $this->db->select()
         ->from('files')
         ->where('filename', $filename)
         ->get()
         ->row();
}
   // function getList($DmaId,$limit=0,$detail=0,$sort='DESC')//---------------OK
   public function getList()//---------------OK
   {
      // echo "check_login model";
      // var_dump($data);
      // $thistbl=$this->tbl;
      // if ($detail == 1)
         $this->db->select('*');
      // else
      //    $this->db->select('
      //       id
      //       ,filename
      //       ');         
      $this->db->from('files');
      // ->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id');
      // if (is_array($DmaId))
      //    $this->db->where_in($this->tbl.'.catea_id', $DmaId);
      // else        
      //    $this->db->where($this->tbl.'.catea_id',$DmaId);
      // // $this->db->where('a_active','1');
      // // ->get()->row_array();
      // if ($sort=='ASC')
      // {        
      //    // $this->db->order_by('a_order', $sort);
      //    $this->db->order_by('a_id', $sort);
      // }
      // else
      // {
      //    // $this->db->order_by('a_order', 'DESC');
      //    $this->db->order_by('a_id', 'DESC');
      // }
      
      // if ($limit>0)
      //    $this->db->limit($limit);
      $result=$this->db->get()->result_array();
      if(isset($result) && !empty($result))
         return $result;
      // print $this->db->last_query(); //In lệnh SQL
      // die();
   }



}
?>