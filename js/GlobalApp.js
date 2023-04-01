$(function(){
setInterval(function () {

    $.post('/autenticacion.php',{checkLogin: 'checkLogin'})
    .done(function(data){
        var result =  data.trim();
        
        if (result == "fail") { 
            console.log('fail'); 
            window.location = "/";
        }
    });

}, 1000);


 
});