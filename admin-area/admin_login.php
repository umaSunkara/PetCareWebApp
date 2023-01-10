<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body 
        {
            overflow-x:hidden;
        }
        .a_im 
        {
            width:300px;
            height:300px;
        }
    </style>
</head>
<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Login</h2>
        <div class="row d-flex justify-content-center">
            <div>
                <img src="../images/login.jpeg" alt="Admin Reg" class="a-im">
            </div>
            <div class="col-lg-6 col-xl-4">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="user_name" class="form-label">Admin Name</label>
                        <input type="text" id="user_name" name="user_name" placeholder="Enter Your Name" class="form-control" required>
                    </div>
                    
                    <div class="form-outline mb-4">
                        <label for="pwd" class="form-label">Password</label>
                        <input type="password" id="pwd" name="pwd" placeholder="Enter Password" class="form-control" required>
                    </div>
                    <div>
                        <input type="submit" class="bg-info border-0 p-2 " name="admin_login" value="Login" >
                        <p class="small">Don't have an account? <a href="admin_registration.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include('../includes/connect.php');
include('../functions/commonfunc.php');
@session_start();
if(isset($_POST['admin_login']))
{
    $u_name=$_POST['user_name'];
    $pwd=$_POST['pwd'];
    $select_q="select * from admin where admin_name='$u_name'";
    $r=mysqli_query($con,$select_q);
    $num=mysqli_num_rows($r);
    $row=mysqli_fetch_assoc($r);
    if($num>0)
    {
        $_SESSION['username']=$u_name;
        if(password_verify($pwd,$row['admin_password']))
        {
                echo "<script>alert('Login Successful')</script>";
                echo "<script>window.open('index.php','_self')</script>";
        
        }
        
        else
        {
            echo "<script>alert('Invalid credentials')</script>";
    
        }
    }
    else
    {
        echo "<script>alert('Invalid credentials')</script>";
    }
}


?>