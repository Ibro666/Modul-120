window.onload=function() {

function timeOut() {
    if (confirm("Mit OK setzen Sie Ihren Einkauf fort.") == false){
        location.href="./screen-befor.php";
        //open("screen-befor.php");
    } else {
        setTimeout(timeOut, 1000*60); 
    }
    return;
}

setTimeout(timeOut, 1000*60);
}