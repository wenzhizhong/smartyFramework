<?php
require_once 'model.php';
class baseModel extends model{
     protected $prefix='';
     public function __construct( $database= 'DB',$force = false ){
		require APP.'/config_db.php';
		parent::__construct();
		$this->prefix= $config_db['DB']['DB_PREFIX']    ;//config('DB_PREFIX');
		 
	}
}