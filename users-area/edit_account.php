<!DOCTYPE html>
<?php
if(isset($_GET['edit_account']))
{
    $u_s_name=$_SESSION['username'];
    $select_q="select * from user_table where username='$u_s_name'";
    $res=mysqli_query($con,$select_q);
    $row_f=mysqli_fetch_assoc($res);
    $uid=$row_f['user_id'];
    $uname=$row_f['username'];
    $email=$row_f['user_email'];
    $img=$row_f['user_image'];
    $uadd=$row_f['user_address'];
    $u_mobile=$row_f['user_mobile'];

    if(isset($_POST['u_update']))
    {
        $upd_id=$uid;
        $upd_name=$_POST['u_username'];
        $upd_email=$_POST['u_email'];
        $upd_addr=$_POST['u_address'];
        $upd_mobile=$_POST['u_mobile'];
        $upd_img=$_FILES['u_image']['name'];
        $tmp_img=$_FILES['u_image']['tmp_name'];
        move_uploaded_file($tmp_img,"./user-images/$upd_img");
        //upadte profile
    $upd_data="update user_table set username='$upd_name', user_email='$upd_email', user_image='$upd_img',user_address='$upd_addr', user_mobile='$upd_mobile' where user_id=$upd_id";
    $upd_res=mysqli_query($con,$upd_data);
    if($upd_res)
    {
        echo "<script>alert('Data updated Successfully')</script>";
        echo "<script>window.open('logout.php','_self')</script>";
    }

    }
    

}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
</head>
<body>
    <h3 class="text-center text-success mb-4">Edit Account</h3>
    <form action="" method="post" enctype="multipart/form-data" class="text-center">
        <div class="form-outline mb-4">
            <input type="text" name="u_username" value="<?php echo $uname ?>" class="form-control w-50 m-auto">

        </div>
        <div class="form-outline mb-4">
            <input type="email" name="u_email" value="<?php echo $email ?>" class="form-control w-50 m-auto">

        </div>
        
        <div class="form-outline mb-4">
            <input type="file" name="u_image" class="form-control w-50 m-auto">
            <!--<img src="./user-images/ <?php echo $image ?>" alt="user">-->

        </div>
        <div class="form-outline mb-4">
            <input type="text" name="u_address" value="<?php echo $uadd ?>"class="form-control w-50 m-auto">

        </div>
        <div class="form-outline mb-4">
            <input type="text" name="u_mobile" value="<?php echo $u_mobile ?>"class="form-control w-50 m-auto">

        </div>
        <div class="form-outline mb-4">
            <input type="submit" value="update"  name="u_update" class="bg-info p-2 b-0">

        </div>
    </form>
    
</body>
</html>