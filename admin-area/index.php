<!DOCTYPE html>
<html lang="en">
<?php
    include('../includes/connect.php');
    include('../functions/commonfunc.php');
    session_start();
    ?>
<head>
    <style>
        .footer
        {
            position:absolute;
            bottom:0;
        }
        .body 
        {
            overflow-x:hidden;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dash Board</title>
    <!--bs css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
    <style>
        .adimage
{
    width: 100px;
    object-fit: contain;
}
        </style>
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid"><img class="logo" src="../images/petc.png" alt="logo">
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                     <?php 
                    if(!isset($_SESSION['username']))
                    {
                        echo "<li class='nav-item'><a href='#'class='nav-link'>Welcome Guest</a></li>";
                    }
                    else
                    {
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
                      </li>";
                    }
                    ?></a></li>

                </ul>
</nav>
        </div>
        </nav>
        <!--2nd child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!--3 child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-5">
                    <a href="#"><img src="../images/petc.png" alt="logo" class="adimage"></a> 
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button><a href="index.php?insert_cat" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    
                    <button><a href="index.php?view_categories" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button><a href="index.php?view_brands" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button><a href="index.php?list_users" class="nav-link text-light bg-info my-1">List Users</a></button>
                    <button><a href="index.php?list_orders" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button><a href="index.php?list_payments" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
        </div>
        <!--4 chid-->
        <div class="container my-5">
            <?php 
            if(isset($_GET['insert_cat']))
            {
                include('insert_cat.php');
            }
            if(isset($_GET['insert_brand']))
            {
                include('insert_brand.php');
            }
            if(isset($_GET['view_products']))
            {
                include('view_products.php');
            }
            if(isset($_GET['edit_products']))
            {
                include('edit_products.php');
            }
            if(isset($_GET['delete_products']))
            {
                include('delete_product.php');
            }
            if(isset($_GET['view_categories']))
            {
                include('view_categories.php');
            }
            if(isset($_GET['view_brands']))
            {
                include('view_brands.php');
            }
            if(isset($_GET['edit_category']))
            {
                include('edit_category.php');
            }
            if(isset($_GET['delete_category']))
            {
                include('delete_category.php');
            }
            if(isset($_GET['edit_brand']))
            {
                include('edit_brand.php');
            }
            if(isset($_GET['delete_brand']))
            {
                include('delete_brand.php');
            }
            if(isset($_GET['list_orders']))
            {
                include('list_orders.php');
            }
            if(isset($_GET['list_payments']))
            {
                include('list_payments.php');
            }
            if(isset($_GET['delete_payment']))
            {
                include('delete_payment.php');
            }
            if(isset($_GET['del_order']))
            {
                include('del_order.php');
            }
            if(isset($_GET['list_users']))
            {
                include('list_users.php');
            }
            if(isset($_GET['del_user']))
            {
                include('del_user.php');
            }
            

            ?>
        </div>
    </div>
    <!--js link-->
    <?php
    include('../includes/footer.php');
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>