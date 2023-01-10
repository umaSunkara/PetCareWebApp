<?php
$delid=$_GET['delete_payment'];
$delq="delete from user_payments where payment_id=$delid";
$res=mysqli_query($con,$delq);
if($res)
{
    echo "<script>alert('Payment deleted succesfully.')</script>";
        echo "<script>window.open('./index.php?list_payments','_self')</script>";
}

?>