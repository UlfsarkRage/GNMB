


$(function () {


    $("#frm").submit(function (e) { 
        e.preventDefault();
        $("#msj_Login").text("");
        $("#loading").css("display","block");
        $("#login_btn").css("display","none");
        var usuario = $("#inputUsuario").val();
        var pass = $("#inputPass").val();
        
        $.post('login.php',{usuario: usuario, pass: pass})
        .done(function(data){
            var result =  data.trim();
            if (result == "success") {  
                window.location = "inicio.php";
            }else if(result == "Sin contraseña"){
                window.location = "regitro.php";
            }
            else{
                $("#loading").css("display","none");
                $("#login_btn").css("display","block");

                $("#msj_Login").html(result);
                $("#inputUsuario").select();
            }
        });

        
        
    });

  });