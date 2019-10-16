<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="http://flightrising.com/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://flightrising.com/favicon.ico" type="image/x-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<meta charset="UTF-8">
<title>FlightRising Cards</title>
<style>
body {margin:0;padding:10px;background-color:#EDE8D7;}
table {width:100%;}
#card-container {display:block;margin:10px 10px;}
#card {
	border-radius:30px;
	background-color:#FFE8D6;
	border:solid 2px #000;
	width:380px;
	-moz-box-shadow:inset 0 0 10px #888;
	-webkit-box-shadow:inset 0 0 10px #888;
	box-shadow:inset 0 0 10px #888;
	padding:15px;
}
#card-image {padding-bottom:20px;}
#card-image img {width:380px;height:380px;}
.img {display:none;float:right;padding-bottom:24.5px;}
#card-text {font-size:18px;vertical-align:text-bottom;}
#card-text img {width:15px;height:15px;}

.td-l {text-align:left;font-weight:bold;}
.td-m {text-align:right;width:15px;}
.td-r {text-align:right;font-weight:none;width:20px;}


#dragon-card {
	display:flex;
	flex-wrap: wrap;
	padding:10px;
	overflow:auto !important;
	text-align:center;
}
input, button {width:100%;margin-bottom:20px;}

form {
	padding:20px 20px 60px 10px;
	text-align:left;
}
form #none, form #reserved, form #traded, form #sold {
	float:left;
	display:block;
	clear:right;
	margin-top:-15px;
}


#domChangeForm {opacity:0;transition:0.2s ease-out;}






.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
	background-color:#D1CEBE;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #000;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #333;
}

