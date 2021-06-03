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
                                <li><span class="bread-blod">Data Siswa</span>
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
                            <h1><span class="table-project-n">Data</span> Siswa</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="false" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id">
                                            <center>No</center>
                                        </th>
                                        <th data-field="name">
                                            <center>NISN</center>
                                        </th>
                                        <th data-field="email">
                                            <center>Nama Lengkap</center>
                                        </th>
                                        <th data-field="action">
                                            <center>Action</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($data_student as $row) { ?>
                                        <tr>
                                            <td>
                                                <center> <?= $i++; ?> </center>
                                            </td>
                                            <td><?= $row['nis'] ?></td>
                                            <td><?= $row['full_name'] ?></td>
                                            <td>
                                                <center>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Lihat Detail Siswa">
                                                        <button onClick="getDetail('<?= $row['nis'] ?>','<?= $row['full_name'] ?>')" data-toggle="modal" data-target="#modaldetail" type="button" class="btn btn-outline-purple btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-user"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                        <button onClick="delete_siswa('<?= base_url() ?>siswa/delete_siswa/<?= $row['id_user'] ?>')" data-toggle="modal" data-target="#modal_delete" type="button" class="btn btn-outline-info btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-trash"></i></button>
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

<div class="modal fade" id="modal_delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title">Form Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                Anda yakin ingin menghapus data?
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a id="buttondelete" class="btn btn-primary">Hapus Data</a>
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
                            <img style="width: 250px;heigth:auto;" src="<?= base_url() ?>assets/admin/user.png" class="btn-circle" alt="">
                        </div>
                        <?php foreach ($data_student as $row) { ?>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-6"><span>NISN</span></div>
                                <div class="col-lg-6"> : <?= $row['nis'] ?><span class="font-bold" id="nisn"></span></div>
                            </div>
                            <div class="row mt-6">
                                <div class="col-lg-6"><span>Nama Lengkap</span></div>
                                <div class="col-lg-6"> : <?= $row['full_name'] ?> <span class="font-bold" id="nama"></span></div>
                            </div>
                            <div class="row mt-6">
                                <div class="col-lg-6"><span>Nama Orangtua</span></div>
                                <div class="col-lg-6"> : <?= $row['nama_orangtua'] ?> <span class="font-bold" id="orangtua"></span></div>
                            </div>
                            <div class="row mt-6">
                                <div class="col-lg-6"><span>Jenis Kelamin</span></div>
                                <div class="col-lg-6"> : <?= $row['jenis_kelamin'] ?> <span class="font-bold" id="jk"></span></div>
                            </div>
                            <div class="row mt-6">
                                <div class="col-lg-6"><span>Tanggal Lahir</span></div>
                                <div class="col-lg-6"> : <?= $row['tgl_lahir'] ?> <span class="font-bold" id="tgl_lahir"></span></div>
                            </div>
                            <div class="row mt-6">
                                <div class="col-lg-6"><span>Alamat</span></div>
                                <div class="col-lg-6"> : <?= $row['alamat'] ?> <span class="font-bold" id="alamat"></span></div>
                            </div>

                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="button" data-dismiss="modal" class="btn btn-primary">Keluar</button>
            </div>
        </div>
    </div>
</div>
</div>