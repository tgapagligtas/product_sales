<?php

 require("../includes/common.php");
$query ="select * from item where product_id=:product_id";
$query_params= array(":product_id"=>$_POST['product_id']);
$stmt = $db->prepare($query);
		$result = $stmt->execute($query_params);
			if($stmt->rowCount() !=0) {	
			$row = $stmt->fetch();			
						echo $row["product_id"].";";
						echo $row["name"].";";
						echo $row["qty"].";";
						echo $row["price"].";";													
			}

?>