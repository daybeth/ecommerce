$(document).ready(function(){

	$.get("/products/get_all_products", function(res){
		console.log(res);	
		var num_pages = Math.ceil(res.length/6);
		var page = 1;

		while(page <= num_pages){
			$('.pages').append("<a href='#'>"+page+"</a> | ");
			page++;
		}
		for(var i=0; i<6; i++){
			$(".tbody").append("<tr><td>"+res[i].picture+"</td>"+
									"<td>"+res[i].id+"</td>"+
									"<td>"+res[i].name+"</td>"+
									"<td>"+res[i].inventory_count+"</td>"+
									"<td>"+res[i].quantity_sold+"</td>"+
									"<td><a href='/products/edit_product/"+res[i].id+"'>Edit </a>"+
										"<a href='/products/delete_product/"+res[i].id+"'> Delete</a></td></tr>");
		}
		$('a').click(function(){
			var page_num = $(this).text();
			console.log(page_num);
			var url = "/products/get_page_products/"+page_num;
			console.log(url);
			$.get(url, function(res){
				// alert();
				console.log(res);
				$('.tbody').html(""); 
				console.log("hi")
				console.log(res.length)
				for(var i=0; i<6; i++){
					console.log(i)
					$(".tbody").append("<tr><td>"+res[i].picture+"</td>"+
											"<td>"+res[i].id+"</td>"+
											"<td>"+res[i].name+"</td>"+
											"<td>"+res[i].inventory_count+"</td>"+
											"<td>"+res[i].quantity_sold+"</td>"+
											"<td><a href='/products/edit_product/"+res[i].id+"'>Edit </a>"+
												"<a href='/products/delete_product/"+res[i].id+"'> Delete</a></td></tr>");
				}
			});
		})
		
	}, "json")

});