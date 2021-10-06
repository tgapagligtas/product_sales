<?php
require("../includes/common.php");
$query ="INSERT INTO sales(product_id,qty,amount) VALUES (:product_id,:qty,:amount)";
$query_params= array(":product_id"=>$_POST['product_id'],":qty"=>$_POST['qty'],":amount"=>$_POST['price']);
$stmt = $db->prepare($query);
$result = $stmt->execute($query_params);
			echo "Record Save";
?>
