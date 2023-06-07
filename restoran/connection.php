<?php


$server = "localhost";
$usrname = "root";
$password = "";
$dbname = "resto";
$connection = new mysqli($server,$usrname,$password,$dbname);

if (!$connection){
    die("koneksi gagal" . $connection->connect_error);
}