<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->delete('products','prod_id= "'.$_GET['prod_id'].'" ');  // Table name, WHERE conditions
$res = $db->getResult();  
if($res){
	header("location:select.php");
}