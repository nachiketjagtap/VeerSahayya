<?php


$showalert = false;
include "db_connect.php";
if(isset($_POST['submit'])){


$fullName = $_POST['fullName'];
$gender = $_POST['gender'];
$mail_ID = $_POST['mail_ID'];
$phoneNum = $_POST['phoneNum'];
$workDomain = $_POST['workDomain'];
$fullAddress = $_POST['fullAddress'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$timeAvail = $_POST['timeAvail'];
$about = $_POST['about'];
$userName = $_POST['userName'];
$passWord = $_POST['passWord'];

$pass = password_hash($passWord,PASSWORD_BCRYPT);

    $sql = "INSERT INTO Volunteers (fullName, gender, mail_ID, phoneNum, workDomain, fullAddress, city, state, zip, timeAvail, about, userName, passWord) VALUES('$fullName','$gender', '$mail_ID', '$phoneNum', '$workDomain', '$fullAddress', '$city', '$state', '$zip', '$timeAvail', '$about', '$userName', '$pass')" ;
    $result = mysqli_query($conn, $sql);
    if($result){
            $showalert = true;
            header("Location: alert.php");
    }
    else
    {
        echo "Error..";
    }


  }
 
?>