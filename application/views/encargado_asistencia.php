
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/factions-blanco-logo-156x61.png'); ?>" type="image/x-icon">
  <meta name="description" content="">
  <title>Encargado Nueva Mision - Legión Aegis</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/web/assets/mobirise-icons/mobirise-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/tether/tether.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-grid.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-reboot.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/socicon/css/styles.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dropdown/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/theme/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/mobirise/css/mbr-additional.css'); ?>" type="text/css">
  
  
  
</head>
<body>


<section class="engine"><a href=""></a></section><section class="mbr-section content5 cid-r1jNfk63KW mbr-parallax-background" id="content5-51">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><em>
                    Legión Aegis</em></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">Encargado</h3>
                
                
            </div>
        </div>
    </div>
</section>
<?php if($this->session->userdata('login')){ 
        if($this->session->userdata('zeus')){?>



<section class="mbr-section form4 cid-r0VWnkAAof mbr-parallax-background" id="form4-25">

    

    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="mbr-section-title align-center mbr-white pb-3 mbr-bold mbr-fonts-style display-1"><em>
                    Imagen por defecto</em></h1>
                <div class="media-content px-3 align-self-center mbr-white py-2">
                <div class="mbr-figure" style="width: 100%;">
                    <img src="https://arma3.com/assets/img/screenshots/large/arma3_screenshot_03.jpg" height="20%" width="40%">
                </div>
                </div>

    <div class="container">
        <div class="media-container-row title">
            <div class="col-12 col-md-8">
                
                    <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"><?php echo $estado ?></h3>                      


            </div>
        </div>
    </div>



                
            </div>
            <div class="col-md-6">
                <h1 class="mbr-section-title align-center mbr-white pb-3 mbr-bold mbr-fonts-style display-1"><em>
                    Nueva Misión</em></h1>
                <div>
                    <div class="icon-block pb-3">
                        
                        
                    </div>
                    
                </div>
                <div data-form-type="formoid">
                    <form class="block mbr-form" action="<?=site_url("gestion/new_mission_ingreso")?>" method="post" enctype="multipart/form-data"><input type="hidden" name="email" data-form-email="true" data-form-field="Email">
                        <div class="row">
                            <div class="col-md-6 multi-horizontal" data-for="name">
                                <input type="text" class="form-control input" name="nombre" data-form-field="Name" placeholder="Nombre De la Misión" required="" id="name-form4-25">
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="date">
                                <input type="date" class="form-control input" name="fecha" data-form-field="fecha" placeholder="Fecha" required="" id="phone-form4-25">
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="name">
                                    <select class="form-control input" name="zeus" data-form-field="zeus" placeholder="Zeus" required="" id="name-form4-25">
                                          <option value="NULL">--Zeus--</option>
                                          <?php 
                                            foreach($zeus->result() as $zeusname){ 
                                          ?>

                                                <option value="<?= $zeusname->id_usu; ?>"><?= $zeusname->nick; ?></option>


                                          <?php 
                                              } 
                                          ?>

                                    </select>



                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="phone">
                                <select class="form-control input" name="tipo" data-form-field="tipo" placeholder="Tipo" required="" id="name-form4-25">
                                          <option value="NULL">--Tipo--</option>
                                          <option value="Entrenamiento">Entrenamiento</option>
                                          <option value="Semi-Oficial">Semi-Oficial</option>
                                          <option value="Oficial">Oficial</option>


                                    </select>
                            </div><div class="col-md-6 multi-horizontal" data-for="name">
                                <input type="text" class="form-control input" name="mapa" data-form-field="mapa" placeholder="Mapa" required="" id="name-form4-25">
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="phone">
                                <input type="text" class="form-control input" name="brief" data-form-field="brief" placeholder="Briefing" required="" id="phone-form4-25">
                            </div>
                            <div class="col-md-12" data-for="message">
                                <textarea class="form-control input" name="obj" rows="10" data-form-field="obj" placeholder="Objetivos" style="resize:none" id="message-form4-25"></textarea>
                            </div>
                            <div class="col-md-12" data-for="message">
                                <h3 class="mbr-section-subtitle align-left mbr-light mbr-white pb-3 mbr-fonts-style display-5">Imagen de misión(Solo .jpg):</h3>
                                <input type="file" name="image" id="image"><br><br>
                            </div>



                            <div class="input-group-btn col-md-12" style="margin-top: 10px;"><button href="" value="Upload" type="submit" class="btn btn-form btn-danger-outline display-4">Enviar</button></div>
                        </div>
                    </form>








                </div>
            </div>
        </div>
    </div>
</section>
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





  <script src="<?php echo base_url('assets/web/assets/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/popper/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/tether/tether.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/dropdown/js/script.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/touchswipe/jquery.touch-swipe.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/parallax/jarallax.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/smoothscroll/smooth-scroll.js'); ?>"></script>
  <script src="<?php echo base_url('assets/theme/js/script.js'); ?>"></script>
  
