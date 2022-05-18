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

    $error_jenis_pendaftaran = "";
    $error_tanggal_masuk_sekolah = "";
    $error_nis = "";
    $error_nomor_peserta_ujian = "";
    $error_apakah_pernah_paud = "";
    $error_apakah_pernah_tk = "";
    $error_no_seri_skhun_sebelumnya = "";
    $error_no_seri_ijazah_sebelumnya = "";
    $error_hobi = "";
    $error_cita_cita = "";

    $nama_lengkap
    $jenis_kelamin
    $nisn
    $nik
    $tempat_lahir
    $tanggal_lahir
    $agama
    $berkebutuhan_khusus
    $alamat_jalan
    $rt
    $rw
    $nama_dusun
    $nama_kelurahan_desa
    $kecamatan
    $kode_pos
    $tempat_tinggal
    $moda_transportasi
    $nomor_hp
    $nomor_telepon
    $email_pribadi
    $penerima_kps_pkh_kip
    $no_kps_pkh_kip
    $kewarganegaraan

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
            $nama = cek_input($_POST["jenis_pendaftaran"]);
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
                            <label for="jenis_pendaftaran" class="col-sm-3 col-form-label">Jenis Pendaftaran</label>
                            <div class="col-sm-10">                                
                                <select class="form-control" name="jenis_pendaftaran">
                                    <option>Pilih</option>
                                    <option value="Siswa Baru">Siswa Baru</option>
                                    <option value="Pindahan">Pindahan</option>
                                </select>
                                <span class="warning"><?php echo $error_jenis_pendaftaran;?></span>
                            </div>                                                        
                        </div>

                        <div class="form-group row">
                            <label for="tanggal_masuk_sekolah" class="col-sm-3 col-form-label">Tanggal Masuk Sekolah</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_masuk_sekolah" class="form-control <?php echo ($error_tanggal_masuk_sekolah !="" ? "is-invalid" : ""); ?>" id="tanggal_masuk_sekolah" placeholder="Tanggal Masuk Sekolah" value="<?php echo $tanggal_masuk_sekolah;?>">
                                <span class="warning"><?php echo $error_tanggal_masuk_sekolah;?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nis" class="col-sm-3 col-form-label">NIS</label>
                            <div class="col-sm-10">
                                <input type="text" name="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" id="nis" placeholder="NIS" value="<?php echo $nis;?>">
                                <span class="warning"><?php echo $error_nis;?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomor_peserta_ujian" class="col-sm-3 col-form-label">Nomor Peserta Ujian</label>
                            <div class="col-sm-10">
                                <input type="text" name="nomor_peserta_ujian" class="form-control <?php echo ($error_nomor_peserta_ujian !="" ? "is-invalid" : ""); ?>" id="nomor_peserta_ujian" placeholder="Nomor Peserta Ujian" value="<?php echo $nomor_peserta_ujian;?>">
                                <span class="warning"><?php echo $error_nomor_peserta_ujian;?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apakah_pernah_paud" class="col-sm-3 col-form-label">Apakah pernah PAUD?</label>
                            <div class="col-sm-10">
                                <input type="radio" name="apakah_pernah_paud" value="Ya" <?php echo ($apakah_pernah_paud=='Ya' ? 'checked' : '');?>>Ya
                                <input type="radio" name="apakah_pernah_paud" value="Tidak" <?php echo ($apakah_pernah_paud=='Tidak' ? 'checked' : '');?>>Tidak
                            <span class="warning"><?php echo $error_apakah_pernah_paud;?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apakah_pernah_tk" class="col-sm-3 col-form-label">Apakah pernah TK?</label>
                            <div class="col-sm-10">
                                <input type="text" name="apakah_pernah_tk" class="form-control <?php echo ($error_apakah_pernah_tk !="" ? "is-invalid" : ""); ?>" id="apakah_pernah_tk" placeholder="Apakah pernah TK?" value="<?php echo $apakah_pernah_tk;?>">
                                <span class="warning"><?php echo $error_apakah_pernah_tk;?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_seri_skhun_sebelumnya" class="col-sm-3 col-form-label">No.Seri SKHUN Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_seri_skhun_sebelumnya" class="form-control <?php echo ($error_no_seri_skhun_sebelumnya !="" ? "is-invalid" : ""); ?>" id="no_seri_skhun_sebelumnya" placeholder="No.Seri SKHUN Sebelumnya" value="<?php echo $no_seri_skhun_sebelumnya;?>">
                                <span class="warning"><?php echo $error_no_seri_skhun_sebelumnya;?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_seri_ijazah_sebelumnya" class="col-sm-3 col-form-label">No.Seri Ijazah Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_seri_ijazah_sebelumnya" class="form-control <?php echo ($error_no_seri_ijazah_sebelumnya !="" ? "is-invalid" : ""); ?>" id="no_seri_ijazah_sebelumnya" placeholder="No.Seri Ijazah Sebelumnya" value="<?php echo $no_seri_ijazah_sebelumnya;?>">
                                <span class="warning"><?php echo $error_no_seri_ijazah_sebelumnya;?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobi" class="col-sm-3 col-form-label">Hobi</label>
                            <div class="col-sm-10">
                                <input type="text" name="hobi" class="form-control <?php echo ($error_hobi !="" ? "is-invalid" : ""); ?>" id="hobi" placeholder="Hobi" value="<?php echo $hobi;?>">
                                <span class="warning"><?php echo $error_hobi;?></span>
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