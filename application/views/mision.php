
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/factions-blanco-logo-156x61.png'); ?>" type="image/x-icon">
  <meta name="description" content="">
  <title>Mision - <?php
                                                                    foreach ($mision->result_array() as $row){
                                                                        echo $row['nombre'];
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


<section class="engine"><a href=""></a></section><section class="mbr-section content5 cid-r1kumUMaVG mbr-parallax-background" id="content5-61">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><em><?php
                                                                    foreach ($mision->result_array() as $row){
                                                                        echo $row['nombre'];
                                                                    }
                                                                    ?></em></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5"><?php
                                                                    foreach ($mision->result_array() as $row){
                                                                        echo $row['tipo'];
                                                                    }
                                                                    ?></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="features11 cid-r1kuo8nzA3" id="features11-62">

    

    

    <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 50%;">
                    <img src="<?php echo base_url('assets/images/mission')?><?php echo "/" ?><?php echo $row['img_mision']; ?>" alt="Mobirise" title="">
                </div>
                <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2"><strong><em><?php
                                                                    foreach ($mision->result_array() as $row){
                                                                        echo $row['nombre'];
                                                                    }
                                                                    ?></em></strong></h2>
                    <div class="mbr-section-text">
                      <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
                        Fecha: <?php
                                  foreach ($mision->result_array() as $row){
                                    echo $row['fecha'];
                                  }
                                ?>
                        <br>
                        Zeus: <?php
                                  foreach ($mision->result_array() as $row){
                                    echo $row['nick'];
                                  }
                                ?>
                        <br>
                        Tipo: <?php
                                  foreach ($mision->result_array() as $row){
                                    echo $row['tipo'];
                                  }
                                ?>
                        <br>
                        Asistencia: <?= $porcentajeAsist ?>%
                        <br>
                        Mapa: <?php
                                  foreach ($mision->result_array() as $row){
                                    echo $row['mapa'];
                                  }
                                ?>
                        <br>
                    </p>
                    </div>

                    
                </div>
            </div>
        </div> 
    </div>          
</section>

<section class="mbr-section content5 cid-r1kvWytWET mbr-parallax-background" id="content5-65">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    BRIEFING</h2>
                
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content10 cid-r1kvM1MWOW" id="content10-64">
    
     

    <div class="container">
        <div class="inner-container" style="width: 66%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-white mbr-fonts-style display-5"><?php
                                  foreach ($mision->result_array() as $row){
                                    echo $row['brief'];
                                  }
                                ?>



              <hr>Objetivo: <br>
                                <?php
                                  foreach ($mision->result_array() as $row){
                                    echo $row['obj'];
                                  }
                                ?>


            </div>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="section-table cid-r1kuSgFnMR mbr-parallax-background" id="table1-63">

  
  
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
                      <font color=#efefef>Peloton</font></em></th>
              <th class="head-item mbr-fonts-style display-7"><em>
                      <font color=#efefef>Perfil</font></em></th>


            </tr>
            </thead>

            <tbody>
              
              
              
              
            <tr> 
                
                <?php if($asist != null){
                 foreach ($asist->result_array() as $row){ ?>
                                   
                    <td class="body-item mbr-fonts-style display-7"><?php echo $row['abrev']; ?><?php echo "." ?><?php echo $row['nick']; ?></td>
                    <td class="body-item mbr-fonts-style display-7"><?php echo $row['pel_name']; ?></td>
                    <td class="body-item mbr-fonts-style display-7"><a href="<?=site_url("user/profile?nombre=")?><?php echo $row['nick']; ?><?php echo "&id=" ?><?php echo $row['id_usu']; ?>">Ver Perfil</a></td>



                  </tr><tr> 
               
                <?php } 
                  }else{ ?>
                    <td class="body-item mbr-fonts-style display-7">No hay asistencia para mostrar.</td><td class="body-item mbr-fonts-style display-7"></td></tr><tr>
                  <?php }



                ?> 

            </tr>
          </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          
        </div>
      </div>
    </div>
</section>




  <script src="<?php echo base_url('assets/web/assets/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/popper/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/tether/tether.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/smoothscroll/smooth-scroll.js'); ?>"></script>
  <script src="<?php echo base_url('assets/touchswipe/jquery.touch-swipe.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/parallax/jarallax.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables/jquery.data-tables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables/data-tables.bootstrap4.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/dropdown/js/script.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/theme/js/script.js'); ?>"></script>
  
  
