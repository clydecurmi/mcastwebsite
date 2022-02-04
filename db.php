<?php

$uname = "root";
$dbpass = "";
$host = "localhost";
$db = "mcastdatabase";

$conn = mysqli_connect("$host", "$uname", "$dbpass", "$db") or die ("DB Connection Error");
?>