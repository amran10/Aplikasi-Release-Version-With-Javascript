<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="referrer" content="always" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('images/version.png') ?>">
    <title>Release Version</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.css" />
    <!-- CSS Files -->
    <link href="<?php echo base_url('assets2/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <!-- <link href="assets2/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" /> -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url('assets2/css/demo.css') ?>" rel="stylesheet" />
  <style>
    .containers {
      overflow-x: auto;
      white-space: nowrap;
      padding: 0 1px;
      text-align: left;
    }
      
    #external-events {
      float: left;
      width: 150px;
      
      }
      
    #external-events h4 {
      font-size: 16px;
      margin-top: 0;
      padding-top: 1em;
      }
      
    .external-event { /* try to mimick the look of a real event */
      margin: 10px 0;
      padding: 2px 4px;
      background: #3366CC;
      color: #fff;
      font-size: .85em;
      cursor: pointer;
      }
      
    #external-events p {
      margin: 1.5em 0;
      font-size: 11px;
      color: #666;
      }
      
    #external-events p input {
      margin: 0;
      vertical-align: middle;
      }

    #calendar {
  /*    float: right; */
      margin: 0 auto;
      width: 100%;
      background-color: #FFFFFF;
        border-radius: 6px;
        border-color: blue;
      box-shadow: 0 3px 5px #2CA8FF;
      }

    img.kiri {
        float: left;
        margin: 5px;
        width: 110px;
        height: 75px;
    }

    img.kanan {
        float: right;
        margin: 5px;
        width: 110px;
        height: 100px;
    }
    </style>

</head> 
<body>     
  <div class="wrapper">
  <div align="center">
  <div style="width: 100%;" >
    <div class="section section-navbars" style="padding-top : 30px;">
      <div id="menu-dropdown">
        <div class="row">
          <div class="col-md-12" align="center">
                 <!--  <img src="<?php echo base_url('images/wika.png') ?>" class="kiri">
                  <img src="<?php echo base_url('images/logo_bsi.png') ?>" class="kanan">
              <br>
              <h6 align="left"><b>HCIS</b><br>Human Capital Information System</h6>
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
                <!-- <img src="<?php echo base_url('images/wika.png') ?>" class="kiri">
                <img src="<?php echo base_url('images/logo_bsi.png') ?>" class="kanan">
            <br>
            <h4 align="left"><b>HCIS</b><br>Human Capital Information System</h4><br> -->

      <?php echo form_open_multipart('create_versi'); ?>
      <?php 
        if(@$wika) {
        $sj=1;
        $a=1; $cnt_versi = '';
        foreach ($wika as $show) { 
      ?> 
      <div align="left">
      <table class="table table-bordered" style="margin-top: -16px;">
        <tbody>
            <thead style="background-color: #e9ecef;">
            <tr <?php if ($cnt_versi == $show->versi) { echo "hidden" ; $a++; } else { $a=1; } $cnt_versi = $show->versi ;  ?> >
              <td width="12%" align="center">
                <h6><b><font face="Century Gothic">Versi <?php echo $show->versi;?></font> <?php if($sj=='1') { ?> <img src="<?php echo base_url('images/newora.png') ?>" style="width:30px;"></b></h6> 
                <?php } ?>
              </td>
              <td width="50%" align="left">
                <h6><b><font face="Century Gothic">Tanggal
                 <?php //echo $show->tanggal; 
                 $date = date('d F Y', strtotime($show->tanggal)); 
                 echo $date ?>
                 </b></h6></font>
              </td>
            </tr>
          </thead>
        </tbody>
      </table>
      <table class="table table-bordered" style="margin-top: -17px;">
        <thead>
          <tr>
            <td>
              <p><font style="color: white" face="Century Gothic"><?php echo $sj; ?>.</font><font face="Century Gothic"><b><?php echo $a; ?>.</b></font>
            </td>
            <td style="width: 160px;">
              <p><b><font face="Century Gothic">Modul </b></p></font>
            </td>
            <td>
              <h6><i><font face="Century Gothic"><?php echo $show->add_modul;?></i></h6></font>
            </td>
          </tr>
          <tr>
            <td style="width: 36px;">
              <p></p>
            </td>
            <td style="width: 160px;">
              <p><b><font face="Century Gothic">Menu</b></p></font>
            </td>
            <td>
              <h6><i><font face="Century Gothic"><?php echo $show->add_menu; ?></i></h6></font>
            </td>
          </tr>
          <tr>
            <td style="width: 36px;">
              <p></p>
            </td>
            <td style="width: 160px;">
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