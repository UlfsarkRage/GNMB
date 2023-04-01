


$(function () {

    $(".reveal").on('click',function() {
        var $pwd = $(".pwd");
        if ($pwd.attr('type') === 'password') {
            $pwd.attr('type', 'text');
        } else {
            $pwd.attr('type', 'password');
        }
    });

    $("#frm").submit(function (e) { 
        e.preventDefault();
        $("#msj_Login").text("");
        $("#loading").css("display","block");
        $("#login_btn").css("display","none");
        

        if ($("#inputPass1").val() == $("#inputPass2").val()){
        var usuario = $("#inputUsuario").val();
        var nombre =  $("#inputNombre").val();
        var apellidos =  $("#inputApellidos").val();
        var contrasena =  $("#inputPass1").val();
        var perfil =  $("#perfil").val();



        $.post('registrouser.php',{usuario: usuario, nombre: nombre, apellidos: apellidos, contrasena: contrasena, perfil: perfil})
        .done(function(data){

            
            var result =  data.trim();

            if (result == "success") { 
                alert('Se registró correctamente');
                window.location = "index.php";
            }else{
                $("#loading").css("display","none");
                $("#login_btn").css("display","block");

                $("#msj_Login").text(result);
                $("#inputUsuario").select();
            }
        });


        }else{
            $("#loading").css("display","none");
            $("#login_btn").css("display","block");
            $("#msj_Login").text('Las contraseñas no son iguales');
            $("#inputPass1").select();
        }



    });

  });