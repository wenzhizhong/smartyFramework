<?php
include_once ROOT.'/protected/model/baseModel.php';


class booksModel{
	protected $table = 'books';

	function find($where , $field = '', $order = ''){
		$row=m($this->table)->find($where , $field, $order);
		return $row;
	}
	function select($where , $field = '', $order = '', $limit = ''){
		$res=m($this->table)->select($where , $field, $order);
		return $res;
	}
	function update($where , $field_arr){
		$row=m($this->table)->update($where , $field_arr);
		return $row;
	}
	function insert($data){
		$id=m($this->table)->insert($data);
		return $id;
	}
}