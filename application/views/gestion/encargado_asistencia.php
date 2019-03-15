
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/factions-blanco-logo-156x61.png'); ?>" type="image/x-icon">
  <meta name="description" content="">
  <title>Asistencia día <?php foreach ($dataMision->result_array() as $row){ echo $row['fecha']; }?>- Legión Aegis</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/web/assets/mobirise-icons/mobirise-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/tether/tether.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-grid.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-reboot.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/socicon/css/styles.css'); ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/datatables/data-tables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dropdown/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/theme/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/mobirise/css/mbr-additional.css'); ?>" type="text/css">
  
  <style>
  .custom-checkbox {
  min-height: 1rem;
  padding-left: 0;
  margin-right: 0;
  cursor: pointer; 
}
  .custom-checkbox .custom-control-indicator {
    content: "";
    display: inline-block;
    position: relative;
    width: 30px;
    height: 10px;
    background-color: #818181;
    border-radius: 15px;
    margin-right: 10px;
    -webkit-transition: background .3s ease;
    transition: background .3s ease;
    vertical-align: middle;
    margin: 0 16px;
    box-shadow: none; 
  }
    .custom-checkbox .custom-control-indicator:after {
      content: "";
      position: absolute;
      display: inline-block;
      width: 18px;
      height: 18px;
      background-color: #f1f1f1;
      border-radius: 21px;
      box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
      left: -2px;
      top: -4px;
      -webkit-transition: left .3s ease, background .3s ease, box-shadow .1s ease;
      transition: left .3s ease, background .3s ease, box-shadow .1s ease; 
    }
  .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator {
    background-color: #84c7c1;
    background-image: none;
    box-shadow: none !important; 
  }
    .custom-checkbox .custom-control-input:checked ~ .custom-control-indicator:after {
      background-color: #84c7c1;
      left: 15px; 
    }
  .custom-checkbox .custom-control-input:focus ~ .custom-control-indicator {
    box-shadow: none !important; 
  }
</style>
  
</head>
<body>


<section class="engine"><a href="">free website builder</a></section><section class="mbr-section content5 cid-r1jBEbzJZd mbr-parallax-background" id="content5-4l">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><em>
                    Legión Aegis</em></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">Asistencia</h3>
                
                
            </div>
        </div>
    </div>
</section>
<?php if($this->session->userdata('login')){ 
        if($this->session->userdata('zeus')){?>

<form action="<?=site_url("gestion/ingresar_asistencia")?>" method="post">
<section class="section-table cid-r1jBOuC7zx mbr-parallax-background" id="table1-4n">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
        <?php foreach ($dataMision->result_array() as $row){ ?>
          Asistencia día <?php echo $row['fecha'];?></em></strong></h2>
         <input type="hidden" name="id_mision" value="<?php echo $row['id_mision'];?>"/>
         <input type="hidden" name="tipo" value="<?php echo $row['tipo'];?>"/>
        <?php } ?>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7"></label>
                  <!--<input class="form-control input-sm" disabled="">-->
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">

          
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7"><em>
                      <font color=#efefef>Asistencia</font></em></th>
              <th class="head-item mbr-fonts-style display-7"><em>
                      <font color=#efefef>Justificado</font></em></th>
              <th class="head-item mbr-fonts-style display-7"><em>
                      <font color=#efefef>Nombre</font></em></th>
              
              <th class="head-item mbr-fonts-style display-7"><em>
                      <font color=#efefef>Peloton</font></em></th>
              <th class="head-item mbr-fonts-style display-7"><em>
                      <font color=#efefef>Steam</font></em></th>
              </tr>
            </thead>

            <tbody>
              
              
             <?php 
             $i = 0;

             foreach ($userData->result_array() as $row){ 
              
              $i++;
              ?>

            <tr> 
              <td>
                  <label class="custom-control custom-checkbox">
                      <input type="checkbox" name="asistente<?php echo $i; ?>" class="custom-control-input" value="1">
                      <input type="hidden" name="id_usu<?php echo $i; ?>" value="<?php echo $row['id_usu'];?>"/>
                      <span class="custom-control-indicator"></span>
                  </label>
              </td>
              <td>
                  <label class="custom-control custom-checkbox">
                      <input type="checkbox" name="justificacion<?php echo $i; ?>" class="custom-control-input" value="2">
                      <span class="custom-control-indicator"></span>
                  </label>
              </td>
              <td class="body-item mbr-fonts-style display-7"><?php echo $row['abrev'];?><?php echo "." ?><?php echo $row['nick'];?></td>
              
              <td class="body-item mbr-fonts-style display-7"><?php echo $row['pel_name'];?></td>
              <td class="body-item mbr-fonts-style display-7"><a href="<?php echo $row['steam'];?>">Steam</a></td>
              
              
            </tr>
             
             <?php } ?>


          </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore"></span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter"></span>
                <span class="infoFilteredBefore"></span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"></span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>


    </div>
</section>

<section class="mbr-section content8 cid-r1jCMh3Arr" id="content8-4o">

    

    <div class="container">
        <div class="media-container-row title">
            <div class="col-12 col-md-8">
                <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-danger-outline display-4" >Enviar</button></span>
            </div>
        </div>
    </div>
</section>
</form>
<?php } }else{ ?>
<section class="mbr-section article content10 cid-r1joize4Jt" id="content10-4g">

  <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-1">
      <h5 class="text-white h4"></h5>
      <span class="text-muted">

        <div class="section-text align-center mbr-white mbr-fonts-style display-5" style="text-align: left;">
               <h1></h1>

        </div>
        
        <hr style="background-color: #77f40b;"/>

      </span>
    </div>
  </div>

</div>


</section>

<?php } ?>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
