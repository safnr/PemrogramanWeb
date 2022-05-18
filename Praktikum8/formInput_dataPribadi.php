<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulir Peserta Didik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        html {
            margin: 20px 60px;
        }
        .warning {
            color: #FF0000;
        }
    </style>
</head>
<body>
    <div class="container p-3 my-3 border">
        <h1 class="text-center">Formulir Peserta Didik</h1>    
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "config.php";

    $error_nama_lengkap = "";
    $error_jenis_kelamin = "";
    $error_nisn = "";
    $error_nik = "";
    $error_tempat_lahir = "";
    $error_tanggal_lahir = "";
    $error_agama = "";
    $error_berkebutuhan_khusus = "";
    $error_alamat_jalan = "";
    $error_rt = "";
    $error_rw = "";
    $error_nama_dusun = "";
    $error_nama_kelurahan_desa = "";
    $error_kecamatan = "";
    $error_kode_pos = "";
    $error_tempat_tinggal = "";
    $error_moda_transportasi = "";
    $error_nomor_hp = "";
    $error_nomor_telepon = "";
    $error_email_pribadi = "";
    $error_penerima_kps_pkh_kip = "";
    $error_no_kps_pkh_kip = "";
    $error_kewarganegaraan = "";

    $nama_lengkap = "";
    $jenis_kelamin = "";
    $nisn = "";
    $nik = "";
    $tempat_lahir = "";
    $tanggal_lahir = "";
    $agama = "";
    $berkebutuhan_khusus = "";
    $alamat_jalan = "";
    $rt = "";
    $rw = "";
    $nama_dusun = "";
    $nama_kelurahan_desa = "";
    $kecamatan = "";
    $kode_pos = "";
    $tempat_tinggal = "";
    $moda_transportasi = "";
    $nomor_hp = "";
    $nomor_telepon = "";
    $email_pribadi = "";
    $penerima_kps_pkh_kip = "";
    $no_kps_pkh_kip = "";
    $kewarganegaraan = "";

    //Mengecek kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nama_lengkap"])) {
            $error_nama = "Nama tidak boleh kosong";
        } else {
            $nama_lengkap = cek_input($_POST["nama_lengkap"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $nama_lengkap)) {
                $nameErr = "Inputan hanya boleh huruf dan spasi";
            }
        }

        if (empty($_POST["jenis_kelamin"])) {
            $error_jenis_kelamin = "Jenis kelamin tidak boleh kosong";
        } else {
            $nama = cek_input($_POST["jenis_kelamin"]);
        }       

        if (empty($_POST["nisn"])) {
            $error_nisn = "NISN tidak boleh kosong";
        } else {
            $nisn = cek_input($_POST["nisn"]);
            if (!preg_match("/^[0-9]*$/", $nisn)) {
                $nisnErr = "Inputan hanya boleh angka";
            }
        }

        if (empty($_POST["nik"])) {
            $error_nik = "NIK tidak boleh kosong";
        } else {
            $nik = cek_input($_POST["nik"]);
            if (!preg_match("/^[0-9]*$/", $nik)) {
                $nikErr = "Inputan hanya boleh angka";
            }
        }

        if (empty($_POST["tempat_lahir"])) {
            $error_tempat_lahir = "Tempat lahir tidak boleh kosong";
        } else {
            $tempat_lahir = cek_input($_POST["tempat_lahir"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $tempat_lahir)) {
                $tempat_lahirErr = "Inputan hanya boleh huruf dan spasi";
            }
        }

        if (empty($_POST["tanggal_lahir"])) {
            $error_tanggal_lahir = "Tanggal lahir tidak boleh kosong";
        } else {
            $tanggal_lahir = cek_input($_POST["tanggal_lahir"]);
        }

        if (empty($_POST["agama"])) {
            $error_agama = "Agama tidak boleh kosong";
        } else {
            $agama = cek_input($_POST["agama"]);
        }

        if (empty($_POST["berkebutuhan_khusus"])) {
            $error_berkebutuhan_khusus = "Berkebutuhan khusus tidak boleh kosong";
        } else {
            $berkebutuhan_khusus = cek_input($_POST["berkebutuhan_khusus"]);
        }

        if (empty($_POST["alamat_jalan"])) {
            $error_alamat_jalan = "Alamat jalan tidak boleh kosong";
        } else {
            $alamat_jalan = cek_input($_POST["alamat_jalan"]);
        }

        if (empty($_POST["rt"])) {
            $error_rt = "RT tidak boleh kosong";
        } else {
            $rt = cek_input($_POST["rt"]);
            if (!preg_match("/^[0-9]*$/", $rt)) {
                $rtErr = "Inputan hanya boleh angka";
            }
        }

        if (empty($_POST["rw"])) {
            $error_rw = "RW tidak boleh kosong";
        } else {
            $rw = cek_input($_POST["rw"]);
            if (!preg_match("/^[0-9]*$/", $rw)) {
                $rwErr = "Inputan hanya boleh angka";
            }
        }

        if (empty($_POST["nama_dusun"])) {
            $error_nama_dusun = "Nama dusun tidak boleh kosong";
        } else {
            $nama_dusun = cek_input($_POST["nama_dusun"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $nama_dusun)) {
                $nama_dusunErr = "Inputan hanya boleh huruf dan spasi";
            }
        }

        if (empty($_POST["nama_kelurahan_desa"])) {
            $error_nama_kelurahan_desa = "Nama kelurahan desa tidak boleh kosong";
        } else {
            $nama_kelurahan_desa = cek_input($_POST["nama_kelurahan_desa"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $nama_kelurahan_desa)) {
                $nama_kelurahan_desaErr = "Inputan hanya boleh huruf dan spasi";
            }
        }

        if (empty($_POST["kecamatan"])) {
            $error_kecamatan = "Kecamatan tidak boleh kosong";
        } else {
            $kecamatan = cek_input($_POST["kecamatan"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $kecamatan)) {
                $kecamatanErr = "Inputan hanya boleh huruf dan spasi";
            }
        }

        if (empty($_POST["kode_pos"])) {
            $error_kode_pos = "Kode pos tidak boleh kosong";
        } else {
            $kode_pos = cek_input($_POST["kode_pos"]);
            if (!preg_match("/^[0-9]*$/", $kode_pos)) {
                $kode_posErr = "Inputan hanya boleh angka";
            }
        }

        if (empty($_POST["jenis_tinggal"])) {
            $error_jenis_tinggal = "Jenis tinggal tidak boleh kosong";
        } else {
            $jenis_tinggal = cek_input($_POST["jenis_tinggal"]);
        }

        if (empty($_POST["moda_transportasi"])) {
            $error_moda_transportasi = "Moda transportasi tidak boleh kosong";
        } else {
            $moda_transportasi = cek_input($_POST["moda_transportasi"]);
        }

        if (empty($_POST["no_hp"])) {
            $error_no_telepon = "No hp tidak boleh kosong";
        } else {
            $no_telepon = cek_input($_POST["no_hp"]);
            if (!preg_match("/^[0-9]*$/", $no_hp)) {
                $no_hpErr = "Inputan hanya boleh angka";
            }
        }

        if (empty($_POST["no_telepon"])) {
            $error_no_telepon = "No telepon tidak boleh kosong";
        } else {
            $no_telepon = cek_input($_POST["no_telepon"]);
            if (!preg_match("/^[0-9]*$/", $no_telepon)) {
                $no_teleponErr = "Inputan hanya boleh angka";
            }
        }

        if (empty($_POST["email_pribadi"])) {
            $error_email_pribadi = "Email tidak boleh kosong";
        } else {
            $email_pribadi = cek_input($_POST["email_pribadi"]);
            if (!filter_var($email_pribadi, FILTER_VALIDATE_EMAIL)) {
                $error_email_pribadi = "Format email invalid";
            }
        }

        if (empty($_POST["penerima_kps_pkh_kip"])) {
            $error_nama_ayah = "Penerima kps pkh kip tidak boleh kosong";
        } else {
            $penerima_kps_pkh_kip = cek_input($_POST["penerima_kps_pkh_kip"]);
        }

        if (empty($_POST["no_kps_pkh_kip"])) {
            $error_no_kps_pkh_kip = "No kps pkh kip tidak boleh kosong";
        } else {
            $no_kps_pkh_kip = cek_input($_POST["no_kps_pkh_kip"]);
            if (!preg_match("/^[0-9]*$/", $no_kps_pkh_kip)) {
                $no_kps_pkh_kipErr = "Inputan hanya boleh angka";
            }
        }

        if (empty($_POST["kewarganegaraan"])) {
            $error_kewarganegaraan = "Kewarganegaraan tidak boleh kosong";
        } else {
            $kewarganegaraan = cek_input($_POST["kewarganegaraan"]);
        }

        //Query input menginput data kedalam tabel pendaftaraan
        $sql="INSERT INTO tb_dataPribadi VALUES
		('','$nama_lengkap','$$jenis_kelamin','$nisn','$nik',$tempat_lahir','$tanggal_lahir','$agama',
        '$berkebutuhan_khusus','$alamat_jalan','$rt','$rw','$nama_dusun','$nama_kelurahan_desa','$kecamatan',
        '$kode_pos','$tempat_tinggal','$moda_transportasi','$nomor_hp','$nomor_telepon','$email_pribadi','$penerima_kps_pkh_kip',
        '$no_kps_pkh_kip','$kewarganegaraan')";

        //Menjalankan query diatas
        $hasil=mysqli_query($conn,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) { 
            echo "<div class='alert alert-success'> Selamat $nama_lengkap telah berhasil terdaftar!.</div>"; 
            header("Location: hasilInput.php");
        }
        else {
            echo "<div class='alert alert-danger'> Pendaftaran Gagal.</div>";
        }
    }

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function cek_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>       
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-reader"></div>
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="alert alert-primary">
                            <strong>Data Pribadi</strong>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jenis_kelamin=='Laki-laki' ? 'checked' : '');?>>Laki-laki
                                <input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jenis_kelamin=='Perempuan' ? 'checked' : '');?>>Perempuan
                                <span class="warning"><?php echo $error_jenis_kelamin;?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nisn" class="col-sm-3 col-form-label">NISN</label>
                            <div class="col-sm-10">
                                <input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="Masukkan NISN" value="<?php echo $nisn;?>">
                                <span class="warning"><?php echo $error_nisn;?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nisn" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="Masukkan NIK" value="<?php echo $nik;?>">
                                <span class="warning"><?php echo $error_nik;?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukan Tanggal Lahir">
                            </div>
                        </div>                                               

                        <div class="form-group row">
                            <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-10">                                
                                <select class="form-control" name="agama">
                                    <option>Pilih</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen/protestan">Kristen/protestan</option>
                                    <option value="Katolik">Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Khong Hu Cu</option>
                                    <option value="Lainnya">Lainnya</option>                                    
                                </select>
                                <span class="warning"><?php echo $error_agama;?></span>
                            </div>                                                        
                        </div>

                        <div class="form-group row">
                            <label for="berkebutuhan_khusus" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
                            <div class="col-sm-10">                                
                                <select class="form-control" name="berkebutuhan_khusus">
                                    <option>Pilih</option>
                                    <option value="Tidak">Tidak</option>
                                    <option value="Netra">Netra</option>
                                    <option value="Rungu">Rungu</option>
                                    <option value="Grahita ringan">Grahita ringan</option>
                                    <option value="Grahita Sedang">Grahita Sedang</option>
                                    <option value="Daksa Ringan">Daksa Ringan</option>
                                    <option value="Daksa Sedang">Daksa Sedang</option>
                                    <option value="Laras">Laras</option>
                                    <option value="Wicara">Wicara</option>
                                    <option value="Tuna Ganda">Tuna Ganda</option>
                                    <option value="Hiper Aktif">Hiper Aktif</option>
                                    <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                    <option value="Bakat Istimewa">Bakat Istimewa</option>
                                    <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                    <option value="Narkoba">Narkoba</option>
                                    <option value="Indigo">Indigo</option>
                                    <option value="Down Sindrome">Down Sindrome</option>
                                    <option value="Autis">Autis</option>
                                </select>
                                <span class="warning"><?php echo $error_berkebutuhan_khusus;?></span>
                            </div>                                                        
                        </div>

                        <div class="form-group row">
                            <label for="alamat_jalan" class="col-sm-3 col-form-label">Alamat Jalan</label>
                            <div class="col-sm-10">
                                <textarea name="alamat_jalan" class="form-control" placeholder="Masukan Alamat"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rt" class="col-sm-3 col-form-label">RT</label>
                            <div class="col-sm-10">
                                <input type="text" name="rt" class="form-control" placeholder="Masukan RT">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rw" class="col-sm-3 col-form-label">RW</label>
                            <div class="col-sm-10">
                                <input type="text" name="rw" class="form-control" placeholder="Masukan RW">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_dusun" class="col-sm-3 col-form-label">Nama Dusun</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_dusun" class="form-control" placeholder="Masukan Dusun">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_kelurhan_desa" class="col-sm-3 col-form-label">Nama Kelurahan/Desa</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_kelurahan_desa" class="form-control" placeholder="Masukan Kelurahan/Desa">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                                <input type="text" name="kecamatan" class="form-control" placeholder="Masukan Kecamatan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kode_pos" class="col-sm-3 col-form-label">Kode Pos</label>
                            <div class="col-sm-10">
                                <input type="text" name="kode_pos" class="form-control" placeholder="Masukan Kode Pos">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tempat_tinggal" class="col-sm-3 col-form-label">Tempat Tinggal</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="tempat_tinggal">
                                    <option>Pilih</option>
                                    <option value="Bersama orang tua">Bersama orang tua</option>
                                    <option value="Wali">Wali</option>
                                    <option value="Kos">Kos</option>
                                    <option value="Asrama">Asrama</option>
                                    <option value="Panti Asuhan">Panti Asuhan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="moda_transportasi" class="col-sm-3 col-form-label">Moda Transportasi</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="moda_transportasi">
                                    <option>Pilih</option>                                    
                                    <option value="Jalan Kaki">Jalan Kaki</option>
                                    <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                    <option value="Kendaraan Umum">Kendaraan Umum/Angkot-angkot/Pete-pete</option>
                                    <option value="Angkutan Umum">Jemputan Sekolah</option>
                                    <option value="Kereta Api">Kereta Api</option>
                                    <option value="Ojek">Ojek</option>
                                    <option value="Andong">Andong/Bedi/Sado/Dokar/Delman/Beca</option>
                                    <option value="Perahu Penyebrangan">Perahu Penyebrangan/Rakit/Getek</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>