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
    <title>Cat Diseases and Symptoms</title>
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
    .list 
    {
        text-align:left;
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
<div class="bg-secondary text-center text-light">
    <strong><h2>1. Cancer</h2></strong>
    <p>
    Cancer in cats comes in many different forms. It causes cells to grow out of control and spread to surrounding tissue, often spreading to other parts of the body. Like humans, cats can experience localized cancer that’s confined to a single area or more generalized cancer affecting multiple body parts.There is no singular cause of feline cancer, and it can cause a wide range of symptoms.
    <b><h5>Some of the most common symptoms of cancer in cats include:</h5></b>
    <ul class="list">
        <li>Persistent skin infections or sores</li>
        <li>Diarrhea/vomiting</li>
        <li>Labored breathing</li>
        <li>Labored breathing</li>
        <li>Lethargy</li>
    </ul>
    </p>


    <strong><h2>2. Feline Leukemia Virus (FeLV)</h2></strong>
    <p>
    Feline leukemia virus (FeLV) was discovered in the 1960s and is one of the most common causes of death in cats. It doesn’t always cause symptoms immediately, so it’s essential to have any new cats entering your home tested before introducing them to your other pets.<br>FeLV weakens cats’ immune systems and makes them more susceptible to kidney disease, lymphosarcoma, and anemia. This virus most commonly affects kittens under a year old. Keeping your cat up-to-date on their FeLV vaccination is the best way to protect them against this potentially deadly illness. We also recommend testing new kittens and any new feline addition to your home for FeLV before introducing them to any existing pets.
    <ul class="list">
        <li>Upper respiratory infections</li>
        <li>Eye problems</li>
        <li>Poor coat condition</li>
        <li>Weight loss</li>
        <li>Eye problems</li>
        <li>Decreased appetite</li>
    </ul>
    </p>

    <strong><h2>3. Diabetes</h2></strong>
    <p>
    In cats, diabetes occurs due to either a lack of insulin or an inadequate response to it. In healthy cats, insulin carries glucose from digested food to their cells. However, when a cat cannot use or produce insulin normally, glucose causes blood sugar levels to increase. This causes hyperglycemia, which can have devastating consequences.<br>Like humans, cats can suffer from type I or type II diabetes. In type I diabetes, cats cannot produce insulin. With type II diabetes, cats experience impaired insulin production, and their body fails to respond to the hormone appropriately. In many cases, cats with type II diabetes develop type I diabetes, too. Most diabetic cats are not diagnosed until they have type I diabetes and need insulin therapy to survive. The exact cause of diabetes is unknown, but obesity makes cats more susceptible to the disease. Male cats are also more prone to diabetes than females.
    <ul class="list">
        <li>Sweet-smelling breath</li>
        <li>Increased or decreased appetite</li>
        <li>Lethargy</li>
    </ul>
    </p>

    <strong><h2>4.Feline Immunodeficiency Virus (FIV)</h2></strong>
    <p>
    The feline immunodeficiency virus (FIV) severely weakens a cat’s immune system and makes them highly susceptible to secondary infections. FIV-infected cats often do not show symptoms for several years, or they may develop symptoms gradually over time.
    <h4>Some of the symptoms of the FIV virus include:</h4>
    <ul class="list">
        <li>Inflammation of the eyes, mouth, or gums</li>
        <li>Wounds that won’t heal</li>
        <li>Frequent urination or straining to urinate</li>
        <li>Eye or nose discharge</li>
    </ul>
    </p>


    <strong><h2>5. Feline Lower Urinary Tract Disease (FLUTD)</h2></strong>
    <p>
    Feline lower urinary tract disease, or FLUTD, refers to a group of diseases involving the bladder or urethra in cats. Urinary tract problems are common in cats and can cause many complications when left untreated. These issues are most common in middle-aged and overweight cats. While the causes are numerous, factors like environmental stress, eating only dry food, obesity, and changes in daily routines may make a cat more susceptible to FLUTD.
    <h4>Symptoms of FLUTD include:</h4>
    <ul class="list">
        <li>Dehydration</li>
        <li>Crying out during urination</li>
        <li>Blood in urine</li>
        <li>Passing only a few drops of urine at a time</li>
        <li>Straining to urinate</li>
        <li>Vomiting</li>
    </ul>
    </p>

</div>    
</body>
</html>