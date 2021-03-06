$(document).ready(function(){

	$.get("/orders/get_all_orders", function(res){
		console.log(res.length);	
		var num_pages = Math.ceil(res.length/10);
		var page = 1;

		while(page <= num_pages){
			$('.pages').append("<nav aria-label='Page navigation'><ul class='pagination'>"+
					    "<li><a href='#' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>"+
					    "<li><a class='page_link' href='#'>"+page+"</a></li>"+
					    "<li><a href='#' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>"+
				    "</ul></nav>");
			page++;
		}
		for(var i=0; i<res.length;i++){
			$(".tbody").append("<tr><td><a href='/orders/show_order/"+res[i].id+"'>"+res[i].id+"</a></td>"+
									"<td>"+res[i].first_name+" "+res[i].last_name+"</td>"+
									"<td>"+res[i].date+"</td>"+
									"<td>"+res[i].shipping_address+"</td>"+
									"<td>"+res[i].total+"</td>"+
									"<td><select name='status' class='select_status'>"+
											"<option value='shipped'>Shipped</option>"+
											"<option value='cancelled'>Cancelled</option>"+
											"<option value='in_process'>In Process</option>"+
										"</select></td></tr>");
		}
		$('.page_link').click(function(){
			var page_num = $(this).text();
			console.log(page_num);
			var url = "/orders/get_page_orders/"+page_num;
			$.get(url, function(res){
				console.log(res);
				$('.tbody').html(""); 
				console.log(res.length)
				for(var i=0; i<res.length; i++){
					console.log(i)
					$(".tbody").append("<tr><td>"+res[i].id+"</td>"+
										"<td>"+res[i].first_name+" "+res[i].last_name+"</td>"+
										"<td>"+res[i].date+"</td>"+
										"<td>"+res[i].shipping_address+"</td>"+
										"<td>"+res[i].total+"</td>"+
										"<td><select name='status' class='select_status'>"+
												"<option value='shipped'>Shipped</option>"+
												"<option value='cancelled'>Cancelled</option>"+
												"<option value='in_process'>In Process</option>"+
											"</select></td></tr>");
				}
			});
		})
		
	}, "json")

});