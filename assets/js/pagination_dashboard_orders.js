$(document).ready(function(){

	$.get("/orders/get_all_orders", function(res){
		console.log(res.length);	
		var num_pages = Math.ceil(res.length/10);
		var page = 1;

		while(page <= num_pages){
			$('.pages').append("<a href='#'>"+page+"</a> | ");
			page++;
		}
		for(var i=0; i<res.length;i++){
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
		$('a').click(function(){
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