
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/factions-blanco-logo-156x61.png'); ?>" type="image/x-icon">
  <meta name="description" content="Website Builder Description">
  <title>Galería - Legión Aegis</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/web/assets/mobirise-icons/mobirise-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/tether/tether.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-grid.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-reboot.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dropdown/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/socicon/css/styles.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/theme/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/gallery/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/mobirise/css/mbr-additional.css'); ?>" type="text/css">
  
  
  
</head>
<body>


<section class="engine"><a href=""></a></section><section class="mbr-section content5 cid-r12KlbuwWV mbr-parallax-background" id="content5-2v">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><em>
                    Legión Aegis</em></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">Galería</h3>
                
                
            </div>
        </div>
    </div>
</section>



<?php if($this->session->userdata('login')){ 
        if($this->session->userdata('zeus')){?>
<section class="tabs1 cid-r12ffTPHtU" id="tabs1-2s">

    


    
    <div class="container">
        <h2 class="mbr-white align-center pb-5 mbr-fonts-style mbr-bold display-2"><em>
            Agregar Imagenes</em></h2>
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                
                                           <?php echo form_open_multipart('gestion/subirGaleria');?>
                                            <div class="col-md-12" data-for="message">
                                                <font color=#efefef>Solo JPG y PNG</font>
                                                <input type="file" name="multipleFiles[]" multiple="multiple"><br><br>
                                            </div>
                                            <div class="input-group-btn col-md-12" style="margin-top: 10px;"><button href="" style="border-radius: 100px;" name="submit" value="Submit" type="submit" class="btn btn-form btn-danger-outline display-4">Agregar nuevas imagenes</button></div>
                                          <?php echo form_close(); ?>


            </div>
        </div>
    </div>
  </section>
<?php }} ?>
















<section class="mbr-gallery mbr-slider-carousel cid-r12Kj3Abzc" id="gallery3-2u">

    

    <div>
        <div><!-- Filter --><!-- Gallery -->
          <div class="mbr-gallery-row">
            <div class="mbr-gallery-layout-default">
              
                   <?php 
                   $i = 0;
                   foreach ($galeria->result() as $row){ 
                    
                    $i++; ?>

              <div>
                <div>
                  <div class="mbr-gallery-item mbr-gallery-item--p1" data-video-url="false">



                     <div href="#lb-gallery3-2u" data-slide-to="<?php echo $i; ?>" data-toggle="modal">
                      <img src="<?php echo base_url('assets/images/gallery/'); echo '/'; echo $row->ruta_img;?>" alt="" title="">
                        <span class="icon-focus"></span>
                      </div>
                    

                    </div>
              </div>
            </div>
            <div class="clearfix">
              
            </div>
            <?php } ?>
          </div>
        </div><!-- Lightbox -->
        <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="0" data-keyboard="true" data-interval="false" id="lb-gallery3-2u">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="" alt="" title="">
                          </div>
                   <?php 
                   $i = 0;
                   foreach ($galeria->result() as $row2){ 
                    
                    $i++; ?>

                          <div class="carousel-item">
                            <img src="<?php echo base_url('assets/images/gallery/'); echo '/'; echo $row2->ruta_img;?>" alt="" title="">
                          </div>


                    <?php } ?>

                </div>
                    <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery3-2u">
                      <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery3-2u">
                      <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                    <a class="close" href="#" role="button" data-dismiss="modal">
                      <span class="sr-only">Close</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

</section>



  <script src="<?php echo base_url('assets/web/assets/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/popper/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/tether/tether.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/smoothscroll/smooth-scroll.js'); ?>"></script>
  <script src="<?php echo base_url('assets/dropdown/js/script.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/touchswipe/jquery.touch-swipe.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/masonry/masonry.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/imagesloaded/imagesloaded.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vimeoplayer/jquery.mb.vimeo_player.js'); ?>"></script>
  <script src="<?php echo base_url('assets/parallax/jarallax.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/theme/js/script.js'); ?>"></script>
  <script src="<?php echo base_url('assets/gallery/player.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/gallery/script.js'); ?>"></script>
  <script src="<?php echo base_url('assets/slidervideo/script.js'); ?>"></script>
  
