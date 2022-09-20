<?php


$showalert = false;
include "db_connect.php";
if(isset($_POST['submit'])){


$member_fullName = $_POST['member_fullName'];
$gender = $_POST['gender'];
$mail_ID = $_POST['mail_ID'];
$phoneNum = $_POST['phoneNum'];
$help_Domain = $_POST['help_Domain'];
$fullAddress = $_POST['fullAddress'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$soldier_fullName = $_POST['soldier_fullName'];
$soldier_ID = $_POST['soldier_ID'];
$help_Desc = $_POST['help_Desc'];
$userName = $_POST['userName'];
$passWord = $_POST['passWord'];

$pass = password_hash($passWord,PASSWORD_BCRYPT);
$sql1 = "SELECT * FROM Soldier_Data WHERE Soldier_ID = $soldier_ID";
$result1 = mysqli_query($conn,$sql1);
$matchFound = mysqli_num_rows($result1) > 0 ? '1' : '0';
if($matchFound==1){
    $sql = "INSERT INTO Family_Member (member_fullName, gender, mail_ID, phoneNum, help_Domain, fullAddress, city, state, zip, soldier_fullName, soldier_ID, help_Desc, userName, passWord) VALUES ('$member_fullName', '$gender', '$mail_ID', '$phoneNum', '$help_Domain', '$fullAddress', '$city', '$state', '$zip', '$soldier_fullName', '$soldier_ID', '$help_Desc', '$userName', '$pass')" ;
    $result = mysqli_query($conn, $sql);
    if($result){
            $showalert = true;
            header("Location: alert_2.php");
    }
    else
    {
        echo "Error..";
    }

  }
elseif($matchFound==0){
  header("Location: alert_3.php");
  }
  }
  
 
?>