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
    <title>Dog Symptoms</title>
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
    
    <div class="bg-secondary text-center text-light">
        <b><h1>Symptoms for illness in Dogs</h1></b>
    <strong><h2>1. Rapid and Unexplained Weight Loss</h2></strong>  
  <p>
  While weight loss isn’t a red flag if you’re actively taking more walks with your dog or you’re consciously feeding them less due to a little excess weight, it is cause for alarm if you can’t explain the weight loss. Just as with humans, dogs don’t typically shed pounds without being put on a diet or getting more exercise, so if you’re noticing a slimmer dog without taking purposeful action, it’s time to contact your veterinarian.
  </p>

  <strong><h2>2. A Shift in Personality</h2></strong>
  <p>Behavioral changes are often what make a dog owner stop and take notice of a potential problem. When dogs don’t feel well, it often manifests in the form of sudden personality changes, such as being antisocial, snippy, aggressive, or lethargic. Other dogs won’t show negative behavior, but a typically independent dog might become extra clingy or needy. A change in personality significant enough that you’ve noticed it is cause for a visit to your veterinarian.</p>
  <strong><h2>3. Problems Eliminating</h2></strong>
  <p>If your well-trained dog hasn’t had an accident in the house in a long time and is suddenly having frequent messes, there’s likely a medical reason. Changes in elimination habits lasting more than a couple of days, such as accidents, difficulty passing a bowel movement, diarrhea, difficulty urinating, or notable changes in the frequency or volume of urine should not be ignored. Some of these symptoms in older dogs are especially worrisome, as they could be warning signs of a kidney issue.</p>

  <strong><h2>4. Decreased Appetite </h2></strong>
  <p>If your dog has always been a good eater and suddenly shows little or no interest in their food, watch closely and contact your veterinarian if it persists. Dogs are creatures of habit and will usually eat the same volume of food at the same time each day. If you notice your dog is not finishing their food or is pushing it around in a disinterested manner, consider it a warning sign. Also, drinking more water can indicate that your dog has a fever, diabetes, or kidney issue. Vomiting is also a sign that something is wrong and should be investigated promptly.</p>

  <strong><h2>5. Breathing Issues</h2></strong>
  <p>Much like humans, dogs can have respiratory and sinus problems. Coughing, sneezing, and nasal discharge could be a simple infection but still warrants a trip to the vet. Some breeds with shorter snouts are prone to louder breathing sounds, such as pugs and French bulldogs, but they should not have a nasal discharge. In all breeds, a honking noise, coughing, bloody nose, labored breathing, or tongue and gums with a bluish tint can mean a more serious respiratory issue.</p>

  <strong><h2>6. Excessive Licking and Scratching</h2></strong>
  <p>We all love kisses from our dog, but when your dog is focusing their licking on their paws and skin, it could be a bad sign that goes beyond basic grooming.
<strong><h5  class="text-left">Excessive licking and scratching by your dog could mean the following:</h5></strong>
<ul class="text-left">
    <li>A bacterial infection</li>
    <li>A Fungal infection</li>
    <li>Parasites, such as fleas, ticks, or mites</li>
    <li> response to orthopedic issues, such as arthritis or hip dysplasia</li>
</ul>
Excessive scratching can lead to rashes and skin infections or could indicate fleas. Underlying pain from arthritis can also cause dogs to lick excessively, much like humans rub a joint or muscle to make it feel better. The licking is releasing endorphins, causing their body to release its natural pain reliever, but it can also lead to the development of a lick sore.
  </p>
    </div>
  
</body>
</html>