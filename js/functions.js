$(document).ready(function(){  //on click?
    $("#graus").change(function(){
        $.ajax({url: "mencions.php?grau=" + $("#graus").val(), success:function(result){
            $("#mencions").html(result);
        }});
    });
});