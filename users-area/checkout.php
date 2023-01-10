<!DOCTYPE html>
<html lang="en">
    <?php
    include('../includes/connect.php');
    session_start();
    //include('functions/commonfunc.php')
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shield- Check Out</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- css link-->
<link rel="stylesheet" href="style.css">
<style>
.logo
{
  width:70px;
  height:70px;
}
  </style>


</head>
<body>
    <div class="container-fluid p-0">
        <!--1st Child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <img class="logo" src="../images/petc.png" alt="Logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="disp_all.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="searchproduct.php" method="get">
      <input class="form-control mr-sm-2" type="search"name="search_data"  placeholder="Search" aria-label="Search">
      <input type="submit" value="Search" name="search_data_product"class="btn btn-outline-light">
    </form>
  </div>
</nav>
<!--2nd child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    
      <?php
      if(!isset($_SESSION['username']))
      {
        echo "<li class='nav-item'>
        <a class='nav-link' href='#'>Welcome Guest</a>
      </li>";
      }
      else
      {
        echo "<li class='nav-item'>
        <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
      </li>";
      }
      if(!isset($_SESSION['username']))
      {
        echo "<li class='nav-item'>
        <a class='nav-link' href='./user_login.php'>Login
        </a>
      </li>";
      }
      else{
        echo "<li class='nav-item'>
        <a class='nav-link' href='logout.php'>LogOut
        </a>
      </li>";
      }
      ?>
      
</ul>


</nav>
<?php 
//cart();
?>
<!--3rd child--> 
<div class="bg-light">
    <h3 class="text-center">Pet Care</h3>
    <p class="text-center">Live and Let others Live</p>
</div>
<!--4th child--> 
<div class="row px-1">
    <div class="col md-12">
        <div class="row">
            <?php
            if(!isset($_SESSION['username']))
            {
                include('user_login.php');
            }
            else{
                include('payment.php');
            }
            ?>
        </div>
    </div>
</div>

    <!--lst child-->
    <?php
    include('../includes/footer.php');
    ?>
    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</body>
</html>