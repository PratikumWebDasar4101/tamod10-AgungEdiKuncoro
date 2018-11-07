<link rel="stylesheet" href="asset\css\bootstrap.min.css">
<h2> <center> Akun </center> </h2>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <table class="table text-center" border="1">
            <thead class="thead-dark">
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th colspan=2>Opsi</th>
                </tr>
            </thead>
            <?php
            require_once ("proses.php");
            $result = $data->view_profile();

                if (mysqli_num_rows($result) > 0) {
                    while ($baris = mysqli_fetch_assoc($result)) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $baris['username'];?></td>
                                <td><?php echo $baris['pass'];?></td>
                                <td><a href="editProfile.php?id=<?php echo $baris['id']; ?>"><input type="button" class="btn btn-primary" value="Edit"></a></td>
                                <td><a href="proses.php?hapusProfile=<?php echo $baris['id']; ?>" onclick="return confirm('Apakah anda yakin ingin manghapus data..?');"><input type="button" class="btn btn-danger" value="Hapus"></a></td>
                            </tr>
                        </tbody>
                        <?php
                    }
                }else {
                    echo "Tidak ada Akun!";
                }
            ?>
            </table><br><br>
            <center> <a href="dashboard.php"><input type="button" value="Dashboard"></a> </center>
        </div>
    </div>
</div>