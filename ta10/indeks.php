<link rel="stylesheet" href="asset\css\bootstrap.min.css">
<div class="container">
    <div class="row w-50 m-auto">
        <div class="col">
            <h1 class="text-center">Login</h1>
            <hr>
            <form action="proses.php?login=akun" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username Anda" reqired autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" reqired autofocus>
                </div>
                <center><input type="submit" class="btn btn-primary" value="Masuk"> | <a href="register.php"><input type="button" class="btn btn-success" value="Registrasi"></a></center>
            </form>
        </div>
    </div>
</div>