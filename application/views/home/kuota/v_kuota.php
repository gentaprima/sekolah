<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1 class="white-color">Kuota Mutasi</h1>
                <ul class="breadcrumb">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Kuota Mutasi</li>
                </ul>
            </div>
        </div>
    </div>
</header>

<section class="section-padding price-area" id="price_page">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="page-title text-center">
              <h5 class="title">Kuota Mutasi</h5>
              <h3 class="dark-color">Berikut Kuota Mutasi Semester ini</h3>
              <div class="space-60"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php foreach($data_kuota as $row){ ?>
          <div class="col-xs-12 col-sm-4">
            <div class="price-box">
              <div class="price-header">
                <div class="price-icon">
                  <span class="lnr lnr-rocket"></span>
                </div>
                <h4 class="upper"><?= $row['nama_kelas'] ?></h4>
              </div>
              <div class="price-body">
                <ul>
                <li>Kuota yang dibutuhkan</li>
                  <li>untuk <?= $row['nama_kelas'] ?></li>
                  <li>yaitu <b><?= $row['jumlah_kuota'] ?> Siswa</b></li>
                </ul>
              </div>
              <!-- <div class="price-rate">
                <sup>&#36;</sup> <span class="rate">0</span>
                <small>/Month</small>
              </div> -->
              <div class="price-footer">
                <a href="<?= base_url() ?>home/pendaftaran" class="bttn-white">Daftar Sekarang</a>
              </div>
            </div>
            <div class="space-30 hidden visible-xs"></div>
          </div>
          <?php } ?>
          <!-- <div class="col-xs-12 col-sm-4">
            <div class="price-box">
              <div class="price-header">
                <div class="price-icon">
                  <span class="lnr lnr-diamond"></span>
                </div>
                <h4 class="upper">Kelas 2</h4>
              </div>
              <div class="price-body">
                <ul>
                <li>Kuota yang dibutuhkan</li>
                  <li>untuk kelas 2</li>
                  <li>yaitu <b>100 Siswa</b></li>
                </ul>
              </div>
              <div class="price-rate">
                <sup>&#36;</sup> <span class="rate">49</span>
                <small>/Month</small>
              </div>
              <div class="price-footer">
                <a href="<?= base_url() ?>home/pendaftaran" class="bttn-white">Daftar Sekarang</a>
              </div>
            </div>
            <div class="space-30 hidden visible-xs"></div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="price-box">
              <div class="price-header">
                <div class="price-icon">
                  <span class="lnr lnr-pie-chart"></span>
                </div>
                <h4 class="upper">Kelas 3</h4>
              </div>
              <div class="price-body">
                <ul>
                  <li>Kuota yang dibutuhkan</li>
                  <li>untuk kelas 3</li>
                  <li>yaitu <b>100 Siswa</b></li>
                </ul>
              </div>
              <div class="price-rate">
                <sup>&#36;</sup> <span class="rate">99</span>
                <small>/Month</small>
              </div>
              <div class="price-footer">
                <a href="<?= base_url() ?>home/pendaftaran" class="bttn-white">Daftar Sekarang</a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>