$(document).ready(function () {
    $("#butao1").click(function () {
        $.ajax({
            type: 'GET',
            url: '/texto.html',
            data: "",
            success: function(dados){
                $("#div_retorno").html(dados);
            },
            beforeSend: function(){
                $("#div_retorno").css({display: "block"}); 
            }
        });
    });


});

