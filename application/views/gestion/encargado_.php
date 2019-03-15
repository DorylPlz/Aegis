
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/factions-blanco-logo-156x61.png'); ?>" type="image/x-icon">
  <meta name="description" content="">
  <title>Encargado Inicio - Legión Aegis</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/web/assets/mobirise-icons/mobirise-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/tether/tether.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-grid.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-reboot.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dropdown/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/socicon/css/styles.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/datatables/data-tables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/theme/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/gallery/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/mobirise/css/mbr-additional.css'); ?>" type="text/css">


   <script src="<?php echo base_url('assets/web/assets/jquery/JQuery.js'); ?>"></script>
  <script src="<?php echo base_url('assets/popper/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/tether/tether.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/smoothscroll/smooth-scroll.js'); ?>"></script>
  <script src="<?php echo base_url('assets/dropdown/js/script.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/touchswipe/jquery.touch-swipe.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/parallax/jarallax.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables/jquery.data-tables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables/data-tables.bootstrap4.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/mbr-switch-arrow/mbr-switch-arrow.js'); ?>"></script>
  <script src="<?php echo base_url('assets/masonry/masonry.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/imagesloaded/imagesloaded.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vimeoplayer/jquery.mb.vimeo_player.js'); ?>"></script>
  <script src="<?php echo base_url('assets/mbr-flip-card/mbr-flip-card.js'); ?>"></script>
  <script src="<?php echo base_url('assets/theme/js/script.js'); ?>"></script>
  <script src="<?php echo base_url('assets/gallery/player.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/gallery/script.js'); ?>"></script>
  <script src="<?php echo base_url('assets/slidervideo/script.js'); ?>"></script>
  

  
  
</head>
<body>

<section class="engine"><a href=""></a></section><section class="mbr-section content5 cid-r1jFHrgcp8 mbr-parallax-background" id="content5-4q">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><em>
                    Legión Aegis</em></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">Inicio</h3>
                
                
            </div>
        </div>
    </div>
