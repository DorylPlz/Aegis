
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/factions-blanco-logo-156x61.png'); ?>" type="image/x-icon">
  <meta name="description" content="">
  <title>Formulario - Legión Aegis</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/web/assets/mobirise-icons/mobirise-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/tether/tether.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-grid.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap-reboot.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dropdown/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/socicon/css/styles.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/theme/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/mobirise/css/mbr-additional.css'); ?>" type="text/css">
  
  
  
</head>
<body>


<section class="engine"><a href=""></a></section><section class="mbr-section content5 cid-r0Ro407JKT mbr-parallax-background" id="content5-d">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1"><em>
                    Legión Aegis</em></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-4">Inscripción</h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form1 cid-r0Ro40Mcmp mbr-parallax-background" id="form1-e">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong><em>
                    Formulario de inscripción</em></strong></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">Para poder ingresar a nuestro clan, primero deberás inscribirte con este pequeño formulario</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <div data-form-alert="" hidden="">Luego de hablar con un instructor se te aceptará.</div>
                    
                    <form class="mbr-form" action="<?=site_url("main/sendMailGmailrecluta")?>" method="post"><input type="hidden" name="email" data-form-email="true"">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-e">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" required="" id="name-form1-e">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-e">Link Steam</label>
                                    <input type="text" class="form-control" name="steam" required="" id="email-form1-e">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-e">Nick</label>
                                    <input type="text" class="form-control" name="nick" id="phone-form1-e">
                                </div>
                            </div>
                        </div>
                        <div class="form-group" data-for="message">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-e">Cuentanos por que quieres unirte</label>
                            <textarea type="text" class="form-control" name="razon" rows="7" id="message-form1-e"></textarea>
                        </div>
            
                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-danger-outline display-4" >Enviar</button></span>
                    </form>
            </div>
        </div>
    </div>
</section>