.sidenav .closebtn {
    position: absolute;
    top: 8px;
    left: -17px;
    font-size: 36px;
	transition:0.3s
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
@media screen and (min-width:900px) {
    body,html {
        zoom:0.8;
    }
}



.remove-whitespace-header2 {
	margin:5px 0px;
}


select {
	background-color:#FFE8D6;
	border:none;
	outline:none;
	font-size:16px;
}
option {
	border:none;
	outline:none;
}
.check-box {
	width:30px !important;
}

.multipleDragonsImageFitChild {
	width:140px !important;
	height:140px !important;
	display:block !important;
}
.multipleDragonsImageFitAdult {
	width:240px !important;
	height:240px !important;
	display:block !important;
}
.fr-button {
	position:absolute;
	top:8px;
	right:17px;
	transition:0.3s;
}
.fr-button img {
	width:36px;
}
.fr-button:hover {
	opacity:0.80;
}

.required {
	font-weight:bold;
}

.popup {
	position:fixed;
	transform:translate(-50%, -50%);
	top:50%;
	left:50%;
	border-radius:5px;
	box-shadow:#333 0px 0px 8px 2px;
	text-align:right;
	background-color:#EDE8D7;
	text-align:center;
}
.popup p {
	padding:10px 20px;
	font-size:25px;
}
.popup .close {
	font-weight:bold;
	font-size:20px;
	padding:5px 10px;
	margin:0px;
	color:black;
	transition:0.2s;
	position:fixed;
	display:inline;
	top:0;
	right:0;
}
.popup .close:hover {
	text-decoration:none;
	color: #ffE10D;
}

.example {
	position:fixed;
	top:0;
	right:0;
	background-color:#D1CEBE;
	border-radius:0px 0px 0px 20px;
	padding:10px;
	transition:0.3s;
}
.hide {
	display:none;
}

.remove-card {
    color:white;
    background-color:#a00;
    text-decoration:none;
    font-size:40px;
    font-weight:bold;
    border:solid black 3px;
    border-radius:50%;
    padding:0px 10px;
    float:right;
}
.remove-card-popup {
    position:fixed;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    width:600px;
    height:400px;
    background-color:#EDE8D7;
    padding:10px;
    border-radius:20px;
    box-shadow:0px 0px 4px 2px #333;
    text-align:center;
}
.remove-card-popup form {
    padding:0px 5px;
}
.remove-card-popup input, .remove-card-popup a {
    font-size:20px;
    text-align:center;
}
.remove-card-popup .yes {
    width:100%;
}
.remove-card-popup .yes input {
    width:47.5%;
}
.remove-card-popup a, .remove-card-popup input[type=submit] {
    text-decoration:none;
    color:white;
    background-color:#a00;
    border:none;
    outline:none;
    font-weight:bold;
    padding:10px;
    border-radius:20px;
    cursor:pointer;
}
.remove-card-popup .no {
    width:100%;
}
.remove-card-popup input[type=text] {
    text-decoration:none;
    color:black;
    border:none;
    outline:none;
    font-weight:bold;
    padding:10px;
    border-radius:20px;
}
.disabled {
    background-color:#aaa;
}
.disabled::placeholder {
    color:#a00;
}
</style>
</head>
<body id="main">

<?php

if (isset($_GET["remove"])) {
    if ($_GET["remove"] == "true") {
echo '
<div class="remove-card-popup">
    <h1>Are you sure you want to remove this dragon card?</h1>
    <form action="delete.php?id='.$_GET["idCard"].'" method="post">
        <div class="yes">
            <input type="text" placeholder="keycode" ';
                if (isset($_GET["pass"])) { 
                    if ($_GET["pass"] != "true") {
		            	echo 'disabled class="disabled"';
	                }
	                else if ($_GET["pass"] == "true") {
		            	
	                }
                }
	            echo '></input>
            <input type="submit" value="Yes"></input>
        </div>
    </form>
        <div class="no">
            <a type="submit" value="Cancel" href="/">Cancel</a>
        </div>
</div>
';
    }
}

?>

<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" id="closebtn" onclick="closeNav()">&times;</a><a href="http://flightrising.com/main.php" class="fr-button" target="blank_"><img src="http://www.flightrising.com/favicon.ico"></a>
	
	<?php
	if (isset($_GET["error"])) {
		echo '<div class="popup"><a href="index.php" class="close">&times;</a>';
		if ($_GET["error"] == "emptyfields") {
			echo "<p>The required fields have been left empty. Please go back and fill them.</p>";
		}
		if ($_GET["error"] == "uid") {
			echo "<p>Please include your FlightRising username.</p>";
		}
		if ($_GET["error"] == "uidimage") {
			echo "<p>Please include your FlightRising username, and the image URL for your dragon.</p>";
		}
		if ($_GET["error"] == "uidnum") {
			echo "<p>Please include your FlightRising username, and the ID of your dragon.</p>";
		}
		if ($_GET["error"] == "image") {
			echo "<p>Please include the image URL for your dragon.</p>";
		}
		if ($_GET["error"] == "imagenum") {
			echo "<p>Please include the image URL, and the ID of your dragon.</p>";
		}
		if ($_GET["error"] == "num") {
			echo "<p>Please include the ID of the dragon.</p>";
		}
		echo '<p>Required input fields have bold text above them and are marked with an *.</p></div>';
	}
	?>
	
<form action="updatetable.php" method="POST">
<label for="uid" class="required">Your FR Username *</label>
<input name="uid" placeholder="Cody28822">

<label for="image" class="required">URL of the dragon *</label>
<input name="image" placeholder="http://flightrising.com/rendern/350/151809/15180885_350.png?mtime=W-iKbgACiKI">

<label for="imagelink">Link to the dragon</label>
<input name="imagelink" placeholder="http://flightrising.com/main.php?p=lair&id=189514&tab=dragon&did=49409226">

<label for="name">Name of the dragon</label>
<input name="name" placeholder="Rhapsody">

<label for="num" class="required">ID of the dragon *</label>
<input name="num" placeholder="15180885">

<label for="gender">Gender of the dragon</label>
<input name="gender" placeholder="Female">

<label for="level">Level of the dragon</label>
<input name="level" placeholder="1">

<label for="breed">Breed of the dragon</label>
<input name="breed" placeholder="Coatl">

<label for="pc">Primary Color of the dragon</label>
<input name="pc" placeholder="Aqua">

<label for="pg">Primary Gene of the dragon</label>
<input name="pg" placeholder="Crystal">

<label for="sc">Secondary Color of the dragon</label>
<input name="sc" placeholder="Magenta">

<label for="sg">Secondary Gene of the dragon</label>
<input name="sg" placeholder="Shimmer">

<label for="tc">Tertiary Color of the dragon</label>
<input name="tc" placeholder="Lemon">

<label for="tg">Tertiary Gene of the dragon</label>
<input name="tg" placeholder="Circuit">

<label for="ec">Eye Type of the dragon</label>
<input name="ec" placeholder="Light">

<label for="eg">Eye Rarity of the dragon</label>
<input name="eg" placeholder="Common">

<label for="tp">Treasure Price of the dragon</label>
<input name="tp" placeholder="8000">

<label for="gp">Gem Price of the dragon</label>
<input name="gp" placeholder="8">

<!--<label for="keycode">Passcode to set restrictions</label>
<input name="keycode" placeholder="****">-->

<button name="submit" value="submit">Submit</button>
</form>
</div>

<span style="font-size:30px;cursor:pointer;transition:0.3s;" onclick="openNav()" id="openNav">&#9776;</span>

<div id="dragon-card">
<?php
	include 'display.php';
?>
</div>

<div class="example" style="display:none;opacity:0;">

	<div id="card-example"><h1 align="center">EXAMPLE</h1>
		<div id="card-image"><img src="media/blank female guardian.png" alt="dragon-image" class="dragon-example-image"></div>
		<div id="card-text">
			<table>
				<tbody>
					<tr class="uid hide">
						<td class="td-l">Owner: </td>
						<td class="td-r" colspan="2"><span class="dragon-example-uid"></span></td>
					</tr>
					<tr class="name hide">
						<td class="td-l">Name: </td>
						<td class="td-r" colspan="2"><span class="dragon-example-name"></span></td>
					</tr>
					<tr class="id hide">
						<td class="td-l">ID: </td>
						<td class="td-r" colspan="2">&num;<span class="dragon-example-num"></span></td>
					</tr>
					<tr class="gender hide">
						<td class="td-l">Gender: </td>
						<td class="td-m"></td><td class="td-r"><span class="dragon-example-gender"></span></td>
					</tr>
					<tr class="level hide">
						<td class="td-l">Level: </td>
						<td class="td-r" colspan="2"><span class="dragon-example-level"></span></td>
					</tr>
					<tr class="breed hide">
						<td class="td-l">Breed: </td>
						<td class="td-r" colspan="2"><span class="dragon-example-breed"></span></td>
					</tr>
					<tr class="gc-primary hide">
						<td class="td-l">Primary Color/Gene: </td>
						<td class="td-r" colspan="2"><span class="dragon-example-pc"></span>/<span class="dragon-example-pg"></span></td>
					</tr>
					<tr class="gc-secondary hide"><td class="td-l">Secondary Color/Gene: </td>
						<td class="td-r" colspan="2"><span class="dragon-example-sc"></span>/<span class="dragon-example-sg"></span></td>
					</tr>
					<tr class="gc-tertiary hide"><td class="td-l">Tertiary Color/Gene: </td>
						<td class="td-r" colspan="2"><span class="dragon-example-tc"></span>/<span class="dragon-example-tg"></span></td>
					</tr>
					<tr class="gc-eye hide"><td class="td-l">Eye Type/Rarity: </td>
						<td class="td-r" colspan="2"><span class="dragon-example-ec"></span>/<span class="dragon-example-eg"></span></td>
					</tr>
					<tr class="price hide"><td class="td-l">Price: </td>
						<td class="td-m"><img src="media/icon_treasure.png" alt="Treasure" title="Treasure"></td>
						<td class="td-r"><span class="dragon-example-tp"></span></td>
					</tr>
					<tr class="price-2 hide">
						<td class="td-l"></td>
						<td class="td-m"><img src="media/icon_gems.png" alt="Gems" title="Gems"></td>
						<td class="td-r"><span class="dragon-example-gp"></span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
						
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
	document.getElementById("openNav").style.opacity = "0";
	document.getElementById("openNav").style.pointerEvents = "none";
	document.getElementById("domChangeForm").style.opacity = "1";
	document.getElementById("closebtn").style.opacity = "1";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
	document.getElementById("openNav").style.opacity = "1";
	document.getElementById("openNav").style.pointerEvents = "auto";
	document.getElementById("domChangeForm").style.opacity = "0";
	document.getElementById("closebtn").style.opacity = "0";
}






