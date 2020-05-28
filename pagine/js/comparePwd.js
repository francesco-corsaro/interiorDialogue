var compare = document.getElementById("myInput1");
compare.addEventListener('click',compare_pwd);

function compare_pwd(){
    var pwd = document.getElementById("myInput").value;
    var pwd1 = document.getElementById("myInput1").value;
    if (pwd === pwd1) {
        document.getElementById("mex_err").innerHTML =
            "Passwrord: ok!";
        document.getElementById("mex_err").style.color =
            'green';
    } else {
        document.getElementById("mex_err").innerHTML =
            "Le password non coincidono";
        document.getElementById("mex_err").style.color =
            'red';
    }
}                       				