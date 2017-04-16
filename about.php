
<!doctype html>
<html>
<head>
<title>
:: Emma Buck Photography ::
</title>
<style>
h1 {
   font-size:60px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
}
h2 {
font-size:55px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 15.4px;
color:black
}
p {
font-size:50px;
	font-style: normal;
	font-variant: normal;
	font-weight: 400;
	line-height: 70px;
}
a {
text-decoration:none;
color:black;
}
</style>
</head>
<body>
<div style="height:20%;width:100%;border-top-style:solid;border-top-color:black;border-bottom-style:solid;border-bottom-color:black;">
<b>
<h1 style="text-align:center;">
:: Emma Buck Photography ::
</h1>
</b>
</div>
<div style="width:100%;border-top-style:solid;border-top-color:black;border-bottom-style:solid;border-bottom-color:black;">
<div style="width:33%;float:left;">
<a href="index.php">
<h2 style="text-align:center;">
Gallery
</h2>
</a>
</div>
<div style="width:33%;float:left;">
<a href="about.php">
<h2 style="text-align:center;" >
About
</h2>
</a>
</div>
<div style="width:33%;float:left;">
<a href="hire.php">
<h2 style="text-align:center;">
Hire Me
</h2>
</a>
</div>
</div>
<div id="wide">
<?php
@readfile ("wide.php");
?>
</div>
<div id="tall">
<?php
@readfile ("tall.php");
?>
</div>
<?php
if ($_GET['form']=='completed') {
?>
<div id="d3" style="position:absolute; top:25%;left:1%;width:98%;padding:10px;background-color:rgba(255, 255, 255, 0.9);height:150%; opacity:1;">
<u>
<h2>
Thank you
</h2>
</u>
<p>
Thanks for your inquiry! I'll get back to you as soon as possible.
</p>
</div>
<?php
}
?>
<div id="d1" style="position:absolute; top:40vh;left:1%;width:98%;padding:10px;background-color:rgba(255, 255, 255, 0.9);height:150%; opacity:1;">
<u>
<h2>
About
</h2>
</u>
<p>
Emma Buck Anderson is a talented young photographer in Albuquerque New Mexico.
</p>
<img src="emma.png" style="display:block;margin-left:auto;margin-right:auto;">
</div>
<div id="d2" style="position:absolute; top:25%;left:1%;width:98%;padding:10px;background-color:rgba(255, 255, 255, 0.9);height:150%; opacity:0;">
<u>
<h2>
Hire Me
</h2>
</u>
<p>
Want professional, unique photos? Then you've come to the right place. Let's shoot today!
</p>
<u>
<h2>
Pricing 
</h2>
</u>
<p>
Senior Photos........$
<br>
Family Portraits.....$
</p>
<u>
<h2>
Set up an Appointment
</h2>
<form action="thanks.php" method="post" >
<input name="name" style=" font-size:50px;" type="name" required placeholder="Name">
<br>
<br>
<input name="email" style=" font-size:50px;" type="email" required placeholder="Email">
<br>
<br>
<input type="submit" style="font-size:50px;">
</form>
</div>
<script>
if (screen.width>screen.height) {
document.getElementById('wide').style.display ='block';
document.getElementById('tall').style.display ='none';
} else {
document.getElementById('tall').style.display ='block';
document.getElementById('wide').style.display ='none';
}
</script>
</body>
</html>