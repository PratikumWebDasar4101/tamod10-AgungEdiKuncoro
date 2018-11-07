<link rel="stylesheet" href="asset\css\bootstrap.min.css">
<div class="container">
    <div class="row w-50 m-auto">
        <div class="col">
            <h1 class="text-center">Isikan Data Diri</h1>
            <hr>
            <form action="proses.php?tambah=mahasiswa" method="post">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" pattern="\d*" name="nim" id="nim" minlength="10" maxlength="10" required>
                    </div>
                    <div class="form-group"> 
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" name="nama_depan" id="nama_depan" class="form-control" maxlength="25" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input type="text" name="nama_belakang" id="nama_belakang" class="form-control" maxlength="25" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-check-label">Kelas</label>
                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="input41-01" name="kelas" value="41-01">
                                <label for="input41-01">41-01</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="input41-02" name="kelas" value="41-02">
                                <label for="input41-02">41-02</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="input41-03" name="kelas" value="41-03">
                                <label for="input41-03">41-03</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="input41-04" name="kelas" value="41-04">
                                <label for="input41-04">41-04</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-check-label">Hobi</label>
                        <div class="col-sm-6">
                            <div>
                                <input type="checkbox" name="hobi[]" id="input_membaca" value="Membaca">
                                <label for="input_membaca">Membaca</label>
                            </div>
                            <div>
                                <input type="checkbox" name="hobi[]" id="input_menulis" value="Menulis">
                                <label for="input_menulis">Menulis</label>
                            </div>
                            <div>
                                <input type="checkbox" name="hobi[]" id="input_menggambar" value="Menggambar">
                                <label for="input_menggambar">Membaca</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-check-label">Genre Film</label>
                        <div class="col-sm-6">
                            <div>                  
                                <input type="checkbox" name="film[]" id="input_horror" value="Horror">
                                <label for="input_horror">Horror</label>
                            </div>
                            <div>                  
                                <input type="checkbox" name="film[]" id="input_drama" value="Drama">
                                <label for="input_horror">Drama</label>
                            </div>
                            <div>                  
                                <input type="checkbox" name="film[]" id="input_action" value="Action">
                                <label for="input_horror">Action</label>
                            </div>
                            <div>                  
                                <input type="checkbox" name="film[]" id="input_anime" value="Anime">
                                <label for="input_horror">Anime</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-check-label">Tujuan Wisata</label>
                        <div class="col-sm-6">
                            <div>    
                                <input type="checkbox" name="wisata[]" id="input_bali" value="Bali">
                                <label for="input_bali">Bali</label>
                            </div>
                            <div>    
                                <input type="checkbox" name="wisata[]" id="input_tanjungselor" value="Tanjung Selor">
                                <label for="input_tanjungselor">Tanjung Selor</label>
                            </div>
                            <div>    
                                <input type="checkbox" name="wisata[]" id="input_jakarta" value="Jakarta">
                                <label for="input_bali">Jakarta</label>
                            </div>
                            <div>    
                                <input type="checkbox" name="wisata[]" id="input_lombok" value="Lombok">
                                <label for="input_bali">Lombok</label>
                            </div> 
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="tanggal">Tanggal Lahir</label>
                    <input type="date" name="lahir" class="form-control" id="tanggal" required><br><br>
                    </div>
                                        <input type="submit" value="Simpan"> | <a href="dashboard.php"><input type="button" value="Dashboard"></a>
                                        
            </form>
        </div>
    </div>
</div>