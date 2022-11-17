<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<title>Renaissance Law College | Admin </title>

<head>
    <title>Symbiosis</title>

    <?php include("header.php"); ?>

</head>
<body>

  <?php include("logo.php"); ?>

  <?php
  if(isset($_SESSION['login_status']) && $_SESSION['login_status'] == "success")
  {
    include("menu.php");
    include("admin.php");
  } else {
    include("login.php");
  }
  ?>


  <?php if(isset($_SESSION['login_status']) && $_SESSION['login_status'] == "fail")
  {
     ?>
     <div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
      <div class="alert alert-danger">
        <strong>Login Fail!</strong> Please try again.
      </div>
    </div>
  </div>
   <?php
     session_destroy();
  } ?>


</body>
