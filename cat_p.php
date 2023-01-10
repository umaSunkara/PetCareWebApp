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
    <title>Precautions for Cat Diseases</title>
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
    ul 
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
        <h1>Precautions for Cat Diseases</h1>
        <strong><h2>1. Keep Up with Vaccinations</h2></strong>
        <p>
        One of the best ways you can protect your pet from disease is with vaccines. Some diseases you can help prevent include:
        <ul>
            <li> Leptospirosis</li>
            <li> Bordetella</li>
            <li>‌ Intestinal worms</li>
            <li>‌ Parvovirus</li>
            <li>‌ Lyme disease</li>
        </ul>
        </p>

        <strong><h2>
        2. Use Preventative Medications
        </h2></strong>
        <p>
        Fleas and ticks are common issues for cats and dogs, especially ones that spend time outside. These parasites are irritating and can carry disease.<br> Ticks can spread:<br>
        <ul>
            <li> Anaplasmosis</li>
            <li>Bartonella</li>
            <li>‌ Rocky Mountain Spotted Fever</li>
            <li>Lyme Disease</li>
        </ul>
        Providing your pet with a flea and tick preventative can help keep these parasites at bay. There are flea and tick collars, topical medications, and oral medications. You can ask for a heartworm preventative. ‌<br>When it comes to preventative medications, there are several over-the-counter and prescription options. Speak with your vet to determine the best ones for your pet. 
        </p>


        <strong><h2>3. Check Over Your Pets When They Come Inside</h2></strong>
        <p>
        If your pet spends any amount of time outside, it’s always a good idea to check them over for fleas and ticks — even if you’re using preventative medicines. Be sure to check indoor pets regularly if they live with another animal that goes outside. If you do find a tick, remove it as soon as possible to lower the risk of your pet getting sick or developing an infection. If you’re having trouble removing the tick yourself, call your vet to schedule an appointment. 
        </p>


        <strong><h2>4. Get Routine Vet Visits</h2></strong>
        <p>
        While pets often show signs of illness, some symptoms aren’t always noticeable right away. Annual (or twice yearly) wellness exams by a professional vet can help uncover issues, including diseases, that you might not know your pet has. <br>

During routine exams, your vet will check over your pet from head to tail. As they listen, look, and feel around, they’ll check for signs of potential problems. They’ll run different tests, including bloodwork and a fecal exam. These tests can uncover certain issues, such as parasites and diseases. If your vet finds something wrong, they’ll recommend a course of treatment, which might include procedures or medications. 
        </p>


        <strong><h2>5.Schedule an Appointment if Your Pet Shows Signs of Illness</h2></strong>
        <p>Your pet can get many diseases that will cause various symptoms. For instance, symptoms of parvovirus (a disease affecting the small intestines) can include lethargy, loss of appetite, and bloody diarrhea. <br>

Symptoms of Rocky Mountain Spotted Fever include coughing, difficulty breathing, and facial swelling. While some symptoms may be nothing serious, schedule an appointment as soon as possible if you notice something wrong with your pet. The earlier you visit your vet, the easier many diseases will be to treat. </p>
    </div>
</body>
</html>