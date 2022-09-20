<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Volunteer Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
<?php require 'partials/_nav.php'?>
<div class="container my-4">
        <h1 class = "text-center"> Login As a Family Member to Our VeerSahayya Portal</h1>

    </div>

    <div class="container vh-90">
    <div class="row justify-content-center h-100">
        <div class ="card w-25 my-auto shadow">
            <div class ="card-header text-center bg-primary text-white">
                <h2>VeerSahayya</h2>           
            </div>
           <div class="card-body">
            <form action="member_dashboard.php" method="POST">
                <div class ="form-group">
                    <label>UserName</label>
                    <input type="text" class="form-control" name ="userName" required>

                </div>
                <div class ="form-group my-2">
                    <label>Password</label>
                    <input type="password" class="form-control" name ="passWord" required>

                </div>
                <input type="submit" class ="btn btn-primary w-100 my-2" value="Login" name ="submit">
                <div>
                    <h6>                <a href="member_signup.php">Dont Have Account..? Take me to the Signup Page..!</a></h6>
                </div>

            </form>

           </div>

        </div>
        
    </div>

    </div>
    
</body>
</html>