<?php
    $url = API_URL.'api/permute/full-stack';
    $dataPermuta = file_get_contents($url);
    $comparisonCombinationArray = json_decode($dataPermuta);

    $urlMenuFooter = 'https://www.4geeksacademy.co/wp-json/menus/v1/menus/footer-company';
    $data = file_get_contents($urlMenuFooter);
    $dataMenu = json_decode($data);
?>
    <div class="row full-width footer">
        <div class="container">
            <div class="row full-width">
                <div class="col-md-4 bootcamps">
                    <h2 class="title">Comparison</h2>
                    <?php foreach($comparisonCombinationArray as $com){ ?>
                        <a href="<?php echo SITE_URL.'compare/'.$com[2].'-vs-'.$com[1].'-vs-'.$com[0]?>" class="text">
                            <p><?php echo $com[2].' vs '.$com[1].' vs '.$com[0]?></p>
                        </a>
                    <?php } ?>
                </div>
                <div class="col-md-4 bootcamps">
                    <h2 class="title">About 4Geeks Academy</h2>
                    <?php foreach($dataMenu->items as $key => $dataMenuFooter){ ?>
                        <a href="<?php echo $dataMenuFooter->url?>" class="text">
                            <p><?php echo $dataMenuFooter->title?></p>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="row full-width row-copyright">
                    <div class="col-2 col-sm-1 text-left order-1">
                        <img style="max-height: 40px;" src="https://www.4geeksacademy.co/wp-content/themes/the-fastest/assets/img/icon-logo.png">
                    </div>
                    <div class="col-12 col-sm-5 order-4 text-left order-sm-2">
                        Copyright © 4Geeks Academy LLC 2017. <br> All rights reserved.
                    </div>


                    <div class="col-10 col-sm-6 text-right order-3">
                        <ul class="list-unstyled list-inline social-media">
                            <li class="list-inline-item"><a target="_blank" href="https://github.com/4geeksacademy"><img src="<?php echo SITE_URL.'assets/svg/github1.svg'?>"></a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://facebook.com/4geeksacademy"><img src="<?php echo SITE_URL.'assets/svg/facebook.svg'?>"></a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://instagram.com/4geeksacademy"><img src="<?php echo SITE_URL.'assets/svg/instagram.svg'?>"></a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://twitter.com/4GeeksAcademy"><img src="<?php echo SITE_URL.'assets/svg/twitter.svg'?>"></a></li>
                            <li class="list-inline-item"><a target="_blank" href="https://www.youtube.com/channel/UC1ZyAx5eyV9gTFWpHPs9-GA"><img src="<?php echo SITE_URL.'assets/svg/youtube2.svg'?>"></a></li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>

    <footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="<?php echo SITE_URL?>assets/js/index.js" ></script>
        <script src="<?php echo SITE_URL?>assets/js/index-min.js" ></script>
    </footer>
    </body>
</html>