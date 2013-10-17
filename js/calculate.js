/**
 * Created with JetBrains PhpStorm.
 * User: Josh
 * Date: 10/16/13
 * Time: 9:13 PM
 * To change this template use File | Settings | File Templates.
 */

function calculate(){
    var p = 9.50
    /*alert("it works");*/
    if( document.getElementById("flavor1").text != "None"){
        document.getElementById("totpan").innerHTML="$" + p;
    }
    if(document.getElementById("flavor2").value != "none"){
        p = p+6.33;
        document.getElementById("totpan").innerHTML="$" + p;
    }
    if(document.getElementById("flavor3").value != "none"){
        p = p+6.33;
        document.getElementById("totpan").innerHTML="$" + p;
    }
    if(document.getElementById("mix1").value != "none"){
        p = p+2;
        document.getElementById("totpan").innerHTML="$" + p;
    }
    if(document.getElementById("mix2").value != "none"){
        p = p+2;
        document.getElementById("totpan").innerHTML="$" + p;
    }
    if(document.getElementById("swirled").checked == 1){
        p=p+.5;
        document.getElementById("totpan").innerHTML="$" + p;
    }

}