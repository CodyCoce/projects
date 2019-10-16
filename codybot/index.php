<?php
	include_once 'resources/tablelogin.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="daycare.ico" />
<meta name="description" content="An inventory page to show our luck with Pokemon Fusions.">
<meta name="keywords" content="Codybot,slarner,slarner.com,codybot,pokemon fusions inventory,">
<meta name="author" content="Steven Larner">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="resources/daycare.ico" />
	<title>CodyBot</title>
<style>
body {
	color:white;
	margin:0;
	padding:0px 200px 0px 140px;
	background-image:url("desktop-bg.png");
	background-repeat:repeat-y;
	background-size:cover;
	transition:1s;
	overflow:auto !important;
}
#cover {
	background-color:rgba(0,0,0,0.80);
	height:100%;
	width:100%;
	position:fixed;
	z-index:-1;
	overflow:auto !important;
}
#pokemon {
	text-align:center;
	display:flex;
	flex-wrap: wrap;
	padding:10px 70px 10px 70px;
	overflow:auto !important;
}
#pokemon p {
	font-weight:bold;
}
#pokemon img {
	width:150px;
}
h1 {
	font-size:40px;
	margin:40px 0px 0px 20px;
}

.navbar {
	position:fixed;
	left:0;
	top:0;
	height:100%;
	padding:0px 20px;
	background-color:#fff;
	font-size:25px;
	font-weight:bold;
	z-index:30;
	text-align:center;
	overflow:auto;
}
.navbar a {
	color:#777;
	text-decoration:none;
	padding:3px;
	border-bottom:none;
}
.navbar a:hover {
	color:#000;
}

div#pokemon p {
	display:none;
}
.show {
	display:block !important;
}
.active {
	color:black !important;
	border-bottom:solid #ff0000 3px !important;
}
#pokemon a {
	color:white;
	font-weight:bold;
	text-decoration:none;
	border-bottom:red 2px solid;
}
#pokemon a:hover {
	color:#f77;
}
#Commands .cmd {
	font-weight:bold;
}

.popup {
	background-color:white;
	border:solid 5px black;
	width:450px;
	display:none;
	position:fixed;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);
	opacity:0;
	transition:0.3s;
}
.popup a.closebtn {
	text-decoration:none;
	color:black;
	font-size:30px;
	padding:3px 13px;
	float:right;
	font-weight:bold;
}
.popup a.closebtn:hover {
	color:#f77;
}
.popup p {
	color:black;
	padding:0px 15px;
}

@media screen and (max-width:800px) {
	.navbar {
		font-size:16px;
	}
	body {
		padding:0px 100px 0px 86px;
		background-image:url("https://i.pinimg.com/736x/2f/97/39/2f97396594c4d8fe3bff417e877b11a0--pokemon-ditto-pokemon-fan-art.jpg");
		background-position:center;
	}
	.navbar {
		padding:0px 10px;
	}
	#pokemon {
		padding:10px 50px 10px 30px;
	}
	#pokemon img {
		width:130px;
	}
	.popup {
		width:220px;
		height:400px;
		overflow:scroll;
		position:fixed;
		right:0px;
		top:50%;
		transform:translate(-30%,-50%);
	}
	.cmd img {
		width:200px !important;
	}
}
</style>
</head>
<body onload="linkLoad()">

<nav class="navbar">
<p><a class="cally" onclick="cally()">Cally</a></p>
<p><a class="cece" onclick="cece()">CeCe</a></p>
<p><a class="cody" onclick="cody()">Cody</a></p>
<p><a class="crimzon" onclick="crimzon()">Crimzon</a></p>
<p><a class="emmi" onclick="emmi()">Emmi</a></p>
<p><a class="fluffy" onclick="fluffy()">Fluffy</a></p>
<p><a class="gleece" onclick="gleece()">Gleece</a></p>
<p><a class="limn" onclick="limn()">Limn</a></p>
<p><a class="moka" onclick="moka()">Moka</a></p>
<p><a class="mouse" onclick="mouse()">Mouse</a></p>
<p><a class="nel" onclick="nel()">Nel</a></p>
<p><a class="nox" onclick="nox()">Nox</a></p>
<p><a class="nyami" onclick="nyami()">Nyami</a></p>
<p><a class="regional" onclick="regional()">Regional<br>cryptid</a></p>
<p><a class="snek" onclick="snek()">Snek</a></p>
<p><a class="soof" onclick="soof()">Soof</a></p>
<p><a class="starry" onclick="starry()">Starry</a></p>
<p><a class="velvett" onclick="velvett()">Velvett</a></p>
<p><a class="yua" onclick="yua()">Yua</a></p>
<p><a class="credits active" onclick="credits()">Credits</a></p>
<p><a class="commands" onclick="commands()">Commands</a></p>
<p><a class="wildpokemon" onclick="wildpokemon()">Wild<br>Pokemon</a></p>
</nav>

