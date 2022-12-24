<?php
include("connect.php");
$platno = $_POST['platno'];
$name = $_POST['txtName'];
$gender = $_POST['gender'];
$ktp = $_POST['txtKTP'];
$alamat = $_POST['txtAlamat'];
$phone = $_POST['txtPhone'];
$purpose = $_POST['txtPurpose'];
$startdate = new DateTime ($_POST['txtStart']);
$returndate = new DateTime($_POST['txtReturn']);
$selisih = $returndate->diff($startdate);
$x = $selisih->d;
$find = mysqli_query($connect, "select * from mobil where id_mobil='$platno'");
$data = mysqli_fetch_array($find);
$harga = $x * $data['harga'];
$save = mysqli_query($connect,"insert into sewa(id_mobil,id_admin,nama_order,ktp,gender_order,alamat,tlp_order,tujuan,tgl_order,tgl_kembali,lama,harga_total)
    values('$platno','$_SESSION[id_admin]','$name','$ktp','$gender','$alamat','$phone','$purpose','$_POST[txtStart]','$_POST[txtReturn]','$x','$harga')")
    or die(mysqli_error($connect));
if($save){
    header("Location:index.php?x=order");
}