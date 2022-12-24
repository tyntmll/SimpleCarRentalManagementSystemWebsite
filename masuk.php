<?php
include("connect.php");
session_start();
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$check = mysqli_query($connect,"select * from admin where username='$username' and password='$password'") or die(mysqli_error($connect));
$data = mysqli_fetch_array($check);
$banyak = mysqli_num_rows($check);
if($banyak >= 1){
    $_SESSION['username'] = $data['username'];
    $_SESSION['id_admin'] = $data['id_admin'];
    $_SESSION['level'] = $data['level'];
    header("Location:index.php");
} else{ ?>
    <script type = "text/javascript">
        alert("The Username or Password incorrect.");
    </script>
    <?php
    header("Location:login.php");
}