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
                                <li><span class="bread-blod">Data Kriteria</span>
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
                            <button onClick="add_kriteria('<?= base_url() ?>kriteria/add_kriteria')" data-toggle="modal" data-target="#modaltambah" style="float: right;position:relative;bottom:10px;" class="btn btn-primary">Tambah Data</button>
                            <h1><span class="table-project-n">Data</span> Kriteria</h1>

                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true"  data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id">
                                            <center>No</center>
                                        </th>
                                        <th data-field="name" >
                                            <center>Kriteria</center>
                                        </th>
                                        <th data-field="name" >
                                            <center>Bobot</center>
                                        </th>
                                        <th data-field="name" >
                                            <center>Tipe Kriteria</center>
                                        </th>
                                        <th data-field="action">
                                            <center>Action</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1;
                                    foreach ($data_kriteria as $row) { ?>
                                        <tr>
                                            <td>
                                                <center><?= $i++; ?></center>
                                            </td>
                                            <td><?= $row['kriteria'] ?></td>
                                            <td><?= $row['bobot'] ?></td>
                                            <td></td>
                                            <td>
                                                <center>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Edit Data">
                                                        <button onClick="" data-toggle="modal" data-target="#modaltambah" type="button" class="btn btn-outline-info btn-circle btn-icon btn-sm">
                                                            <i class="fa fa-edit"></i></button>
                                                    </span>
                                                    <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                        <button onClick="" data-toggle="modal" data-target="#modal_delete" type="button" style="border-color:red;" class="btn btn-outline-primary btn-circle btn-icon btn-sm">
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



<!-- Modal -->
<div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id_kriteria" id="id_kriteria" class="form-control">
                        <label for="">Nama Kriteria</label>
                        <input type="text" placeholder="Masukkan Nama Kriteria" id="kriteria" name="kriteria" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Bobot</label>
                        <input type="number" placeholder="Masukkan Bobot Kriteria" id="bobot" name="bobot" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tipe Kriteria</label>
                        <input type="text" placeholder="Masukkan Tipe Kriteria" id="tipe_kriteria" name="tipe_kriteria" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="button" class="btn btn-primary"></button>
                </form>
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

<script>
function add_kriteria(base_url){
    document.getElementById("modal_title").innerHTML = "Form Tambah Kriteria";
    document.getElementById("id_kriteria").value = "";
    document.getElementById("kriteria").value = "";
    document.getElementById("tipe_kriteria").value = "";
    document.getElementById("button").innerHTML = "Tambah Data";
    document.getElementById("form").action = base_url;
}
</script>