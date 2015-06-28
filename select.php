<?php
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
//public function select($table, $rows = '*', $join = null, $where = null,
//$order = null, $limit = null){
$db->select('products',$rows = '*', $join = null, $where = null,
$order = null, $limit = null); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
//echo "<pre>";
//print_r($res);
?>
<a href="frm_insert.php">insert</a>
<table border="1" style="border:1px #0000 solid;border-collapse:collapse; ">
			<tr>
				<td><strong>prod_id</strong></td>
				<td><strong>vend_id</strong></td>
				<td><strong>prod_name</strong></td>
				<td><strong>prod_price</strong></td>
				<td><strong>prod_desc</strong></td>
				<td><strong>#</strong></td>
				<td><strong>#</strong></td>
			</tr>
			
<?php
	
foreach($res as $key => $value){?>
		<tr>
			<td><?=$value['prod_id']?></td>
			<td><?=$value['vend_id']?></td>
			<td><?=$value['prod_name']?></td>
			<td><?=$value['prod_price']?></td>
			<td><?=$value['prod_desc']?></td>
			<td><a href="frm_edit.php?prod_id=<?=$value['prod_id']?>">Edit</a></td>
			<td><a href="delete.php?prod_id=<?=$value['prod_id']?>">Delete</a></td>
		</tr>
		
		
		<?php
}
?>
</table>