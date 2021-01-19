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

    $(document).on('click', '.purchase-button',function(){
        $.ajax({url: "/../controller/control_cart_visible.php?add=" + $(this).attr("id") + '&name=' + $(this).attr("data-name") + '&price=' + $(this).attr("data-price"), success:function(result){
            $("#cabas-container").html(result);
        }});
    });

    $(document).on('click', '.product-add',function(){
        $.ajax({url: "/../controller/control_cart.php?add=" + $(this).attr("id"), success:function(result){
            $("#cart-container").html(result);
        }});
    });

    $(document).on('click', '.product-delete',function(){
        $.ajax({url: "/../controller/control_cart.php?delete=" + $(this).attr("id"), success:function(result){
            $("#cart-container").html(result);
        }});
    });

    $(document).on('click', '.product-delete-all',function(){
        $.ajax({url: "/../controller/control_cart.php?delete-all=" + $(this).attr("id"), success:function(result){
            $("#cart-container").html(result);
        }});
    });

});