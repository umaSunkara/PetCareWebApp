

<body>
<h3 class="text-center text-danger mb-3">
Delete Account
</h3>
<form action="" method="post" class="mt-5">
    <div class="form-outline mb-4">
    <input type="submit" class="form-control w-50 m-auto" name="delete" value="Delete Account" >
    </div>
    <div class="form-outline mb-5">
    <input type="submit" class="form-control w-50 m-auto" name="dont_delete" value="Dont Delete Account" >
    </div>
    
<?php
$uname=$_SESSION['username'];
if(isset($_POST['delete']))
{
    $del_q="delete from user_table where username='$uname'";
    $exec=mysqli_query($con,$del_q);
    if($exec)
    {
        session_destroy();
        echo "<script>alert('Account Deleted');</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
    else
    {

    }
}
if(isset($_POST['dont_delete']))
{
    echo "<script>window.open('profile.php','_self')</script>";
}
?>
