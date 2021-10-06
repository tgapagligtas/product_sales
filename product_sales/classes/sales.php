<input type="text" id="product_search">
<button type=button onclick="search_product()"> Search Product</button><br>
<label for="name">Name:</label><br>
  <input type="text" id="sales_name" disabled><br>
<label for="qty">QTY:</label><br>
  <input type="text" id="sales_qty"><br>
  <label for="price">Price:</label><br>
  <input type="text" id="sales_price" disabled><br><br>
  <button type=button onclick="add_sales_list()"> Add to sales</button>
  
<?php


echo "
						<table id='sales_table' border ='1'>
						<thead>
						<tr>
						<th>Product Id</th>
						<th>Product Name</th>
						<th>Qty</th>
						<th>Price(Php)</th></thead><tbody></tbody></table>";
?>
