<?php include("admin_session.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Renaissance Law College | Admin | Export</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Admin header -->
  <?php include("header.php"); ?>

</head>

<body>

  <?php include("logo.php"); ?>

  <?php include("menu.php"); ?>

  <div class="container">

<?php
//error_reporting(0);
include("../db_config.php");
if(isset($_POST["Export"])){

  $landing_page = $_POST['landing_page'];
  $form_name = $_POST['form_name'];

  $from_date = $_POST['from_date'];
  $to_date = $_POST['to_date'];

//  echo $from_date." >> ".$to_date;

  $where_date = '';

  if($from_date !== '' && $to_date !== '') {
    $where_date .= "DATE(reg_date) BETWEEN '".$from_date."' AND '".$to_date."' ";
  }


  $time = time();

    $filename = "export/renaissancelawcollege_lp_".$time.".csv";

     $output = fopen($filename, "w");
     fputcsv($output, array('ID ', 'Full Name ', 'Mobile Number ', 'Email Address ', 'City ', 'Program  ', 'Query ', 'Landing Page Name', 'Landing Page Link', 'Form Name', 'Enquiry At'));

     $where_lp = '';

     if($landing_page == '' && $form_name == '') {

  //   $query = "SELECT * from renaissancelawcollege_lp_record ORDER BY ID ASC ".$where_close;

     } else if($landing_page != '' && $form_name == '') {

       $where_lp .= "lp_name='".$landing_page."' ";

  //   $query = "SELECT * from renaissancelawcollege_lp_record WHERE lp_name='".$landing_page."' ORDER BY ID ASC ".$where_close;

     } else if($landing_page != '' && $form_name != '') {

       $where_lp .= "lp_name='".$landing_page."' AND form_name='".$form_name."' ";

    // $query = "SELECT * from renaissancelawcollege_lp_record WHERE lp_name='".$landing_page."' AND form_name='".$form_name."' ORDER BY ID ASC ".$where_close;

     }

     if($where_date == '' && $where_lp == '') {
       $where_close = '';
     } else if($where_date != '' && $where_lp == '') {
       $where_close = 'WHERE '.$where_date;
     } else if($where_date == '' && $where_lp != '') {
       $where_close = 'WHERE '.$where_lp;
     } else if($where_date != '' && $where_lp != '') {
       $where_close = 'WHERE '.$where_date.' AND '.$where_lp;
     }

     if($where_close == ''){
        $query = "SELECT * from renaissancelawcollege_lp_record ORDER BY ID ASC";
     } else {
       $query = "SELECT * from renaissancelawcollege_lp_record ".$where_close." ORDER BY ID ASC";
     }

//     echo "<br/>".$query;

     $result = mysqli_query($conn, $query);
     while($row = mysqli_fetch_assoc($result))
     {
          fputcsv($output, $row);
     }
     fclose($output);

    echo '<h4><a href="'.$filename.'">Click Here</a> to download '.$filename.'</h4>';
}

?>

</div>

</body>

</html>
