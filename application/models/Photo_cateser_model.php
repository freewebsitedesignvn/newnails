<?php
class Photo_cateser_model extends CI_Model {
   
   public function __construct(){
        parent::__construct();
//        $ci &=get_instance();
        $this->load->database();
        $this->tbl='sr_photo_cateserv';
   }

   public function insert_file($filename, $sessId='')
   {
      $data = array(
         'filename'     => $filename,
         'photo_ser_sessionid'     => $sessId,
         // 'title'        => $title
      );
      $this->db->insert($this->tbl, $data);
      return $this->db->insert_id();
   }

   public function get_files_sessID($sessID)
  {
     return $this->db->select()
           ->from('files')
           ->where('photo_ser_sessionid',$sessID)
           ->get()
           ->result();
  }

  public function delete_file($file_id)
  {
     $file = $this->get_file($file_id);
     if (!$this->db->where('id', $file_id)->delete('files'))
     {
        return FALSE;
     }
     unlink('./files/' . $file->filename);  
     return TRUE;
  }
  public function delete_file_byFilename($filename)
  {
     $file = $this->get_file_byFilename($filename);
     $this->db->where('filename', $file->filename)->delete('files');
     print $this->db->last_query(); //In lệnh SQL
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
   
}
?>
<?php


/* End of file Photo_cateser_model.php */
/* Location: ./application/models/Photo_cateser_model.php */