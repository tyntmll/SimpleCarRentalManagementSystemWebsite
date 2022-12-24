<!doctype html>
<html lang="en">

  <body>
    <?php
    if($_SESSION['level'] == "SUPER"){
        include("connect.php");
        $find = mysqli_query($connect,"select * from admin") or die(mysqli_error($connect));

    ?>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Admin Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Level</th>
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
      <td><?php echo $data['nama_admin']; ?></td>
      <td><?php echo $data['gender_admin']; ?></td>
      <td><?php echo $data['level']; ?></td>
        <td>
            <a href="?x=hadmin&id=<?php echo $data['id_admin']; ?>" class="btn btn-danger">Delete</a>
            <a href="?x=eadmin&id=<?php echo $data['id_admin']; ?>" class="btn btn-warning">Change</a>
        </td>
    </tr>
      <?php
        $no++;
    }
    ?>
  </tbody>
</table>
    <a href="?x=tadmin" class="btn btn-primary">Add</a>
    <?php
    } else { ?>
    <script type="text/javascript">
      alert("Admin Level is not allowed to open this page!");
      window.location = "index.php";
    </script>
    <?php
      
    }
    ?>
  </body>
</html>