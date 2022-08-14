<?php
// Connects to your Database
$servername="localhost";
$username="root";
$password="";
$dbname="carrentalp";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection failed");
}