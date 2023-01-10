<?php

//include('./includes/connect.php');
function getproducts()
{
    global $con;
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
    $select_q="select * from products order by rand() limit 0,6";
    $result=mysqli_query($con,$select_q);
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['product_id'];
        $title=$row['product_title'];
        $des=$row['product_description'];
        $kword=$row['product_keywords'];
        $im=$row['product_image2'];
        $price=$row['product_price'];
        $cat_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo " <div class='col-md-4 mb-2'>
        <div class='card'>
            <img class='card-img-top' src='./admin-area/productimages/$im' alt='$title'>
            <div class='card-body'>
                <h5 class='card-title'>$title</h5>
                <p class='card-text'>$des</p>
                <p><b>Price:</b></p>
                <p class='card-text'>$price</p>
                <a href='index.php?add_to_cart=$id' class='btn btn-info'>Add to cart</a>
                <a href='product_details.php?product_id=$id' class='btn btn-info'>View More</a>
            </div>
        </div>
        </div>
        ";
    }}}
}

function getallproducts()
{
    global $con;
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
    $select_q="select * from products order by rand()";
    $result=mysqli_query($con,$select_q);
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['product_id'];
        $title=$row['product_title'];
        $des=$row['product_description'];
        $kword=$row['product_keywords'];
        $im=$row['product_image2'];
        $price=$row['product_price'];
        $cat_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo " <div class='col-md-4 mb-2'>
        <div class='card'>
            <img class='card-img-top' src='./admin-area/productimages/$im' alt='$title'>
            <div class='card-body'>
                <h5 class='card-title'>$title</h5>
                <p class='card-text'>$des</p>
                <p><b>Price:</b></p>
                <p class='card-text'>$price</p>
                <a href='index.php?add_to_cart=$id' class='btn btn-info'>Add to cart</a>
                <a href='product_details.php?product_id=$id' class='btn btn-info'>View More</a>
            </div>
        </div>
        </div>
        ";
    }}}
}
function getuniquecategories()
{
    global $con;
    
    if(isset($_GET['category'])){
        $cat_id=$_GET['category'];
        
    $select_q="select * from products where category_id=$cat_id";
    $result=mysqli_query($con,$select_q);
    $num=mysqli_num_rows($result);
    if($num==0)
    {
        echo "<center><h2 class='text center text-danger' align='center'>No stock for this category</h2></center>";
    }
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['product_id'];
        $title=$row['product_title'];
        $des=$row['product_description'];
        $kword=$row['product_keywords'];
        $im=$row['product_image2'];
        $price=$row['product_price'];
        $cat_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo " <div class='col-md-4 mb-2'>
        <div class='card'>
            <img class='card-img-top' src='./admin-area/productimages/$im' alt='$title'>
            <div class='card-body'>
                <h5 class='card-title'>$title</h5>
                <p class='card-text'>$des</p>
                <p><b>Price:</b></p>
                <p class='card-text'>$price</p>
                <a href='index.php?add_to_cart=$id' class='btn btn-info'>Add to cart</a>
                <a href='product_details.php?product_id=$id' class='btn btn-info'>View More</a>
            </div>
        </div>
        </div>
        ";
    }}
}

function getuniquebrands()
{
    global $con;
    
    if(isset($_GET['brand'])){
        $cat_id=$_GET['brand'];
        
    $select_q="select * from products where brand_id=$cat_id";
    $result=mysqli_query($con,$select_q);
    $num=mysqli_num_rows($result);
    if($num==0)
    {
        echo "<center><h2 class='text center text-danger' align='center'>No stock for this brand</h2></center>";
    }
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['product_id'];
        $title=$row['product_title'];
        $des=$row['product_description'];
        $kword=$row['product_keywords'];
        $im=$row['product_image2'];
        $price=$row['product_price'];
        $cat_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo " <div class='col-md-4 mb-2'>
        <div class='card'>
            <img class='card-img-top' src='./admin-area/productimages/$im' alt='$title'>
            <div class='card-body'>
                <h5 class='card-title'>$title</h5>
                <p class='card-text'>$des</p>
                <p><b>Price:</b></p>
                <p class='card-text'>$price</p>
                <a href='index.php?add_to_cart=$id' class='btn btn-info'>Add to cart</a>
                <a href='product_details.php?product_id=$id' class='btn btn-info'>View More</a>
            </div>
        </div>
        </div>
        ";
    }}
}


function getbrands()
{
    global $con;
    $select_cats="select * from categories";
            $result_b=mysqli_query($con,$select_cats);
            //$row_data=mysqli_fetch_assoc($result_b);
            //echo $row_data['brand_title'];
            while($row_data=mysqli_fetch_assoc($result_b))
            {
                $category_title=$row_data['category_title'];
                $category_id=$row_data['category_id'];
                echo "<li class='nav-item'>
                <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
            </li>";
            }

}
function getcategories()
{
    global $con;
    $select_brands="select * from brands";
            $result_b=mysqli_query($con,$select_brands);
            //$row_data=mysqli_fetch_assoc($result_b);
            //echo $row_data['brand_title'];
            while($row_data=mysqli_fetch_assoc($result_b))
            {
                $brand_title=$row_data['brand_title'];
                $brand_id=$row_data['brand_id'];
                echo "<li class='nav-item'>
                <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
            </li>";
            }

}

