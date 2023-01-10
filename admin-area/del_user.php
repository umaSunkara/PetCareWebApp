<?php
$delid=$_GET['del_user'];
$delq="delete from user_table where user_id=$delid";
$res=mysqli_query($con,$delq);
if($res)
{
    echo "<script>alert('User deleted succesfully.')</script>";
        echo "<script>window.open('./index.php?list_users','_self')</script>";
}

?>