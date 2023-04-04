



$(function(){

$(document).ready(function () { 
    document.getElementById('TipoLlamada').options[0].selected = 'selected';  


    
    $('#modalConfirm button').click(function (e) { 
        e.preventDefault();
        $("#frmInteraccion #btnEnd").click();
    });
    
});


function Modalloading(mode){
    if(mode == 'ON'){
        $("#loadMe").modal({
            backdrop: "static", //remove ability to close modal with click
            keyboard: false, //remove option to close with keyboard
            show: true //Display loader!
          });
    }else{
        setTimeout(function() {
            $("#loadMe").modal("hide");
          }, 500);

    }
}




$("#TipoLlamada").select2();

    Modalloading('ON');
    $.post("consulta.php", {lista: 'a'})
    .done(function (data) {
        
        var list = data.split('||');
        for (i = 0; i < list.length; i++) {
            if (list[i] != ""){
                var x = document.getElementById("TipoLlamada");
                var option = document.createElement("option");
                option.text = list[i];
                x.add(option);
            }
          }
        });
    Modalloading('OFF');

    var prevalue;
    $('#TipoLlamada').on('select2:selecting', function (evt) {
        prevalue = $('#TipoLlamada').val();
       
      });

    $("#TipoLlamada").on('change',function(){
       
       
 


        
          

        if ($("#frmInteraccion").html()){

            // $("#modalConfirm").modal("show");
            
            $('#TipoLlamada').val( prevalue);
            $('.select2-selection__rendered').attr("title", prevalue);
            $('.select2-selection__rendered').text( prevalue);
            

            $("#modalConfirm").modal("show");


            // $("#frmInteraccion button").click();
            return false;
            
        }
        
        Modalloading('ON');




        $("#tablaTipificacion").html("");
        $("#tablaSondeo").html("");

        var tllamada = $("#TipoLlamada").val();
        document.getElementById('contenido').style.display = 'flex';

        $.post("consulta.php", {TipollamadaLinks: tllamada})
        .done(function (data) {
            var result =  data.trim();
            $("#tablaLinks").html(result);
        });




        $.post("consulta.php", {Tipollamada: tllamada})
        .done(function (data) {
            var result =  data.trim();
            
            Modalloading('OFF');
            $("#tablaSondeo").html(result);

            var resultado = document.getElementById("resultado");
            resultado.className = "";
            resultado.innerText = "";
        
            
            $("select").on('change',function(){
                var bool = '';
            var value = '';

             $("#listPreguntas > tbody  > tr").each(function(){
                $('td', this).each(function () {
                    var value = $(this).find(":input").val();
                    value ? (bool == '' ? bool += value : bool += ';' + value) : '';
                 }) 
             });
             

             if(bool != ""){
                    $.post("consulta.php", {TipollamadaTipi: tllamada, Resultado: bool})
                    .done(function (data) {

                        var json_data = JSON.parse(data);                        
                        
                        document.getElementById("tablaTipificacion").innerHTML = json_data.codeEnd;

                        if($("#vrresultado").text() == 'OK'){
                            resultado.innerText = 'SI CREAR';
                            resultado.className = "result resultSuccess";

                            
                        }else{
                            resultado.innerText = 'NO CREAR';
                            resultado.className = "result resultdanger";

                        }


                        $("#frmInteraccion #btnCancel").click(function (e) { 
                            e.preventDefault();
                            
                            var tllamada = $("#TipoLlamada").val();
                            var idInteraccion = $("#idInteraccion").val();
                            var idAveria = $("#idAveria").val();
                            if(idAveria == undefined){
                                idAveria = '';
                            }

                            var tipo1 = $("#tipo1").text();
                            var tipo2 = $("#tipo2").text();
                            var tipo3 = $("#tipo3").text();
                            var tipoTicket = $("#tipoTicket").text();
                            var codigo = $("#codigo").text();
                            var subCodigo = $("#subCodigo").text();
                            var codigoApertura = $("#codigoApertura").text();
                            var colaEnvio = $("#colaEnvio").text();
                            var fresultado = $("#resultado").text();
                            var idTipi = $("#id_tipificacion").val();
                            
                            console.log(idTipi);

                            $.post('consulta.php',{ fTipoLlamada: tllamada, 
                                                    fidInteraccion: idInteraccion, 
                                                    fidAveria: idAveria,
                                                    ftipo1: tipo1,
                                                    ftipo2: tipo2,
                                                    ftipo3: tipo3,
                                                    ftipoTicket: tipoTicket,
                                                    fcodigo: codigo,
                                                    fsubCodigo: subCodigo,
                                                    fcodigoApertura: codigoApertura,
                                                    fcolaEnvio: colaEnvio,
                                                    fresultado: fresultado,
                                                    fidtTipi: idTipi
                                                })
                            .done(function(data){
                                var result =  data.trim();
                                if (result == "success") {
                                    location.reload(); 
                                }
                                else{
                                    alert('Los datos no se guardaron \n Informar al supervisor');
                                    location.reload(); 
                                }
                            });

                        });

                        $("#frmInteraccion").submit(function (e) { 
                            e.preventDefault();
                    
                            var tllamada = $("#TipoLlamada").val();
                            var idInteraccion = $("#idInteraccion").val();
                            var idAveria = $("#idAveria").val();
                            if(idAveria == undefined){
                                idAveria = '';
                            }

                            var tipo1 = $("#tipo1").text();
                            var tipo2 = $("#tipo2").text();
                            var tipo3 = $("#tipo3").text();
                            var tipoTicket = $("#tipoTicket").text();
                            var codigo = $("#codigo").text();
                            var subCodigo = $("#subCodigo").text();
                            var codigoApertura = $("#codigoApertura").text();
                            var colaEnvio = $("#colaEnvio").text();
                            var fresultado = $("#resultado").text();
                            var idTipi = $("#id_tipificacion").val();
                            console.log(idTipi);
                            

                            $.post('consulta.php',{ fTipoLlamada: tllamada, 
                                                    fidInteraccion: idInteraccion, 
                                                    fidAveria: idAveria,
                                                    ftipo1: tipo1,
                                                    ftipo2: tipo2,
                                                    ftipo3: tipo3,
                                                    ftipoTicket: tipoTicket,
                                                    fcodigo: codigo,
                                                    fsubCodigo: subCodigo,
                                                    fcodigoApertura: codigoApertura,
                                                    fcolaEnvio: colaEnvio,
                                                    fresultado: fresultado,
                                                    fidtTipi: idTipi

                                                })
                            .done(function(data){
                                var result =  data.trim();
                                if (result == "success") {
                                    location.reload(); 
                                }
                                else{
                                    alert('Los datos no se guardaron \n Informar al supervisor');
                                    location.reload(); 
                                }
                            });
                      
                        });


                    });
                    // value = '';
                    // bool = '';
             }
            }); 
        });    
    });





});




