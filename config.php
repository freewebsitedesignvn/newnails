<?php 
	$server=0;
	//define('BASE_URL','http://'.$_SERVER['SERVER_NAME'].'/vinasing/php/');
	//define('DOMAIN',BASE_URL.'index.php/');
	if ($server){//Up lên server
	    define('BASE_URL','http://'.$_SERVER['SERVER_NAME'].'/');
	    define('DOMAIN',BASE_URL);
		//db
		define('UDB','shoprevn_vinasingu');//Username DB
	    define('PDB','I46PSCHKRTzEB6V9mF');//Password DB
		 define('DB','shoprevn_vinasing');//DB name

	}
	else{//localhost

	    define('BASE_URL','http://'.$_SERVER['SERVER_NAME'].'/');
	    define('DOMAIN',BASE_URL);
	    // define('DOMAIN',BASE_URL.'index.php/');
		// define('BASE_URL','http://'.$_SERVER['SERVER_NAME'].'/');
		//db
		define('UDB','root');//Username DB
		define('PDB','');//Password DB
		define('DB','ci3_vinasing');//DB name
	}

// RESOURCE TEMPLATE BACKEND
	define('PATH_BE_TEMP',DOMAIN.'public/backend/');
	define('PATH_CKEditor',DOMAIN.'public/ckeditor/');
	// $BE=array();
	// $BE['PATH_BE_TEMP']= DOMAIN.'public/backend/';

	
// RESOURCE TEMPLATE FRONTEND
	define('PATH_FE_TEMP',DOMAIN.'public/frontend/imperial/');
	// print_r($BE);
 ?>
