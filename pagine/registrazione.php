<?php
session_start();
if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['pwd1'])&& isset($_POST['pwd2'])) {
    include 'backEnd/backRegistrazione.php';
}
?>
<html>
    <head>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Registrazione </title>
    	<link href="https://fonts.googleapis.com/css2?family=Gothic+A1&display=swap" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@600&display=swap" rel="stylesheet">
    	<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body >
    	<div class="img" style="background-image: url('img/dialogoInterno1.jpg');">
    	<h1>Dialogo Interiore</h1>
    	
    	<div class="roi">
    	  Crea il tuo <em>account</em> per partecipare al programma
    	</div>
    	<div>
    	 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  >
    	 	<div class="cont-form">
        	 	
        	 	
        	 	<input name="email" type="TEXT" class="input-field" placeholder="Email" data-validate="Per favore, inserisci la tua email" required>
        	 	
        	 	<input name="username" type="TEXT" class="input-field" placeholder="Username" data-validate="Per favore, inserisci il nome" autocomplete = "username" required>
        	 	
        	 	<div class="input-container">
        	 	  <input name="pwd1" type="password" class="pwd-field" style="display: inline;" maxlength="8" id="myInput" placeholder="Crea nuova password" autocomplete = "new-password" required  >
        	 	  <img  id="myImage"  src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1NTEuMTIyIDU1MS4xMjIiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDU1MS4xMjIgNTUxLjEyMiIgd2lkdGg9IjI0cHgiPjxwYXRoIGQ9Im0yNzUuNTYxIDY4Ljg4N2MtMzguNjkgMC03NS43NiA4Ljc2OS0xMTAuMTc0IDIzLjQzN2wyNi4yMzYgMjYuMjM2YzI2LjU4NS05LjYzMSA1NC43NjgtMTUuMjI4IDgzLjkzOC0xNS4yMjggMTA2LjUzMiAwIDIwMi4yODQgNjguOTc1IDI0MC4wNzcgMTcyLjIyOC0xNC40MDEgMzkuMzQ4LTM3LjMwNSA3My42MTEtNjUuOTMxIDEwMS4wODNsMjQuMjIyIDI0LjIyMmMzMy42MTUtMzIuNDEgNjAuMjg2LTcyLjk1NyA3Ni4yNzMtMTE5LjczOCAxLjIyOC0zLjYxNiAxLjIyOC03LjUxOCAwLTExLjEzNC00MS4xMDctMTIwLjI5LTE1MS40NzUtMjAxLjEwNi0yNzQuNjQxLTIwMS4xMDZ6IiBmaWxsPSIjMDAwMDAwIi8+PHBhdGggZD0ibTM0My45ODMgMjcwLjkyMSAzMS4wNjMgMzEuMDYzYzIuMjYtOC40ODUgMy44NTItMTcuMjMzIDMuODUyLTI2LjQyMyAwLTU2Ljk4My00Ni4zNTMtMTAzLjMzNy0xMDMuMzM3LTEwMy4zMzctOS4xOSAwLTE3LjkzOCAxLjU5Mi0yNi40MjMgMy44NTJsMzEuMDYzIDMxLjA2M2MzNC4yMzUgMi4zMjkgNjEuNDUzIDI5LjU0NyA2My43ODIgNjMuNzgyeiIgZmlsbD0iIzAwMDAwMCIvPjxwYXRoIGQ9Im0zNC40NDEgNTguNzk2IDY5LjgzNyA2OS44MzdjLTQ2LjI1MyAzNC45OC04My4zODUgODIuOTE0LTEwMy4zNTggMTQxLjM2MS0xLjIyOCAzLjYxNi0xLjIyOCA3LjUxOCAwIDExLjEzNCA0MS4xMDYgMTIwLjI5MSAxNTEuNDczIDIwMS4xMDcgMjc0LjY0IDIwMS4xMDcgNTEuMiAwIDk5LjU1Ny0xNS4wNDUgMTQyLjIxNi00MC4xMDNsNzQuNTQ5IDc0LjU0OSAyNC4zNTQtMjQuMzU0LTQ1Ny44ODUtNDU3Ljg4Ni0yNC4zNTQgMjQuMzU0em0yNDEuMTIgMzg4Ljk5NGMtMTA2LjUzMiAwLTIwMi4yODQtNjguOTc1LTI0MC4wNzctMTcyLjIyOCAxOC42NC01MC45MzEgNTIuMTM3LTkyLjM1OCA5My4zNzgtMTIyLjM0NWw2Mi42NDkgNjIuNjQ5Yy0xMi4wNCAxNi44OTctMTkuMjg3IDM3LjQxNC0xOS4yODcgNTkuNjk1IDAgNTYuOTgzIDQ2LjM1MyAxMDMuMzM3IDEwMy4zMzcgMTAzLjMzNyAyMi4yODEgMCA0Mi43OTgtNy4yNDcgNTkuNjk1LTE5LjI4N2w1Ny4zMTUgNTcuMzE1Yy0zNS41NzIgMTkuMjc2LTc1LjE5MyAzMC44NjQtMTE3LjAxIDMwLjg2NHptLTU5LjEzMi0yMDcuMDA1IDkzLjkxIDkzLjkxYy0xMC4yNDcgNi4wNTEtMjIuMDM5IDkuNzU5LTM0Ljc3OCA5Ljc1OS0zNy45OTUgMC02OC44OTEtMzAuODk3LTY4Ljg5MS02OC44OTEgMC0xMi43MzkgMy43MDgtMjQuNTMxIDkuNzU5LTM0Ljc3OHoiIGZpbGw9IiMwMDAwMDAiLz48L3N2Zz4K"/>
        	 	</div>
        	 	
        	 	
        	 	  <input name="pwd2" type="password"  class="input-field" maxlength="8" id="myInput1" placeholder="Conferma Password" autocomplete = "new-password" required  >
        	 	
        	 	<p id="mex_err"><p>
        	 	
        	 	<input type="submit" value="Registrati"/>
        	 	<script src="js/showPass.js"></script>
        	 	<script src="js/comparePwd.js"></script>
    	 	</div>
    	 </form>
    	</div>
    	
    	<footer style="font-size: 1vw">
    	Icons made by <a href="https://www.flaticon.com/authors/those-icons" title="Quelle icone">Quelle icone</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>
        <br>     
    	Photo by Yair Mejía on Unsplash
    	</footer>
    	</div>
    </body>
    </html>