/* v LEAVE THIS ALONE v */
/* The timer when typing in the input fields */
pauseTime = 600;

/* Only need one timer stop */
function debounce(fn, delay) {
  var timer = null;
  return function () {
    var context = this, args = arguments;
    clearTimeout(timer);
    timer = setTimeout(function () {
      fn.apply(context, args);
    }, delay);
  };
}
/* ^ LEAVE THIS ALONE ^ */

var keyupCount = 0;
$("input").keyup(debounce(function(event) {
	if (keyupCount < 1) {
	$(".example").attr("style","opacity:0;");
	setTimeout(function(){ 
		$(".example").attr("style","opacity:1;") }, 1000);
	}
	keyupCount = 1;
},pauseTime));

$("input[name=uid]").keyup(debounce(function(event) {
	$(".example .uid").removeClass("hide");
	$(".dragon-example-uid").text( this.value );
},pauseTime));

$("input[name=image]").keyup(debounce(function(event) {
	$(".example .image").removeClass("hide");
	$(".dragon-example-image").attr( "src",this.value );
},pauseTime));

$("input[name=imageLink]").keyup(debounce(function(event) {
	$(".dragon-example-imageLink").text( this.value );
},pauseTime));

$("input[name=name]").keyup(debounce(function(event) {
	$(".example .name").removeClass("hide");
	$(".dragon-example-name").text( this.value );
},pauseTime));

