<!doctype html>
<html lang="en">

  <body>
    <?php
        include("connect.php");
        $find = mysqli_query($connect,"select * from mobil,sewa where mobil.id_mobil=sewa.id_mobil") or die(mysqli_error($connect));

    ?>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>No.</th>
      <th>No. Plat</th>
      <th>Merk</th>
      <th>Customer Name</th>
      <th>Purpose</th>
      <th>Start Date</th>
      <th>Return Date</th>
      <th>Duration</th>
      <th>Total Price</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
        while($data = mysqli_fetch_array($find)){
    ?>
    <tr>
      <th scope="row"><?php echo $no; ?></th>
      <td><?php echo $data['plat_no']; ?></td>
      <td><?php echo $data['merk']; ?></td>
      <td><?php echo $data['nama_order']; ?></td>
      <td><?php echo $data['tujuan']; ?></td>
      <td><?php echo $data['tgl_order']; ?></td>
      <td><?php echo $data['tgl_kembali']; ?></td>
      <td><?php echo $data['lama']; ?></td>
      <td><?php echo $data['harga_total']; ?></td>
        <td>
            <a href="?x=horder<?php echo $data['id_sewa']; ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
      <?php
        $no++;
    }
    ?>
  </tbody>
</table>
    <a href="?x=torder" class="btn btn-primary">Add Order</a>
    <a href="?x=exportOrder" class="btn btn-success">DOWNLOAD EXCEL</a>

  </body>
</html>