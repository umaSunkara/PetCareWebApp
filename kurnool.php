<!DOCTYPE html>
<html lang="en">
<?php
    include('includes/connect.php');
    include('functions/commonfunc.php');
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurnool-Health Support</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .logo 
    {
        width:70px;
        height:70px;
        object-fit:contain;
    }
</style>
</head>
<body>
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg navbar-light bg-info">
        <img class="logo" src="./images/petc.png" alt="Logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
</ul>
</div>
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
        <a class='nav-link' href='./users-area/user_login.php'>Login
        </a>
      </li>";
      }
      else
      {
        echo "<li class='nav-item'>
        <a class='nav-link' href='./users-area/logout.php'>Log Out
        </a>
      </li>";
      }
      ?>
</ul>
</nav> 
    </div>
    <div class="bg-secondary">
        <div class="text-center bg-info m-5">
    <h3 class="text-center bg-info m-5">Veterinary Support in Kurnool.</h3>
    </div>
        <ul>
            <li>
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/v1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Lakshmi Pet and Clinic</h5>
    <p class="card-text">VR Colony,Kurnool,518 002</p>
    <a href="#" class="btn btn-primary">Contact</a>
  </div>
</div>
            </li>
            <li>
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/v2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Government Veterinary Clinic</h5>
    <p class="card-text">Near Kondareddy Fort,Kurnool.</p>
    <a href="#" class="btn btn-primary">Contact</a>
  </div>
</div>
            </li>
            <li>
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/v3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Blue Cross Youth</h5>
    <p class="card-text">Birla Gate,Kurnool.</p>
    <a href="#" class="btn btn-primary">Contact</a>
  </div>
</div>
            </li>
            <li>
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./images/v4.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Venkateswara Dog Clinic</h5>
    <p class="card-text">Railway Station Road, Kurnool, 518 001.</p>
    <a href="#" class="btn btn-primary">Contact</a>
  </div>
</div>
            </li>
        </ul>
    </div>
        

    </body>
    </html>