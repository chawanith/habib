<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();

$db->update('products',array('prod_id'=>$_POST['prod_id'],
'vend_id'=>$_POST['vend_id'],
'prod_name'=>$_POST['prod_name'],
'prod_price'=>$_POST['prod_price'],
'prod_desc'=>$_POST['prod_desc'],

)
,'prod_id= "'.$_POST['prod_id'].'" '); 

// Table name, column names and values, WHERE conditions
$res = $db->getResult();
//print_r($res);

if($res){
	echo "Update Success";
	header("location:select.php");
}