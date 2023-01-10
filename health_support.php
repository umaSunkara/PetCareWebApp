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
    <title>Health Support</title>
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
    
        
    
    <div class="bg-secondary ">
        <div class="text-center bg-info m-5">
    <h3 class="text-center bg-info m-5">Symptoms of Pet Diseases</h3>
    </div>
        <ul>
            <li><a href="dog.php" target="_blank" class="text-decoration-none text-light">Dogs</a></li>
            <li><a href="cat.php"  target="_blank" class="text-decoration-none text-light">Cats</a></li>
    </ul>
    </div>
    <div class="bg-secondary">
        <div class="text-center bg-info m-5">
    <h3 class="text-center bg-info m-5">Precautions of Pet Diseases</h3>
    </div>
        <ul>
            <li><a href="dog_p.php" target="_blank" class="text-decoration-none text-light">Dogs</a></li>
            <li><a href="cat_p.php"  target="_blank" class="text-decoration-none text-light">Cats</a></li>
    </ul>
    </div>
    <div class="bg-secondary">
    <h3 class="text-center bg-info m-5">Veterinary Support</h3>
    <div class="bg-secondary">
        <ul>
            <li><a href="kurnool.php" target="_blank" class="text-decoration-none text-light">Kurnool</a></li>
            <li><a href="hyderabad.php"  target="_blank" class="text-decoration-none text-light">Hyderabad</a></li>
            <li><a href="bangalore.php"  target="_blank" class="text-decoration-none text-light">Bangalore</a></li>
            <li><a href="chennai.php"  target="_blank" class="text-decoration-none text-light">Chennai</a></li>
        </ul>
    </div>

    </div>
    

</body>
</html>