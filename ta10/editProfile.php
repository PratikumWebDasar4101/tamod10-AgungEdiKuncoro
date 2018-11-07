<?php
require_once('proses.php');
$id   = $_GET['id'];
$sql        = $data -> profile_terpilih($id);
$row        = mysqli_fetch_assoc($sql);
?>
<form action="proses.php?editProfile=<?php echo $id;?>" method="post">
    <pre>
    Username            : <input type="text" name="username" maxlength="20" value="<?php echo $row['username'];?>" readonly><br>
    Password Lama       : <input type="password" name="passlama" minlength="6"><br>
    Password            : <input type="password" name="pass" minlength="6"><br>
    Re-type Password    : <input type="password" name="retype"><br>
    <input type="submit" value="Simpan"> | <a href="indeks.php"><input type="button" value="Login"></a>   
    </pre>
</form>