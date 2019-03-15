
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/factions-blanco-logo-156x61.png'); ?>" type="image/x-icon">
  <meta name="description" content="">
  <title>Perfil - <?php
                                                                    foreach ($userData->result_array() as $row){
                                                                        echo $row['nick'];
                                                                    }
                                                                    ?></title>
  <link rel="stylesheet" href="<?php echo base_url('assets/web/assets/mobirise-icons/mobirise-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/tether/tether.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-grid.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-reboot.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/socicon/css/styles.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/datatables/data-tables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dropdown/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/theme/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/mobirise/css/mbr-additional.css'); ?>" type="text/css">
  
  
  
</head>
<body>


<section class="engine"><a href=""></a></section><section class="mbr-section content5 cid-r11UZti5F6 mbr-parallax-background" id="content5-2i">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><em>
                                                                   <?php
                                                                    foreach ($userData->result_array() as $row){
                                                                        echo $row['abrev'];
                                                                    }
                                                                    ?>
                                                                    .
                                                                    <?php
                                                                    foreach ($userData->result_array() as $row){
                                                                        echo $row['nick'];
                                                                    }
                                                                    ?>


                </em></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"><em><?php
                                                                    foreach ($userData->result_array() as $row){
                                                                        echo $row['usu_desc'];
                                                                    }
                                                                    ?></em></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="features11 cid-r1j24Xf6uQ mbr-parallax-background" id="features11-3f">



    
