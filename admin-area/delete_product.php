<?php
if(isset($_GET['delete_products']))
{
    $del_id=$_GET['delete_products'];
    $del="delete from products where product_id=$del_id";
    //delete query
    $res=mysqli_query($con,$del);
    if($res)
    {
        echo "<script>alert('Product deleted succesfully.')</script>";
        echo "<script>window.open('./index.php','_self')</script>";
    }
}
?>
