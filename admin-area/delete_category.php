<?php
if(isset($_GET['delete_category']))
{
    $delid=$_GET['delete_category'];
    //echo $delid;
    $del_q="delete from categories where category_id=$delid";
    $exec=mysqli_query($con,$del_q);
    if($exec)
    {
        echo "<script>alert('Category Deleted Successfully')</script>";
            echo "<script>window.open('./index.php?view_categories','_self')</script>";
    }
}
?>