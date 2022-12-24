<?php
include("connect.php");
$id = $_GET['id'];
$delete = mysqli_query($connect, "delete from mobil where id_mobil='$id'");
if($delete){
    header("Location:index.php?x=car");
}