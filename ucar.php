<?php
include("connect.php");
$platno = $_POST['txtPlat'];
$merk = $_POST['txtMerk'];
$tahun= $_POST['txtTahun'];
$harga = $_POST['txtHarga'];
$code = $_POST['code'];
$save = mysqli_query($connect,"update mobil set plat_no='$platno', merk='$merk', tahun='$tahun', harga='$harga' where id_mobil='$code'");
if($save){
    header("Location:index.php?x=car");
}