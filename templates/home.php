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
                $dataSchools = file_get_contents('https://bootcamp-comparison-rafaelesaa.c9users.io/api/schools');
                $schools = json_decode($dataSchools);
                $i = 0;
                foreach($schools as $com){
                    $i++;
                    if($i%2 == 0){?>

                    <div class="col-lg-3 col-md-3 bg-blue-home" id="<?php echo $com->slug?>">
                        <p style="visibility:hidden;">Seleccione la segunda opción</p>
                        <div class="img-grid-compare" style="background-image: url('https://bootcamp-comparison-rafaelesaa.c9users.io/api/logos/<?php echo $com->slug?>.png');">
                        </div>
                        <span>
                            <button class="btn-left">see more</button>
                        </span>
                        <span>
                            <button class="btn-right" id="<?php echo $com->slug?>" onclick="bootcampsSelected(this.id)">compare</button>
                        </span>
                    </div>

                    <?php }else{?>
                        <div class="col-lg-3 col-md-3 bg-white-home" id="<?php echo $com->slug?>">
                        <p style="visibility: hidden;">Seleccione la segunda opción</p>
                        <div class="img-grid-compare" style="background-image: url('https://bootcamp-comparison-rafaelesaa.c9users.io/api/logos/<?php echo $com->slug?>.png');">
                            </div>
                            <span>
                                <button class="btn-left">see more</button>
                            </span>
                            <span>
                                <button id="<?php echo $com->slug?>" onclick="bootcampsSelected(this.id)" class="btn-right">compare</button>
                            </span>
                        </div>
                    <?php }?>
                <?php 
                } ?>
            </div>
        </div>
    

<?php require('footer.php') ?>