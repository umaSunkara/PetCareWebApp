<!DOCTYPE html>
<?php
include('../includes/connect.php');
include('../functions/commonfunc.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container-fluid m-3">
        <h2 class="text-center">New User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-xl-6 lg-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-outline m-4">
                        <label for="u_username" class="form-label">User Name</label>
                        <input type="text" name="u_username" id="u_username" class="form-control" placeholder="Type User Name" autocomplete="off" required>
                    </div>
                    <div class="form-outline m-4">
                        <label for="user_email" class="form-label">User Email</label>
                        <input type="email" name="user_email" id="user_email" class="form-control" placeholder="Type User Email" autocomplete="off" required>
                    </div>
                    <div class="form-outline m-4">
                        <label for="user_image" class="form-label">User Image</label>
                        <input type="file" name="user_image" id="user_image" class="form-control"  required>
                    </div>
                    <div class="form-outline m-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" name="user_password" id="user_password" class="form-control" placeholder="Type User password" autocomplete="off" required>
                    </div>
                    <div class="form-outline m-4">
                        <label for="conf_user_password" class="form-label">Confirm Password</label>
                        <input type="password" name="conf_user_password" id="conf_user_password" class="form-control" placeholder="Type Confirm User Password" autocomplete="off" required>
                    </div>
                    <div class="form-outline m-4">
                        <label for="user_address" class="form-label">Address</label>
                        <input type="text" name="user_address" id="user_address" class="form-control" placeholder="Type User Address" autocomplete="off" required>
                    </div>
                    <div class="form-outline m-4">
                        <label for="user_contact" class="form-label">Contact</label>
                        <input type="text" name="user_contact" id="user_contact" class="form-control" placeholder="Type User Contact" autocomplete="off" required>
                    </div>
                    <div class="text-center mt-4 p-2">
                        <input type="submit" value="Register" class="bg-info px-3 border-0" name="user_register">
                    </div>
                    <p class="small fw-bold mt-2 pt-1">Already have an Account? <a href="user_login.php"> Login</a></p>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php
if(isset($_POST['user_register']))
{
    $u_name=$_POST['u_username'];
    $email=$_POST['user_email'];
    $image=$_FILES['user_image']['name'];
    $pwd=$_POST['user_password'];
    $hash_pwd=password_hash($pwd,PASSWORD_DEFAULT);
    $c_pwd=$_POST['conf_user_password'];
    $address=$_POST['user_address'];
    $contact=$_POST['user_contact'];
    $u_image=$_FILES['user_image']['tmp_name'];
    $ip=getIPAddress();
    $select_q="select * from user_table where username='$u_name' or user_email='$email'";
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
        move_uploaded_file($u_image,"./user-images/$image");
    $insert_q="insert into user_table (username,user_email,user_password,user_image,user_ip,user_address,user_mobile) values ('$u_name','$email','$hash_pwd','$image','$ip','$address','$contact')";
    $res=mysqli_query($con,$insert_q);
    if($res)
    {
        echo "<script>alert('Data inserted successfully')</script>";
    }
    else{
        die(mysqli_error($res));
    }
    }
    //selecting cart items
    $select_c="select * from cart_details where ip_address='$ip'";
    $r_cart=mysqli_query($con,$select_c);
    $n=mysqli_num_rows($r_cart);
    if($n>0)
    {
        $_SESSION['username']=$u_name;
        echo "<script>alert('You have items in your cart.')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }
    else{
        echo "<script>window.open('../index.php','_self')</script>";
    }
}

?>