<?php
// start the session
session_start();

// array to store any errors encoutered during route handling
$errors=array();

//connect database
$conn= mysqli_connect("localhost","root","","foodapp") or die("databse connection failed");
?>