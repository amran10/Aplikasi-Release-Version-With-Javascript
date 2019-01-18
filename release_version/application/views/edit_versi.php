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

    * {

    .border-radius(0) !important;
    }

    #field {
        margin-bottom:20px;
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
  <div style="width: 85%;" >
  <!-- Nav tabs -->
                <img src="<?php echo base_url('images/wika.png') ?>" class="kiri">
                <img src="<?php echo base_url('images/logo_bsi.png') ?>" class="kanan">
            <br>
            <h4 align="left"><b>HCIS</b><br>Human Capital Information System</h4><br>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <?php
  if(isset($data_cek))
  {
      foreach($data_cek as $row)
      {
      $versi = $row->versi;
  ?>
  <?php echo form_open_multipart('c_wika/simpanedit1/'.$versi)?>
   <div class="col-xs-12">
        <div class="col-md-12" >
          <div class="form-group">
            <div align="left" >
              Versi
            </div>   
          <div>
              <input id="versi" name="versi" type="text" value="<?php echo $row->versi; ?>" placeholder="0.0.0" class="form-control input-md">
            </div>
          </div>
          <div class="form-group">
            <div align="left" >
              Tanggal
            </div>   
          <div >
              <input readonly="readonly" id="" name="" type="text" value="<?php echo $row->tanggal; ?>" placeholder="" class="form-control input-md">
            </div>
          </div>
      </div>
    </div>
    <!-- <div class="col-xs-12">
        <div class="col-md-12" > -->
            <!-- <h3> Actions</h3> -->
             <!--  <div id="field">
                <div id="field0"> -->
                
                  <!-- Text input-->
               <!--    <div class="form-group">
                    <div align="left" for="action_id">
                      Modul
                    </div>   
                  <div>
                     <select id="add_modul" name="add_modul" class="form-control">
                            <option value="<?php echo $row->add_modul; ?>"></option>
                            <option value="OD">OD</option>
                            <option value="PA">PA</option>
                            <option value="ESS">ESS</option>
                            <option value="PFM">PFM</option>
                            <option value="Talent">Talent</option>
                            <option value="Training">Training</option>
                            <option value="MPP">MPP</option>
                            <option value="Rekrut">Rekrut</option>
                            <option value="Training">Training</option>
                            <option value="Payroll">Payroll</option>
                      </select>
                    </div>
                  </div> -->
                  <!-- Text input-->
                  <!-- <div class="form-group">
                    <div align="left" for="action_name">
                      Menu
                    </div>  
                  <div>
                      <input id="add_menu" name="add_menu" type="text" value="<?php echo $row->add_menu; ?>" placeholder="" class="form-control input-md">
                    </div>
                  </div> -->
                  <!-- File Button --> 
                  <!-- <div class="form-group">
                    <div align="left" for="action_json">
                      Release
                    </div> 
                  <div>
                      <input id="add_release" name="add_release" type="text" value="<?php echo $row->add_release; ?>" placeholder="" class="form-control input-md"> 
                    </div>
                  </div>
                </div> -->
                <!-- Button -->
              <!--   <div class="form-group">
                  <div class="col-md-4">
                    <button id="add-more" name="add-more" class="btn btn-primary">Add More</button>
                  </div>
                </div>
              </div>
            </div> -->
          <div class="col-md-12" align="center" style="padding-right:30px;">
            <a class="btn btn-primary btn-round" href="<?php echo base_url()."index.php/c_wika/create_versi"; ?>">Kembali</a>
          <button class="btn btn-primary btn-round" type="submit" name='submit' value='submit' ">Submit</button>
        </div>
      </div>
      </form>

  <?php } } ?>

<script language="javascript">
$(document).ready(function () {
    //@naresh action dynamic childs
    var next = 0;
    $("#add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = ' <div id="field'+ next +'" name="field'+ next +'"><!-- Text input Modul--><div class="form-group"> <div align="left" for="action_id">Modul</div> <div>  <select id="add_modul[]" name="add_modul" class="form-control"> <option value="<?php echo $row->add_modul; ?>"></option> <option value="OD">OD</option><option value="PA">PA</option><option value="ESS">ESS</option><option value="PFM">PFM</option><option value="Talent">Talent</option><option value="Training">Training</option><option value="MPP">MPP</option><option value="Rekrut">Rekrut</option><option value="Training">Training</option><option value="Payroll">Payroll</option></select> </div></div> <!-- Text input Menu_versi--><div class="form-group"> <div align="left" for="action_name">Menu</div><div> <input id="add_menu" name="add_menu[]" type="text" value="<?php echo $row->add_menu; ?>" placeholder="" class="form-control input-md"> </div></div><!-- File Inputan Release --> <div class="form-group"> <div align="left" for="action_json">Release</div> <div> <input id="add_release" name="add_release[]" type="text" value="<?php echo $row->add_release; ?>" placeholder="" class="form-control input-md"> </div></div></div>';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });

});
 
</script>



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