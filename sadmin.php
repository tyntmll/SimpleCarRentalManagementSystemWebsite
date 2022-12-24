<?php
include("connect.php");
$name = $_POST['txtName'];
$gender = $_POST['gender'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$level = $_POST['level'];
$save = mysqli_query($connect, "INSERT INTO `admin` (`id_admin`, `nama_admin`, `gender_admin`, `username`, `password`, `level`)
    values ('$name','$gender','$username','$password','$level')") or die(mysqli_error($connect));
if($save){
    header("Location:index.php?x=admin");
} 