<?php
require("../includes/common.php");
if ($_POST['task'] =="add"){
$query ="INSERT INTO item(name,qty,price) VALUES (:name,:qty,:price)";
$query_params= array(":name"=>$_POST['name'],":qty"=>$_POST['qty'],":price"=>$_POST['price']);
$stmt = $db->prepare($query);
$result = $stmt->execute($query_params);
			echo "Record Added";
}else{
$query ="UPDATE item set name=:name,qty=:qty,price=:price where product_id =:product_id";
$query_params= array(":name"=>$_POST['name'],":qty"=>$_POST['qty'],":price"=>$_POST['price'],":product_id"=>$_POST['product_id'] );
$stmt = $db->prepare($query);
$result = $stmt->execute($query_params);
			echo "Record updated";
}
?>