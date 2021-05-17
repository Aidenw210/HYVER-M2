<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "movie_test";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
