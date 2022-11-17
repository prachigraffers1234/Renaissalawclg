<?php session_start();
if(!isset($_SESSION['login_user'])) {

    echo '<script>
    window.location = "index.php"
    </script>';

}
 ?>
