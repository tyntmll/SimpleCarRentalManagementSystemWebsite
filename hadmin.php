<?php
include("connect.php");
$id = $_GET['id'];
$delete = mysqli_query($connect,"delete from admin where id_admin=$id") or die(mysqli_error($connect));
if($delete){
    header("Location:index.php?x=admin");
}