<?php foreach ($userData->result_array() as $row){ ?>
    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 50%;">
                    <img src="<?php clearstatcache(); echo base_url('assets/images/profile' ); ?><?php echo "/" ?><?php echo $row['img_perfil']; ?>" height="20%" width="40%">
                    <hr/>
                    <br/>
                    <?php
                          foreach ($userData->result_array() as $row){
                             if($this->session->userdata('id')==$row['id_usu']){ ?>
                                <div class="container">
                                    <div class="media-container-row title">
                                        <div class="col-12 col-md-8">
                                            <span class="input-group-btn"><a style="border-radius: 100px;" href="<?=site_url("user/modificar_Perfil?profile=")?><?php echo $row['id_usu'] ?><?php echo "&nick=" ?><?php echo $row['nick'] ?>" class="btn btn-form btn-danger-outline display-4" >Modificar Perfil</a></span>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                          }
                    ?>
                    <hr>
                                <div class="container">
                                    <div class="media-container-row title">
                                        <div class="col-12 col-md-8">
                                            <h4 class="card-title mbr-fonts-style display-7"><strong><em></em></strong></h4>
                                        </div>
                                    </div>
                                </div>
                </div>
                <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2"><strong><em>
                        Hoja de servicio</em></strong></h2>
                    <div class="mbr-section-text">
                      <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
                        Fecha de ingreso: <?php echo $row['fecha']; ?> <br>
                        Rango: <?php echo $row['rango_name'];?><br>
                        Compañía: <?php echo $row['com_name'];?><br>
                        Peloton: <?php echo $row['pel_name']; ?><br>
                        Asistencia oficiales: <?= $porcentajeAsist ?>%<br><br>
                      </p>
                    </div>
            <?php } ?> 

                    <div class="block-content">
                        <div class="card p-3 pr-3">
                            <div class="media">
                                     
                                <div class="media-body">
                                    <h4 class="card-title mbr-fonts-style display-7"><strong><em>
                                        Especialidades</em></strong></h4>
                                </div>
                            </div>                

                            <div class="card-box">
                                <p class="block-text mbr-fonts-style display-7">


                                  <ul>
                                    <?php if($espList->result_array() != null){
                                    foreach ($espList->result_array() as $row2){ 
                                      ?>
                                      <li style="color:#efefef;"><?php echo $row2['esp_name']; ?></li>

                                    <?php } ?> 
                                    <?php }else{ ?>
                                      <li style="color:#efefef;">No hay especialidades para mostrar</li>
                                   <?php } ?>
                                  </ul>
                                </p>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div> 
    </div>  
          
</section>

<section class="features4 cid-r1koPBFDbV" id="features4-5p">
    
         

    
    <div class="container">
      <?php if($puntosTotales->result_array() != null) { ?>
      <?php foreach($puntosTotales->result_array() as $row){ ?>

        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Puntos Totales</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $row['total']; ?></p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Puntos Ocupados</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $row['usados']; ?></p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Puntos Disponibles</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $row['nousados']; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Inasistencias injustificadas</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?= $noAsistidas ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
      <?php } }else{ ?>
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Puntos Totales</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            0</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Puntos Ocupados</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            0</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Puntos Disponibles</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            0
                        </p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper media-container-row">
                    <div class="card-box">
                        <h4 class="card-title pb-3 mbr-fonts-style display-7">
                            Inasistencias injustificadas</h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            0
                        </p>
                    </div>
                </div>
            </div>
        </div>
      <?php } ?>
    </div>
</section>

<section class="features15 cid-r1j5fr8AC6 mbr-parallax-background" id="features15-3h">

    

    
    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2"><strong><em>
            Ultimas oficiales asistidas&nbsp;</em></strong></h2>
        

        <div class="media-container-row container pt-5 mt-2">
        <?php foreach ($misiones->result() as $row){ ?>
            <div class="col-12 col-md-6 mb-4 col-lg-4">
                <div class="card flip-card p-5 align-center">
                    <div class="card-front card_cont">
                        <a href="<?=site_url("main/mision?mision=")?><?php echo $row->id_mision; ?>"><img src="<?php echo base_url('assets/images/mission/')?><?php echo "/" ?><?php echo $row->img_mision; ?>" alt="" title=""></a>
                    </div>
                    <div class="card_back card_cont">
                        <h4 class="card-title display-5 py-2 mbr-fonts-style"><a href="<?=site_url("main/mision?mision=")?><?php echo $row->id_mision; ?>" class="text-white"><strong><em>
                            <?php echo $row->nombre; ?></em></strong></a></h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $row->fecha; ?></p>
                    </div>
                </div>
            </div>
          <?php } ?>
        </div>
</div></section>

<section class="section-table cid-r1kpxLxFfp" id="table1-5q">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2"><strong><em>
          ASISTENCIA</em></strong></h2>
      
      <div class="table-wrapper">
        <div class="container">
          
        </div>

        <div class="container scroll">
          <table class="table" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7"><em>
                      <font color=#efefef>Nombre</font></em></th> 
              <th class="head-item mbr-fonts-style display-7"><em>
                      <font color=#efefef>Fecha</font></em></th>
              <th class="head-item mbr-fonts-style display-7"><em>
                      <font color=#efefef>Tipo de Mision</font></em>
              </th>
              <th class="head-item mbr-fonts-style display-7"><em>
                      <font color=#efefef>Perfil de Mision</font></em>
              </th>
            </tr>
            </thead>

            <tbody>
              
              
              
              <?php if($asistencia->result() != null){ 
               foreach ($asistencia->result() as $row){ ?>
                 <tr> 
                
                

                  <td class="body-item mbr-fonts-style display-7"><?php echo $row->nombre; ?></td>
                  <td class="body-item mbr-fonts-style display-7"><?php echo $row->fecha; ?></td>
                  <td class="body-item mbr-fonts-style display-7"><?php echo $row->tipo; ?></td>
                  <td class="body-item mbr-fonts-style display-7"><a href="<?=site_url("main/mision?mision=")?><?php echo $row->id_mision; ?>">Perfil de Mision </a></td>
              </tr>
                <?php } 
                  }else{ ?>
                    <tr> 
                     <td class="body-item mbr-fonts-style display-7">No hay asistencia para mostrar.</td><td class="body-item mbr-fonts-style display-7"></td><td class="body-item mbr-fonts-style display-7"></td><td class="body-item mbr-fonts-style display-7"></td>
                   </tr>
                  <?php } ?> 
                

            </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          
        </div>
      </div>
    </div>
</section>




  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/mbr-flip-card/mbr-flip-card.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
