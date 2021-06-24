<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1 class="white-color">Pendaftaran Siswa</h1>
                <ul class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Pendaftaran</li>
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="section-padding">
    <div class="container">
        <div class="data-1" id="data_1">
            <div class="row">
                <center>
                    <h4>Silahkan isi halaman form pendaftaran sesuai ketentuan yang ada.</h4>
                </center>
                <div class="col-md-6">
                    <div class="form-group row mt-4">
                        <form action="<?= base_url() ?>pendaftaran/process_pendaftaran" method="post" enctype="multipart/form-data">
                            <label for="" class="col-sm-3 col-form-label">NISN</label>
                            <div class="col-sm-9">
                                <input type="text" value="" id="" required name="nis" class="form-control">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                            <input type="text" value="" id="" required name="full_name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="date" value="" id="tgl_lahir" required name="tgl_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nama Orang Tua</label>
                        <div class="col-sm-9">
                            <input type="text" value="" id="" required name="nama_orangtua" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-9">
                            <input type="text" value="" id="" required name="no_telp" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <input type="text" value="" id="" required name="jenis_kelamin" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Kota</label>
                        <div class="col-sm-9">
                            <input type="text" value="" id="kota" required name="kota" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" value="" id="" required name="alamat" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <center>
                    <button id="btnData_1" onClick="nextPage(1)" class="btn btn-primary" type="button">Selanjutnya</button>
                </center>
            </div>
        </div>
        <div class="data-2" hidden="true" id="data_2">
            <div class="row">
                <center>
                    <h4>Silahkan isi halaman form pendaftaran sesuai ketentuan yang ada.</h4>
                </center>
                <div class="col-md-6 mt-4">

                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Kelas Tujuan</label>
                        <div class="col-sm-9">
                            <select type="text" required name="nama_kelas" class="form-control">
                                <option value="1">--Pilih Kelas--</option>
                                <?php foreach ($data_kelas as $kelas) { ?>
                                    <option value="<?= $kelas['id_kelas'] ?>"><?= $kelas['nama_kelas'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nilai Ijazah Matematika</label>
                        <div class="col-sm-9">
                            <input type="number" value="" id="" required name="nilai_mtk" class="form-control">
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nilai Ijazah B.Indonesia</label>
                        <div class="col-sm-9">
                            <input type="number" value="" id="" required name="nilai_bindo" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-3 col-form-label">Nilai Ijazah B.Inggris</label>
                        <div class="col-sm-9">
                            <input type="number" value="" id="" required name="nilai_bingg" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <center>
                    <button class="btn btn-outline-danger" onClick="back(2)" type="button">Kembali</button>
                    <button onClick="nextPage(2)" class="btn btn-primary" type="button">Selanjutnya</button>
                </center>
            </div>
        </div>
        <div class="data-3" hidden="true" id="data_3">
            <div class="row">
                <center>
                    <h4>Silahkan isi halaman form pendaftaran sesuai ketentuan yang ada.</h4>
                </center>
                <div class="col-md-6 mt-4">
                <div class="form-group row">
                        <label for="formFile" class="col-sm-3 col-form-label">Foto NISN</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="file" required name="bukti_nis" id="formFile">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="formFile" class="col-sm-3 col-form-label">Foto Siswa</label>
                        <div class="col-sm-9">
                            <input class="form-control" required type="file" name="profil" id="formFile">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="formFile" class="col-sm-3 col-form-label">Akte Kelahiran</label>
                        <div class="col-sm-9">
                            <input class="form-control" required type="file" name="akte" id="formFile">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="formFile" class="col-sm-3 col-form-label">Kartu Keluarga</label>
                        <div class="col-sm-9">
                            <input class="form-control" required type="file" name="kartu_keluarga" id="formFile">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="formFile" class="col-sm-3 col-form-label">Ijazah</label>
                        <div class="col-sm-9">
                            <input class="form-control" required type="file" name="ijazah" id="formFile">
                        </div>
                    </div>


                </div>
            </div>
            <div class="d-grid gap-2 d-md-block">
                <center>
                    <button class="btn btn-outline-danger" onClick="back(3)" type="button">Kembali</button>
                    <button class="btn btn-primary" type="submit">Daftar</button>
                </center>
            </div>
        </div>
        </form>
    </div>
</div>

<script>
    function nextPage(page) {
        if (page == 1) {
            document.getElementById('data_1').hidden = true;
            document.getElementById('data_2').hidden = false;
            document.getElementById('data_3').hidden = true;
        } else if (page == 2) {
            document.getElementById('data_1').hidden = true;
            document.getElementById('data_2').hidden = true;
            document.getElementById('data_3').hidden = false;
        }
    }

    function back(page) {
        if (page == 3) {
            document.getElementById('data_1').hidden = true;
            document.getElementById('data_2').hidden = false;
            document.getElementById('data_3').hidden = true;
        } else if (page == 2) {
            document.getElementById('data_1').hidden = false;
            document.getElementById('data_2').hidden = true;
            document.getElementById('data_3').hidden = true;
        }
    }
</script>