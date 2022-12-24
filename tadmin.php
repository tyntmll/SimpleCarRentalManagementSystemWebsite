<!doctype html>
<html lang="en">
  <head>
    
  </head>

  <body>
    <div class="card">
        <h5 class="card-header">Add Admin</h5>
        <div class="card-body">
        <form method="post" action="?x=sadmin">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="txtName">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="form-control">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="txtUsername">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="txtPassword">
            </div>
            <div class="form-group">
                <label>Level</label>
                <select name="level" class="form-control">
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