<link rel="stylesheet" href="asset\css\bootstrap.min.css">
<h2><center>Data Mahasiswa</center></h2>
    <hr>
    <form action="dashboard.php" method="post">
        <center> Cari NIM : <input type="text" name="cari"><input type="submit" value="Search"> </center>
    </form>
    <div class="container-fluid">
            <div class="row">
                <div class="col">
                        <table class="table text-center" border="1">
                        <thead class="thead-dark">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>NIM</th>
                                <th width= 7%>Kelas</th>
                                <th>Hobi</th>
                                <th width= 18%>Genre Film</th>
                                <th width= 17%>Tempat Wisata</th>
                                <th>Tanggal Lahir</th>
                                <th colspan = 2>Option</th>
                            </tr>
                            </thead>
                            <?php
                            require_once ("proses.php");
                            @$cari = $_POST['cari'];
                            $result = $data->view($cari);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tbody>
                                <tr>
                                    <td><?php echo $row['nama_depan'] . " " . $row['nama_belakang']; ?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['nim']?></td>
                                    <td><?php echo $row['kelas']?></td>
                                    <td><?php echo $row['hobi']?></td>
                                    <td><?php echo $row['film']?></td>
                                    <td><?php echo $row['wisata']?></td>
                                    <td><?php echo $row['lahir']?></td>
                                    <td><a href="edit.php?nim=<?php echo $row['nim']; ?>"><input type="button" value="Edit"></a></td>
                                    <td><a href="proses.php?hapus=<?php echo $row['nim']; ?>" onclick="return confirm('Apakah anda yakin ingin manghapus data..?');"><input type="button" value="Hapus"></a></td>
                                </tr>
                                </tbody>
                                <br>
                            <?php       
                                }
                            }else {
                                ?>
                                    <script>
                                        alert("Tidak ada NIM yang sesuai!");
                                        location = "dashboard.php";
                                    </script>
                                <?php
                            }
                    ?>
                    </table>
                
        <center>
            <a href="newData.php"><input class="btn btn-primary" type="button" value="Tambah Data"></a> | 
            <a href="profile.php"><input class="btn btn-warning" type="button" value="Profile"></a> |
            <a href="indeks.php?logout=TAI"><input class="btn btn-danger" type="button" value="Logout"></a>
        </center>
                </div>
            </div>
        </div>