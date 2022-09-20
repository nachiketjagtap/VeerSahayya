<?php
$userName =$_POST['userName'];
$passWord =$_POST['passWord']; 


$con = new mysqli("localhost","root","","VeerSahayya");
if($con->connect_error){
    die("Failed to Connect".$con->connect_error);
}
else
{
    $sql = $con->prepare("SELECT * FROM Volunteers WHERE userName = ?");
    $sql->bind_param("s", $userName);
    $sql->execute();
    $sql_result = $sql->get_result();
    if($sql_result->num_rows > 0) {
        $row = $sql_result->fetch_assoc();
        if (password_verify($passWord, $row['passWord'])) {
            echo "<h2><center class='end'>Login Successfully..!</center></h2>";
        }
        else{
            echo "<h2><center class='end'>Invalid Username or Password</center></h2>";
        }
        
    }
    else{
        echo "<h2><center class='end'>Invalid Username or Password</center></h2>";
        header('Refresh:5; URL=http://localhost/VeerSahayya/vol_login.php');
        
    }
}

?>
<style>
    .end{
        padding: 10em;
        font-size: larger;
    }
</style>