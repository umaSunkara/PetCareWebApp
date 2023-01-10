<style>
    .im1
    {
        width:200px;
        height:200px;
        object-fit:contain;
    }
</style>
<?php
if(isset($_GET['edit_products']))
{
    $edit_id=$_GET['edit_products'];
    //echo $edit_id;
    $select_prods="select * from products where product_id=$edit_id";
    $res=mysqli_query($con,$select_prods);
    $row_f=mysqli_fetch_array($res);
    $pid=$row_f['product_id'];
    $title=$row_f['product_title'];
    //echo $title;
    $desc=$row_f['product_description'];
    $kw=$row_f['product_keywords'];
    $pcat_id=$row_f['category_id'];
    $pbrand_id=$row_f['brand_id'];
    $pimg1=$row_f['product_image1'];
    $pimg2=$row_f['product_image2'];
    $pimg3=$row_f['product_image3'];
    $price=$row_f['product_price'];

    //fetching category
    $select_cat="select * from categories where category_id=$pcat_id";
    $res_cat=mysqli_query($con,$select_cat);
    $row_cat=mysqli_fetch_array($res_cat);
    $cat_name=$row_cat['category_title'];
    $cat_n=$row_cat['category_id'];
    //echo $cat_name;

    //fetching brands
    //fetching category
    $select_brand="select * from brands where brand_id=$pcat_id";
    $res_brand=mysqli_query($con,$select_brand);
    $row_brand=mysqli_fetch_array($res_brand);
    $brand_name=$row_brand['brand_title'];
    $brand_n=$row_brand['brand_id'];

    //echo $brand_name;

}
?>
<div class="container mt-5">
    <h1 class="text-center">Edit Products</h1>
    <form action="" method="post" class="from-outline" enctype="multipart/form-data">
        <div class="form-outline mb-4 text-center">
            <label for="product_title" name="product_title"class="form-label">Product Title</label>
            <input type="text" id="product_title"  value= "<?php echo $title;?> " name="product_title" class="form-control w-50 m-auto" required>
        </div>
        <div class="form-outline mb-4 text-center">
            <label for="product_desc" name="product_desc"  class="form-label">Product Description</label>
            <input type="text" value="<?php echo $desc;?>"  id="product_desc" name="product_desc" class="form-control w-50 m-auto" required>
        </div>
        <div class="form-outline mb-4 text-center">
            <label for="product_kw" name="product_kw" class="form-label">Product Keywords</label>
            <input type="text" value="<?php echo $kw;?>"   id="product_kw" name="product_kw" class="form-control w-50 m-auto" required>
        </div>
        <div class="form-control text-center w-50 m-auto mb-4">
        <label for="product_cat" name="product_cat"class="form-label">Product Category</label>
           <select name="product_cat" class="form-select">
            <option value="<?php echo $cat_n; ?>"><?php echo $cat_name; ?></option>
            <?php
            $select_all="select * from categories where category_id != $cat_n ";
            $res_cat_all=mysqli_query($con,$select_all);
            while($row_cat_all=mysqli_fetch_array($res_cat_all))
            {
                $cat_title=$row_cat_all['category_title'];
                $cat_id=$row_cat_all['category_id'];
                echo "<option value='$cat_id'>$cat_title</option>";
                
            }
            ?>
           </select>
        </div>
        <div class="form-control text-center w-50 m-auto mb-4">
        <label for="product_brands" name="product_brands"class="form-label">Product Brand</label>
           <select name="product_brands" class="form-select">
            <option value="<?php echo $brand_n ?>"><?php echo $brand_name ?></option>
            <?php
            $select_all_b="select * from brands where brand_id != $brand_n ";
            $res_b_all=mysqli_query($con,$select_all_b);
            while($row_b_all=mysqli_fetch_array($res_b_all))
            {
                $b_title=$row_b_all['brand_title'];
                $b_id=$row_cat_all['brand_id'];
                echo "<option value='$b_id'>$b_title</option>";
                
            }
            ?>
            
           </select>
        </div>
        <div class="form-outline mb-4 text-center">
            <label for="product_img1" name="product_img1"class="form-label">Product Image1</label>
            <div class="d-flex">
            <input type="file" id="product_img1" name="product_img1" class="form-control w-50 m-auto" required>
            <img src="./productimages/<?php echo $pimg1; ?>" alt="" class="im1">
            </div>
            
        </div>
        <div class="form-outline mb-4 text-center">
            <label for="product_img2" name="product_img2"class="form-label">Product Image2</label>
            <div class="d-flex">
            <input type="file" id="product_img2" name="product_img2" class="form-control w-50 m-auto" required>
            <img src="./productimages/<?php echo $pimg2; ?>" alt="" class="im1">
            </div>
            
        </div>
        <div class="form-outline mb-4 text-center">
            <label for="product_img3" name="product_img3"class="form-label">Product Image3</label>
            <div class="d-flex">
            <input type="file" id="product_img3" name="product_img3" class="form-control w-50 m-auto" required>
            <img src="./productimages/<?php echo $pimg3; ?>" alt="" class="im1">
            </div>
            
        </div>
        <div class="form-outline mb-4 text-center">
            <label for="product_price" name="product_price"class="form-label">Product Price</label>
            <input type="text" id="product_price" value="<?php echo $price;?>" name="product_price" class="form-control w-50 m-auto" required>
        </div>
        <div class="text-center">
            <input type="submit" class="btn btn-info p-3 b-0"name="edit_product" value="Update Product">
        </div>
    </form>
</div>
<?php 
if(isset($_GET['edit_products']))
{
    $p_title=$_POST['product_title'];
    $descp=$_POST['product_desc'];
    $keyw=$_POST['product_kw'];
    $cid=$_POST['product_cat'];
    $bid=$_POST['product_brands'];
    $im1=$_FILES['product_img1']['name'];
    $im2=$_FILES['product_img2']['name'];
    $im3=$_FILES['product_img3']['name'];
    $pprice=$_POST['product_price'];
    $t1=$_FILES['product_img1']['tmp_name'];
    $t2=$_FILES['product_img2']['tmp_name'];
    $t3=$_FILES['product_img3']['tmp_name'];

    move_uploaded_file($t1,"./productimages/$im1");
    move_uploaded_file($t2,"./productimages/$im2");
    move_uploaded_file($t3,"./productimages/$im3");
    //query to update products
    
    $upd="update products set product_title='$p_title',product_description='$descp',  product_keywords='$keyw', category_id=$cid, brand_id=$bid,product_image1='$im1', product_image2='$im2', product_image2='$im2', product_price=$pprice,date=NOW() where product_id=$edit_id ";
    $upd_q=mysqli_query($con,$upd);
    
    if($upd_q)
    {
        echo "<script>alert('Product updated succesfully.')</script>";
        echo "<script>window.open('./insert_product.php','_self')</script>";
    }




}

?>