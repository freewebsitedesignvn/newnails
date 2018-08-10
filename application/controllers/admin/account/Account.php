<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	function __construct()
	{
		parent::__construct();   
		$crumb=array(
			array('name'=>'Home','link'=>'#'),
			array('name'=>'Accounts','link'=>'#'),
			array('name'=>'User','link'=>'')
			);
		$this->s->assign('breadcrumb',$crumb);
		$this->s->assign('page_name','User');

		//Phân quyền
		// $currentPage="account";
		// $role=array(
		// 	'account',
		// 	'report',
		// 	'group_account'
		// 	);
		// $this->s->assign('myrole',$role);
		// if(in_array($currentPage,$role))
		// 	$this->s->assign('note',"Accept Access this page");
		// else			
		// 	$this->s->assign('note',"Can't Access this page");
		// 	// echo "Can't Access this page";
		$this->pathView='backend/default/account/account/';
	}
	public function index()
	{
		
		$this->s->display($this->pathView.'list.tpl');
	}

	public function add()
	{
		// print_r($_POST);
		$this->s->assign('Codephones', array(
		    1 => 'USA (+1)',
		    84 => 'Vietnam (+84)',
    	)
    );
		$this->s->assign('codephoneSelect', 1);
		$this->s->assign('Actives', array(
		    1 => 'Active',
		    0 => 'Disable',
    	)
    );
		$this->s->assign('ActiveSelect', 1);
		$this->s->assign('typeAccount', array(
		    1 => 'Owner',
		    2 => 'Agent',
		    3 => 'Other',
    	)
    );
    $this->s->assign('typeSelect', 1);
		$this->s->assign('group', array(
		    1 => 'Admin',
		    2 => 'Sale',
		    3 => 'PM',
    	)
    );
    // $this->s->assign('groupSelect', 2);
		$this->s->display($this->pathView.'add.tpl');
	}
	public function edit()
	{
		$this->s->assign('Codephones', array(
		    1 => 'USA (+1)',
		    84 => 'Vietnam (+84)',
    	)
    );
		$this->s->assign('codephoneSelect', 1);
		$this->s->assign('Actives', array(
		    1 => 'Active',
		    0 => 'Disable',
    	)
    );
		$this->s->assign('ActiveSelect', 1);
		$this->s->assign('typeAccount', array(
		    1 => 'Owner',
		    2 => 'Agent',
		    3 => 'Other',
    	)
    );
    $this->s->assign('typeSelect', 1);
		$this->s->assign('group', array(
		    1 => 'Admin',
		    2 => 'Sale',
		    3 => 'PM',
    	)
    );
    $this->s->assign('groupSelect', 2);
		$this->s->display($this->pathView.'edit.tpl');
	}
	public function add1()
	{
		print_r($_POST);
		
	}

}

/* End of file Account.php */
/* Location: ./application/controllers/admin/account/Account.php */