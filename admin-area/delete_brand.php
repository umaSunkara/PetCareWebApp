<?php
if(isset($_GET['delete_brand']))
{
    $delid=$_GET['delete_brand'];
    //echo $delid;
    $del_q="delete from brands where brand_id=$delid";
    $exec=mysqli_query($con,$del_q);
    if($exec)
    {
        echo "<script>alert('Brand Deleted Successfully')</script>";
            echo "<script>window.open('./index.php?view_brands','_self')</script>";
    }
}
?>