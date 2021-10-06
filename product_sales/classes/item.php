<?php

echo "
						<table border ='1'>
						<thead>
						<tr>
						<th>Product Name</th>
						<th>Qty</th>
						<th>Price(Php)</th>
						<th>Action</th></tr></thead><tbody>";
$query ="select * from item";
$stmt = $db->prepare($query);
		$result = $stmt->execute();
			if($stmt->rowCount() !=0) {
					while($row = $stmt->fetch()) {
						echo "<tr>";
						echo "<td>".$row["name"]."</td>";
						echo "<td>".$row["qty"]."</td>";
						echo "<td>".$row["price"] ."</td>";
						echo "<td align = 'center'><button type=button onclick='edit_product(".$row["product_id"].")'> Edit</button> </td>";
						echo "</tr>";															
					} 		
			}
echo "</tbody></table>";

echo "<br><br>";


echo '<label for="product_id">Product Id</label><br>
  <input type="text" id="product_id" name="fname"><br>
  <label for="name">Name:</label><br>
  <input type="text" id="name"><br>
  <label for="qty">QTY:</label><br>
  <input type="text" id="qty"><br>
  <label for="price">Price:</label><br>
  <input type="text" id="price"><br>
  <button type=button onclick="update_record()"> Update</button> </td>
  <button type=button onclick="add_record()"> Add</button> </td>
  ';
  
  

?>

