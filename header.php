<?php
$html ='';


$html .='<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="all.css" rel="stylesheet">
  
  <title>MoJo 90*</title>
</head>


<body>
<!--Navbar Start-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="Images/LOGO.PNG" alt="" width="60" height="44" class="nav-logo">
    <a class="navbar-brand" href="#">MoJO 90*</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

      <li class="navbar-name">
      <a class="nav-link" href="home">Home</a>
    </li>
    <li class="navbar-name">
      <a class="nav-link" href="leaderboards">leaderboards</a>
    </li>

        <li class="navbar-name">
          <a class="nav-link" href="about">About Us</a>
        </li>
        <li class="navbar-name">
          <a class="nav-link" href="help">Help</a>
        </li>


        <li class="navbar-name">
          <a class="nav-link"  href="account">Account</a>
        </li>

        <li class="navbar-name">
          <a class="nav-link"  href="login">Login</a>
        </li>


      <li class="navbar-name">
        <a class="nav-link"  href="#">Logout</a>
      </li>


      </ul>
    </div>
  </div>
</nav>


<!--Navbar End-->';

echo $html;

?>