//get search prods
function searchproduct()
{
    global $con;
    if(isset($_GET['search_data_product'])){
        $user_search=$_GET['search_data'];
    $search_q="select * from products where product_keywords like '%$user_search%'";
    $result=mysqli_query($con,$search_q);
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['product_id'];
        $title=$row['product_title'];
        $des=$row['product_description'];
        $kword=$row['product_keywords'];
        $im=$row['product_image2'];
        $price=$row['product_price'];
        $cat_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo " <div class='col-md-4 mb-2'>
        <div class='card'>
            <img class='card-img-top' src='./admin-area/productimages/$im' alt='$title'>
            <div class='card-body'>
                <h5 class='card-title'>$title</h5>
                <p class='card-text'>$des</p>
                <p><b>Price:</b></p>
                <p class='card-text'>$price</p>
                <a href='index.php?add_to_cart=$id' class='btn btn-info'>Add to cart</a>
                <a href='product_details.php?product_id=$id' class='btn btn-info'>View More</a>
            </div>
        </div>
        </div>
        ";
    }  
}
}
//view more
function viewdetails()
{
    global $con;
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){
            $prod_id=$_GET['product_id'];
    $select_q="select * from products where product_id=$prod_id";
    $result=mysqli_query($con,$select_q);
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['product_id'];
        $title=$row['product_title'];
        $des=$row['product_description'];
        $kword=$row['product_keywords'];
        $im=$row['product_image1'];
        $im1=$row['product_image2'];
        $im2=$row['product_image3'];
        $price=$row['product_price'];
        $cat_id=$row['category_id'];
        $brand_id=$row['brand_id'];
        echo " <div class='col-md-4 mb-2'>
        <div class='card'>
            <img class='card-img-top' src='./admin-area/productimages/$im' alt='$title'>
            <div class='card-body'>
                <h5 class='card-title'>$title</h5>
                <p class='card-text'>$des</p>
                <p><b>Price:</b></p>
                <p class='card-text'>$price</p>
                <a href='index.php?add_to_cart=$id' class='btn btn-info'>Add to cart</a>
                <a href='index.php' class='btn btn-info'>Go Home</a>
            </div>
        </div>
        </div>
        <div class='col-md-8'>
            <div class='row'>
              <div class='col-md-12'>
                <h4 class='text-center text-info mb-5'>
                  Related Products
                </h4>
              </div>
              <div class='col-md-6'>
              <img class='card-img-top' src='./admin-area/productimages/$im1' alt='$title'>
              </div>
              <div class='col-md-6'>
              <img class='card-img-top' src='./admin-area/productimages/$im2' alt='$title'>
                
              </div>
            </div>
            
          </div>
        ";
    }}}}
}
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
function cart()
{
if(isset($_GET['add_to_cart']))
{
    global $con;
    $ip=getIPAddress();
    $id=$_GET['add_to_cart'];
    $select_q="select * from cart_details where ip_address='$ip' and product_id=$id";
    $result=mysqli_query($con,$select_q);
    $num=mysqli_num_rows($result);
    if($num>0)
    {
        echo "<script>alert('This product is already present')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else{
        $insert_q="insert into cart_details (product_id,ip_address,quantity) values ($id,'$ip',0)";
        $result=mysqli_query($con,$insert_q);
        echo "<script>alert('Item added to cart.')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
}
function cart_item()
{
    if(isset($_GET['add_to_cart']))
    {
        global $con;
        $ip=getIPAddress();
        
        $select_q="select * from cart_details where ip_address='$ip'";
        $result=mysqli_query($con,$select_q);
        $num=mysqli_num_rows($result);
    }
        else{
            global $con;
        $ip=getIPAddress();
        
        $select_q="select * from cart_details where ip_address='$ip'";
        $result=mysqli_query($con,$select_q);
        $num=mysqli_num_rows($result);
        }
        echo $num;
    } 
    function cartprice()
    {
        global $con;
        $ip=getIPAddress();
        $total=0;
        $cart_q="select * from cart_details where ip_address='$ip'";
        $res=mysqli_query($con,$cart_q);
        while($row=mysqli_fetch_array($res))
        {
            $id=$row['product_id'];
            $select_p="select * from products where product_id=$id";
            $res_p=mysqli_query($con,$select_p);
            while($row_p=mysqli_fetch_array($res_p))
            {
                $price=array($row_p['product_price']);
                $prod_val=array_sum($price);
                $total+=$prod_val;
            }

        }
        echo $total;
    }
//get user oders function

function get_orders()
{
    global $con;
    $uname=$_SESSION['username'];
    $get_details="select * from user_table where username ='$uname'";
    $res=mysqli_query($con,$get_details);
    while($row=mysqli_fetch_array($res))
    {
        $uid=$row['user_id'];
        if(!isset($_GET['edit_account']))
        {
            if(!isset($_GET['my_orders']))
            {
                if(!isset($_GET['delete_account']))
                {
                    $get_o="select * from user_orders where user_id=$uid and order_status='pending'";
                    $res_q=mysqli_query($con,$get_o);
                    $num=mysqli_num_rows($res_q);
                    if($num>0)
                    {
                        echo "<h3 class='text-center text-success'>You have <span class='text-danger'>$num</span> Pending orders.</h3>
                        <p class='text-center'><a class='text-dark' href='profile.php?my_orders'>Order Details</a></p>";
                    }
                    else
                    {
                        echo "<h3 class='text-center text-success'>You have Zero pending orders.</h3>
                        <p class='text-center'><a class='text-dark' href='../index.php?my_orders'>Explore products</a></p>";
                    }
                }
            }
        }
    }

}
?>