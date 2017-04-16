<?php
$m = "New Customer Inquiry:";
$m .="\nName: ";
$m .= $_POST['name'];
$m .="\nEmail: ";
$m .= $_POST['email'];
$c = $_POST['name'];
$c .= ",";
$c .="\nThanks for the inquiry! We will read it and get back to you within a few business days. We look forward to capturing your important moments!.";
$c .= "\nTalk to You Soon,";
$c.= "\n<Clarke></Computing>";
mail("zakeryt@zakeryclarke.com","New Customer Inquiry",$m);
mail($_POST['email'],"::Emma Buck Photography::",$c);
header( 'Location: http://zakeryclarke.com/testing/emma/?form=completed' ) ; 
?>
