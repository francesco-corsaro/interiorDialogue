let mex = document.getElementById('myMex');
let good = document.getElementById('buono');
let io = document.getElementById('io');
let bad = document.getElementById('cattivo');
let invia = document.getElementById('invia');
let partOfMe;
good.addEventListener('click',()=>{
    partOfMe = 3;
});

bad.addEventListener('click', () => {
    partOfMe = 1;
    
});

io.addEventListener('click', () => {
    partOfMe = 2;
});


function sendMex(phpvariable,str) {
    if (str == "") {
        mex.innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "backEnd/dbUtility/insertConversazione.php?" + phpvariable +"=" + str, true);
        xmlhttp.send();
    }
}

invia.addEventListener('click',() => {
    console.log(mex.value);
    if (partOfMe ) {
        let arraySended=[mex.value,partOfMe];

        sendMex('q', arraySended);
        
        mex.value = "";
        partOfMe="";
        document.getElementById("mustBeShowed").href;
    }else{
        console.log('nessun genitore selezionato')
    }
    
    
    
    
});

