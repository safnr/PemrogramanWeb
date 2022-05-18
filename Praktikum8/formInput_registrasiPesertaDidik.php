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

    $jenis_pendaftaran = "";
    $tanggal_masuk_sekolah = "";
    $nis = "";
    $nomor_peserta_ujian = "";
    $apakah_pernah_paud = "";
    $apakah_pernah_tk = "";
    $no_seri_skhun_sebelumnya = "";
    $no_seri_ijazah_sebelumnya = "";
    $hobi = "";
    $cita_cita = "";

    //Mengecek kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["jenis_pendaftaran"])) {
            $error_jenis_pendaftaran = "Jenis pendaftaran tidak boleh kosong";
        } else {
            $jenis_pendaftaran = cek_input($_POST["jenis_pendaftaran"]);
        }

        if (empty($_POST["tanggal_masuk_sekolah"])) {
            $error_tanggal_masuk_sekolah = "Tanggal masuk sekolah tidak boleh kosong";
        } else {
            $tanggal_masuk_sekolah = cek_input($_POST["tanggal_masuk_sekolah"]);
        }

        if (empty($_POST["nis"])) {
            $error_nis = "NIS tidak boleh kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
        }

        if (empty($_POST["nomor_peserta_ujian"])) {
            $error_nomor_peserta_ujian = "Nomor peserta ujian tidak boleh kosong";
        } else {
            $nomor_peserta_ujian = cek_input($_POST["nomor_peserta_ujian"]);
        }

        if (empty($_POST["apakah_pernah_paud"])) {
            $error_apakah_pernah_paud = "Apakah pernah paud tidak boleh kosong";
        } else {
            $apakah_pernah_paud = cek_input($_POST["apakah_pernah_paud"]);
        }

        if (empty($_POST["apakah_pernah_tk"])) {
            $error_apakah_pernah_tk = "Apakah pernah tk tidak boleh kosong";
        } else {
            $apakah_pernah_tk = cek_input($_POST["apakah_pernah_tk"]);
        }

        if (empty($_POST["no_seri_skhun_sebelumnya"])) {
            $error_no_seri_skhun_sebelumnya = "No seri skhun sebelumnya tidak boleh kosong";
        } else {
            $no_seri_skhun_sebelumnya = cek_input($_POST["no_seri_skhun_sebelumnya"]);
        }

        if (empty($_POST["no_seri_ijazah_sebelumnya"])) {
            $error_no_seri_ijazah_sebelumnya = "No seri ijazah sebelumnya tidak boleh kosong";
        } else {
            $no_seri_ijazah_sebelumnya = cek_input($_POST["no_seri_ijazah_sebelumnya"]);
        }

        if (empty($_POST["hobi"])) {
            $error_hobi = "Hobi tidak boleh kosong";
        } else {
            $hobi = cek_input($_POST["hobi"]);
        }

        if (empty($_POST["cita_cita"])) {
            $error_cita_cita = "Cita cita tidak boleh kosong";
        } else {
            $cita_cita = cek_input($_POST["cita_cita"]);
        }

        //Query input menginput data kedalam tabel pendaftaraan
        $sql="INSERT INTO tb_registrasiPesertaDidik VALUES
		('','$jenis_pendaftaran','$tanggal_masuk_sekolah','$nis','$nomor_peserta_ujian','$apakah_pernah_paud',$apakah_pernah_tk,'$no_seri_skhun_sebelumnya','$no_seri_ijazah_sebelumnya','$hobi','$cita_cita')";

        //Menjalankan query diatas
        $hasil=mysqli_query($conn,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) { 
            echo "<div class='alert alert-success'> Data telah berhasil Dimasukkan.</div>"; 
            header("Location: formInput_dataPribadi.php");
        }
        else {
            echo "<div class='alert alert-danger'> Gagal Memasukkan Data.</div>";
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
                            <strong>Registrasi Peserta Didik</strong>
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
                                <input type="radio" name="apakah_pernah_tk" value="Ya" <?php echo ($apakah_pernah_tk=='Ya' ? 'checked' : '');?>>Ya
                                <input type="radio" name="apakah_pernah_tk" value="Tidak" <?php echo ($apakah_pernah_tk=='Tidak' ? 'checked' : '');?>>Tidak
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
                                <select class="form-control" name="hobi">
                                    <option>Pilih</option>
                                    <option value="Olahraga">Olahraga</option>
                                    <option value="Kesenian">Kesenian</option>
                                    <option value="Membaca">Membaca</option>
                                    <option value="Menulis">Menulis</option>
                                    <option value="Traveling">Traveling</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                <span class="warning"><?php echo $error_hobi;?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cita_cita" class="col-sm-3 col-form-label">Cita-cita</label>
                            <div class="col-sm-10">                                                     
                                <select class="form-control" name="cita_cita">
                                    <option>Pilih</option>
                                    <option value="PNS">PNS</option>
                                    <option value="TNI/POLRI">TNI/POLRI</option>
                                    <option value="Guru/Dosen">Guru/Dosen</option>
                                    <option value="Dokter">Dokter</option>
                                    <option value="Politikus">Politikus</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Seni/Lukis/Artis/Sejenisnya">Seni/Lukis/Artis/Sejenisnya</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                <span class="warning"><?php echo $error_cita_cita;?></span>
                            </div>
                        </div>                        
                
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Next</button>
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