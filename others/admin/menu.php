<?php $currentFile = strtolower(basename($_SERVER['REQUEST_URI'])); ?>

<div class="container">

<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <?php   if(isset($_SESSION['login_user']) && $_SESSION['login_user'] == "admin") { ?>
          <ul class="nav navbar-nav">
            <li <?php  if($currentFile == "index.php") echo 'class="active"';?> ><a href="index.php">Home</a></li>
            <li <?php  if($currentFile == "record.php") echo 'class="active"';?> ><a href="record.php">Register Record</a></li>
            <li <?php  if($currentFile == "importExport.php") echo 'class="active"';?> ><a href="importExport.php">Export Data</a></li>
            <li <?php  if($currentFile == "logout.php") echo 'class="active"';?> ><a href="logout.php">Log out</a></li>
          </ul>
        <?php } ?>
      <!--  <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php" target="_blank">Website</a></li>
        </ul> -->
        </div>
      </div>
    </nav>

  </div>
</div>
</div>
