<?php
$mysql = new mysqli("localhost", "root", "root", "guvi");
// Check connection
if($mysql->connect_error === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
