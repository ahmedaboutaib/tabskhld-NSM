<?php

$con=mysqli_connect("localhost","root","");
if(!$con){exit("error de connection" );}
$sel=mysqli_select_db($con,"miniprojet");
if(!$sel){exit("error de selection" );}
?>