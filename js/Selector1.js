function M1(val) {
    if (val == '0') {
    document.getElementById("b1").style.display = "none";
    document.getElementById("b2").style.display = "none";
    document.getElementById("b3").style.display = "none";



    }
    if (val == 'b1') {
    document.getElementById("b1").style.display = "block";
    document.getElementById("b2").style.display = "none";
    document.getElementById("b3").style.display = "none";



    }
    if (val == 'b2') {
    document.getElementById("b1").style.display = "none";
    document.getElementById("b2").style.display = "block";
    document.getElementById("b3").style.display = "none";
 


    }
    if (val == 'b3') {
    document.getElementById("b1").style.display = "none";
    document.getElementById("b2").style.display = "none";
    document.getElementById("b3").style.display = "block";
  

    }


}
