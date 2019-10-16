<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="styles.css" rel="stylesheet" />
<link href="theme.min.css" rel="stylesheet" />
<link href="theme.css" rel="stylesheet" />
<link href="theme.less" rel="stylesheet" />
<link href="variables.less" rel="stylesheet" />
<link rel="shortcut icon" href="resources/rp.ico" type="image/x-icon">
<link rel="icon" href="resources/rj.ico" type="image/x-icon">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<title>RipeJoy</title>
<style>
body {
  padding-top: 60px;
  padding-bottom: 40px;
  font-family: Georgia, Constantia, Calibri;
  background-color: #fffcce;
}

form table {
	width: 90%;
}
form table tr td {
	padding: 25px;
	color: white;
}
form table label {
	font-size: 15px;
}

#submitbutton {
	background-color:#EB9BD7;
	color:white;
	border-radius:5px;
	border:#EB9BD7 solid 2px;
	transition: 0.2s;
	font-size: 25px;
	padding: 10px;
	outline:none;
}
#submitbutton:hover {
	background-color:#FFBBEA;
	outline:none;
}
#submitbutton:active {
	background-color:#D99FC7;
	outline:none;
}

</style>
</head>
<body>
<header>
<img src="resources/ripejoy-sm-pink.png" alt="Ripejoy Small Pink.png" style="height:200px;margin-top:30px;background-color:white;border-radius:20px;padding:20px;opacity:0.9;">
</header>

<div class="navbar">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="nav-collapse">
        <ul class="nav">
		<li class="dropdown">
		<a data-toggle="dropdown" class="dropdown-toggle" href="index.html" style="margin-top:3px;">Home <i class="fas fa-caret-down"></i></a>
		<ul class="dropdown-menu">
              <li>
                <a href="index.html">About</i></a>
              </li>
            </ul>
			</li>
		  <li><a href="instock.php" style="margin-top:9px;">In Stock</a></li>
		  <li class="active"><a href="contactus.php" style="margin-top:9px;">Contact Us</a></li>
        </ul>
      </div>
      <!-- /.nav-collapse -->
    </div>
  </div>
</div>

<form name="contactus" method="post" action="send_form_email.php">
<table align="center">
<tr>
 <td valign="top">
  <label for="first_name">First Name (Required)</label>
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
 <td valign="top">
  <label for="last_name">Last Name (Required)</label>
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address (Required)</label>
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
 <td valign="top">
  <label for="telephone">Telephone Number (Optional)</label>
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments (Required)</label>
  <textarea  name="comments" maxlength="500000" cols="60" rows="6"></textarea>
 </td>
 <?php
	echo '<td style="font-weight:bold;">';
	if (isset($_GET['message'])) {
		if ($_GET['message'] == "success") {
			echo "<p>Your message has been sent! Woo! <br>We'll respond as quick as we can then!</p>";
		}
		if ($_GET['message'] == "invalidemail") {
			echo "<p>The Email Address you entered does not appear to be valid.</p>";
		}
		if ($_GET['message'] == "invalidfirst") {
			echo "<p>The First Name you entered does not appear to be valid.</p>";
		}
		if ($_GET['message'] == "invalidlast") {
			echo "<p>The Last Name you entered does not appear to be valid.</p>";
		}
		if ($_GET['message'] == "invalidcomment") {
			echo "<p>The Comments you entered do not appear to be valid.</p>";
		}
		if ($_GET['message'] == "emptyfields") {
			echo "<p>Please enter information in the fields.</p>";
		}
	}
	echo '</td>';
 ?>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit" id="submitbutton">
 </td>
</tr>
</table>
</form>

<footer>
<table align="center">
<tbody>
<tr class="footerlist">
<td><p><strong>Contact</strong></p><p><a href="https://www.ebay.com/usr/larnerterri?_trksid=p2047675.l2559">Ebay</a><br><a href="contactus.php">Send an Email (Contact Us)</a></p></td>
<td><p><strong>Resources</strong></p><p><a href="index.html">Home</a><br><a href="instock.php">In Stock</a><br><a href="contactus.php">Contact Us</a></p></td>
<td><p><strong>Webmaster</strong><br><a href="https://www.linkedin.com/in/steven-larner-061597151/" target="_blank" title="Opens in a new tab.">Steven Larner</a></td>
</tr>
</tbody>
</table>
</footer>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
</html>