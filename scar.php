<?php
include("connect.php");
$platno = $_POST['txtPlat'];
$merk = $_POST['txtMerk'];
$tahun= $_POST['txtTahun'];
$harga = $_POST['txtHarga'];
$save = mysqli_query($connect,"insert into mobil values(null, '$platno','$merk','$tahun','$harga','ACTIVE')") or die(mysqli_error($connect));
if($save){
    header("Location:index.php?x=car");
}