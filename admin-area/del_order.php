<?php
$delid=$_GET['del_order'];
$delq="delete from user_orders where order_id=$delid";
$res=mysqli_query($con,$delq);
if($res)
{
    echo "<script>alert('Order deleted succesfully.')</script>";
        echo "<script>window.open('./index.php?list_orders','_self')</script>";
}

?>