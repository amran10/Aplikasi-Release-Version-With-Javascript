<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="referrer" content="always" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('images/version.png') ?>">
    <title>Release Version</title>
      <!--     Fonts and icons     -->
    <!-- CSS Files -->
    <link href="<?php echo base_url('assets2/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <!-- <link href="assets2/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" /> -->
    <!-- CSS Just for demo purpose, don't include it in your project -->

</head> 
<body>     
  <div class="wrapper">
  <div align="center">
  <div style="width: 100%;" >
    <div class="section section-navbars" style="padding-top : 30px;">
      <div id="menu-dropdown">
        <div class="row">
          <div class="col-md-12" align="center">
                 <!--  <img src="<?php echo base_url('images/index.jpg') ?>" class="kiri">
                  <img src="<?php echo base_url('images/index.jpg') ?>" class="kanan">
              
              <hr> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  <div align="center">
  <div style="width: 75%;" >
  <!-- Nav tabs -->
                <!-- <img src="<?php echo base_url('images/index.jpg') ?>" class="kiri">
                <img src="<?php echo base_url('images/index.jpg') ?>" class="kanan">-->
  <div align="left" style="padding-right: 10px;">
    <a class="btn btn-primary btn-round" href="<?php echo base_url()."index.php/c_versi/versi"; ?>">Tambah Versi</a>
    <!-- <a class="btn btn-primary btn-round" href="<?php echo base_url()."index.php/c_user"; ?>">Tampilan User</a> -->
  </div><br>
      <?php echo form_open_multipart('create_versi'); ?>
      <?php 
        if(@$persi) {
        $sj=1;
        $a=1; $cnt_versi = '';
        foreach ($persi as $show) { 
      ?> 
      <div align="left">
      <table class="table table-bordered" style="margin-top: -10px;">
        <tbody>
            <thead style="background-color: #e9ecef;">
            <tr <?php if ($cnt_versi == $show->versi) { echo "hidden" ; $a++; } else { $a=1; } $cnt_versi = $show->versi ;  ?> >
            <td width="1px;" align="center">
              </td>
              <td width="20px;" align="left">
                <h6><b><font face="Century Gothic">Versi <?php echo $show->versi;?></font></b></h6>  
              </td>
              <td  width="100px">
                <h6><b><font face="Century Gothic"><?php if($sj=='1') { ?> <img src="<?php echo base_url('images/newb.png') ?>" style="width:40px;">
                <?php } ?>Tanggal
                 <?php //echo $show->tanggal; 
                 $date = date('d F Y', strtotime($show->tanggal)); 
                 echo $date ?>
                 </b></h6></font>
              </td>
              <td width="200" height="-10" align="right">
                <a href="<?php echo site_url('c_versi/tmb_modul/'.$show->versi)?>"><img src="<?php echo base_url('images/add1211.png') ?>" style="width:30px;" border=0></a>
                <a href="<?php echo site_url('c_versi/edit1/'.$show->versi)?>"><img src="<?php echo base_url('images/editblue.png') ?>" style="width:30px;" border=0></a>
                <a href="<?php echo site_url('c_versi/hapus/'.$show->versi)?>"onclick="return confirm('Anda Yakin Menghapus Versi <?php echo $show->versi; ?> ?');"><img src="<?php echo base_url('images/deleteblue1.png') ?>" style="width:30px;" border=0></a>
              </td>
            </tr>
          </thead>
        </tbody>
      </table>
      <table style="margin-top: -10px;">
        <thead>
          <tr>
            <td style="width: 95px;" >
              <p><font style="color: white" face="Century Gothic"><?php echo $sj; ?>.</font><font face="Century Gothic"><b><?php echo $a; ?>.</b></font>
            </td>
            <td style="width: 200px; height: 10px;">
              <p><b><font face="Century Gothic">Modul </b></p></font>
            </td>
            <td style="width: 1010px;" colspan="2">
              <h6><i><font face="Century Gothic"><?php echo $show->add_modul;?></i></h6></font>
            </td>
            <td width="100" height="-100" align="right">
                <a href="<?php echo site_url('c_versi/edit/'.$show->id_modul)?>"><font size="-2px;">Edit</font>
                <img src="<?php echo base_url('images/edit_p.png') ?>" style="width:10px;" border=0></a> 
                <a href="<?php echo site_url('c_versi/hapus_modul/'.$show->id_modul)?>"onclick="return confirm('Anda Yakin Menghapus Modul <?php echo $show->add_modul; ?> ?');"><font size="-2px;">Delete</font>
                <img src="<?php echo base_url('images/dt_g.png') ?>" style="width:10px;" border=0></a>
            </td>
          </tr>
          <tr>
            <td>
              <p></p>
            </td>
            <td height="-100" style="width: 200px; height: 10px;">
              <p><b><font face="Century Gothic">Menu</b></p></font>
            </td>
            <td>
              <h6><i><font face="Century Gothic"><?php echo $show->add_menu; ?></i></h6></font>
            </td>
          </tr>
          <tr>
            <td>
              <p></p>
            </td>
            <td height="-100" style="width: 200px; height: 10px;">
              <p><b><font face="Century Gothic">Release</b></p></font>
            </td>
            <td>
              <h6><i><font face="Century Gothic"><?php echo $show->add_release; ?></i></h6></font>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  <?php $sj++; } } ?>
</div>
<!--   Core JS Files   -->
<script src="<?php echo base_url('assets2/js/core/jquery.3.2.1.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets2/js/core/popper.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets2/js/core/bootstrap.min.js') ?>" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url('assets2/js/plugins/bootstrap-switch.js') ?>"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url('assets2/js/plugins/nouislider.min.js') ?>" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<!--<script src="/assets2/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>-->
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url('assets2/js/now-ui-kit.js?v=1.1.0') ?>" type="text/javascript"></script>
<link href="<?php echo base_url('assets2/fullcalendar.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('assets2/fullcalendar.print.css') ?>" rel="stylesheet" media="print" />
<script src="<?php echo base_url('assets2/jquery/jquery-ui.custom.min.js') ?>"></script>
<script src="<?php echo base_url('assets2/fullcalendar.js') ?>"></script>
<script src="<?php echo base_url('assets2/js/bootstrap-datepicker.min.js') ?>"></script>
</html>