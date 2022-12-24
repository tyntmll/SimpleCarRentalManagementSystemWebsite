<!doctype html>
<html lang="en">

  <body>
    <?php
        include("connect.php");
        $find = mysqli_query($connect,"select * from mobil") or die(mysqli_error($connect));

    ?>
  <table class="table table-hover">
  <thead>
    <tr>
      <th>No.</th>
      <th>No. Plat</th>
      <th>Merk</th>
      <th>Tahun</th>
      <th>Harga/Hari</th>
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
      <td><?php echo $data['tahun']; ?></td>
      <td><?php echo $data['harga']; ?></td>
        <td>
            <a href="?x=hcar&id=<?php echo $data['id_mobil']; ?>" class="btn btn-danger">Delete</a>
            <a href="?x=ecar&id=<?php echo $data['id_mobil']; ?>" class="btn btn-warning">Change</a>
        </td>
    </tr>
      <?php
        $no++;
    }
    ?>
  </tbody>
</table>
    <a href="?x=tcar" class="btn btn-primary">Add</a>

  </body>
</html>