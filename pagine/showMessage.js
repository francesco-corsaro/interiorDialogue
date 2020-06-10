function showMex(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "backEnd/dbUtility/showMessages.php");
    xmlhttp.send();
}
window.addEventListener("load", function (event) {
    showMex();

});
