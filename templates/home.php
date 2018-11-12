<?php require('header.php') ?>
    
        <div class="row full-width">
            <div class="col-md-12" 
                style="background-image: url('<?php echo SITE_URL."assets/img/banner.jpg"?>'); 
                        height: 100vh; 
                        width: 100%;
                        background-size: cover">

                <section class="header-text">
                    <div>
                        <span class="first-text">All</span>
                        <span class="second-text">Schools</span>
                        <p>Selecciona las escuelas que deseas comparar para el curso de: 
                            <span>[
                                <span class="select-header">
                                    <select>
                                        <option selected="">4Geeks Academy</option>
                                    </select>
                                </span>
                                &nbsp]</span>
                        </p>
                    </div>
                </section>
            </div>
        </div>

        <div class="container">
            <div class="row grid-home">
                <?php
                $dataSchools = file_get_contents(API_URL.'api/schools');
                $schools = json_decode($dataSchools);
                $i = 0;
                foreach($schools as $com){
                    $i++;?>
                    <?php if($i%2 == 0){?>

                    <div id="<?php echo $com->slug?>" class="col-lg-3 col-md-3 col-6 bg-blue-home" data-target="<?php echo $com->slug?>" onclick="bootcampsSelected(this)">
                        <p class="text-select" style="visibility:hidden;">Seleccione la segunda opción</p>
                        <h2 class="title-bootcamp text-center"><?php echo $com->title?></h2>
                        <div class="img-grid-compare" style="background-image: url('<?php API_URL?>api/logos/<?php echo $com->slug?>.png');">
                        </div>
                        <span>
                            <button class="text-center w-100 btn-right">compare</button>
                        </span>
                    </div>

                    <?php }else{?>
                        <div id="<?php echo $com->slug?>" class="col-lg-3 col-md-3 col-6 bg-white-home" data-target="<?php echo $com->slug?>" onclick="bootcampsSelected(this)">
                        <p class="text-select" style="visibility: hidden;">Seleccione la segunda opción</p>
                        <h2 class="title-bootcamp text-center"><?php echo $com->title?></h2>
                        <div class="img-grid-compare" style="background-image: url('<?php API_URL?>api/logos/<?php echo $com->slug?>.png');">
                            </div>
                            <span>
                                <button class="text-center w-100 btn-right">compare</button>
                            </span>
                        </div>
                    <?php }?>
                <?php 
                } ?>
            </div>
        </div>
    

<?php require('footer.php') ?>