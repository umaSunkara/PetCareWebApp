<!DOCTYPE html>
<html lang="en">
    <?php
        include('../includes/connect.php');
        if(isset($_POST['insert_product']))
        {
            $product_title=$_POST['product-title'];
            $descript=$_POST['descript'];
            $kword=$_POST['kword'];
            $product_cat=$_POST['product_cat'];
            $product_brand=$_POST['product_brand'];
            $product_im1=$_FILES['p-image1']['name'];
            $product_im2=$_FILES['p-image2']['name'];
            $product_im3=$_FILES['p-image3']['name'];

            $temp_im1=$_FILES['p-image1']['tmp_name'];
            $temp_im2=$_FILES['p-image2']['tmp_name'];
            $temp_im3=$_FILES['p-image3']['tmp_name'];
            $product_price=$_POST['product-price'];
            $product_status='true';

            if($product_title =='' or $descript=='' or $kword=='' or $product_cat=='' or $product_brand=='' or $product_price=='' or $product_im1=='' or $product_im2=='' or $product_im3=='')
            {
                echo "<script>alert('Please fill all the fields')</script>";
                exit();
            }
            else{
                move_uploaded_file($temp_im1,"./productimages/$product_im1");
                move_uploaded_file($temp_im2,"./productimages/$product_im2");
                move_uploaded_file($temp_im3,"./productimages/$product_im3");
                $insert_products="insert into products(product_title,product_description,product_keywords,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) values ('$product_title','$descript','$kword','$product_cat','$product_brand','$product_im1','$product_im2','$product_im3','$product_price',NOW(),'true')";
                $result=mysqli_query($con,$insert_products);
                if($result)
                {
                    echo "<script>alert('Successfully executed')</script>";
                }

            }
        }

    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>
    <!--bs css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container mt-3 w-50 m-auto">
        <h1 class="text-center">Insert Products</h1>
        <!--form-->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4">
                <label for="product-title" class="form-label">Product Title</label>
                <input type="text" name="product-title" id="product-title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required>
            </div>
            <div class="form-outline mb-4">
                <label for="descript" class="form-label">Product Description</label>
                <input type="text" name="descript" id="descript" class="form-control" placeholder="Enter Product Description" autocomplete="off" required>
            </div>
            <div class="form-outline mb-4">
                <label for="kword" class="form-label">Product Keywords</label>
                <input type="text" name="kword" id="kword" class="form-control" placeholder="Enter Product Keywords" autocomplete="off" required>
            </div>
            <div class="form-outline mb-4">
                <select name="product_cat" id="" class="form-select">
                    <option value="">Select a Category</option>
                    <?php
                    $select_query="Select * from categories";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query))
                    {
                        $cat_title=$row['category_title'];
                        $cat_id=$row['category_id'];
                        echo "<option value='$cat_id'>$cat_title</option>";
                    }

                    ?>
                    

                </select>
            </div>
            <div class="form-outline mb-4">
                <select name="product_brand" id="" class="form-select" aria-label="Default select example">
                    <option value="">Select a brand</option>
                    <?php
                    $select_query="Select * from brands";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query))
                    {
                        $cat_title=$row['brand_title'];
                        $cat_id=$row['brand_id'];
                        echo "<option value='$cat_id'>$cat_title</option>";
                    }

                    ?>
                </select>
            </div>
            <div class="form-outline mb-4">
                <label for="p-image1" class="form-label">Product Image1</label>
                <input type="file" name="p-image1" id="p-image1" class="form-control" placeholder=" Product Image" autocomplete="off" required>
            </div>
            <div class="form-outline mb-4">
                <label for="p-image2" class="form-label">Product Image2</label>
                <input type="file" name="p-image2" id="p-image2" class="form-control" placeholder=" Product Image2" autocomplete="off" required>
            </div>
            <div class="form-outline mb-4">
                <label for="p-image3" class="form-label">Product Image3</label>
                <input type="file" name="p-image3" id="p-image3" class="form-control" placeholder=" Product Image3" autocomplete="off" required>
            </div>
            <div class="form-outline mb-4">
                <label for="product-price" class="form-label">Product price</label>
                <input type="text" name="product-price" id="product-price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required>
            </div>
            <div class="form-outline mb-4">
                <input type="submit" class="btn btn-info mb-3 p-2" name="insert_product" value="Insert Products">
</div>
</form>
    </div>
    
</body>
</html>