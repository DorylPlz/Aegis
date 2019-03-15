

       <!-- <a data-toggle="modal" data-target="#mayor1"><b><em>           </em></b><i class="icon-play3 position-right"></i></a> -->
<?php foreach($Gral->result() as $gral){} ?>

  <!-- Chart de pelotones -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      //Obtención de nombres por rango
      //Fin de obtención de nombres

      //Obtención de cantidad por rango

      //Fin obtención de cantidad

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
          




              //Peloton 1

              //[{v:'Crl', f:'<a data-toggle="modal" data-target="#crl1"><b><em>Coronel</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">1º Peloton<br/>Infantes: <?php echo $CrlA; ?></div>'}, '', 'Gral'],

              //[{v:'1ttecrl', f:'<a data-toggle="modal" data-target="#ttecrl1"><b><em>Tte.Coronel</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">1º Peloton<br/>Infantes: <?php echo $TteCrlA; ?></div>'}, 'Crl', 'Cpt'],



             // [{v:'1mayor', f:'<a data-toggle="modal" data-target="#mayor1"><b><em>Mayor</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes: <?php echo $MayorA; ?></div>'}, '1ttecrl', 'Cpt'],

                [{v:'1cpt', f:'<a data-toggle="modal" data-target="#capitan1"><b><em>Capitan</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes: <?php echo $CptA; ?></div>'}, '', 'Cpt'],

                  [{v:'1tte', f:'<a data-toggle="modal" data-target="#teniente1"><b><em>Teniente</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $TteA; ?></div>'}, '1cpt', 'Sgto'],

                          [{v:'1subtte', f:'<a data-toggle="modal" data-target="#subteniente1"><b><em>Sub.Teniente</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $SubTteA; ?></div>'}, '1tte', 'Sgto'],

                              [{v:'1alferez', f:'<a data-toggle="modal" data-target="#alferez1"><b><em>Alferez</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $AlferezA; ?></div>'}, '1subtte', 'Sgto'],

                                  [{v:'1som', f:'<a data-toggle="modal" data-target="#subofmayor1"><b><em>Sub Oficial Mayor</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $SubMayorA; ?></div>'}, '1alferez', 'Sgto'],

                                      [{v:'1subof', f:'<a data-toggle="modal" data-target="#subof1"><b><em>Sub Oficial</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $SubOfA; ?></div>'}, '1som', 'Sgto'],

                                          [{v:'1Sgto1', f:'<a data-toggle="modal" data-target="#sgto1A"><b><em>Sargentoº1</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $Sgto1A; ?></div>'}, '1subof', 'Sgto'],

                                                [{v:'1Sgto2', f:'<a data-toggle="modal" data-target="#sgto2A"><b><em>Sargentoº2</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $Sgto2A; ?></div>'}, '1Sgto1', 'Sgto2'],

                                                  [{v:'1Cbo1', f:'<a data-toggle="modal" data-target="#cabo1A"><b><em>Caboº1</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $Cbo1A; ?></div>'}, '1Sgto2', 'Cbo1'],

                                                      [{v:'1Cbo2', f:'<a data-toggle="modal" data-target="#cabo2A"><b><em>Caboº2</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $Cbo2A; ?></div>'}, '1Cbo1', 'Cbo2'],

                                                          [{v:'1Cbo', f:'<a data-toggle="modal" data-target="#caboA"><b><em>Cabo</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $CboA; ?></div>'}, '1Cbo2', 'Cbo'],

                                                              [{v:'1Sltp', f:'<a data-toggle="modal" data-target="#sltpA"><b><em>Soldado de Tropa Profesional</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $SltpA; ?></div>'}, '1Cbo', 'Sltp'],

                                                                  [{v:'1Slc', f:'<a data-toggle="modal" data-target="#slcA"><b><em>Soldado Conscripto</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $SlcA; ?></div>'}, '1Sltp', 'Slc'],

                                                                      [{v:'1Cdt', f:'<a data-toggle="modal" data-target="#cadeteA"><b><em>Recluta</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $CdtA; ?></div>'}, '1Slc', '2Slc'] ]);




            
              //Peloton 2
         /*   [{v:'2crl', f:'<a data-toggle="modal" data-target="#crlavB"><b><em>Coronel de Aviación</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">2º Peloton<br/>Infantes: <?php echo $CmdtB; ?></div>'}, 'Factions', 'Cpt'],
              

              [{v:'2cmdtGr', f:'<a data-toggle="modal" data-target="#comgruB"><b><em>Comandante de Grupo</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $ComGrupoB; ?></div>'}, '2crl', 'Cpt'],

                [{v:'2comEsc', f:'<a data-toggle="modal" data-target="#comescB"><b><em>Comandante de escuadrilla</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $ComEscB; ?></div>'}, '2cmdtGr', '2Slc'],

                  [{v:'2cptBan', f:'<a data-toggle="modal" data-target="#capbanB"><b><em>Capitán de Bandada</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $CptBanB; ?></div>'}, '2comEsc', 'Cpt'],

                    [{v:'2Tte', f:'<a data-toggle="modal" data-target="#tteB"><b><em>Teniente</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $TteB; ?></div>'}, '2cptBan', 'Cpt'],

                      [{v:'2alf', f:'<a data-toggle="modal" data-target="#alferezB"><b><em>Alférez</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $AlferezB; ?></div>'}, '2Tte', 'Cpt'],

                        [{v:'2subAlf', f:'<a data-toggle="modal" data-target="#subalferezB"><b><em>Sub. Alférez</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $subAlferezB; ?></div>'}, '2alf', 'Cpt'],

                          [{v:'2cdt', f:'<a data-toggle="modal" data-target="#cadeteB"><b><em>Cadete</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $CdtB; ?></div>'}, '2subAlf', 'Cpt'],
            
            */



              //Peloton 3
              /*
               [{v:'3Sgto2', f:'<a data-toggle="modal" data-target="#sgto2C"><b><em>Sargentoº2</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">3º Peloton<br/>Infantes: <?php echo $Sgto2C; ?></div>'}, 'Factions', 'Cbo2'],

                [{v:'3Cbo1', f:'<a data-toggle="modal" data-target="#cabo1C"><b><em>Caboº1</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes: <?php echo $Cbo1C; ?></div>'}, '3Sgto2', 'Cbo2'],

              [{v:'3Cbo2', f:'<a data-toggle="modal" data-target="#cabo2C"><b><em>Caboº2</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes: <?php echo $Cbo2C; ?></div>'}, '3Cbo1', 'Cbo2'],

                  [{v:'3Cbo', f:'<a data-toggle="modal" data-target="#caboC"><b><em>Cabo</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $CboC; ?></div>'}, '3Cbo2', 'Cbo'],

                        [{v:'3Sltp', f:'<a data-toggle="modal" data-target="#sltpC"><b><em>Soldado de Tropa Profesional</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $SltpC; ?></div>'}, '3Cbo', 'Sltp'],

                              [{v:'3Slc', f:'<a data-toggle="modal" data-target="#slcC"><b><em>Soldado Conscripto</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $SlcC; ?></div>'}, '3Sltp', 'Slc'],

                                  

                                    [{v:'3Rclt', f:'<a data-toggle="modal" data-target="#rcltC"><b><em>Recluta</em></b><i class="icon-play3 position-right"></i></a><div style="color:red; font-style:italic, sans-serif; font-weight:bold;">Infantes:<?php echo $RlctC; ?></div>'}, '3Slc', 'Rclt'],

                                    */

        

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {allowHtml:true});
      }


  











































  </script>





  <script src="<?php echo base_url('assets/js/panel.js'); ?>"></script>
  <script src="<?php echo base_url('assets/web/assets/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/popper/popper.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/tether/tether.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js'); ?>"></script>
  <script src="<?php echo base_url('assets/smoothscroll/smooth-scroll.js'); ?>"></script>
  <script src="<?php echo base_url('assets/touchswipe/jquery.touch-swipe.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/parallax/jarallax.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/mbr-tabs/mbr-tabs.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables/jquery.data-tables.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/datatables/data-tables.bootstrap4.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/dropdown/js/script.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/theme/js/script.js'); ?>"></script>
  
