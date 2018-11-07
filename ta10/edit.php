<?php 
    require_once('proses.php');
    $nim     = $_GET['nim'];
	$sql   = $data -> data_terpilih($nim);
    $row   = mysqli_fetch_assoc($sql);

    $daftar_hobi    = explode(", ", $row['hobi']);
    $daftar_film    = explode(", ", $row['film']);
    $daftar_wisata  = explode(", ", $row['wisata']);
 ?>
<h2><center>Edit Data Mahasiswa</center></h2>
<hr>
    <pre>
        <form action="proses.php?edit=<?php echo $nim;?>" method="post">
            NIM             : <input type="text" name="nim" value="<?php echo $row['nim'];?>" readonly><br>
            Nama Depan      : <input type="text" name="nama_depan" value="<?php echo $row['nama_depan'];?>"><br>
            Nama Belakang   : <input type="text" name="nama_belakang" value="<?php echo $row['nama_belakang'];?>"><br>
            Email           : <input type="email" name="email" value="<?php echo $row['email'];?>"><br>
            Kelas           : <input type="radio" name="kelas" value="41-01" <?php if($row['kelas'] == "41-01") { echo "checked"; }?>>41-01
                              <input type="radio" name="kelas" value="41-02" <?php if($row['kelas'] == "41-02") { echo "checked"; }?>>41-02
                              <input type="radio" name="kelas" value="41-03" <?php if($row['kelas'] == "41-03") { echo "checked"; }?>>41-03
                              <input type="radio" name="kelas" value="41-04" <?php if($row['kelas'] == "41-04") { echo "checked"; }?>>41-04<br>
            Hobi            : <input type="checkbox" name="hobi[]" value="Membaca" <?php if(array_search("Membaca", $daftar_hobi) > -1 ){ echo "checked"; }?>>Membaca 
                              <input type="checkbox" name="hobi[]" value="Menulis" <?php if(array_search("Menulis", $daftar_hobi) > -1 ){ echo "checked"; }?>>Menulis
                              <input type="checkbox" name="hobi[]" value="Menggambar" <?php if(array_search("Menggambar", $daftar_hobi) > -1 ){ echo "checked"; }?>>Menggambar<br>
            Genre Film      : <input type="checkbox" name="film[]" value="Horror"  <?php if(array_search("Horror", $daftar_film) > -1 ){ echo "checked"; }?>>Horror 
                              <input type="checkbox" name="film[]" value="Drama" <?php if(array_search("Drama", $daftar_film) > -1 ){ echo "checked"; }?>>Drama
                              <input type="checkbox" name="film[]" value="Action" <?php if(array_search("Action", $daftar_film) > -1 ){ echo "checked"; }?>>Action
                              <input type="checkbox" name="film[]" value="Anime" <?php if(array_search("Anime", $daftar_film) > -1 ){ echo "checked"; }?>>Anime<br>
            Tujuan Wisata   : <input type="checkbox" name="wisata[]" value="Bali" <?php if(array_search("Bali", $daftar_wisata) > -1 ) { echo "checked"; }?>>Bali 
                              <input type="checkbox" name="wisata[]" value="Tanjung Selor" <?php if(array_search("Tanjung Selor", $daftar_wisata) > -1 ) { echo "checked"; }?>>Tanjung Selor
                              <input type="checkbox" name="wisata[]" value="Jakarta" <?php if(array_search("Jakarta", $daftar_wisata) > -1 ) { echo "checked"; }?>>Jakarta
                              <input type="checkbox" name="wisata[]" value="Lombok" <?php if(array_search("Lombok", $daftar_wisata) > -1 ) { echo "checked"; }?>>Lombok<br>
            Tanggal Lahir   : <input type="date" name="lahir" value="<?php echo $row['lahir'];?>"><br><br>
                            <input type="submit" name="submit" value="Simpan"> | <a href="dashboard.php"><input type="button" value="Dashboard"></a>
        </form>
    </pre>
<?php