<div id="cover">
<div id="pokemon">
<?php
	include 'resources/display.php';
	//$sql = "SELECT Trainer='".$trainer."'";
?>
<p id="Credits" class="show"><img src="pokeball.png" alt="Pokeball"><br>Pokémon is owned <br>by Nintendo, <br>The Pokémon Company, <br>and Game Freak.</p>
<p id="Credits" class="show"><img src="greatball.png" alt="Greatball"><br>Credit to Alex Onsager<br>for <a href="http://pokemon.alexonsager.net/">Pokemon Fusion</a><br>which inspired this<br>website.</p>
<p id="Credits" class="show"><img src="ultraball.png" alt="Ultraball"><br>Credit to <br><a href="http://pokefusion.japeal.com/">PokeFusion Generator</a><br>for<br><a href="http://pokefusion.japeal.com/">Pokemon Fusion Generator</a><br>which made this<br>project continue</p>
<p id="Credits" class="show"><img src="premiumball.png" alt="Premiumball"><br>Thank you to all my <br>friends and my family <br>for supporting me.</p>
<p id="Credits" class="show"><img src="masterball.png" alt="Masterball"><br>Thank you to my<br>girlfriend who never <br>leaves my side.</p>

<p id="Commands"><span class="cmd"><img src="pokemoncmd.png" alt="pokemoncmd"></span><br>Spawns a random Pokemon!<br><a onclick="popupone()">Read more</a></p>
<p id="Commands"><span class="cmd"><img src="inventorycmd.png" alt="inventorycmd"></span><br>Sends a link<br>to your Pokemon!<br><a onclick="popuptwo()">Read more</a></p>
<p id="Commands"><span class="cmd"><img src="catchcmd.png" alt="catchcmd"></span><br>When a shadow of<br>a Pokemon appears,<br>use this command<br>to catch them!<br><a onclick="popupthree()">Read more</a></p>
<p id="Commands"><span class="cmd"><img src="nicknamecmd.png" alt="nicknamecmd"></span><br>Sets the nickname<br>of the chosen<br>Pokemon to whatever<br>you write!<br><a onclick="popupfour()">Read more</a></p>
</div>
</div>

<div class="popup popupone">
<a class="closebtn" onclick="popuponeClose()">&times;</a>
<p>I use one of the tools listed in the credits tab, and combine two Pokemon into a terrible creation. That Pokemon is sent to your inventory.</p>
<p>Example:<br>
<strong>Arlow</strong>: cb;pokemon<br>
<strong>Cody</strong>: <strong>Arlow</strong>, you caught <strong>Cleftrio</strong>! <img src="https://images.alexonsager.net/pokemon/fused/51/51.35.png" alt="Cleftrio">.</p>
</div>

<div class="popup popuptwo">
<a class="closebtn" onclick="popuptwoClose()">&times;</a>
<p>Sends a link to this page.</p>
<p>Example:<br>
<strong>Arlow</strong>: cb;inventory<br>
<strong>Cody</strong>: <a href="https://www.codybot.slarner.com/">https://<wbr>www.codybot<wbr>.slarner.com</a>.</p>
</div>

<div class="popup popupthree">
<a class="closebtn" onclick="popupthreeClose()">&times;</a>
<p>When the Pokemon appears, you have a chance to catch the Pokemon by using at least one of the names of the Pokemon used in this fusion.</p>
<p>Example:<br>
<strong>Cody</strong>: A Pokemon appears in the shadows! <img src="shadow.png" alt="shadow"><br>
<strong>Arlow</strong>: cb;catch Clefairy<br>
<strong>Cody</strong>: The Pokemon emerges in all of its horror! You caught <strong>Cleftrio</strong>! (Clefairy + Dugtrio)<img src="https://images.alexonsager.net/pokemon/fused/51/51.35.png" alt="cleftrio"></p>
</div>

<div class="popup popupfour">
<a class="closebtn" onclick="popupfourClose()">&times;</a>
<p>Renames the Pokemon you selected to the name you chose. When renaming a Pokemon who already has a nickname, make sure to select that Pokemon by its existing nickname, not the original name.</p>
<p>Example:<br>
<strong>Arlow</strong>: cb;nickname Cleftrio Pugpignooz<br>
<strong>Cody</strong>: Your <strong>Celftrio</strong> has been renamed to <strong>Pugpignooz</strong>.</p>
</div>

