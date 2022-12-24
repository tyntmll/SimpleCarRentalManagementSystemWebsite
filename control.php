<?php
if(isset($_GET['x'])){
    switch($_GET['x']){
        case 'logout':
            include("keluar.php");
            break;
        case 'admin':
            include("admin.php");
            break;
        case 'tadmin':
            include("tadmin.php");
            break;
        case 'sadmin':
            include("sadmin.php");
            break;
        case 'hadmin':
            include("hadmin.php");
            break;
        case 'eadmin':
            include("eadmin.php");
            break;
        case 'uadmin':
            include("uadmin.php");
            break;
        case 'car':
            include("car.php");
            break;
        case 'tcar':
            include("tcar.php");
            break;
        case 'scar':
            include("scar.php");
            break;
        case 'hcar':
            include("hcar.php");
            break;
        case 'ecar':
            include("ecar.php");
            break;
        case 'ucar':
            include("ucar.php");
            break;
        case 'order':
            include("order.php");
            break;
        case 'torder':
            include("torder.php");
            break;
        case 'sorder':
            include ("sorder.php");
            break;
        case 'horder':
            include("horder.php");
            break;
        case 'exportOrder':
            echo '<meta http-equiv="refresh" content="0; url=exportOrder.php">';
            break;
        case 'home':
            include("home.php");
            break;
    }
}
else{
    echo "<h3>Welcome to Car Rental!</h3>";
    echo '<img src="logo.jpg">';
}