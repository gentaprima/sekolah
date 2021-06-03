<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1 class="white-color">Hasil</h1>
                <ul class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Hasil</li>
                </ul>
            </div>
        </div>
    </div>
</header>

<section id="questions_page" class="questions-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title text-center">
                    <?php if ($check_jadwal != null) { ?>
                        <?php
                        $date = getDatesFromRange(date('Y-m-d'), $data_pendaftaran['jadwal']);
                        ?>
                        <?php if (count($date) > 1) { ?>
                            <?php if ($data_pendaftaran['status_pemberitahuan'] > 0) { ?>
                                <div class="alert alert-success" role="alert">
                                    <!-- A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like. -->
                                    <?= $data_pendaftaran['pemberitahuan'] ?>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                            <div class="alert alert-danger" role="alert">
                                <b>Mohon Maaf</b>, Anda telah di diskualifikasi karna tidak mengikuti tes pada jadwal yang telah ditentukan.
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <div class="alert alert-success" role="alert">
                            <!-- A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like. -->
                            <?= $data_pendaftaran['pemberitahuan'] ?>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="toggole-boxs">
                    <h3>Jadwal</h3>
                    <div>
                        <?php if ($data_pendaftaran['status_pemberitahuan'] == 0) { ?>
                            <p>Mohon maaf anda belum bisa melihat jadwal tes tertulis. <br> Silahkan tunggu hingga data anda diverifikasi oleh admin kami.</p>
                        <?php } else if ($data_pendaftaran['status_pemberitahuan'] == 1) { ?>
                            <p> <b>Selamat!</b> Anda telah lolos tahap verifikasi data. <br> Jadwal tes tertulis akan dikirimkan paling lambat 3 hari setelah verifikasi data. </p>
                        <?php } else if ($data_pendaftaran['status_pemberitahuan'] == 2) { ?>
                            <p> <b>Segera!</b> datang ke sekolah pada tanggal <b> <?= date('d F Y', strtotime($jadwal)) ?> </b> untuk mengikuti tes tertulis. <br> Jika calon siswa tidak mengikuti tes tertulis pada jadwal yang telah ditentukan maka calon siswa dianggap <b>gagal</b>.</p>
                        <?php } ?>
                    </div>
                    <h3>Hasil Tes Tertulis</h3>
                    <div>
                        <?php if($data_pendaftaran['status_pemberitahuan'] == 1){ ?>
                            <p><b>Mohon Maaf.</b> Anda tidak melihat hasil. <br> karena belum melakukan tes tertulis</p>
                        <?php }elseif ($data_pendaftaran['status_pemberitahuan'] == 2) { ?>
                            <p> <b> Mohon maaf </b> anda belum dapat melihat hasil tes tertulis. <br>Silahkan lakukan tes terlebih dahulu.</p>
                        <?php } else if ($data_pendaftaran['status_pemberitahuan'] == 3) { ?>
                            <p></p>
                        <?php } ?>
                    </div>
                    <h3>Hasil Akhir</h3>
                    <div>
                        <?php if($data_pendaftaran['status_pemberitahuan'] == 1){ ?>
                            <p><b>Mohon Maaf.</b> Anda tidak melihat hasil. <br> karena belum melakukan tes tertulis</p>
                        <?php }elseif ($data_pendaftaran['status_pemberitahuan'] == 2) { ?>
                            <p> <b> Mohon maaf </b> anda belum dapat melihat hasil akhir. <br>Silahkan lakukan tes terlebih dahulu.</p>
                        <?php } else if ($data_pendaftaran['status_pemberitahuan'] == 3) { ?>
                            <p>Anda sudah melakukan Tes Tertulis. <br>Silahkan tunggu pemberitahuan selanjutnya</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
function getDatesFromRange($start, $end, $format = 'Y-m-d')
{
    $array = array();
    $interval = new DateInterval('P1D');

    $realEnd = new DateTime($end);
    $realEnd->add($interval);

    $period = new DatePeriod(new DateTime($start), $interval, $realEnd);

    foreach ($period as $date) {
        $array[] = $date->format($format);
    }

    return $array;
}
?>
?>