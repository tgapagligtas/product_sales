<?php 
require ("includes/headers.php");
require("includes/common.php");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> E-JAZZ</title>
</head>				
<body>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


     <div id="wrapper">
 
           
<div id="wrapper">
  <div id="page-wrapper">
       

 <div class="row">
      <div id="item_list">
		<?php require("classes/item.php");?>
      </div>
	
 </div>      
	  <button type=button onclick="display_item_list()"> Display item List</button> 
	    <br>  <br>
      <div id="sales_list">
		<?php require("classes/sales.php");?>
      </div>
  </div> 
</div>   



      