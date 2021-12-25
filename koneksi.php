<?php
$host       ="localhost";
$username     ="id18172819_mahasiswa";
$password     ="kGGj~v2)Lvu|gqxK";
$database     ="id18172819_akademik";

$connect = mysqli_connect($host, $username, $password, $database);
if(!$connect){
    die("error : ".mysqli_connect_error());
    
}
?>
