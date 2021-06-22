    <body>
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header mb-5">
                    <a href="index.html"><img class="mt-6" style="width: 100px;" class="main-logo" src="<?= base_url() ?>assets/admin/img/logoo.png" alt=""></a>
                    <!-- <strong><a class="mt-6"  href="index.html"><img src="<?= base_url() ?>assets/admin/img/logo/logosn.png" alt="" /></a></strong> -->
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar" style="margin-top: 30px;">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu " id="menu1">
                            <li>
                                <?php if (isset($active_home)) { ?>
                                    <a class="active" href="<?= base_url() ?>dashboard">
                                        <span class="educate-icon educate-home icon-wrap active"></span>
                                        <span class="mini-click-non">Home</span>
                                    </a>
                                <?php } else { ?>
                                    <a class="" href="<?= base_url() ?>dashboard">
                                        <span class="educate-icon educate-home icon-wrap"></span>
                                        <span class="mini-click-non">Home</span>
                                    </a>
                                <?php } ?>
                            </li>
                            <?php if (isset($active_student) || isset($active_verifikasi)) { ?>
                                <li class="active">
                                <?php } else { ?>
                                <li class="">
                                <?php } ?>
                                <?php if (isset($active_student) || isset($active_verifikasi)) { ?>
                                    <a class="has-arrow active" href="">
                                        <span class="educate-icon educate-student icon-wrap active"></span>
                                        <span class="mini-click-non">Mutasi</span>
                                    </a>
                                <?php } else { ?>
                                    <a class="has-arrow" href="">
                                        <span class="educate-icon educate-student icon-wrap"></span>
                                        <span class="mini-click-non">Mutasi</span>
                                    </a>
                                <?php } ?>
                                <ul class="submenu-angle" aria-expanded="true">
                                    <?php if (isset($active_verifikasi)) { ?>
                                        <li class="active"><a href="<?= base_url() ?>dashboard/verifikasi_student"><span class="mini-sub-pro">Verifikasi Siswa</span></a></li>
                                    <?php } else { ?>
                                        <li class=""><a href="<?= base_url() ?>dashboard/verifikasi_student"><span class="mini-sub-pro">Verifikasi Siswa</span></a></li>
                                    <?php } ?>
                                    <?php if (isset($active_student)) {  ?>
                                        <li class="active"><a href="<?= base_url() ?>dashboard/data_student"><span class="mini-sub-pro">Data Siswa</span></a></li>
                                    <?php } else { ?>
                                        <li><a href="<?= base_url() ?>dashboard/data_student"><span class="mini-sub-pro">Data Siswa</span></a></li>
                                    <?php } ?>
                                </ul>
                                </li>

                                <?php if (isset($active_jadwal) || isset($active_hasil)) { ?>
                                <li class="active">
                                <?php } else { ?>
                                <li class="">
                                <?php } ?>
                                <?php if (isset($active_jadwal) || isset($active_hasil)) { ?>
                                    <a class="has-arrow active" href="">
                                        <span class="educate-icon educate-home icon-wrap active"></span>
                                        <span class="mini-click-non">Tes Tertulis</span>
                                    </a>
                                    <?php }else{ ?>
                                        <a class="has-arrow" href="">
                                        <span class="educate-icon educate-home icon-wrap"></span>
                                        <span class="mini-click-non">Tes Tertulis</span>
                                    </a>
                                    <?php } ?>
                                    <ul class="submenu-angle" aria-expanded="true">
                                    <?php if (isset($active_jadwal)) { ?>
                                        <li class="active"><a href="<?= base_url() ?>dashboard/data_jadwal"><span class="mini-sub-pro">Jadwal</span></a></li>
                                        <?php }else{?>
                                            <li class=""><a href="<?= base_url() ?>dashboard/data_jadwal"><span class="mini-sub-pro">Jadwal</span></a></li>
                                        <?php } ?>
                                        <?php if(isset($active_wawancara)) { ?> 
                                        <li class="active"><a href="<?= base_url() ?>dashboard/data_wawancara"><span class="mini-sub-pro">Wawancara</span></a></li>
                                        <?php }else{ ?>
                                            <li class=""><a href="<?= base_url() ?>dashboard/data_wawancara"><span class="mini-sub-pro">Wawancara</span></a></li>
                                        <?php } ?>
                                        <?php if (isset($active_hasil)) { ?>
                                        <li class="active"><a href="<?= base_url() ?>dashboard/data_hasil"><span class="mini-sub-pro">Hasil</span></a></li>
                                        <?php }else{ ?>
                                            <li class=""><a href="<?= base_url() ?>dashboard/data_hasil"><span class="mini-sub-pro">Hasil</span></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <a><span class="mini-sub-pro">Lain - Lain</span></a>

                                <li>
                                    <?php if (isset($active_class)) { ?>
                                        <a class="active" title="Landing Page" href="<?= base_url() ?>dashboard/data_class" aria-expanded="false">
                                            <span class="educate-icon educate-event icon-wrap sub-icon-mg active" aria-hidden="true"></span>
                                            <span class="mini-click-non">Data Kelas</span>
                                        </a>
                                    <?php } else { ?>
                                        <a title="Landing Page" href="<?= base_url() ?>dashboard/data_class" aria-expanded="false">
                                            <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                            <span class="mini-click-non">Data Kelas</span>
                                        </a>
                                    <?php } ?>
                                </li>
                                <li>
                                    <?php if (isset($active_kuota)) { ?>
                                        <a class="active" title="Landing Page" href="<?= base_url() ?>dashboard/kuota_mutasi" aria-expanded="false">
                                            <span class="educate-icon educate-event icon-wrap sub-icon-mg active" aria-hidden="true"></span> <span class="mini-click-non">Kuota Mutasi</span>
                                        </a>
                                    <?php } else { ?>
                                        <a title="Landing Page" href="<?= base_url() ?>dashboard/kuota_mutasi" aria-expanded="false">
                                            <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Kuota Mutasi</span>
                                        </a>
                                    <?php } ?>
                                </li>
                                <li>

                                    <a title="Landing Page" href="<?= base_url()?>login/logout" aria-expanded="false">
                                        <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                        <span class="mini-click-non">Logout</span>
                                    </a>

                                </li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
        <!-- End Left menu area -->