$("input[name=num]").keyup(debounce(function(event) {
	$(".example .id").removeClass("hide");
	$(".dragon-example-num").text( this.value );
},pauseTime));

$("input[name=gender]").keyup(debounce(function(event) {
	$(".example .gender").removeClass("hide");
	$(".dragon-example-gender").text( this.value );
},pauseTime));

$("input[name=level]").keyup(debounce(function(event) {
	$(".example .level").removeClass("hide");
	$(".dragon-example-level").text( this.value );
},pauseTime));

$("input[name=breed]").keyup(debounce(function(event) {
	$(".example .breed").removeClass("hide");
	$(".dragon-example-breed").text( this.value );
},pauseTime));

$("input[name=pc]").keyup(debounce(function(event) {
	$(".example .gc-primary").removeClass("hide");
	$(".dragon-example-pc").text( this.value );
},pauseTime));

$("input[name=pg]").keyup(debounce(function(event) {
	$(".example .gc-primary").removeClass("hide");
	$(".dragon-example-pg").text( this.value );
},pauseTime));

$("input[name=sc]").keyup(debounce(function(event) {
	$(".example .gc-secondary").removeClass("hide");
	$(".dragon-example-sc").text( this.value );
},pauseTime));

$("input[name=sg]").keyup(debounce(function(event) {
	$(".example .gc-secondary").removeClass("hide");
	$(".dragon-example-sg").text( this.value );
},pauseTime));

$("input[name=tc]").keyup(debounce(function(event) {
	$(".example .gc-tertiary").removeClass("hide");
	$(".dragon-example-tc").text( this.value );
},pauseTime));

$("input[name=tg]").keyup(debounce(function(event) {
	$(".example .gc-tertiary").removeClass("hide");
	$(".dragon-example-tg").text( this.value );
},pauseTime));

$("input[name=ec]").keyup(debounce(function(event) {
	$(".example .gc-eye").removeClass("hide");
	$(".dragon-example-ec").text( this.value );
},pauseTime));

$("input[name=eg]").keyup(debounce(function(event) {
	$(".example .gc-eye").removeClass("hide");
	$(".dragon-example-eg").text( this.value );
},pauseTime));

$("input[name=tp]").keyup(debounce(function(event) {
	$(".example .price").removeClass("hide");
	$(".dragon-example-tp").text( this.value );
},pauseTime));

$("input[name=gp]").keyup(debounce(function(event) {
	$(".example .price-2").removeClass("hide");
	$(".dragon-example-gp").text( this.value );
},pauseTime));
</script>
</body>
</html>