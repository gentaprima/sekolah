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
                                <li><span class="bread-blod">Data Wawancara</span>
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
                            <h1><span class="table-project-n">Data</span> Wawancara</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
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
                                                <th data-field="nis">
                                                    <center>NIS</center>
                                                </th>
                                                <th data-field="full_name">
                                                    <center>Nama Siswa</center>
                                                </th>
                                                <th data-field="tgl_lahir">
                                                    <center>Tanggal Lahir</center>
                                                </th>
                                                <th data-field="jenis_kelamin">
                                                    <center>Jenis Kelamin</center>
                                                </th>
                                                <th data-field="alamat">
                                                    <center>Kelas Tujuan</center>
                                                </th>
                                                <th data-field="action">
                                                    <center>Action</center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td>
                                                        <center></center>
                                                    </td>
                                                    <td>
                                                        <center></center>
                                                    </td>
                                                    <td>
                                                        <center></center>
                                                    </td>
                                                    <td>
                                                        <center></center>
                                                    </td>
                                                    <td>
                                                        <center> </center>
                                                    </td>
                                                    <td>
                                                        <center></center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <span data-toggle="tooltip" data-toggle="tooltip" data-placement="top" title="Atur Wawancara">
                                                                <button onClick="" data-toggle="modal" data-target="#modaljadwal" type="button" class="btn btn-primary btn-circle btn-icon">
                                                                    <i class="fa fa-calendar"></i></button>
                                                            </span>
                                                    </td>

                                                </tr>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modaljadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modal_title">Verifikasi Data Siswa</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <!-- <span aria-hidden="true">&times;</span> -->
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="myTabContent" style="margin-top: 30px;" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form action="<?= base_url() ?>jadwal/add_jadwal" method="post">
                                        <div class="row" style="margin-bottom:25px;">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <input type="hidden" name="id_jadwal" id="id_jadwal" class="form-control">
                                                    <input type="hidden" name="id_user" id="id_user" class="form-control">
                                                    <label for="" class="col-sm-3 col-form-label">Input Jadwal</label>

                                                    <div class="col-sm-9">
                                                        <div class="row">
                                                            <div class="col-sm-11">
                                                                <input type="date" value="" required name="jadwal" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="button" class="btn btn-primary">Atur Jadwal</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-default">Keluar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <script>
                function add_jadwal(base_url, id_user) {
                    document.getElementById("modal_title").innerHTML = "Form Tambah Jadwal";
                    document.getElementById("id_jadwal").value = "";
                    document.getElementById("id_user").value = id_user;
                    document.getElementById("jadwal").value = "";
                    document.getElementById("button").innerHTML = "Tambah Data";
                    document.getElementById("form").action = base_url;
                }
            </script> -->