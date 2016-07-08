$(document).ready(function(){

    $("#test_button").bind('click',function(){

        $.ajax({
            url:'ajax/method/test',
            type:'post',
            success:function(result){
              $("#test").text(result);
            }
        });
    })


})