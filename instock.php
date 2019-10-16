<?php
	include_once 'resources/tablelogin.php';
?>
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
#main-div {
	display:flex;
	width:100%;
	flex-wrap:wrap;
	justify-content:space-evenly;
}
.item img {
	width:100%;
}
.item {
	width:300px;
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
		  <li class="active"><a href="instock.php" style="margin-top:9px;">In Stock</a></li>
		  <li><a href="contactus.php" style="margin-top:9px;">Contact Us</a></li>
        </ul>
      </div>
      <!-- /.nav-collapse -->
    </div>
  </div>
</div>


<!--Logo-->



<!--END-->

<!--In Stock items-->

<!--

Format for items
Use <div class="row"> </div> carefully. Each row contains a maximum of 5 items.


<div class="row">

	<div class="col-1 col-s-1">

		<div class="item">
			<img src="resources/.jpg" alt="Napkin Holder.jpg">
				<p></p>
				</div>
			</div>
		</div>

	</div>

</div>

-->

<div id="main-div">

<?php
	include 'resources/display.php';
?>

</div>
<!--END-->


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

</script>
</body>
</html>