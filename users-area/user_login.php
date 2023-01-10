<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body
        {
            overflow-x:hidden;
        }
        </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container-fluid m-3">
        <h2 class="text-center">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-xl-6 lg-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-outline m-4">
                        <label for="u_username" class="form-label">User Name</label>
                        <input type="text" name="u_username" id="u_username" class="form-control" placeholder="Type User Name" autocomplete="off" required>
                    </div>
                    
                    <div class="form-outline m-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Type User password" autocomplete="off" required>
                    </div>
                    <div class="text-center mt-4 p-2">
                        <input type="submit" value="Login" class="bg-info px-3 border-0" name="user_login">
                    </div>
                    <p class="small fw-bold mt-2 pt-1">Don't have an Account? <a href="user_registration.php"> Register</a></p>
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
if(isset($_POST['user_login']))
{
    $u_name=$_POST['u_username'];
    $pwd=$_POST['user_password'];
    $select_q="select * from user_table where username='$u_name'";
    $r=mysqli_query($con,$select_q);
    $num=mysqli_num_rows($r);
    $row=mysqli_fetch_assoc($r);
    //cart item
    $u_op=getIPAddress();
    
    $select_c="select * from cart_details where ip_address='$u_ip'";
    $res=mysqli_query($con,$select_c);
    $n=mysqli_num_rows($res);


    if($num>0)
    {
        $_SESSION['username']=$u_name;
        if(password_verify($pwd,$row['user_password']))
        {
            //echo "<script>alert('Login Successful')</script>";
            if($n==0 and $num==1)
            {
                $_SESSION['username']=$u_name;
                echo "<script>alert('Login Successful')</script>";
                //echo "<script>window.open('payment.php','_self')</script>";
                echo "<script>window.open('../index.php','_self')</script>";
            }
            else
            {
                $_SESSION['username']=$u_name;
                echo "<script>alert('Login Successful')</script>";
                echo "<script>window.open('profile.php','_self')</script>";
            }
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