<?php
    $url = API_URL.'api/permute/full-stack';
    $dataPermuta = file_get_contents($url);
    $comparisonCombinationArray = json_decode($dataPermuta);
?>
    <div class="row full-width footer">
        <div class="container">
            <div class="col-lg-4 bootcamps">
                <h2 class="title">Bootcamps</h2>
                <?php foreach($comparisonCombinationArray as $com){ ?>
                    <a href="<?php echo SITE_URL.'compare/'.$com[2].'-vs-'.$com[1].'-vs-'.$com[0]?>" class="permute">
                        <p><?php echo $com[2].' vs '.$com[1].' vs '.$com[0]?></p>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>

    <footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="<?php echo SITE_URL?>assets/js/index.js" ></script>
    </footer>
    </body>
</html>