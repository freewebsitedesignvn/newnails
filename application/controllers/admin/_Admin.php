<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	// public function __construct(){
	// 	// $this->s->assign('PATH_BE',$BE);
	// }
	public function index()
	{
		// $this->s->display('example.tpl');
		$this->s->display('backend/default/home.tpl');
		// $this->s->display('parent.tpl');

		// $this->s->display('mypage.tpl');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/admin/Admin.php */