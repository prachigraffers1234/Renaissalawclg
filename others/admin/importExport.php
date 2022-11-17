<?php include("admin_session.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Renaissance Law College | Admin | Import-Export</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Admin header -->
  <?php include("header.php"); ?>

</head>

<body>

  <?php include("logo.php"); ?>

  <?php include("menu.php"); ?>

  <div class="container">

    <h2 class="align_center"> Export Enquiry Data </h2>

      <div class="row admin_background_color">

        <?php  include("../db_config.php"); ?>

          <form class="form-horizontal align_center" action="export.php" method="post" name="upload_excel" enctype="multipart/form-data">
            <fieldset>

              <div class="form-group">
                <label class="control-label col-md-offset-2 col-md-3 col-sm-4" for="landing_page">Landing Page:</label>
                <div class="col-md-3 col-sm-6">
                  <select class="form-control" name="landing_page" id="landing_page">
                    <option value=""> -Select- </option>
                    <?php
                    $sql = "SELECT DISTINCT lp_name FROM renaissancelawcollege_lp_record";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)) {
                      echo '<option value="'.$row['lp_name'].'">'.$row['lp_name'].'</option>';
                    }
                    ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-offset-2 col-md-3 col-sm-4" for="form_name">Form Name:</label>
                <div class="col-md-3 col-sm-6">
                  <select class="form-control" name="form_name" id="form_name">
                    <option value=""> -Select- </option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-offset-2 col-md-3 col-sm-4" for="from_date">From Date:</label>
                <div class="col-md-3 col-sm-6">
                  <input type="date" class="form-control" name="from_date" id="from_date">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-offset-2 col-md-3 col-sm-4" for="to_date">To Date:</label>
                <div class="col-md-3 col-sm-6">
                  <input type="date" class="form-control" name="to_date" id="to_date">
                </div>
              </div>


              <div class="form-group">
                <div class="col-md-offset-5 col-md-3 col-sm-offset-4 col-sm-6">
                  <input type="submit" name="Export" class="btn btn-success" value="Export to excel"/>
                </div>
              </div>


             </fieldset>
            </form>


      </div>

  </div>

</body>

</html>
