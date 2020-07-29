var total_price=0;
$(document).ready(function(){
    $.ajax({
        type:"GET",
        url:'php/mycart.php',
        success:function(response){

            if(response=="no_items"){
                $("div.card-container").hide();
                $("h3.no_items_prompt").css("display","block");
            }
            else{
                $("div.card-container").show();
                $("h4.no_items_prompt").css("display","hidden");
                var data=response.split(",");
                var subtotal=parseInt(data[1]);
                var tax=subtotal*0.1;
                var service_fees=3.25;
                total_price=subtotal+tax+service_fees;
    
    
    
                tax="$"+tax.toString();
                tax=tax.substring(0,5);
                service_fees="$"+service_fees.toString();
                var total_price_s="$"+total_price.toString();
            
                $("div").find(".cart_items").html(data[0]);
                $(".checkout_data").find(".subtotal").html("$"+data[1]);
                $(".checkout_data").find(".service_total").html(service_fees);
                $(".checkout_data").find(".tax").html(tax);
                $(".total_price_main").find(".total").html(total_price_s); 

            }
           


        }
    });
    
});

function checkout(){
    $.ajax({
        type:'GET',
        data:{total:total_price},
        url:'php/checkout.php',
        success:function(data){
            
                $('#overlay_unavailable').find("p").html("Your Order has been placed!!");
            $('#overlay_unavailable').find("span").html("&#9996;");
            $('#overlay_unavailable').fadeIn().delay(3000).fadeOut();
            setTimeout(function(){
                window.location.href = 'menu.php'; 
            },3000);
               
            

            
        }
    });

}

function removecart(id)
{
    $("div").find("#"+id+"").remove();
    $.ajax({
        type:'GET',
        url:'php/mycart.php',
        data:{item_id:id},
        success:function(){
            location.reload();
        }
    });

}
function add(id)
{
    var op="add";
    $.ajax({
        type:'GET',
        url:'php/quantityedit.php',
        data:{operation:op,item_id:id},
        success:function(response)
        {            
            if(response=="unavailable"){
                $('#overlay_unavailable').fadeIn().delay(1000).fadeOut();
                
            }
            else{
                location.reload();
            }
        }
    });

}
function subtract(id)
{
    var op="sub";

    $.ajax({
        type:'GET',
        url:'php/quantityedit.php',
        data:{operation:op,item_id:id},
        success:function(response)
        {
            location.reload();
            if(response=="one"){
                $("div").find("#"+id+"").remove();
            }

        }
    });

}