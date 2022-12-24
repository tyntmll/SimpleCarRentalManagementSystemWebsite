<?php
include("connect.php");
$code = $_POST['code'];
$name = $_POST['txtName'];
$gender = $_POST['gender'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$level = $_POST['level'];
$save = mysqli_query($connect, "update admin set nama_admin='$name', gender_admin='$gender', username='$username', password='$password', level='$level' where id_admin='$code'") or die(mysqli_error($connect));
if($save){
    header("Location:index.php?x=admin");
} 