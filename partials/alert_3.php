<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error..!</title>
</head>
<body>
<?php
echo "Error";
?>
 <script>
if (confirm("The Soldier ID you provided does not match with the record..!") == true) {
    <?php
    header('Refresh:2; URL=http://localhost/VeerSahayya/member_signup.php');
   ?>
  } else {
   
  } 
 </script>
</body>
</html>