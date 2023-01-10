<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
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
        <h2 class="text-center mb-5">Admin Registration</h2>
        <div class="row d-flex justify-content-center">
            <div>
                <img src="../images/admin.jpg" alt="Admin Reg" class="a-im">
            </div>
            <div class="col-lg-6 col-xl-4">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="user_name" class="form-label">Admin Name</label>
                        <input type="text" id="user_name" name="user_name" placeholder="Enter Your Name" class="form-control" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="user_mail" class="form-label">Admin Email</label>
                        <input type="email" id="user_mail" name="user_mail" placeholder="Enter Your Email" class="form-control" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="pwd" class="form-label">Password</label>
                        <input type="password" id="pwd" name="pwd" placeholder="Enter Password" class="form-control" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="cpwd" class="form-label">Confirm Password</label>
                        <input type="password" id="cpwd" name="cpwd" placeholder="Enter Confirm Password" class="form-control" required>
                    </div>
                    <div>
                        <input type="submit" class="bg-info border-0 p-2 " name="admin_reg" value="Register Admin" >
                        <p class="small">Already have an account? <a href="admin_login.php">Login</a></p>
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
if(isset($_POST['admin_reg']))
{
    $u_name=$_POST['user_name'];
    $email=$_POST['user_mail'];
    //$image=$_FILES['user_image']['name'];
    $pwd=$_POST['pwd'];
    $hash_pwd=password_hash($pwd,PASSWORD_DEFAULT);
    $c_pwd=$_POST['cpwd'];
    //$contact=$_POST['user_contact'];
    //$u_image=$_FILES['user_image']['tmp_name'];
    //$ip=getIPAddress();
    $select_q="select * from admin where admin_name='$u_name' or admin_email='$email'";
    $res_s=mysqli_query($con,$select_q);
    $num=mysqli_num_rows($res_s);
    if($num>0)
    {
        echo "<script>alert('User Name and Email already exists.')</script>";
    }
    else if($pwd!=$c_pwd)
    {
        echo "<script>alert('Passwords did not match.')</script>";
    }
    else
    {
    $insert_q="insert into admin(admin_name,admin_email,admin_password) values ('$u_name','$email','$hash_pwd')";
    $res=mysqli_query($con,$insert_q);
    if($res)
    {
        echo "<script>alert('Data inserted successfully')</script>";
    }
    else{
        die(mysqli_error($res));
    }
    }
    
}

?>