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

    $(document).on('click', '.product-d',function(){
        $.ajax({url: "/../index.php?accio=detail-product&producte=" + $(this).attr("id"), success:function(result){
            $(".list").html(result);
        }});
    });

    $(document).on('click', '.quantity-add',function(){
        $.ajax({url: "/../index.php?accio=detail-product&add=" +  $(this).attr("data-quantity") + '&producte=' +  $(this).attr("data-product"), success:function(result){
            $(".list").html(result);
        }});
    });

    $(document).on('click', '.quantity-delete',function(){
        $.ajax({url: "/../index.php?accio=detail-product&delete=" + $(this).attr("data-quantity") + '&producte=' +  $(this).attr("data-product"), success:function(result){
            $(".list").html(result);
        }});
    });


    $('#logo-usuario').click( function(){
        $('.Toggle').slideToggle('flex');
    });

    $('#logo-search').click( function(){
        $('.Toggle-search').slideToggle('flex');
    });
/*
    $(document).on('click', '.purchase-button',function(){
        $.ajax({url: "/../index.php?accio=cart-visible&add=" + $(this).attr("id") + '&name=' + $(this).attr("data-name") + '&price=' + $(this).attr("data-price") + '&img=' + $(this).attr("data-img") , success:function(result){    
            $("#cabas-container").html(result);
        }});
    });*/

    $(document).on('click', '.purchase-button',function(){
        $.ajax({url: "/../index.php?accio=cart-visible&add=" + $(this).attr("id") + '&name=' + $(this).attr("data-name") + '&price=' + $(this).attr("data-price") + '&img=' + $(this).attr("data-img") +'&quantity=' + $(this).attr("data-quantity"), success:function(result){    
            $("#cabas-container").html(result);
        }});
    });

    $(document).on('click', '.quantity-add',function(){
        $.ajax({url: "/../index.php?accio=cart-update&add=" + $(this).attr("id"), success:function(result){
            $("#cart-container").html(result);
        }});
    });

    $(document).on('click', '.quantity-delete',function(){
        $.ajax({url: "/../index.php?accio=cart-update&delete=" + $(this).attr("id"), success:function(result){
            $("#cart-container").html(result);
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

    $(document).on('click', '#delete-all',function(){
        $.ajax({url: "/../index.php?accio=cart-update&delete-cart=", success:function(result){
            $("#cart-container").html(result);
        }});
    });

    $(document).on('click', '#product-purchase',function(){
        $.ajax({url: "/../index.php?accio=confirm-order", success:function(result){
            $("#layout").html(result);
        }});
    });
});

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function warning(type){
    $.ajax({url: "/../index.php?accio=alert&type=" + type, success:function(result){
        $(".alert-container").html(result);
    }});
};

// function empty(){
//     await sleep(2000);
//     $.ajax({url: "", success:function(result){
//         $(".alert-container").remove();
//     }});
// }