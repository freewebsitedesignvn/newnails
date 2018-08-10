<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groupaccount_model extends CI_Model {
	public function __construct(){
        parent::__construct();
//        $ci &=get_instance();
        $this->load->database();
        $this->tbl='sr_account_group';
    }

	// function getOne_byAId($AId)//---------------OK
	// {
	// 	// echo "check_login model";
	// 	// var_dump($data);
	// 	$thistbl=$this->tbl;
	// 	$result=$this->db->select('*')		
	// 	->from($this->tbl)
	// 	->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id')
	// 	->where('a_id',$AId)
	// 	->get()->row_array();
	// 	// ->order_by('a_order', 'ASC')
	// 	// ->order_by('a_id', 'ASC')

	// 	// ->get()->result_array();
	// 	// ->from()
	// 	// ->count_all_results($this->tbl);
	// 	if(isset($result) && !empty($result))
	// 		return $result;
	// 	// print $this->db->last_query(); //In lệnh SQL
	// }
	// function getList_byDmaId_Limit($DmaId,$limit=0,$detail=0,$sort='DESC')//---------------OK
	// {
	// 	// echo "check_login model";
	// 	// var_dump($data);
	// 	// $thistbl=$this->tbl;
	// 	if ($detail == 1)
	// 		$this->db->select('*');
	// 	else
	// 		$this->db->select('
	// 			a_id
	// 			,a_title
	// 			,a_title_en
	// 			,a_description
	// 			,a_description_en
	// 			,a_photo
	// 			,a_embed_link
	// 			,a_createdatetime
	// 			,a_slug
	// 			,a_slug_en
	// 			,a_feature
	// 			,'.$this->tbl.'.dma_id
	// 			,a_order
	// 			,dma_title
	// 			,dma_slug
	// 			,a_link
	// 			,a_link_en
	// 			');			
	// 	$this->db->from($this->tbl)
	// 	->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id');
	// 	if (is_array($DmaId))
	// 		$this->db->where_in($this->tbl.'.dma_id', $DmaId);
	// 	else			
	// 		$this->db->where($this->tbl.'.dma_id',$DmaId);
	// 	$this->db->where('a_show','1');
	// 	// ->get()->row_array();
	// 	if ($sort=='ASC')
	// 	{			
	// 		$this->db->order_by('a_order', $sort);
	// 		$this->db->order_by('a_id', $sort);
	// 	}
	// 	else
	// 	{
	// 		$this->db->order_by('a_order', 'DESC');
	// 		$this->db->order_by('a_id', 'DESC');
	// 	}
		
	// 	if ($limit>0)
	// 		$this->db->limit($limit);
	// 	$result=$this->db->get()->result_array();
	// 	if(isset($result) && !empty($result))
	// 		return $result;
	// 	// print $this->db->last_query(); //In lệnh SQL
	// }
	// function getList_byCmaId_Limit($CmaId,$limit,$detail=0)//---------------OK
	// {
	// 	// echo "check_login model";
	// 	// var_dump($data);
	// 	// $thistbl=$this->tbl;
	// 	if ($detail == 1)
	// 		$this->db->select('*');
	// 	else
	// 		$this->db->select('
	// 			a_id
	// 			,a_title
	// 			,a_description
	// 			,a_photo
	// 			,a_embed_link
	// 			,a_createdatetime
	// 			,a_slug
	// 			,a_feature
	// 			,'.$this->tbl.'.cma_id
	// 			,a_order
	// 			');			
	// 	$this->db->from($this->tbl)
	// 	->join('sr_chuyenmuc_article', 'sr_chuyenmuc_article.cma_id = sr_article.cma_id');
	// 	if (is_array($CmaId))
	// 		$this->db->where_in($this->tbl.'.cma_id', $CmaId);
	// 	else			
	// 		$this->db->where($this->tbl.'.cma_id',$CmaId);
	// 	$result=$this->db->where('a_show','1')
	// 	// ->get()->row_array();
	// 	->order_by('a_order', 'ASC')
	// 	->order_by('a_id', 'ASC')
	// 	->limit($limit)
	// 	->get()->result_array();
	// 	if(isset($result) && !empty($result))
	// 		return $result;
	// 	// print $this->db->last_query(); //In lệnh SQL
	// }
	// function getList_byCmaId_Limit_New($CmaId,$limit,$detail=0)//---------------OK
	// {
	// 	// echo "check_login model";
	// 	// var_dump($data);
	// 	// $thistbl=$this->tbl;
	// 	if ($detail == 1)
	// 		$this->db->select('*');
	// 	else
	// 		$this->db->select('
	// 			a_id
	// 			,a_title
	// 			,a_description
	// 			,a_photo
	// 			,a_embed_link
	// 			,a_createdatetime
	// 			,a_slug
	// 			,a_feature
	// 			,'.$this->tbl.'.cma_id
	// 			,a_order
	// 			');			
	// 	$this->db->from($this->tbl)
	// 	->join('sr_chuyenmuc_article', 'sr_chuyenmuc_article.cma_id = sr_article.cma_id');
	// 	if (is_array($CmaId))
	// 		$this->db->where_in($this->tbl.'.cma_id', $CmaId);
	// 	else			
	// 		$this->db->where($this->tbl.'.cma_id',$CmaId);
	// 	$result=$this->db->where('a_show','1')
	// 	// ->get()->row_array();
	// 	// ->order_by('a_order', 'ASC')
	// 	->order_by('a_id', 'DESC')
	// 	->limit($limit)
	// 	->get()->result_array();
	// 	if(isset($result) && !empty($result))
	// 		return $result;
	// 	// print $this->db->last_query(); //In lệnh SQL
	// }
	// // function getList_byWhereIn_DmaId_Limit_($DmaId,$limit,$detail=0)//---------------OK
	// // {
	// // 	// echo "check_login model";
	// // 	// var_dump($data);
	// // 	// $thistbl=$this->tbl;
	// // 	if ($detail == 1)
	// // 		$this->db->select('*');
	// // 	else
	// // 		$this->db->select('
	// // 			a_id
	// // 			,a_title
	// // 			,a_description
	// // 			,a_photo
	// // 			,a_embed_link
	// // 			,a_createdatetime
	// // 			,a_slug
	// // 			,a_feature
	// // 			,'.$this->tbl.'.dma_id
	// // 			,a_order
	// // 			');			
	// // 	$result=$this->db->from($this->tbl)
	// // 	->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id')
	// // 	->where($this->tbl.'.dma_id',$DmaId)
	// // 	->where('a_show','1')
	// // 	// ->get()->row_array();
	// // 	->order_by('a_order', 'DESC')
	// // 	->order_by('a_id', 'DESC')
	// // 	->limit($limit)
	// // 	->get()->result_array();
	// // 	if(isset($result) && !empty($result))
	// // 		return $result;
	// // 	// print $this->db->last_query(); //In lệnh SQL
	// // }
	// function getList_byDmaId($DmaId)//---------------OK
	// {
	// 	// echo "check_login model";
	// 	// var_dump($data);
	// 	$thistbl=$this->tbl;
	// 	// $result=$this->db->select('*')	
	// 	$result=$this->db->select('
	// 		a_id
	// 		,a_title
	// 		,a_description
	// 		,a_photo
	// 		,a_embed_link
	// 		,a_createdatetime
	// 		,a_slug
	// 		,a_feature
	// 		,dma_id
	// 		,a_order
	// 		')			
	// 	->from($this->tbl)

	// 	->where('dma_id',$DmaId)
	// 	->where('a_show','1')
	// 	// ->get()->row_array();
	// 	->order_by('a_order', 'ASC')
	// 	->order_by('a_id', 'ASC')

	// 	->get()->result_array();
	// 	// ->from()
	// 	// ->count_all_results($this->tbl);
	// 	if(isset($result) && !empty($result))
	// 		return $result;
	// 	// print $this->db->last_query(); //In lệnh SQL
	// }
	// function getList4New_byDmaId($DmaId)//---------------OK
	// {
	// 	// echo "check_login model";
	// 	// var_dump($data);
	// 	$thistbl=$this->tbl;
	// 	$result=$this->db->select('*')		
	// 	->from($this->tbl)
	// 	->where('dma_id',$DmaId)
	// 	// ->get()->row_array();
	// 	// ->order_by('a_order', 'ASC')
	// 	->order_by('a_id', 'DESC')
	// 	->limit(3)

	// 	->get()->result_array();
	// 	// ->from()
	// 	// ->count_all_results($this->tbl);
	// 	if(isset($result) && !empty($result))
	// 		return $result;
	// 	// var_dump($result);
	// 	// print $this->db->last_query(); //In lệnh SQL
	// }

	// function getListSortDesc_byDmaId($DmaId)//---------------OK
	// {
	// 	// echo "check_login model";
	// 	// var_dump($data);
	// 	$thistbl=$this->tbl;
	// 	$result=$this->db->select('*')		
	// 	->from($this->tbl)
	// 	->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id')
	// 	->where('sr_article.dma_id',$DmaId)
	// 	// ->get()->row_array();
	// 	->order_by('a_order', 'DESC')
	// 	->order_by('a_id', 'DESC')

	// 	->get()->result_array();
	// 	// ->from()
	// 	// ->count_all_results($this->tbl);
	// 	if(isset($result) && !empty($result))
	// 		return $result;
	// 	// print $this->db->last_query(); //In lệnh SQL
	// }
	// function getListFeatureLimitSortDesc_byDmaId($DmaId,$limit=4)//---------------OK
	// {
	// 	// echo "check_login model";
	// 	// var_dump($data);
	// 	$thistbl=$this->tbl;
	// 	if ($limit==0){
	// 		$result=$this->db->select('*')		
	// 		->from($this->tbl)
	// 		->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id')
	// 		->where('sr_article.dma_id',$DmaId)
	// 		->where('sr_article.a_feature','1')
	// 		// ->get()->row_array();
	// 		// ->limit($limit)
	// 		->order_by('a_order', 'ASC')
	// 		->order_by('a_id', 'DESC')

	// 		->get()->result_array();
	// 	}
	// 	elseif ($limit > 0) {
	// 		$result=$this->db->select('*')		
	// 		->from($this->tbl)
	// 		->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id')
	// 		->where('sr_article.dma_id',$DmaId)
	// 		->where('sr_article.a_feature','1')
	// 		// ->get()->row_array();
	// 		->limit($limit)
	// 		->order_by('a_order', 'ASC')
	// 		->order_by('a_id', 'DESC')

	// 		->get()->result_array();
	// 	}
	// 	if(isset($result) && !empty($result))
	// 		return $result;
	// 	// print $this->db->last_query(); //In lệnh SQL
	// }
	// function getListNewsLimitSortDesc_byDmaId($DmaId,$limit=4)//---------------OK
	// {
	// 	// echo "check_login model";
	// 	// var_dump($data);
	// 	$thistbl=$this->tbl;
	// 	if ($limit==0){
	// 		$result=$this->db->select('*')		
	// 		->from($this->tbl)
	// 		->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id')
	// 		->where('sr_article.dma_id',$DmaId)
	// 		// ->get()->row_array();
	// 		// ->limit($limit)
	// 		// ->order_by('a_order', 'ASC')
	// 		->order_by('a_id', 'DESC')

	// 		->get()->result_array();
	// 	}
	// 	elseif ($limit > 0) {
	// 		$result=$this->db->select('*')		
	// 		->from($this->tbl)
	// 		->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id')
	// 		->where('sr_article.dma_id',$DmaId)
	// 		// ->get()->row_array();
	// 		->limit($limit)
	// 		// ->order_by('a_order', 'ASC')
	// 		->order_by('a_id', 'DESC')

	// 		->get()->result_array();
	// 	}
	// 	if(isset($result) && !empty($result))
	// 		return $result;
	// 	// print $this->db->last_query(); //In lệnh SQL
	// }
	// function getListLimitSortDesc_byDmaId($DmaId,$limit=4)//---------------OK
	// {
	// 	// echo "check_login model";
	// 	// var_dump($data);
	// 	$thistbl=$this->tbl;
	// 	if ($limit==0){
	// 		$result=$this->db->select('*')		
	// 		->from($this->tbl)
	// 		->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id')
	// 		->where('sr_article.dma_id',$DmaId)
	// 		// ->get()->row_array();
	// 		// ->limit($limit)
	// 		// ->order_by('a_order', 'ASC')
	// 		->order_by('a_id', 'DESC')

	// 		->get()->result_array();
	// 	}
	// 	elseif ($limit > 0) {
	// 		$result=$this->db->select('*')		
	// 		->from($this->tbl)
	// 		->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id')
	// 		->where('sr_article.dma_id',$DmaId)
	// 		// ->get()->row_array();
	// 		->limit($limit)
	// 		->order_by('a_order', 'ASC')
	// 		->order_by('a_id', 'DESC')

	// 		->get()->result_array();
	// 	}
	// 	if(isset($result) && !empty($result))
	// 		return $result;
	// 	// print $this->db->last_query(); //In lệnh SQL
	// }
	// function getListLimitSortAsc_byDmaId($DmaId,$limit=4)//---------------OK
	// {
	// 	// echo "check_login model";
	// 	// var_dump($data);
	// 	$thistbl=$this->tbl;
	// 	if ($limit==0){
	// 		$result=$this->db->select('*')		
	// 		->from($this->tbl)
	// 		->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id')
	// 		->where('sr_article.dma_id',$DmaId)
	// 		// ->get()->row_array();
	// 		// ->limit($limit)
	// 		->order_by('a_order', 'ASC')
	// 		->order_by('a_id', 'ASC')

	// 		->get()->result_array();
	// 	}
	// 	elseif ($limit > 0) {
	// 		$result=$this->db->select('*')		
	// 		->from($this->tbl)
	// 		->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id')
	// 		->where('sr_article.dma_id',$DmaId)
	// 		// ->get()->row_array();
	// 		->limit($limit)
	// 		->order_by('a_order', 'ASC')
	// 		->order_by('a_id', 'ASC')

	// 		->get()->result_array();
	// 	}
	// 	if(isset($result) && !empty($result))
	// 		return $result;
	// 	// print $this->db->last_query(); //In lệnh SQL
	// }
	// function copyrecord($aId)//---------------OK
	// {
	// 	// echo "check_login model";
	// 	// var_dump($data);
	// 	$thistbl=$this->tbl;
	// 	$this->load->library('myclass');
	// 	$search=$this->db->from($thistbl)
	// 	->where('a_id',$aId)
	// 	->get()->row_array();
	// 	$data=array(
	// 		'a_title'=>$search['a_title'].'-copy',
	// 		'a_description'=>$search['a_description'],
	// 		'a_content'=>$search['a_content'],
	// 		'a_title_en'=>$search['a_title_en'].'-copy',
	// 		'a_description_en'=>$search['a_description_en'],
	// 		'a_content_en'=>$search['a_content_en'],
	// 		// 'a_photo'=>$search['a_photo'],
	// 		'a_embed_link'=>$search['a_embed_link'],
	// 		'a_createdatetime'=>$this->myclass->datenow(),
	// 		'a_updatedatetime'=>$this->myclass->datenow(),
	// 		// 'a_slug'=>$search['a_slug'],
	// 		'dma_id'=>$search['dma_id'],
	// 		'cma_id'=>$search['cma_id'],
	// 		'a_slug'=>$search['a_slug'],
	// 		);
	// 	$this->db->insert($thistbl, $data);
	// 	// $result=$this->db->select('*')		
	// 	// ->from($this->tbl)
	// 	// ->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id')
	// 	// ->where('sr_article.dma_id',$DmaId)
	// 	// // ->get()->row_array();
	// 	// ->limit($limit)
	// 	// ->order_by('a_order', 'ASC')
	// 	// ->order_by('a_id', 'DESC')

	// 	// ->get()->result_array();
	// 	// // ->from()
	// 	// // ->count_all_results($this->tbl);
	// 	// if(isset($result) && !empty($result))
	// 	// 	return $result;
	// 	// print $this->db->last_query(); //In lệnh SQL
	// }

	// function go_linkseo($aId)//---------------OK
	// {
	// 	$search=$this->db->from($this->tbl)->select('a_slug')
	// 	->where('a_id',$aId)
	// 	->get()->row_array();
	// 	return $search;
	// }

	// -----------------------------------------------------------------------------
	function Add($datain)//---------------OK
	{
		// echo "check_login model";
		// var_dump($data);
		// die();
		$data=array();
		foreach ($datain as $key => $value) {
			$data['group_'.$key]=$value;
		}
		// $data['catea_id']=$cate;
		// var_dump($data);
		// die();
		$this->db->insert($this->tbl, $data);	
		// print $this->db->last_query(); //In lệnh SQL
	}
	function getList($limit=0,$detail=0,$sort='DESC')//---------------OK
	{
		// echo "check_login model";
		// var_dump($data);
		// $thistbl=$this->tbl;
		if ($detail == 1)
			$this->db->select('*');
		else
			$this->db->select('
				group_id
				,group_name
				,group_description
				,group_status
				');			
		$this->db->from($this->tbl);
		// ->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id');
		// if (is_array($DmaId))
		// 	$this->db->where_in($this->tbl.'.group_id', $DmaId);
		// else			
		// 	$this->db->where($this->tbl.'.group_id',$DmaId);
		// $this->db->where('a_active','1');
		// ->get()->row_array();
		if ($sort=='ASC')
		{			
			// $this->db->order_by('a_order', $sort);
			$this->db->order_by('group_id', $sort);
		}
		else
		{
			// $this->db->order_by('a_order', 'DESC');
			$this->db->order_by('group_id', 'DESC');
		}
		
		if ($limit>0)
			$this->db->limit($limit);
		$result=$this->db->get()->result_array();
		if(isset($result) && !empty($result))
			return $result;
		// print $this->db->last_query(); //In lệnh SQL
	}
	function getOne_byid($aId,$limit=0,$detail=0,$sort='DESC')//---------------OK
	{
		// echo "check_login model";
		// var_dump($data);
		// $thistbl=$this->tbl;
		if ($detail == 1)
			$this->db->select('*');
		else
			$this->db->select('
				group_id
				,group_name
				,group_description
				,group_status
				');		
		$this->db->from($this->tbl);
		// ->join('sr_danhmuc_article', 'sr_danhmuc_article.dma_id = sr_article.dma_id');
		if (is_array($aId))
			$this->db->where_in($this->tbl.'.group_id', $aId);
		else			
			$this->db->where_in($this->tbl.'.group_id', $aId);
		// $this->db->where('a_active','1');
		// ->get()->row_array();
		if ($sort=='ASC')
		{			
			// $this->db->order_by('a_order', $sort);
			$this->db->order_by('group_id', $sort);
		}
		else
		{
			// $this->db->order_by('a_order', 'DESC');
			$this->db->order_by('group_id', 'DESC');
		}
		
		if ($limit>0)
			$this->db->limit($limit);
		$result=$this->db->get()->row_array();
		if(isset($result) && !empty($result))
			return $result;
		// print $this->db->last_query(); //In lệnh SQL
	}
	function Delete($id)//---------------OK
	{
	
		$this->db->where('group_id', $id);
		$this->db->delete($this->tbl);
		// print $this->db->last_query(); //In lệnh SQL
	}
	function Update($id,$datain)//---------------OK
	{
		$data=array();
		foreach ($datain as $key => $value) {
			$data['a_'.$key]=$value;
		}
		// $data['catea_id']=$cate;
		$this->db->where('a_id', $id);
		$this->db->update($this->tbl, $data);
		// print $this->db->last_query(); //In lệnh SQL
	}


}

/* End of file Groupaccount_model.php */
/* Location: ./application/models/Groupaccount_model.php */