<?php
require("../includes/common.php");
$query ="select * from sales";
$stmt = $db->prepare($query);
		$result = $stmt->execute();
			if($stmt->rowCount() !=0) {
				while($row = $stmt->fetch()) {
				$x++;
				}
			}else{
				echo 0;
			}
?>
