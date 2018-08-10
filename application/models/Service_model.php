<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model {
	public function __construct(){
        parent::__construct();
       // $ci &=get_instance();
        $this->load->database();
        $this->tbl='sr_service';
        $this->prefix='serv_';
    }

	
	// -----------------------------------------------------------------------------
	function Add($datain)//---------------OK
	{
		
		$data=array();
		foreach ($datain as $key => $value) {
			$data[$this->prefix.$key]=$value;
		}
		
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
				serv_id
				,serv_name
				,serv_pricetext
				,serv_cate_id
				,cate_name as catename
				');			
		$this->db->from($this->tbl);
		$this->db->join('sr_cate_service', 'sr_cate_service.cate_id = sr_service.serv_cate_id');
		
		if ($sort=='ASC')
		{			
			// $this->db->order_by('a_order', $sort);
			$this->db->order_by($this->prefix.'id', $sort);
		}
		else
		{
			// $this->db->order_by('a_order', 'DESC');
			$this->db->order_by($this->prefix.'id', 'DESC');
		}
		
		if ($limit>0)
			$this->db->limit($limit);
		$result=$this->db->get()->result_array();
		if(isset($result) && !empty($result))
			return $result;
		// print $this->db->last_query(); //In lệnh SQL
	}

	function getList_byParent($parent,$limit=0,$detail=0,$sort='DESC')//---------------OK
	{
		// echo "check_login model";
		// var_dump($data);
		// $thistbl=$this->tbl;
		if ($detail == 1)
			$this->db->select('*');
		else
			$this->db->select('
				serv_id
				,serv_name
				,serv_pricetext
				,serv_cate_id
				');			
		$this->db->from($this->tbl);
		// ->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id');
		$this->db->where('serv_cate_id',$parent);
		if ($sort=='ASC')
		{			
			// $this->db->order_by('a_order', $sort);
			$this->db->order_by('serv_id', 'ASC');
		}
		else
		{
			// $this->db->order_by('a_order', 'DESC');
			$this->db->order_by('serv_id', 'DESC');
		}
		
		if ($limit>0)
			$this->db->limit($limit);
		$result=$this->db->get()->result_array();
		if(isset($result) && !empty($result))
			return $result;
		// print $this->db->last_query(); //In lệnh SQL
	}
	function getOne_byid($aId)//---------------OK
	{
		// echo "check_login model";
		// var_dump($data);
		// $thistbl=$this->tbl;
		// if ($detail == 1)
			$this->db->select('*');
		// else
		// 	$this->db->select('
		// 		cate_id
		// 		,cate_name
		// 		,cate_description
		// 		,cate_photo
		// 		,cate_parent_id
		// 		');			
		$this->db->from($this->tbl);
		// ->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id');
		if (is_array($aId))
			$this->db->where_in($this->tbl.'.'.$this->prefix.'id', $aId);
		else			
			$this->db->where_in($this->tbl.'.'.$this->prefix.'id', $aId);
		$this->db->join('sr_cate_service', 'sr_cate_service.cate_id = sr_service.serv_cate_id');
		// $this->db->where('a_active','1');
		// ->get()->row_array();
		// if ($sort=='ASC')
		// {			
		// 	// $this->db->order_by('a_order', $sort);
		// 	$this->db->order_by('cate_id', $sort);
		// }
		// else
		// {
		// 	// $this->db->order_by('a_order', 'DESC');
		// 	$this->db->order_by('cate_id', 'DESC');
		// }
		
		// if ($limit>0)
		// 	$this->db->limit($limit);
		$result=$this->db->get()->row_array();
		if(isset($result) && !empty($result))
			return $result;
		// print $this->db->last_query(); //In lệnh SQL
	}
	function Delete($id)//---------------OK
	// function Delete($id,$path='')//---------------OK
	{
		// $get=$this->getOne_byid($id);
		// Tìm các Cate con của cate CHA xóa và thay parent_id bằng id của Cate ÔNG 
		// $subcate=$this->getList_byParent($id);
		// // print_r($subcate);
		// if (!empty($subcate)){
		// 	foreach ($subcate as $key => $val) {
		// 		$datasub=array();
		// 		$datasub['cate_parent_id']=$get['cate_parent_id'];
		// 		$this->db->where('cate_id', $val['cate_id']);
		// 		$this->db->update($this->tbl, $datasub);
		// 	}
		// }
		// die();
		
		// Xóa File trong Thư mục
		// $listPhoto=json_decode($get['cate_photo']);
		// if(!empty($listPhoto)){
		// 	foreach ($listPhoto as $key => $set) {
		// 		$filePath=$path.$set;
		// 			if (file_exists($filePath)) 
		// 			{
		//         @unlink($filePath);
		// 	    }	
		// 	}
			
		// }

		// $filePath=$path.$get['cate_photo'];
		// if (file_exists($filePath)) 
		// 	{
  //       @unlink($filePath);
	 //    }	
		$this->db->where($this->prefix.'id', $id);
		$this->db->delete($this->tbl);
		// print $this->db->last_query(); //In lệnh SQL
	}
	function Update($id,$datain)//---------------OK
	{
		$data=array();
		foreach ($datain as $key => $value) {
			$data[$this->prefix.$key]=$value;
		}
		// print_r($data);
		// $data['catea_id']=$cate;
		$this->db->where($this->prefix.'id', $id);
		$this->db->update($this->tbl, $data);
		// print $this->db->last_query(); //In lệnh SQL
	}
	
    
}

/* End of file Service_model.php */
/* Location: ./application/models/Service_model.php */