<div class="footer-copyright-area fixed-footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="footer-copy-right">
          <p>Copyright © <?= date('Y') ?>. All rights reserved. SMPN 148 Official</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- jquery
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/bootstrap.min.js"></script>
<!-- wow JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/wow.min.js"></script>
<!-- price-slider JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/jquery-price-slider.js"></script>
<!-- meanmenu JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/owl.carousel.min.js"></script>
<!-- sticky JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/jquery.sticky.js"></script>
<!-- scrollUp JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/jquery.scrollUp.min.js"></script>
<!-- counterup JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/counterup/jquery.counterup.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/counterup/waypoints.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/metisMenu/metisMenu.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/metisMenu/metisMenu-active.js"></script>
<!-- morrisjs JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/morrisjs/raphael-min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/morrisjs/morris.js"></script>
<script src="<?= base_url() ?>assets/admin/js/morrisjs/morris-active.js"></script>
<!-- morrisjs JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/sparkline/jquery.sparkline.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/sparkline/jquery.charts-sparkline.js"></script>
<script src="<?= base_url() ?>assets/admin/js/sparkline/sparkline-active.js"></script>
<!-- calendar JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/calendar/moment.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/calendar/fullcalendar.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/calendar/fullcalendar-active.js"></script>
<!-- plugins JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/plugins.js"></script>
<!-- main JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/main.js"></script>
<!-- tawk chat JS
		============================================ -->
<!-- <script src="<?= base_url() ?>assets/admin/js/tawk-chat.js"></script> -->
<script src="<?= base_url() ?>assets/admin/js/vendor/modernizr-2.8.3.min.js"></script>
<!-- data table JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/data-table/bootstrap-table.js"></script>
<script src="<?= base_url() ?>assets/admin/js/data-table/tableExport.js"></script>
<script src="<?= base_url() ?>assets/admin/js/data-table/data-table-active.js"></script>
<script src="<?= base_url() ?>assets/admin/js/data-table/bootstrap-table-editable.js"></script>
<script src="<?= base_url() ?>assets/admin/js/data-table/bootstrap-editable.js"></script>
<script src="<?= base_url() ?>assets/admin/js/data-table/bootstrap-table-resizable.js"></script>
<script src="<?= base_url() ?>assets/admin/js/data-table/colResizable-1.5.source.js"></script>
<script src="<?= base_url() ?>assets/admin/js/data-table/bootstrap-table-export.js"></script>
<!--  editable JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/editable/jquery.mockjax.js"></script>
<script src="<?= base_url() ?>assets/admin/js/editable/mock-active.js"></script>
<script src="<?= base_url() ?>assets/admin/js/editable/select2.js"></script>
<script src="<?= base_url() ?>assets/admin/js/editable/moment.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/editable/bootstrap-datetimepicker.js"></script>
<script src="<?= base_url() ?>assets/admin/js/editable/bootstrap-editable.js"></script>
<script src="<?= base_url() ?>assets/admin/js/editable/xediable-active.js"></script>
<!-- Chart JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/chart/jquery.peity.min.js"></script>
<script src="<?= base_url() ?>assets/admin/js/peity/peity-active.js"></script>
<!-- tab JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/tab.js"></script>
<!-- plugins JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/plugins.js"></script>
<!-- main JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/js/main.js"></script>
<!-- tawk chat JS
		============================================ -->
<script src="<?= base_url() ?>assets/admin/kuota.js"></script>
<script src="<?= base_url() ?>assets/admin/kelas.js"></script>
<script src="<?= base_url() ?>assets/admin/siswa.js"></script>
<script src="<?= base_url() ?>assets/alert.js"></script>
<script>
  pesan = document.getElementById('pesan');
  if (pesan != null) {
    swal({
      title: document.getElementById('title').innerHTML,
      text: pesan.innerHTML,
      icon: document.getElementById('type').innerHTML,
    });
  }
</script>
<script>
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<!-- <script src="<?= base_url() ?>assets/admin/js/tawk-chat.js"></script> -->
</body>

</html>