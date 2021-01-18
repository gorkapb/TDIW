$(document).ready(function(){  
    $(".category").click(function(){
        $.ajax({url: "/../controller/control_products.php?categoria=" + $(this).attr("id"), success:function(result){
            $(".list").html(result);
        }});
    });

    $(".category-menu").click(function(){
        $.ajax({url: "/../controller/control_products.php?categoria=" + $(this).attr("id"), success:function(result){
            $(".list").html(result);
        }});
    });

    $(".list").on('click', '.product-d',function(){
        $.ajax({url: "/../controller/control_detail_product.php?producte=" + $(this).attr("id"), success:function(result){
            $(".list").html(result);
        }});
    });

    $('#logo-usuario').click( function(){
        $('.Toggle').slideToggle('flex');
    });

});

function add_to_cart(){
    $.ajax({url: "/../controller/control_cart_visible.php?add=" + $('.product-purchase').attr("id") + '&name=' + $('.product-name').attr("id") + '&price=' + $('.product-price').attr("id"), success:function(result){
        $("#cabas-container").html(result);
    }});
};