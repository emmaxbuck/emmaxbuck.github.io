
<?php

if ($_GET['form']=='completed') {
?>
<div id="d3" style="position:absolute; top:20%;left:1%;width:98%;padding:10px;background-color:rgba(255, 255, 255, 0.9);height:150%; opacity:0;">
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
<div id="d1" style="position:absolute; top:20%;left:1%;width:98%;padding:10px;background-color:rgba(255, 255, 255, 0.9);height:150%; opacity:0;">
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
<div id="d2" style="position:absolute; top:20%;left:1%;width:98%;padding:10px;background-color:rgba(255, 255, 255, 0.9);height:150%; opacity:0;">
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
function cd() {
document.getElementById('d1').style.opacity  = '0';
document.getElementById('d2').style.opacity= "0";
document.getElementById('d3').style.opacity= "0";
}
function hire() {
document.getElementById('d1').style.opacity  = '0';
document.getElementById('d2').style.opacity= "1";
document.getElementById('d3').style.opacity= "0";
}
function about() {
document.getElementById('d1').style.opacity  = '1';
document.getElementById('d2').style.opacity= "0";
document.getElementById('d3').style.opacity= "0";
}
</script>