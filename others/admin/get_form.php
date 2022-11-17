<?php

include("../db_config.php");
$landing_page = $_POST['landing_page'];

$sql = "SELECT DISTINCT form_name FROM renaissancelawcollege_lp_record WHERE lp_name='".$landing_page."'";
$result = mysqli_query($conn, $sql);
echo '<option value="">All</option>';
while($row = mysqli_fetch_assoc($result)) {
  echo '<option value="'.$row['form_name'].'">'.$row['form_name'].'</option>';
}
 ?>
