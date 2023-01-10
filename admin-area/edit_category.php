<?php
if(isset($_GET['edit_category']))
{
    $edit_id=$_GET['edit_category'];
    //echo $edit_id;
    $get_cats="select * from categories where category_id=$edit_id";
    $exec=mysqli_query($con,$get_cats);
    $row=mysqli_fetch_array($exec);
    $cat_title=$row['category_title'];
}
if(isset($_POST['edit_cat']))
    {
        $title=$_POST['cat_title'];
    $upd="update categories set category_title='$title' where category_id =$edit_id";
        $res=mysqli_query($con,$upd);
        if($res)
        {
            echo "<script>alert('Category Updated Successfully')</script>";
            echo "<script>window.open('./index.php?view_categories','_self')</script>";
        }

    }
?>
<h3 class="text-center">Edit Category</h3>
<div class="container-mt-3 text-center">
    <form action="" class="form-outline" method="post">
        <label for="cat_title">Category Title</label>
        <input type="text" class="text-center w-50" value="<?php echo $cat_title;?>" name="cat_title" required>
        <div>
        <input type="submit" value="Update Category" name="edit_cat" class="btn btn-info px-3 b-0">
        </div>
        
    </form>
</div>