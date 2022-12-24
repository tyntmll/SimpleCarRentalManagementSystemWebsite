<!doctype html>
<html lang="en">
  <head>
    
  </head>
  
  <body>
    <div class="card">
        <h5 class="card-header">Change Admin Data</h5>
        <div class="card-body">
        <form method="post" action="?x=uadmin">
            <?php
                include("connect.php");
                $id=$_GET['id'];
                $find=mysqli_query($connect, "select * from admin where id_admin='$id'") or die(mysqli_error($connect));
                $data=mysqli_fetch_array($find);
            ?>
            <input type="hidden" name="code" value="<?php echo $data['id_admin']; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="txtName" value="<?php echo $data['nama_admin']; ?>">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="form-control">
                    <option value="<?php echo $data['gender_admin']; ?>"><?php echo $data['gender_admin']; ?></option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="txtUsername" value="<?php echo $data['username']; ?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="txtPassword" value="<?php echo $data['password']; ?>">
            </div>
            <div class="form-group">
                <label>Level</label>
                <select name="level" class="form-control">
                    <option value="<?php echo $data['level']; ?>"><?php echo $data['level']; ?></option>
                    <option value="ADMIN">ADMIN</option>
                    <option value="SUPER">SUPER</option>
                </select>
            </div>
        <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>
   
  </body>
</html>