<?php
    include("connect.php");

$find = mysqli_query($connect,"select * from mobil,sewa where mobil.id_mobil=sewa.id_mobil") or die(mysqli_error($connect));
$no = 1;
$orderList = array();
while ($data = mysqli_fetch_assoc($find)) {
    $temp = array();
    $tempData = array();
    foreach($data as $key => $value)
    {
        array_push($temp, $key);
        array_push($tempData, $value);
    }
    
    if (!$orderList)
        array_push($orderList, $temp);
    array_push($orderList, $tempData);

}
require_once "lib/phpExcel.php";
$xlsx = Shuchkin\SimpleXLSXGen::fromArray( $orderList );
$path = date("y-m-d-h-i-s") . '-order.xlsx';
$xlsx->saveAs($path);
header("Content-disposition: attachment;filename=$path");
readfile($path);
?>
