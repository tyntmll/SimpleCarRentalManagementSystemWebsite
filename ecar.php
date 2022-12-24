<!doctype html>
<html lang="en">
  <head>
    
  </head>

  <body>
    <?php
    include("connect.php");
    $id = $_GET['id'];
    $find = mysqli_query($connect, "select * from mobil where id_mobil='$id'");
    $data = mysqli_fetch_array($find);
    ?>
    <div class="card">
        <h5 class="card-header">Change Car Data</h5>
        <div class="card-body">
        <form method="post" action="?x=ucar">
            <input type="hidden" name="code" value="<?php echo $data['id_mobil']; ?>">
            <div class="form-group">
                <label>No. Plat</label>
                <input type="text" class="form-control" name="txtPlat" value="<?php echo $data['plat_no']; ?>">
            </div>
            <div class="form-group">
                <label>Merk Mobil</label>
                <input type="text" class="form-control" name="txtMerk" value="<?php echo $data['merk']; ?>">
            </div>         
            <div class="form-group">
                <label>Tahun Keluaran</label>
                <input type="text" class="form-control" name="txtTahun" value="<?php echo $data['tahun']; ?>">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="txtHarga" value="<?php echo $data['harga']; ?>">
            </div>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>
    
  </body>
</html>