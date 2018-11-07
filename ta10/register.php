<link rel="stylesheet" href="asset\css\bootstrap.min.css">
<div class="container">
    <div class="row w-50 m-auto">
        <div class="col"><h1 class="text-center">Tambah Akun</h1>
            <hr>
<form action="proses.php?tambahProfile=akun" method="post">
    <div class="form-group">
        <label for="username">Username</label>  
        <input type="text" id="username" class="form-control" name="username" maxlength="20">
    </div>
    <div class="form-group">
        <label for="password">Password</label>  
        <input type="text" id="password" class="form-control" name="password" maxlength="20">
    </div><div class="form-group">
        <label for="retype">Re-type Password</label>  
        <input type="text" id="retype" class="form-control" name="retype" maxlength="20">
    </div>
    <center><input type="submit" class="btn btn-success" value="Simpan"> | <a href="indeks.php"><input class="btn btn-primary" type="button" type="button" value="Login"></a></center>
</form>