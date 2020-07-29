$(document).ready(function(){

	

	var category="";
	$.ajax({
			type:"GET",
			url:'php/menu_list_for_item_deletion.php',
			success: function(response)
			{
				var data=response.split(",");
				$("div").find(".menu_items").html(data[0]);
				$("div").find(".page_container").html(data[1]);
			}
	});


	


	$("div.page_container").on("click","a",function(){
		var page_click=$(this).attr("id");
		category=$(".active_tab").attr("id");
		$.ajax({
			type:"GET",
			url:"php/menu_list_for_item_deletion.php",
			data:{page:page_click,category_name:category},
			success:function(response)
			{
				$("div").find(".menu_items").empty();
				$("div").find(".page_container").empty();
				var data=response.split(",");
				$("div").find(".menu_items").html(data[0]);
				$("div").find(".page_container").html(data[1]);
			}
		});
	});

	$("div.searchbtn").click(function(){
		var search_data=$("input.input").val();
		var search_cat=$(".active_tab").attr("id");
		$("input.input").val("");
		$.ajax({
			type:"GET",
			url:"php/menu_list_for_item_deletion.php",
			data:{search:search_data,searchcat:search_cat},
			success:function(response)
			{
				$("div").find(".menu_items").empty();


				$("div").find(".menu_items").html(response);
				$("div").find(".page_container").html("");
			}
		});
	});


	$("td").click(function(){
		$("input.input").val("");
		category=$(this).attr("id");
		$(this).parent().find(".active_tab").removeClass("active_tab")
		$(this).addClass("active_tab");
		$.ajax({
			type:"GET",
			url:'php/menu_list_for_item_deletion.php',
			data:{category_name:category},
			success: function(response)
			{

				$("div").find(".menu_items").empty();
				$("div").find(".page_container").empty();
				var data=response.split(",");
				$("div").find(".menu_items").html(data[0]);
				$("div").find(".page_container").html(data[1]);
			}
		});
	});

});


function addtocart(id)
{

	$.ajax({
		type:'GET',
		url:'php/addtocart.php',
		data:{item_id:id},
		success:function(item_avb)
		{
			if(item_avb=="available")
			{
				$('#overlay').fadeIn().delay(1000).fadeOut();
			}
			else{
				$('#overlay_unavailable').fadeIn().delay(1000).fadeOut();
			}
			
		}
	});
    
    




	
}