<?php
if(isset($_GET['edit_brand']))
{
    $edit_id=$_GET['edit_brand'];
    //echo $edit_id;
    $get_b="select * from brands where brand_id=$edit_id";
    $exec=mysqli_query($con,$get_b);
    $row=mysqli_fetch_array($exec);
    $brand_title=$row['brand_title'];
}
if(isset($_POST['edit_brand']))
    {
        $title=$_POST['brand_title'];
    $upd="update brands set brand_title='$title' where brand_id =$edit_id";
        $res=mysqli_query($con,$upd);
        if($res)
        {
            echo "<script>alert('Brand Updated Successfully')</script>";
            echo "<script>window.open('./index.php?view_brands','_self')</script>";
        }

    }
?>
<h3 class="text-center">Brand Category</h3>
<div class="container-mt-3 text-center">
    <form action="" class="form-outline" method="post">
        <label for="brand_title">Brand Title</label>
        <input type="text" class="text-center w-50" value="<?php echo $brand_title;?>" name="brand_title" required>
        <div>
        <input type="submit" value="Update Brand" name="edit_brand" class="btn btn-info px-3 b-0">
        </div>
        
    </form>
</div>