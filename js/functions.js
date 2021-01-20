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
        $.ajax({url: "/../index.php?accio=cart-visible&add=" + $(this).attr("id") + '&name=' + $(this).attr("data-name") + '&price=' + $(this).attr("data-price"), success:function(result){    
            $("#cabas-container").html(result);
        }});
    });

    $(document).on('click', '.product-add',function(){
        $.ajax({url: "/../index.php?accio=cart-update&add=" + $(this).attr("id"), success:function(result){
            $("#cart-container").html(result);
        }});
    });

    $(document).on('click', '.product-delete',function(){
        $.ajax({url: "/../index.php?accio=cart-update&delete=" + $(this).attr("id"), success:function(result){
            $("#cart-container").html(result);
        }});
    });

    $(document).on('click', '.product-delete-all',function(){
        $.ajax({url: "/../index.php?accio=cart-update&delete-all=" + $(this).attr("id"), success:function(result){
            $("#cart-container").html(result);
        }});
    });

    $(document).on('click', '.product-purchase',function(){
        $.ajax({url: "/../index.php?accio=confirm-order", success:function(result){
            $("#layout").html(result);
        }});
    });

});


