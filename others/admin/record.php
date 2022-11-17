<?php include("admin_session.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Renaissance Law College | Admin | Record</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Admin header -->
  <?php include("header.php"); ?>

<style>
#loading_section {
position: fixed;
z-index: 999;
background-color: rgba(0, 0, 0, 0.4);
opacity: 17;
width: 100%;
height: 100%;
display: none;
}
#loading_section img{
  margin-left: 40%;
margin-top: 20%;
}
</style>

</head>

<body>

  <div id="loading_section">
      <img src="../image/loading.gif">
  </div>

    <?php include("logo.php"); ?>

    <?php include("menu.php"); ?>

<div class="container">

<div class="admin_background_color" >

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

      <h2 class="align_center">Landing Page Enquiry Record </h2>

    </div>
  </div>

  <br/>

  <?php  include("../db_config.php"); ?>

  <div class="row" style="padding:0px 10px;">
    <div class="col-md-12 col-sm-12 col-xs-12">

          <table id="register_record" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                  <tr>
                      <th>Sr. No.</th>
                      <th>Name </th>
                      <th>Mobile </th>
                      <th>Email </th>
                      <th>City </th>
                      <th>Program</th>
                      <th>Query</th>
                      <th>Enquire From</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Name </th>
                    <th>Mobile </th>
                    <th>Email </th>
                    <th>City </th>
                    <th>Program</th>
                    <th>Query</th>
                    <th>Enquire From</th>
                  </tr>
              </tfoot>
              <tbody>

              <?php
              $counter = 1;
                $sql = "SELECT * FROM renaissancelawcollege_lp_record";
                $result = mysqli_query($conn, $sql);
               while($row = mysqli_fetch_assoc($result)) {
                 ?>
                   <tr>
                       <td><?php echo $counter;?></td>
                       <td><?php echo $row['fname'];?></td>
                       <td><?php echo $row['mobile'];?></td>
                       <td><?php echo $row['email'];?></td>
                       <td><?php echo $row['city'];?></td>
                       <td><?php echo $row['program'];?></td>
                       <td><?php echo $row['query'];?></td>
                       <td><?php echo $row['lp_name']."<br/>".$row['form_name']."<br/><a target='_blank' href='".$row['lp_link']."'>Link</a>";?></td>
                   </tr>
               <?php $counter++;
               } ?>
              </tbody>
      </table>

    </div>
  </div>
</div>

</div>

</body>

<!-- Edit Modal -->
  <div class="modal fade" id="edit_modal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Record</h4>
        </div>
        <div class="modal-body">
          <div class="modal-body">

                <input type="hidden" name="user_id_p" id="user_id_p" value=""/>
                <!--<h4>Contact Us</h4>-->
                <div class="form-group">
                  <label for="name_p">Name: </label>
                  <input id="name_p" name="name_p" type="text" placeholder="Name" class="form-control" required />
                </div>

                <div class="form-group">
                  <label for="age_p">Age: </label>
                  <input id="age_p" name="age_p" type="text" placeholder="Mobile Number" maxlength="10" class="form-control" required />
                </div>

                <div class="form-group">
                  <label for="mobile_p">Mobile: </label>
                  <input id="mobile_p" name="mobile_p" type="text" placeholder="Mobile Number" maxlength="10" class="form-control" required />
                </div>

                <div class="form-group">
                  <label for="email_p">Email: </label>
                  <input id="email_p" name="email_p"  type="email" placeholder="Email ID" class="form-control" required />
                </div>

                <div class="form-group">
                  <label for="designation_p">Designation: </label>
                  <input id="designation_p" name="designation_p"  type="text" placeholder="Designation" class="form-control" required />
                </div>

                <div class="form-group">
                  <label for="organisation_p">Organisation: </label>
                  <input id="organisation_p" name="organisation_p"  type="text" placeholder="Organisation" class="form-control" required />
                </div>

                <div class="form-group">
                <label for="register_as_p">Register As: </label>
                <select name="register_as_p" id="register_as_p" class="form-control">
                  <option value=""> --Select-- </option>
                  <option value="Students / Research Scholars">Students / Research Scholars</option>
                  <option value="Academicians">Academicians</option>
                  <option value="NGO">NGO</option>
                  <option value="Accompanying person">Accompanying person</option>
                  <option value="Alumni">Alumni</option>
                  <option value="Industry Professionals">Industry Professionals</option>
                  <option value="Government Officials">Government Officials</option>
                  <option value="SIU Faculty">SIU Faculty</option>
                  <option value="SIU Student">SIU Student</option>
                </select>
              </div>

              <div class="form-group">
                <label for="payment_by_p">Payment by:</label>
                  <select name="payment_by_p" id="payment_by_p" class="form-control" >
                    <option value=""> --Select-- </option>
                    <option value="Cash">Cash</option>
                    <option value="Card">Card</option>
                  </select>
              </div>

              <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-4 col-md-offset-1">
                  <button type="button" class="btn btn-info" onclick="edit_record()">Edit</button>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-4 col-md-offset-4">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>


          </div>
        </div>

      </div>

    </div>
  </div>

  <!-- Delete Modal -->
    <div class="modal fade" id="delete_modal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Delete Record</h4>
          </div>
          <div class="modal-body">
            <p>Would you like to delete this record?</p>
            <input type="hidden" name="delete_user_id_p" id="delete_user_id_p" value=""/>

            <div class="row">
              <div class="col-md-3 col-sm-4 col-xs-4 col-md-offset-1">
                <button type="button" class="btn btn-danger" onclick="delete_record()">Delete</button>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-4 col-md-offset-4">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <!-- change_status_model  -->
    <div class="modal fade" id="change_status_model" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Change Status</h4>
          </div>
          <div class="modal-body">

            <p>Select Payment Status: </p>
            <select id="payment_status_update" name="payment_status_update">
              <option value=""> -Select- </option>
              <option value="pending">Pending</option>
              <option value="pending by admin">Pending By Admin</option>
              <option value="success">Success</option>
            </select>

            <div class="row">
              <div class="col-md-3 col-sm-4 col-xs-4 col-md-offset-1">
                <button type="button" class="btn btn-danger" onclick="change_status()">Change</button>
              </div>
              <div class="col-md-3 col-sm-4 col-xs-4 col-md-offset-4">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

</html>
