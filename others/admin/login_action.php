<?php //errror_reporting(E_ALL);
session_start();

include("../db_config.php");

$uname = $_POST['username'];
$psw = $_POST['password'];

$sql = "SELECT * FROM renaissancelawcollege_lp_login WHERE username='$uname' and password='$psw'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
$row = mysqli_fetch_assoc($result);
$_SESSION['login_id'] = $row['ID'];
$_SESSION['login_user'] = $uname;
$_SESSION['login_status'] = "success";
} else {
    $_SESSION['login_status'] = "fail";
}

header("location: index.php");
echo '<script>
window.location.href = "index.php";
</script>';
 ?>
