$(document).ready(function(){
$("#item_list").hide();
});

function add_sales_list(){
	var product_item= $("#product_search").val();
	checkqty(product_item);	
}

function checkqty(product_item){
	
	var qty = $("#sales_qty").val();
	url="classes/display.php";
		 var product_id = product_item;
		 var posting = $.post(url,{product_id:product_id});
            posting.done(function(data){

				var pi_details = data.split(";");
				var actualqty= pi_details[2];
				var difference = actualqty-qty;
			
				if (difference>0){
					var price= (pi_details[3]*qty);
				$("#sales_table > tbody").append("<tr><td>"+pi_details[0]+"</td><td>"+pi_details[1]+"</td><td>"+qty+"</td><td>"+price+"</td></tr>");
				 
				save_sales(product_id[0],qty,price); 
				}else{
					alert("QTY above Actual Stock");
				}
			});
}


function search_product(){
	 url="classes/display.php";
		 var product_id = $("#product_search").val();
		 var posting = $.post(url,{product_id:product_id});
            posting.done(function(data){
				if (data ==""){
				alert ("Record not found");
				}else{										
					var pi_details = data.split(";");
						
					$("#sales_name").val(pi_details[1]);

					$("#sales_price").val(pi_details[3]);
					
					
				}
			});
}


function save_sales(product_id,qty,price){
	
	
			url="classes/save_sales.php";
			var posting = $.post(url,{product_id:product_id,qty:qty,price:price});
			   posting.done(function(data){
				   alert(data);
			   });
			   
}
function display_item_list(){
	$("#item_list").show();
	
}
function update_record(){
			var product_id = $("#product_id").val();
				var name	= $("#name").val();
				var qty	= $("#qty").val();
				var price	= $("#price").val();	
				var task = "edit";
				url="classes/itemchange.php";
				 var posting = $.post(url,{product_id:product_id,name:name,qty:qty,price:price,task:task});
				posting.done(function(data){
				alert (data);
			});
};

function edit_product(nidx){
	clear_text();
		 url="classes/display.php";
		 var product_id = nidx;
		 var posting = $.post(url,{product_id:product_id});
            posting.done(function(data){
			
				var pi_details = data.split(";");
					$("#product_id").val(pi_details[0]);
					$("#name").val(pi_details[1]);
					$("#qty").val(pi_details[2]);
					$("#price").val(pi_details[3]);
			});
};

function add_record(){
				var product_id = $("#product_id").val();
				var name= $("#name").val();
				var qty= $("#qty").val();
				var price= $("#price").val();	
				var task="add";
				url="classes/itemchange.php";
					 var posting = $.post(url,{product_id:product_id,name:name,qty:qty,price:price,task:task});
				posting.done(function(data){
				alert (data);
			});
};

function clear_text(){
	
	$("#product_id").val("");
					$("#name").val("");
					$("#qty").val("");
					$("#price").val("");
}