<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "VeerSahayya";

$conn = mysqli_connect($server,$username,$password,$database);
if($conn){
    

}
else{
    die("Error".mysqli_connect_error());
}
?>