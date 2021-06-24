<div class="breadcome-area">
    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Data Verifikasi Siswa</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1><span class="table-project-n">Data</span>Verifikasi Siswa</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#belumverifikasi">Data Siswa Belum Di Verifikasi</a></li>
                                <li class=""><a href="#lolos">Data Verifikasi Lolos</a></li>
                                <li class=""><a href="#tidaklolos">Data Verifikasi Tidak Lolos</a></li>
                            </ul>

                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="belumverifikasi">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="id">
                                                    <center>No</center>
                                                </th>
                                                <th data-field="nisn">
                                                    <center>NISN</center>
                                                </th>
                                                <th data-field="name">
                                                    <center>Nama Lengkap</center>
                                                </th>
                                                <th data-field="kelas">
                                                    <center>Kelas Tujuan</center>
                                                </th>
                                                <th data-field="ortu">
                                                    <center>Jenis Kelamin</center>
                                                </th>
                                                <th data-field="email">
                                                    <center>Status Dokumen</center>
                                                </th>
                                                <th data-field="action">
                                                    <center>Action</center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($data_verifikasistudent as $row) { ?>
                                                <tr>
                                                    <td>
                                                        <center><?= $i++; ?></center>
                                                    </td>
                                                    <td><?= $row['nis'] ?></td>
                                                    <td><?= $row['full_name'] ?></td>
                                                    <td><?= $row['nama_kelas'] ?></td>
                                                    <td><?= $row['jenis_kelamin'] ?></td>
                                                    <td>
                                                        <center>
                                                            <?php if ($row['is_verify'] == 0) { ?>
                                                                <span class="badge badge-warning">Belum diperiksa </span>
                                                            <?php } else if ($row['is_verify'] == 1) { ?>
                                                                <span class="badge badge-success">Lolos</span>
                                                            <?php } else if ($row['is_verify'] == 2) { ?>
                                                                <span class="badge badge-danger">Tidak Lolos</span>
                                                            <?php } ?>
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <?php if ($row['is_verify'] == 0) { ?>
                                                                <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Verifikasi Data">
                                                                    <button onClick="verifikasi_data('<?= base_url() ?>','<?= $row['nis'] ?>','<?= $row['full_name'] ?>','<?= $row['tgl_lahir'] ?>','<?= $row['jenis_kelamin'] ?>','<?= $row['kota'] ?>','<?= $row['no_telp'] ?>','<?= $row['alamat'] ?>','<?= $row['nilai_mtk'] ?>','<?= $row['nilai_bindo'] ?>','<?= $row['nilai_bingg'] ?>','<?= $row['bukti_nis'] ?>','<?= $row['ijazah'] ?>','<?= $row['id_pendaftaran'] ?>','<?= $row['kartu_keluarga']?>','<?= $row['akte']?>')" data-toggle="modal" data-target="#modalverif" type="button" class="btn btn-outline-success btn-circle btn-icon btn-sm">
                                                                        <i class="fa fa-check"></i></button>
                                                                </span>
                                                            <?php } ?>
                                                            <?php if ($row['is_verify'] > 0) { ?>
                                                                <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                                    <button onClick="" data-toggle="modal" data-target="#modal_delete" type="button" class="btn btn-outline-info btn-circle btn-icon btn-sm">
                                                                        <i class="fa fa-book"></i></button>
                                                                </span>
                                                            <?php } ?>
                                                            <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Lihat Detail Siswa">
                                                                <button onClick="getDetail('<?= $row['nis'] ?>','<?= $row['full_name'] ?>','<?= $row['nama_orangtua'] ?>','<?= $row['jenis_kelamin'] ?>','<?= $row['nama_kelas'] ?>','<?= $row['tgl_lahir'] ?>','<?= $row['alamat'] ?>')" data-toggle="modal" data-target="#modaldetail" type="button" class="btn btn-outline-purple btn-circle btn-icon btn-sm">
                                                                    <i class="fa fa-user"></i></button>
                                                            </span>
                                                        </center>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="lolos">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="id">
                                                    <center>No</center>
                                                </th>
                                                <th data-field="nisn">
                                                    <center>NISN</center>
                                                </th>
                                                <th data-field="name">
                                                    <center>Nama Lengkap</center>
                                                </th>
                                                <th data-field="kelas">
                                                    <center>Kelas Tujuan</center>
                                                </th>
                                                <th data-field="ortu">
                                                    <center>Jenis Kelamin</center>
                                                </th>
                                                <th data-field="email">
                                                    <center>Status Dokumen</center>
                                                </th>
                                                <th data-field="action">
                                                    <center>Action</center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($data_verifikasilolos as $row) { ?>
                                                <tr>
                                                    <td>
                                                        <center><?= $i++; ?></center>
                                                    </td>
                                                    <td><?= $row['nis'] ?></td>
                                                    <td><?= $row['full_name'] ?></td>
                                                    <td><?= $row['nama_kelas'] ?></td>
                                                    <td><?= $row['jenis_kelamin'] ?></td>
                                                    <td>
                                                        <center>
                                                            <?php if ($row['is_verify'] == 0) { ?>
                                                                <span class="badge badge-warning">Belum diperiksa </span>
                                                            <?php } else if ($row['is_verify'] == 1) { ?>
                                                                <span style="background-color: green;" class="badge badge-success">Lolos</span>
                                                            <?php } else if ($row['is_verify'] == 2) { ?>
                                                                <span class="badge badge-danger">Tidak Lolos</span>
                                                            <?php } ?>
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <?php if ($row['is_verify'] == 0) { ?>
                                                                <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Verifikasi Data">
                                                                    <button onClick="verifikasi_data('<?= base_url() ?>','<?= $row['nis'] ?>','<?= $row['full_name'] ?>','<?= $row['tgl_lahir'] ?>','<?= $row['jenis_kelamin'] ?>','<?= $row['kota'] ?>','<?= $row['no_telp'] ?>','<?= $row['alamat'] ?>','<?= $row['nilai_mtk'] ?>','<?= $row['nilai_bindo'] ?>','<?= $row['nilai_bingg'] ?>','<?= $row['bukti_nis'] ?>','<?= $row['ijazah'] ?>','<?= $row['id_pendaftaran'] ?>')" data-toggle="modal" data-target="#modalverif" type="button" class="btn btn-outline-success btn-circle btn-icon btn-sm">
                                                                        <i class="fa fa-check"></i></button>
                                                                </span>
                                                            <?php } ?>
                                                            <?php if ($row['is_verify'] > 0) { ?>
                                                                <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Detail Pendaftaran">
                                                                    <button onClick="detail_pendaftaran('<?= base_url() ?>','<?= $row['nis'] ?>','<?= $row['full_name'] ?>','<?= $row['tgl_lahir'] ?>','<?= $row['jenis_kelamin'] ?>','<?= $row['kota'] ?>','<?= $row['no_telp'] ?>','<?= $row['alamat'] ?>','<?= $row['nilai_mtk'] ?>','<?= $row['nilai_bindo'] ?>','<?= $row['nilai_bingg'] ?>','<?= $row['bukti_nis'] ?>','<?= $row['ijazah'] ?>','<?= $row['id_pendaftaran'] ?>','<?= $row['kartu_keluarga']?>','<?= $row['akte']?>','<?= $row['id_pendaftaran'] ?>')" data-toggle="modal" data-target="#modaldetailpendaftaran" type="button" class="btn btn-outline-info btn-circle btn-icon btn-sm">
                                                                        <i class="fa fa-info"></i></button>
                                                                </span>
                                                            <?php } ?>
                                                            <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Lihat Detail Siswa">
                                                                <button onClick="getDetail('<?= $row['nis'] ?>','<?= $row['full_name'] ?>','<?= $row['nama_orangtua'] ?>','<?= $row['jenis_kelamin'] ?>','<?= $row['nama_kelas'] ?>','<?= $row['tgl_lahir'] ?>','<?= $row['alamat'] ?>','<?= $row['foto_siswa']?>','<?= base_url()?>')" data-toggle="modal" data-target="#modaldetail" type="button" class="btn btn-outline-purple btn-circle btn-icon btn-sm">
                                                                    <i class="fa fa-user"></i></button>
                                                            </span>
                                                        </center>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="tidaklolos">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-refresh="true" data-key-events="false" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="id">
                                                    <center>No</center>
                                                </th>
                                                <th data-field="nisn">
                                                    <center>NISN</center>
                                                </th>
                                                <th data-field="name">
                                                    <center>Nama Lengkap</center>
                                                </th>
                                                <th data-field="kelas">
                                                    <center>Kelas Tujuan</center>
                                                </th>
                                                <th data-field="ortu">
                                                    <center>Jenis Kelamin</center>
                                                </th>
                                                <th data-field="email">
                                                    <center>Status Dokumen</center>
                                                </th>
                                                <th data-field="action">
                                                    <center>Action</center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($data_verifikasitidaklolos as $row) { ?>
                                                <tr>
                                                    <td>
                                                        <center><?= $i++; ?></center>
                                                    </td>
                                                    <td><?= $row['nis'] ?></td>
                                                    <td><?= $row['full_name'] ?></td>
                                                    <td><?= $row['nama_kelas'] ?></td>
                                                    <td><?= $row['jenis_kelamin'] ?></td>
                                                    <td>
                                                        <center>
                                                            <?php if ($row['is_verify'] == 0) { ?>
                                                                <span class="badge badge-warning">Belum diperiksa </span>
                                                            <?php } else if ($row['is_verify'] == 1) { ?>
                                                                <span class="badge badge-success">Lolos</span>
                                                            <?php } else if ($row['is_verify'] == 2) { ?>
                                                                <span class="badge badge-danger">Tidak Lolos</span>
                                                            <?php } ?>
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <?php if ($row['is_verify'] == 0) { ?>
                                                                <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Verifikasi Data">
                                                                    <button onClick="verifikasi_data('<?= base_url() ?>','<?= $row['nis'] ?>','<?= $row['full_name'] ?>','<?= $row['tgl_lahir'] ?>','<?= $row['jenis_kelamin'] ?>','<?= $row['kota'] ?>','<?= $row['no_telp'] ?>','<?= $row['alamat'] ?>','<?= $row['nilai_mtk'] ?>','<?= $row['nilai_bindo'] ?>','<?= $row['nilai_bingg'] ?>','<?= $row['bukti_nis'] ?>','<?= $row['ijazah'] ?>','<?= $row['id_pendaftaran'] ?>')" data-toggle="modal" data-target="#modalverif" type="button" class="btn btn-outline-success btn-circle btn-icon btn-sm">
                                                                        <i class="fa fa-check"></i></button>
                                                                </span>
                                                            <?php } ?>
                                                            <?php if ($row['is_verify'] > 0) { ?>
                                                                <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                                    <button onClick="" data-toggle="modal" data-target="#modal_delete" type="button" class="btn btn-outline-info btn-circle btn-icon btn-sm">
                                                                        <i class="fa fa-book"></i></button>
                                                                </span>
                                                            <?php } ?>
                                                            <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Lihat Detail Siswa">
                                                                <button onClick="getDetail('<?= $row['nis'] ?>','<?= $row['full_name'] ?>','<?= $row['nama_orangtua'] ?>','<?= $row['jenis_kelamin'] ?>','<?= $row['nama_kelas'] ?>','<?= $row['tgl_lahir'] ?>','<?= $row['alamat'] ?>')" data-toggle="modal" data-target="#modaldetail" type="button" class="btn btn-outline-purple btn-circle btn-icon btn-sm">
                                                                    <i class="fa fa-user"></i></button>
                                                            </span>
                                                        </center>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modaldetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal_title">Detail Data Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <!-- <span aria-hidden="true">&times;</span> -->
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid mt-4" style="margin-top:20px;margin-bottom:20px;">
                    <div class="row">
                        <div class="col-lg-5">
                            <img style="width: 250px;heigth:auto;" src="<?= base_url() ?>assets/admin/user.png" id="foto_siswa" class="btn-circle" alt="">
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-6"><span>NISN</span></div>
                                <div class="col-lg-6"> : <span class="font-bold" id="nisn"></span></div>
                            </div>
                            <div class="row mt-6">
                                <div class="col-lg-6"><span>Nama Lengkap</span></div>
                                <div class="col-lg-6"> : <span class="font-bold" id="nama"></span></div>
                            </div>
                            <div class="row mt-6">
                                <div class="col-lg-6"><span>Nama Orangtua</span></div>
                                <div class="col-lg-6"> : <span class="font-bold" id="orangtua"></span></div>
                            </div>
                            <div class="row mt-6">
                                <div class="col-lg-6"><span>Jenis Kelamin</span></div>
                                <div class="col-lg-6"> : <span class="font-bold" id="jk"></span></div>
                            </div>
                            <div class="row mt-6">
                                <div class="col-lg-6"><span>Kelas Tujuan</span></div>
                                <div class="col-lg-6"> : <span class="font-bold" id="tujuan"></span></div>
                            </div>
                            <div class="row mt-6">
                                <div class="col-lg-6"><span>Tanggal Lahir</span></div>
                                <div class="col-lg-6"> : <span class="font-bold" id="tgl_lahir"></span></div>
                            </div>
                            <div class="row mt-6">
                                <div class="col-lg-6"><span>Alamat</span></div>
                                <div class="col-lg-6"> : <span class="font-bold" id="alamat"></span></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="button" data-dismiss="modal" class="btn btn-primary">Keluar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalverif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal_title">Verifikasi Data Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <!-- <span aria-hidden="true">&times;</span> -->
                </button>
            </div>
            <div class="modal-body">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Data Diri</a></li>
                        <li class=""><a href="#reviews"> Bukti Nilai</a></li>
                        <li class=""><a href="#INFORMATION">Bukti Lainnya</a></li>
                    </ul>

                    <div id="myTabContent" style="margin-top: 30px;" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <form action="<?= base_url() ?>konfirmasi/verfication_data" method="post">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group row mt-4">
                                            <label for="" class="col-sm-3 col-form-label">NISN</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <input type="text" readonly value="" id="nis" required name="nis" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input name="check_nisn" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">

                                                        <input type="text" value="" readonly id="full_name" required name="full_name" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input name="check_nama" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <input type="date" value="" readonly id="tgl_lahir" required name="tgl_lahir" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input name="check_tgl" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <input type="text" value="" readonly id="jenis_kelamin" required name="jenis_kelamin" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input name="check_jk" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-6">
                                                <a target="_blank" id="foto_nisn" href="">Klik untuk lihat bukti NISN</a>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Kota</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <input type="text" readonly value="" id="kota" required name="kota" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input name="check_kota" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <input type="text" readonly value="" id="no_telp" required name="no_telp" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input name="check_phone" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <input type="text" readonly value="" id="alamat_form" required name="alamat" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input name="check_alamat" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row mt-4">
                                        <label for="" class="col-sm-3 col-form-label">Nilai Ijazah Matematika</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <input readonly type="number" value="" id="nilai_mtk" required name="nilai_mtk" class="form-control">
                                                </div>
                                                <input type="hidden" id="id_user" name="id_user">
                                                <div class="col-sm-1">
                                                    <div style="color: grey;padding:10px;" class="checkbox-group">
                                                        <input name="check_mtk" type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Nilai Ijazah B.Indonesia</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <input readonly type="text" value="" id="nilai_bindo" required name="nilai_bindo" class="form-control">
                                                </div>
                                                <div class="col-sm-1">
                                                    <div style="color: grey;padding:10px;" class="checkbox-group">
                                                        <input name="check_bindo" type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Nilai Ijazah B.Inggris</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <input readonly type="text" value="" id="nilai_bingg" required name="nilai_bingg" class="form-control">
                                                </div>
                                                <div class="col-sm-1">
                                                    <div style="color: grey;padding:10px;" class="checkbox-group">
                                                        <input name="check_bingg" type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-6">
                                            <a target="_blank" id="foto_ijazah" href="">Klik untuk lihat bukti Ijazah</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="form-group row">
                                <label for="" class="col-sm-2">Kartu Keluarga</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <a href="" target="_blank" id="foto_kk">Lihat bukti kartu keluarga</a>
                                        </div>
                                        <div class="col-sm-1">
                                            <input name="check_kk" type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2">Akte Kelahiran</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <a target="_blank" href="" id="foto_akte">Lihat bukti akte kelahiran</a>
                                        </div>
                                        <div class="col-sm-1">
                                            <input name="check_akte" type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="button" class="btn btn-primary">Verifikasi Data</button>
                            <button type="button" data-dismiss="modal" class="btn btn-default">Keluar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modaldetailpendaftaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal_title">Verifikasi Data Siswa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <!-- <span aria-hidden="true">&times;</span> -->
                </button>
            </div>
            <div class="modal-body">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description1">Data Diri</a></li>
                        <li class=""><a href="#reviews1"> Bukti Nilai</a></li>
                        <li class=""><a href="#INFORMATION1">Bukti Lainnya</a></li>
                    </ul>

                    <div id="myTabContent" style="margin-top: 30px;" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description1">
                            <form action="<?= base_url() ?>konfirmasi/verfication_data" method="post">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group row mt-4">
                                            <label for="" class="col-sm-3 col-form-label">NISN</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <input type="text" readonly value="" id="nis1" required name="nis1" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input  disabled id="check_nisn1" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">

                                                        <input type="text" value="" readonly id="full_name1" required name="full_name1" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input disabled id="check_nama1" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <input type="date" value="" readonly id="tgl_lahir1" required name="tgl_lahir1" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input disabled id="check_tgl1" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <input type="text" value="" readonly id="jenis_kelamin1" required name="jenis_kelamin1" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input disabled id="check_jk1" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-6">
                                                <a target="_blank" id="foto_nisn1" href="">Klik untuk lihat bukti NISN</a>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Kota</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <input type="text" readonly value="" id="kota1" required name="kota1" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input disabled id="check_kota1" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Nomor Telepon</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <input type="text" readonly value="" id="no_telp1" required name="no_telp1" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input disabled id="check_phone1" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-9">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <input type="text" readonly value="" id="alamat_form1" required name="alamat1" class="form-control">
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div style="color: grey;padding:10px;" class="checkbox-group">
                                                            <input disabled id="check_alamat1" type="checkbox" aria-label="Checkbox for following text input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="reviews1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row mt-4">
                                        <label for="" class="col-sm-3 col-form-label">Nilai Ijazah Matematika</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <input readonly type="number" value="" id="nilai_mtk1" required name="nilai_mtk1" class="form-control">
                                                </div>
                                                <input type="hidden" id="id_user1" name="id_user1">
                                                <div class="col-sm-1">
                                                    <div style="color: grey;padding:10px;" class="checkbox-group">
                                                        <input disabled id="check_mtk1" type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Nilai Ijazah B.Indonesia</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <input readonly type="text" value="" id="nilai_bindo1" required name="nilai_bindo1" class="form-control">
                                                </div>
                                                <div class="col-sm-1">
                                                    <div style="color: grey;padding:10px;" class="checkbox-group">
                                                        <input disabled id="check_bindo1" type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Nilai Ijazah B.Inggris</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-11">
                                                    <input readonly type="text" value="" id="nilai_bingg1" required name="nilai_bingg1" class="form-control">
                                                </div>
                                                <div class="col-sm-1">
                                                    <div style="color: grey;padding:10px;" class="checkbox-group">
                                                        <input disabled id="check_bingg1" type="checkbox" aria-label="Checkbox for following text input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-6">
                                            <a target="_blank" id="foto_ijazah1" href="">Klik untuk lihat bukti Ijazah</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION1">
                            <div class="form-group row">
                                <label for="" class="col-sm-2">Kartu Keluarga</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <a href="" id="foto_kk1">Lihat bukti kartu keluarga</a>
                                        </div>
                                        <div class="col-sm-1">
                                            <input disabled id="check_kk1" type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2">Akte Kelahiran</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <a href="" id="foto_akte1">Lihat bukti akte kelahiran</a>
                                        </div>
                                        <div class="col-sm-1">
                                            <input disabled id="check_akte1" type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="button" class="btn btn-primary">Verifikasi Data</button>
                            <button type="button" data-dismiss="modal" class="btn btn-default">Keluar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
    function getDetail(nisn, nama, orangtua, jk, kelas, tgl_lahir, alamat,foto,base_url) {
        document.getElementById('foto_siswa').src = base_url + "assets/home/bukti/" + foto;
        document.getElementById('nisn').innerHTML = nisn;
        document.getElementById('nama').innerHTML = nama;
        document.getElementById('orangtua').innerHTML = orangtua;
        document.getElementById('jk').innerHTML = jk;
        document.getElementById('tujuan').innerHTML = kelas;
        document.getElementById('tgl_lahir').innerHTML = tgl_lahir;
        document.getElementById('alamat').innerHTML = alamat;
    }

    function verifikasi_data(base_url, nis, nama, tgl_lhir, jenis_kelamin, kota, no_tlp, alamat, mtk, indo, inggris, foto_nis, ijazah, id_user,kk,akte) {
        document.getElementById('nis').value = nis;
        document.getElementById('full_name').value = nama;
        document.getElementById('tgl_lahir').value = tgl_lhir;
        document.getElementById('jenis_kelamin').value = jenis_kelamin;
        document.getElementById('kota').value = kota;
        document.getElementById('no_telp').value = no_tlp;
        document.getElementById('alamat_form').value = alamat;
        document.getElementById('id_user').value = id_user;
        document.getElementById('nilai_mtk').value = mtk;
        document.getElementById('nilai_bindo').value = indo;
        document.getElementById('nilai_bingg').value = inggris;
        document.getElementById('foto_nisn').href = base_url + "assets/home/bukti/" + foto_nis;
        document.getElementById('foto_ijazah').href = base_url + "assets/home/bukti/" + ijazah;
        document.getElementById('foto_kk').href = base_url + "assets/home/bukti/" + kk;
        document.getElementById('foto_akte').href = base_url + "assets/home/bukti/" + akte;
    }

    function detail_pendaftaran(base_url, nis, nama, tgl_lhir, jenis_kelamin, kota, no_tlp, alamat, mtk, indo, inggris, foto_nis, ijazah, id_user,kk,akte,id_pendaftaran){
        document.getElementById('nis1').value = nis;
        document.getElementById('full_name1').value = nama;
        document.getElementById('tgl_lahir1').value = tgl_lhir;
        document.getElementById('jenis_kelamin1').value = jenis_kelamin;
        document.getElementById('kota1').value = kota;
        document.getElementById('no_telp1').value = no_tlp;
        document.getElementById('alamat_form1').value = alamat;
        document.getElementById('id_user1').value = id_user;
        document.getElementById('nilai_mtk1').value = mtk;
        document.getElementById('nilai_bindo1').value = indo;
        document.getElementById('nilai_bingg1').value = inggris;
        document.getElementById('foto_nisn1').href = base_url + "assets/home/bukti/" + foto_nis;
        document.getElementById('foto_ijazah1').href = base_url + "assets/home/bukti/" + ijazah;
        document.getElementById('foto_kk1').href = base_url + "assets/home/bukti/" + kk;
        document.getElementById('foto_akte1').href = base_url + "assets/home/bukti/" + akte;
        checkData(id_pendaftaran,base_url);
    }

    function checkData(id_pendaftaran,base_url){
        $.ajax({
            type : "GET",
            url : base_url + 'hasil/checkData/'+id_pendaftaran,
            dataType : 'html',
            success : function(response){
                var data = JSON.parse(response);
                if(data.check_nisn == 1){
                    $("#check_nisn1").prop( "checked", true );
                }
                
                if(data.check_nama == 1){
                    $("#check_nama1").prop( "checked", true );
                }
                if(data.check_tgl == 1){
                    $("#check_tgl1").prop( "checked", true );
                }
                if(data.check_jk == 1){
                    $("#check_jk1").prop( "checked", true );
                }
                if(data.check_kota == 1){
                    $("#check_kota1").prop( "checked", true );
                }
                if(data.check_phone == 1){
                    $("#check_phone1").prop( "checked", true );
                }
                if(data.check_alamat == 1){
                    $("#check_alamat1").prop( "checked", true );
                }
                if(data.check_mtk == 1){
                    $("#check_mtk1").prop( "checked", true );
                }
                if(data.check_bindo == 1){
                    $("#check_bindo1").prop( "checked", true );
                }
                if(data.check_bingg == 1){
                    $("#check_bingg1").prop( "checked", true );
                }
                if(data.check_kk == 1){
                    $("#check_kk1").prop( "checked", true );
                }
                if(data.check_akte == 1){
                    $("#check_akte1").prop( "checked", true );
                }

            }
        })
    }
    
</script>