<script>
function popupone() {
	$(".popupone").attr("style", "display:block;opacity:1;");
	$(".popuptwo").attr("style", "display:none;opacity:0;");
	$(".popupthree").attr("style", "display:none;opacity:0;");
	$(".popupfour").attr("style", "display:none;opacity:0;");
}
function popuptwo() {
	$(".popupone").attr("style", "display:none;opacity:0;");
	$(".popuptwo").attr("style", "display:block;opacity:1;");
	$(".popupthree").attr("style", "display:none;opacity:0;");
	$(".popupfour").attr("style", "display:none;opacity:0;");
}
function popupthree() {
	$(".popupone").attr("style", "display:none;opacity:0;");
	$(".popuptwo").attr("style", "display:none;opacity:0;");
	$(".popupthree").attr("style", "display:block;opacity:1;");
	$(".popupfour").attr("style", "display:none;opacity:0;");
}
function popupfour() {
	$(".popupone").attr("style", "display:none;opacity:0;");
	$(".popuptwo").attr("style", "display:none;opacity:0;");
	$(".popupthree").attr("style", "display:none;opacity:0;");
	$(".popupfour").attr("style", "display:block;opacity:1;");
}

function popuponeClose() {
	$(".popupone").attr("style", "display:none;opacity:0;");
}
function popuptwoClose() {
	$(".popuptwo").attr("style", "display:none;opacity:0;");
}
function popupthreeClose() {
	$(".popupthree").attr("style", "display:none;opacity:0;");
}
function popupfourClose() {
	$(".popupfour").attr("style", "display:none;opacity:0;");
}

function linkLoad() {
$(".navbar p a").attr("href", "javascript:void(0)");
$("#Commands a").attr("href", "javascript:void(0)");
$(".popup .closebtn").attr("href", "javascript:void(0)");
}

$(".navbar p a").click(function() {
	$(".navbar p a").removeClass("active");
	$(this).addClass("active");
});

function cally() {
	$("#pokemon p").removeClass("show");
	$("* #Cally").addClass("show");
}
function cece() {
	$("#pokemon p").removeClass("show");
	$("* #Cece").addClass("show");
}
function cody() {
	$("#pokemon p").removeClass("show");
	$("* #Cody").addClass("show");
}
function crimzon() {
	$("#pokemon p").removeClass("show");
	$("* #Crimzon").addClass("show");
}
function emmi() {
	$("#pokemon p").removeClass("show");
	$("* #Emmi").addClass("show");
}
function fluffy() {
	$("#pokemon p").removeClass("show");
	$("* #Fluffy").addClass("show");
}
function gleece() {
	$("#pokemon p").removeClass("show");
	$("* #Gleece").addClass("show");
}
function limn() {
	$("#pokemon p").removeClass("show");
	$("* #Limn").addClass("show");
}
function moka() {
	$("#pokemon p").removeClass("show");
	$("* #Moka").addClass("show");
}
function mouse() {
	$("#pokemon p").removeClass("show");
	$("* #Mouse").addClass("show");
}
function nel() {
	$("#pokemon p").removeClass("show");
	$("* #Nel").addClass("show");
}
function nox() {
	$("#pokemon p").removeClass("show");
	$("* #Nox").addClass("show");
}
function nyami() {
	$("#pokemon p").removeClass("show");
	$("* #Nyami").addClass("show");
}
function regional() {
	$("#pokemon p").removeClass("show");
	$("* #Regional").addClass("show");
}
function snek() {
	$("#pokemon p").removeClass("show");
	$("* #Snek").addClass("show");
}
function soof() {
	$("#pokemon p").removeClass("show");
	$("* #Soof").addClass("show");
}
function starry() {
	$("#pokemon p").removeClass("show");
	$("* #Starry").addClass("show");
}
function velvett() {
	$("#pokemon p").removeClass("show");
	$("* #Velvett").addClass("show");
}
function yua() {
	$("#pokemon p").removeClass("show");
	$("* #Yua").addClass("show");
}
function credits() {
	$("#pokemon p").removeClass("show");
	$("* #Credits").addClass("show");
}
function commands() {
	$("#pokemon p").removeClass("show");
	$("* #Commands").addClass("show");
}
function wildpokemon() {
	$("#pokemon p").removeClass("show");
	$("* #None").addClass("show");
}
</script>
</body>
</html>
