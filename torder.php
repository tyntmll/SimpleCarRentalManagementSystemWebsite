<!doctype html>
<html lang="en">
  <head>
    
  </head>

  <body>
    <?php 
    include("connect.php");
    $find = mysqli_query($connect, "select * from mobil");
    ?>
    <div class="card">
        <h5 class="card-header">Add Order Data</h5>
        <div class="card-body">
        <form method="post" action="?x=sorder">
            <div class="form-group">
                <label>No. Plat</label>
                <select name="platno" class="form-control">
                    <option value="">--Choose--</option>
                    <?php
                    while($data = mysqli_fetch_array($find)) {
                        ?>
                        <option value="<?php echo $data['id_mobil']; ?>"><?php echo $data['plat_no'] . " - " . $data['merk']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>Nomor KTP</label>
                <input type="text" class="form-control" name="txtKTP">
            </div>         
            <div class="form-group">
                <label>Customer Name</label>
                <input type="text" class="form-control" name="txtName">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="form-control">
                    <option value="">--Choose--</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="txtAlamat">
            </div>         
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="txtPhone">
            </div>
            <div class="form-group">
                <label>Purpose</label>
                <input type="text" class="form-control" name="txtPurpose">
            </div>
            <div class="form-group">
                <label>Start Date</label>
                <input type="date" class="form-control" name="txtStart">
            </div>
            <div class="form-group">
                <label>Return Date</label>
                <input type="date" class="form-control" name="txtReturn">
            </div>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>
    
  </body>
</html>