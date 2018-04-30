<?php


class usersModel {
	protected $table = 'users';
	private $m;
	function __construct()
	{
//		!$this->m&&$this->m=m($this->table);
		$this->m=m($this->table);
	}

	function find($where , $field = '', $order = ''){
		$row=$this->m->find($where , $field, $order);
		return $row;
	}
	function select($where , $field = '', $order = '', $limit = ''){
		$res=$this->m->select($where , $field, $order);
		return $res;
	}
	function update($where , $field_arr){
		$row=$this->m->update($where , $field_arr);
		return $row;
	}
	function insert($data){
		$id=$this->m->insert($data);
		return $id;
	}
	function delete($where){
		$id=$this->m->delete($where);
		return $id;
	}
}