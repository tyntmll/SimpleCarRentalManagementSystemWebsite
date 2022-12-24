<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Rental</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.bundle.min.js"></script>    
  </head>

  <body>
    <?php
    include("connect.php");
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location:login.php");
    }
    ?>
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Car Rental</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="?x=home">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="?x=order">Order</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="?x=car">Car</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="?x=admin">Admin</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="?x=logout">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row-mt-3">
            <div class="col-md-4">
            <!-- sidebar -->
                <h4>Ready Car</h4>
                <ul class="list-group list-group-flush">
                    <?php
                    $find = mysqli_query($connect, "select * from mobil where status_mobil='ACTIVE'");
                    while ($data = mysqli_fetch_array($find)){
                    ?>
                    <li class="list-group-item"><?php echo $data['merk']." - ".$data['plat_no']; ?></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-8">
            <!-- content -->
                <?php include("control.php"); ?>
            </div>
            <div class="row-mt-3">
                <div class="col-md-12 bg-light">
                    <p class="text-center fw-bold">Car Rental &copy; 2022</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>