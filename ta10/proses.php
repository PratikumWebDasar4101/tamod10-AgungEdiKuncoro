<?php
class data{
    private $conn;
// =============================================================
    public function __construct(){
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $db         = "jurnal8";

        $this->conn = mysqli_connect($servername, $username, $password, $db);                        
    } 

// =============================================================
    public function view($cari){
        $sql    = "SELECT * FROM mahasiswa WHERE nim LIKE '%$cari%'";
        return mysqli_query($this->conn, $sql);
    }
// =============================================================
    public function view_profile(){
        $sql    = "SELECT * FROM akun";        
        return mysqli_query($this->conn, $sql);
    }
// =============================================================
    public function edit($nim, $nama_depan, $nama_belakang, $email, $kelas, $list_hobi, $list_film, $list_wisata, $lahir){
		$sql = "UPDATE mahasiswa SET 
                nama_depan      ='$nama_depan', 
                nama_belakang   ='$nama_belakang', 
                email           ='$email', 
                kelas           ='$kelas',
                hobi            ='$list_hobi', 
                film            ='$list_film', 
                wisata          ='$list_wisata',
                lahir           ='$lahir'  
                WHERE nim='$nim'";
		if(mysqli_query($this->conn, $sql)){
            ?>
                <script>
                    alert("Data berhasil diubah!");
                    location="dashboard.php";
                </script>
            <?php
        } else{
            echo "Terjadi kesalahan : " . $sql . "<br>" . mysqli_error($this->conn);
        }
	}
// =============================================================
    public function data_terpilih($nim){
	    $edit   = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
	    return mysqli_query($this->conn,$edit); 
    }
// =============================================================
    public function editProfile($id, $passlama, $pass, $retype){
        $query = mysqli_query($this->conn, "SELECT * FROM akun WHERE id = '$id'");
        $row = mysqli_fetch_assoc($query);
        if ($passlama == $row['pass']) {
            if ($pass != $retype) {
                ?>
                <script>
                    alert("Password Tidak Sesuai!");
                </script>
                <?php
            }else {
                $sql = "UPDATE akun SET pass = '$pass' WHERE id ='$id'";
                if(mysqli_query($this->conn, $sql)){
                    ?>
                        <script>
                            alert("Data berhasil diubah!");
                            location="profile.php";
                        </script>
                    <?php
                } else{
                    echo "Terjadi kesalahan : " . $sql . "<br>" . mysqli_error($this->conn);
                }
            }
        } else {
            ?>
                <script>
                    alert("Password Lama Tidak Sesuai!");
                    location="profile.php";
                </script>
            <?php
        }
    }
    
// =============================================================
    public function profile_terpilih($id){
    $editP   = "SELECT * FROM akun WHERE id = '$id'";
    return mysqli_query($this->conn,$editP); 
}
// =============================================================
// public function search($cari){
//     $search   = "SELECT * FROM mahasiswa WHERE nim LIKE '%$cari%'";
//     return mysqli_query($this->conn,$search); 
// }
// =============================================================
    public function hapus($nim){
        $sql    = "DELETE FROM mahasiswa WHERE nim = $nim";        
        if (mysqli_query($this->conn, $sql)) {
            ?>
            <script>
                alert("Data berhasil dihapus!");
                location = "dashboard.php";
            </script>
            <?php
        } else {
            echo "Terjadi kesalahan : " . $sql . "<br>" . mysqli_error($this->conn);
        }
    }
// =============================================================
    public function hapusProfile($id){
        $sql    = "DELETE FROM akun WHERE id = $id";        
        if (mysqli_query($this->conn, $sql)) {
            ?>
            <script>
                alert("Data berhasil dihapus!");
                location = "profile.php";
            </script>
            <?php
        } else {
            echo "Terjadi kesalahan : " . $sql . "<br>" . mysqli_error($this->conn);
        }
    }
// =============================================================
    public function tambah($nim, $nama_depan, $nama_belakang, $email, $kelas, $list_hobi, $list_film, $list_wisata, $lahir){
        $sql    = "INSERT INTO mahasiswa(nim, nama_depan, nama_belakang, email, kelas, hobi, film, wisata, lahir) VALUES 
                ('$nim', '$nama_depan', '$nama_belakang', '$email', '$kelas', '$list_hobi','$list_film', '$list_wisata', '$lahir')";
        
        if(mysqli_query($this->conn, $sql)){
            ?>
            <script>
                alert("Data berhasil ditambah!");
                location = "dashboard.php";
            </script>
            <?php
        }else{
            echo "Terjadi kesalahan : " . $sql . "<br>" . mysqli_error($this->conn);
        }
    }
    // =============================================================
    public function tambahProfile($username, $password){
        if ($password != $_POST['retype']) {
            ?>
                <script>
                    alert("Password Tidak Sesuai!");
                    location = "register.php";
                </script>
            <?php
        }else {
            $sql  = "INSERT INTO akun(username, pass) VALUES 
                ('$username', '$password')";
        
            if(mysqli_query($this->conn, $sql)){
                ?>
                <script>
                    alert("Data berhasil ditambah!");
                    location = "indeks.php";
                </script>
                <?php
            }else{
                echo "Terjadi kesalahan : " . $sql . "<br>" . mysqli_error($this->conn);
            }
        }
    }

