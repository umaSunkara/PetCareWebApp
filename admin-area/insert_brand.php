<?php
include('../includes/connect.php');
if(isset($_POST['insert_brand']))
{
    $brand_title=$_POST['brand_title'];
    //select data
    $select_query="select * from  brands where (brand_title) ='$brand_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0)
    {
        echo "<script>alert('This brand is already present')</script>";
    }
    else{
        $insert_query="insert into brands (brand_title) values ('$brand_title')";
        $result=mysqli_query($con,$insert_query);
        if($result)
        {
            echo "<script>alert('brand has been inserted successfully')</script>";
        }
    }
    
}
?>
<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <div class="input-group-prepend">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="Insert Brands"name="brand_title" aria-label="categories" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2">
<input type="submit" class="bg-info border-0 p-2 my-3" value="Insert brands" name="insert_brand" aria-label="Username" aria-describedby="basic-addon1">
<!--<button class="form-control bg-info">Insert Brandss</button>-->
</div>
</form>
