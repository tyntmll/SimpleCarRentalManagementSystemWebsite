<?php
error_reporting(0);
$connect=mysqli_connect("localhost","root","ithinkaboutyoueverytwoam","carrental");
if(mysqli_connect_errno()){
    echo "lost connection " . mysqli_connect_error();
}