    public function login($username, $password){

        $sql = "SELECT * FROM akun 
                WHERE username = '$username' AND pass = '$password'";
        $result = mysqli_query($this->conn,$sql);
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) == 0 ) {
            ?>
                <script>
                    alert("Ups!Something Wrong.");
                    location = "indeks.php";
                </script>
            <?php
        }else {
            ?>
                <script>
                    alert("Login Sukses!");
                    location = "dashboard.php";
                </script>
            <?php
        }
    }
}

$data       = new data();
// ====================================
if (isset($_GET['edit'])) {
    $nim            = $_GET['edit'];
    $nama_depan     = $_POST['nama_depan'];
    $nama_belakang  = $_POST['nama_belakang'];
    $email          = $_POST['email'];
    $kelas          = $_POST['kelas'];
    $hobi           = $_POST['hobi'];
    $film           = $_POST['film'];
    $wisata         = $_POST['wisata'];
    $lahir          = $_POST['lahir'];
    $list_hobi      = implode(", ", $hobi);
    $list_film      = implode(", ", $film);
    $list_wisata    = implode(", ", $wisata);
    $data -> edit($nim, $nama_depan, $nama_belakang, $email, $kelas, $list_hobi, $list_film, $list_wisata, $lahir);
}
// ====================================
if (isset($_GET['editProfile'])) {
    $id        = $_GET['editProfile'];
    $passlama  = $_POST['passlama'];
    $pass  = $_POST['pass'];
    $retype  = $_POST['retype'];
    $data -> editProfile($id, $passlama, $pass, $retype);
}
// ====================================
if(isset($_GET['hapus'])){
    $nim = $_GET['hapus'];
    $data -> hapus($nim);
}

// ====================================
if(isset($_GET['hapusProfile'])){
    $id = $_GET['hapusProfile'];
    $data -> hapusProfile($id);
}
// ====================================
// if(isset($_GET['search'])){
//     $cari = $_GET['search'];
//     $data -> search($cari);
// }
// ====================================
if(isset($_GET['tambah'])){
    $nim            = $_POST['nim'];
    $nama_depan     = $_POST['nama_depan'];
    $nama_belakang  = $_POST['nama_belakang'];
    $email          = $_POST['email'];
    $kelas          = $_POST['kelas'];
    $hobi           = $_POST['hobi'];
    $film           = $_POST['film'];
    $wisata         = $_POST['wisata'];
    $lahir          = $_POST['lahir'];
    $list_hobi      = implode(", ", $hobi);
    $list_film      = implode(", ", $film);
    $list_wisata    = implode(", ", $wisata);
    $data -> tambah($nim, $nama_depan, $nama_belakang, $email, $kelas, $list_hobi, $list_film, $list_wisata, $lahir);
}
// ====================================
if(isset($_GET['tambahProfile'])){
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $data -> tambahProfile($username, $password);
}
// ====================================
if(isset($_GET['login'])){
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $data -> login($username, $password);
}

?>
