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

    $(".list").on('click', '.product',function(){
        $.ajax({url: "/../controller/control_detail_product.php?producte=" + $(this).attr("id"), success:function(result){
            $(".list").html(result);
        }});
    });

    $('#logo-usuario').click( function(){
        $('.Toggle').slideToggle('flex');
    });
});