</section>
<?php if($this->session->userdata('login')){ 
        if($this->session->userdata('zeus')){?>

<?php if($usuNuevoN != 0){ ?>
<section class="mbr-section article content10 cid-r1joize4Jt" id="content10-4g">

  <div class="pos-f-t">
    
  <div class="collapse" id="navbarToggleExternalContent">
    <?php foreach ($usuNuevo->result() as $row){ ?>
    <div class="">
      <form action="<?=site_url("gestion/aceptar_Usu")?>" method="post">
      <h5 class="text-white h4">Nueva solicitud: <?php echo $row->nick; ?></h5>
      <span class="text-muted">

        <div class="section-text align-center mbr-white mbr-fonts-style display-5" style="text-align: left;">
               <ul>
                
                  <li>Mail:<?php echo $row->nick; ?></li>
                  <li>Razón:<?php echo $row->razon; ?></li>
                  <li>Steam:<?php echo $row->steam; ?></li>
                <input type="hidden" name="id" value="<?php echo $row->id_usu; ?>"/>
                </ul>

                <button id="submit" name="submit" type="submit" value ="1" class="btn btn-form btn-danger-outline display-4" style="padding:10px 30px; border-radius:100px;" >Aceptar</button>
                <button id="submit" name="submit" type="submit" value ="4" class="btn btn-black-outline display-4" style="padding:10px 30px; border-radius:100px;" >Rechazar</button>  

        </div>
        
        <hr style="background-color: #77f40b;"/>

      </span>
    </form>
    </div>
    <?php } ?>
  </div>
<hr/>

  <nav class="navbar navbar-dark bg-dark">
    <button style="color:#77f40b; border-color: #77f40b;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> 
      <span class="navbar-toggler-icon"></span>
    </button><h5 class="text-white h4" style="align-content: left;">Solicitudes: <?= $usuNuevoN ?></h5>
  </nav>
</div>

</section>
<?php } ?>
<section class="mbr-section content5 cid-r1k69ey1GT mbr-parallax-background" id="content5-5i">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><em>
                    Ultima Semana</em></h2>
                
                
                
            </div>
        </div>
    </div>
</section>

<section class="features15 cid-r1jHYB0chU" id="features15-4w">

    

    
    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2"><em><strong>
            ULTIMAS OPERACIONES</strong></em></h2>
        

        <div class="media-container-row container pt-5 mt-2">



        <?php foreach ($last_missions->result() as $row){ ?>
            <div class="col-12 col-md-6 mb-4 col-lg-4">
                
                <div class="card flip-card p-5 align-center">
                    <div class="card-front card_cont">
                        <a href="<?=site_url("main/mision?mision=")?><?php echo $row->id_mision; ?>"><img src="<?php echo base_url('assets/images/mission/')?><?php echo "/" ?><?php echo $row->img_mision; ?>" alt="" title=""></a>
                    </div>
                    <div class="card_back card_cont">
                        <h4 class="card-title py-2 mbr-fonts-style display-5"><a href="<?=site_url("main/mision?mision=")?><?php echo $row->id_mision; ?>" class="text-white"><strong><em>
                            <?php echo $row->nombre; ?></em></strong></a></h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $row->fecha; ?></p>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $row->tipo; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>


            <div class="col-12 col-md-6 mb-4 col-lg-3">
                <div class="card flip-card p-5 align-center">
                    <div class="card-front card_cont">
                        <a href="<?=site_url("gestion/new_mission")?>"><img src="<?php echo base_url('assets/images/2b-2-300x300.png'); ?>" alt="" title=""></a>
                    </div>
                    <div class="card_back card_cont">
                        <h4 class="card-title py-2 mbr-fonts-style display-5"><a href="<?=site_url("gestion/new_mission")?>" class="text-white"><strong><em>
                            Nueva mision</em></strong></a></h4>
                    </div>
                </div> 
            </div>


            
        </div>
</div></section>

<section class="section-table cid-r1jI6wEdyr mbr-parallax-background" id="table1-4x">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2" style="color: #efefef;"><strong><em>
          Asistencia</em></strong></h2>
      
      <div class="table-wrapper">


        <div class="container scroll">
          <table id="escalation" class="table datatables" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
              <th style="color: #efefef;" class="head-item mbr-fonts-style display-7"><em>
                      Nombre</em></th>
              <th style="color: #efefef;" class="head-item mbr-fonts-style display-7"><em>
                      Fecha</em></th>
              <th style="color: #efefef;" class="head-item mbr-fonts-style display-7"><em>
                      Tipo</em></th>
              <th style="color: #efefef;" class="head-item mbr-fonts-style display-7"><em>
                      Zeus</em></th>
              <th style="color: #efefef;" class="head-item mbr-fonts-style display-7"><em>
                      Asistencia</em></th></tr>
            </thead>

            <tbody>
              
              
              
            <?php foreach ($misiones->result() as $row){ ?>
            <tr>
              <td class="body-item mbr-fonts-style display-7"><a href="<?=site_url("main/mision?mision=")?><?php echo $row->id_mision; ?>"><?php echo $row->nombre; ?></a></td>
              <td class="body-item mbr-fonts-style display-7"><?php echo $row->fecha; ?></td>
              <td class="body-item mbr-fonts-style display-7"><?php echo $row->tipo; ?></td>
              <td class="body-item mbr-fonts-style display-7"><?php echo $row->nick; ?></td>
              <td class="body-item mbr-fonts-style display-7"><a href="<?=site_url("gestion/asistencia?mision=")?><?php echo $row->id_mision; ?>">Modificar Asistencia</a></td>
            </tr>
            <?php } ?>
                
                
                </tr></tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">..</span>
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

<section class="toggle1 cid-r1jTquEisq" id="toggle1-5f">

    

    
        <div class="container">
            <div class="media-container-row">
                <div class="col-12 col-md-8">
                    <div class="section-head text-center space30">
                       <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2"><strong><em>
                            Integrantes</em></strong></h2>
                    </div>
                    <div class="clearfix"></div>
                    
                    <div id="bootstrap-toggle" class="toggle-panel accordionStyles tab-content">
                        

                     <?php foreach ($peloton_1->result() as $row){ ?>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-parent="#accordion" data-core="" href="#collapse1_44" aria-expanded="false" aria-controls="collapse1">
                                    <h4 class="mbr-fonts-style display-5"><?php echo $row->pel_name; ?></h4>
                                </a>
                            </div>
                            <div id="collapse1_44" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body p-4">
                                                                                        <table class="table isSearch" cellspacing="0" style="font-c">
                                                        <thead>
                                                            <tr class="table-heads ">
                                
                                                                
                                                                <th class="head-item mbr-fonts-style display-7"><em>
                                                                      <font color=#efefef>Nombre</font></em></th>
                                                                
                                                                <th class="head-item mbr-fonts-style display-7"><em>
                                                                      <font color=#efefef>Estado</font></em></th>

                                                                <th class="head-item mbr-fonts-style display-7"><em>
                                                                      <font color=#efefef>Rango</font></em></th>

                                                                <th class="head-item mbr-fonts-style display-7"><em>
                                                                      <font color=#efefef>Fecha de ingreso</font></em></th>
                                                                
                                                                <th class="head-item mbr-fonts-style display-7" style="text-align:center;"><em>
                                                                      <font color=#efefef>Editar</font></em></th>
                                                            </tr>
                                                        </thead>




                                                        <tbody>
                                                        <?php foreach ($get1Pel->result() as $row){ ?>
                                                            <tr> 
                                                                <td class="body-item mbr-fonts-style display-7"><font color=#efefef><a href="<?php echo site_url('');?>/user/profile?nombre=<?php echo $row->nick; ?>&id=<?php echo $row->id_usu; ?>"><?php echo $row->nick; ?></a></font></td>


                                                                <td class="body-item mbr-fonts-style display-7"><font color=#efefef>
                                                                <?php 
                                                                  if($row->estado==1){
                                                                      echo "Activo";
                                                                  }elseif($row->estado==2){
                                                                      echo "Baneado";
                                                                  }elseif($row->estado==3){
                                                                      echo "Inactivo";
                                                                  }
                                                                  ?>
                                                                   
                                                                 </font></td>


                                                                <td class="body-item mbr-fonts-style display-7"><font color=#efefef><?php echo $row->rango_name; ?></font></td>
                                                                <td class="body-item mbr-fonts-style display-7"><font color=#efefef><?php echo $row->fecha; ?></font></td>
                                                                <td class="body-item mbr-fonts-style display-7"><div class="mbr-section-btn align-center"><a class="btn btn-danger-outline display-4" href="<?=site_url("user/modificar_Perfil?nick=")?><?php echo $row->nick; echo "&profile="; echo $row->id_usu;?>">Editar</a></div></td>
                                                            </tr>
                                                        <?php } ?>
                                                            
                                                            
                                                        </tbody>
                                                    </table>
                                </div>
                            </div>
                        </div> <?php } ?>
                      


                <!--      <?php foreach ($peloton_2->result() as $row){ ?>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-parent="#accordion" data-core="" href="#collapse2_44" aria-expanded="false" aria-controls="collapse2">
                                    <h4 class="mbr-fonts-style display-5"><?php echo $row->pel_name; ?></h4>
                                </a>

                            </div>
                            <div id="collapse2_44" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body p-4">
                                                                                        <table class="table isSearch" cellspacing="0" style="font-c">
                                                        <thead>
                                                            <tr class="table-heads ">
                                
                                                                
                                                                <th class="head-item mbr-fonts-style display-7"><em>
                                                                      <font color=#efefef>Nombre</font></em></th>
                                                                
                                                                <th class="head-item mbr-fonts-style display-7"><em>
                                                                      <font color=#efefef>Rango</font></em></th>

                                                                <th class="head-item mbr-fonts-style display-7"><em>
                                                                      <font color=#efefef>Fecha de ingreso</font></em></th>
                                                                
                                                                <th class="head-item mbr-fonts-style display-7" style="text-align:center;"><em>
                                                                      <font color=#efefef>Editar</font></em></th>
                                                            </tr>
                                                        </thead>




                                                        <tbody>
                                                        
                                                            <?php foreach ($get2Pel->result() as $row){ ?>
                                                            <tr> 
                                                                <td class="body-item mbr-fonts-style display-7"><font color=#efefef><a href="<?php echo site_url('');?>user/profile?nombre=<?php echo $row->nick; ?>&id=<?php echo $row->id_usu; ?>"><?php echo $row->nick; ?></a></font></td>
                                                                <td class="body-item mbr-fonts-style display-7"><font color=#efefef><?php echo $row->rango_name; ?></font></td>
                                                                <td class="body-item mbr-fonts-style display-7"><font color=#efefef><?php echo $row->fecha; ?></font></td>
                                                                <td class="body-item mbr-fonts-style display-7"><div class="mbr-section-btn align-center"><a class="btn btn-danger-outline display-4" href="<?=site_url("user/modificar_Perfil?nick=")?><?php echo $row->nick; echo "&profile="; echo $row->id_usu;?>">Editar</a></div></td>
                                                            </tr>
                                                        <?php } ?>
                                                            
                                                            
                                                            
                                                        </tbody>
                                                    </table>
                                </div>
                            </div>
                        </div><?php } ?>

                        <?php foreach ($peloton_3->result() as $row){ ?>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree">
                                <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-parent="#accordion" data-core="" href="#collapse3_44" aria-expanded="false" aria-controls="collapse3">
                                    <h4 class="mbr-fonts-style display-5"><?php echo $row->pel_name; ?></h4>
                                </a>
                            </div>
                            <div id="collapse3_44" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body p-4">
                                                                                        <table class="table isSearch" cellspacing="0" style="font-c">
                                                        <thead>
                                                            <tr class="table-heads ">
                                
                                                                
                                                                <th class="head-item mbr-fonts-style display-7"><em>
                                                                      <font color=#efefef>Nombre</font></em></th>
                                                                
                                                                <th class="head-item mbr-fonts-style display-7"><em>
                                                                      <font color=#efefef>Rango</font></em></th>

                                                                <th class="head-item mbr-fonts-style display-7"><em>
                                                                      <font color=#efefef>Fecha de ingreso</font></em></th>
                                                                
                                                                <th class="head-item mbr-fonts-style display-7" style="text-align:center;"><em>
                                                                      <font color=#efefef>Editar</font></em></th>
                                                            </tr>
                                                        </thead>




                                                        <tbody>
                                                        
                                                            <?php foreach ($get3Pel->result() as $row){ ?>
                                                            <tr> 
                                                                <td class="body-item mbr-fonts-style display-7"><font color=#efefef><a href="<?php echo site_url('');?>user/profile?nombre=<?php echo $row->nick; ?>&id=<?php echo $row->id_usu; ?>"><?php echo $row->nick; ?></a></font></td>
                                                                <td class="body-item mbr-fonts-style display-7"><font color=#efefef><?php echo $row->rango_name; ?></font></td>
                                                                <td class="body-item mbr-fonts-style display-7"><font color=#efefef><?php echo $row->fecha; ?></font></td>
                                                                <td class="body-item mbr-fonts-style display-7"><div class="mbr-section-btn align-center"><a class="btn btn-danger-outline display-4" href="<?=site_url("user/modificar_Perfil?nick=")?><?php echo $row->nick; echo "&profile="; echo $row->id_usu;?>">Editar</a></div></td>
                                                            </tr>
                                                        <?php } ?>
                                                            
                                                            
                                                            
                                                        </tbody>
                                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        -->
                        
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
