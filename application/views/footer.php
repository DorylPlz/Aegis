<section class="cid-r1jiYRf2Ih" id="footer1-3r">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="index.html">
                        <img src="<?php echo base_url('assets/images/logo-114x141.png'); ?>" alt="" title="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">TS3</h5>
                <p class="mbr-text"><?php
                                                                    foreach ($ts3->result() as $row){
                                                                        echo $row->ts3;
                                                                    }
                                                                    ?></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacto</h5>
                <p class="mbr-text">
                    <a href="https://www.facebook.com/Clan-Legi%C3%B3n-Aegis-495206204317441/">Facebook</a></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Links
                </h5>
                <p class="mbr-text"><a href="https://units.arma3.com/unit/legionaegis" target="_blank">Arma Units</a><br></p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Legión Aegis™ 2018
                    </p>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>