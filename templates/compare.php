<?php require('header.php') ?>
<?php 
    $school1 = $_GET['school1'];
    $school2 = $_GET['school2'];
    $school3 = $_GET['school3'];

    $slugSchool1 = $_GET['school1'];
    $slugSchool2 = $_GET['school2'];
    $slug4Geeks = $_GET['school3'];

    $url = API_URL.'api/compare/full-stack?schools='.$school1.','.$school2.','.$school3;
    $dataComparison = file_get_contents($url);
    $comparisonCombinationArray = json_decode($dataComparison);
                    
?>

<?php require('header.php') ?>


<div class="row full-width">
    <div class="col-lg-12" 
                style="background-image: url('<?php echo SITE_URL?>assets/img/banner.jpg'); 
                        height: 100vh; 
                        width: 100%;
                        background-size: cover;
                        background-position: 20% 50%;">

    </div>
    <section class="title-banner">
        <h2 class="text-center">Which Bootcamp</h1>
        <h2 class="text-center">is right for you</h1>
        <h1 class="text-center">Compare <?php echo $school1.' vs '.$school2.' vs '.$school3?></h1>
    </section>
</div>


    <!-- DIRTY Responsive pricing table HTML -->

<article class="table">

<!-- Menu Mobile -->
<ul class="menu-table-mobile">
    <li id="<?php echo "li-".$school1; ?>">
        <div class="options-bootcamp-responsive">
            <div class="img-option" style="background-image:url('<?php echo API_URL;?>api/logos/<?php echo $school1?>.png')">
            </div>
            <p class="text-center"><?php echo $school1?></p>
        </div>
    </li>
    <li id="<?php echo "li-".$school2; ?>">
        <div class="options-bootcamp-responsive">
            <div class="img-option" style="background-image:url('<?php echo API_URL;?>api/logos/<?php echo $school2?>.png')">
            </div>
            <p class="text-center"><?php echo $school2?></p>
            <div class="div-select" style="text-align: center;">
                <select id="select1" class="custom-select" onchange="change()">
                    <option ><?php echo $school2?></option>
                    <?php
                        $url = API_URL.'api/schools';
                        $schools = file_get_contents($url);
                        $dataSchools = json_decode($schools);

                        foreach($dataSchools as $key => $com){
                            if($key != '4geeks' && $key != $school2 && $key != $school3) {?>
                                <option value="<?php echo $key?>"><?php echo $key?></option>
                            <?php }
                        }
                    ?>
                </select>
            </div>
        </div>
    </li>
    <li id="<?php echo "li-".$school3; ?>">
        <div class="options-bootcamp-responsive">
            <div class="img-option" style="background-image:url('<?php echo API_URL;?>api/logos/<?php echo $school3?>.png')">
            </div>
            <p class="text-center"><?php echo $school3?></p>
            <div class="div-select" style="text-align: center;">
                <select id="select2" class="custom-select" onchange="change()">
                    <option ><?php echo $school3?></option>
                    <?php
                        $url = API_URL.'api/schools';
                        $schools = file_get_contents($url);
                        $dataSchools = json_decode($schools);

                        foreach($dataSchools as $key => $com){
                            if($key != '4geeks' && $key != $school2 && $key != $school3) {?>
                                <option value="<?php echo $key?>"><?php echo $key?></option>
                            <?php }
                        }
                    ?>
                </select>
            </div>
        </div>
    </li>
</ul>
<!-- End Menu Mobile -->


<table>
    <thead>
    <tr class="hidden-tableresponsive">
      <th colspan="2" class="span-columns"></th>
      <th colspan="2" class="span-columns">
          <p>Pick the coding bootcamps to compare to 4Geeks Academy</p>
      </th>
    </tr>
        <tr>
            <th class="bg-grey">
                <div>
                    <div class="img-first-table" style="background-image:url('<?php echo SITE_URL?>assets/img/codigo-10.png')">
                    </div>
                </div>
            </th>
            <th>
                <div class="bg-4geeks-school">
                    <div class="img-second-table" style="background-image:url('<?php echo SITE_URL?>assets/img/4geeks-icon.png')">
                    </div>
                    <div class="div-select" style="text-align: center;">
                        <select  class="custom-select" >
                            <option selected><?php echo $school1?></option>
                        </select>
                    </div>
                </div>
                <div class="tg-4geeks-school"></div>
            </th>
            <th>
                <div class="bg-other-school">
                    <div class="img-three-table" style="background-image:url('<?php echo API_URL;?>api/logos/<?php echo $school2?>.png')">
                    </div>
                    <div class="div-select" style="text-align: center;">
                        <select id="select1" class="custom-select" onchange="change()">
                            <option selected><?php echo $school2?></option>
                            <?php
                                $url = API_URL.'api/schools';
                                $schools = file_get_contents($url);
                                $dataSchools = json_decode($schools);
    
                                foreach($dataSchools as $key => $com){
                                    if($key != '4geeks' && $key != $school2 && $key != $school3) {?>
                                        <option value="<?php echo $key?>"><?php echo $key?></option>
                                    <?php }
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="tg-other-school"></div>
            </th>
            <th class="default">
                <div class="bg-other-school">
                    <div class="img-four-table" style="background-image:url('<?php echo API_URL;?>api/logos/<?php echo $school3?>.png')">
                    </div>
                    <div class="div-select" style="text-align: center;">
                        <select id="select2" class="custom-select" onchange="change()">
                            <option selected><?php echo $school3?></option>
                            <?php
                                $url = API_URL.'api/schools';
                                $schools = file_get_contents($url);
                                $dataSchools = json_decode($schools);
    
                                foreach($dataSchools as $key => $com){
                                    if($key != '4geeks' && $key != $school2 && $key != $school3) {?>
                                        <option value="<?php echo $key?>"><?php echo $key?></option>
                                    <?php }
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="tg-other-school"></div>
            </th>
        </tr>
        <tr class="hidden-tableresponsive">
            <th class="bg-grey">
            </th>
            <th>
                <div class="bg-grey-shape">
                    <div class="triangule-white1"></div>
                </div>
            </th>
            <th>
                <div class="bg-grey-shape">
                    <div class="triangule-white1"></div>
                </div>
            </th>
            <th>
                <div class="bg-grey-shape">
                    <div class="triangule-white1"></div>
                </div>
            </th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td class="bg-grey first-col">
                <div class="menu-title">
                    <p>Price</p>
                </div>
            </td>
                <?php foreach($comparisonCombinationArray as $key => $com){ 
                    if($key == $school1){?>
                    <td class="bg-white">
                        <div class="justify-text">
                            <div>
                                <p>Avg usd price monthly: <?php echo $com->price->avg_usd_price_monthly ?></p>
                                <p>Avg usd price upfront: <?php echo $com->price->avg_usd_price_upfront ?></p>
                                <p>Finance max length in months: <?php echo $com->price->finance_max_length_in_months ?></p>
                                <p>Finance min length in months: <?php echo $com->price->finance_min_length_in_months ?></p>
                            </div>
                        </div>
                    </td>
                <?php 
                    }
                } ?>

                <?php foreach($comparisonCombinationArray as $key => $com){ 
                    if($key == $school2){?>
                    <td class="bg-white">
                        <div class="justify-text">
                            <div>
                                <p>Avg usd price monthly: <?php echo $com->price->avg_usd_price_monthly ?></p>
                                <p>Avg usd price upfront: <?php echo $com->price->avg_usd_price_upfront ?></p>
                                <p>Finance max length in months: <?php echo $com->price->finance_max_length_in_months ?></p>
                                <p>Finance min length in months: <?php echo $com->price->finance_min_length_in_months ?></p>
                            </div>
                        </div>
                    </td>
                <?php 
                    }
                } ?>

                <?php foreach($comparisonCombinationArray as $key => $com){ 
                    if($key == $school3){?>
                    <td class="bg-white">
                        <div class="justify-text">
                            <div>
                                <p>Avg usd price monthly: <?php echo $com->price->avg_usd_price_monthly ?></p>
                                <p>Avg usd price upfront: <?php echo $com->price->avg_usd_price_upfront ?></p>
                                <p>Finance max length in months: <?php echo $com->price->finance_max_length_in_months ?></p>
                                <p>Finance min length in months: <?php echo $com->price->finance_min_length_in_months ?></p>
                            </div>
                        </div>
                    </td>
                <?php 
                    }
                } ?>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Focus</p>
                </div>
            </td>
            <td class="">
                <div class="justify-text text-bg-grey">
                    <div >
                        <div>
                            <?php foreach($comparisonCombinationArray as $key => $com){
                                if($key == $school1){
                                    if (is_array($com->focus)){
                                        foreach($com->focus as $d){?>
                                            <p><?php echo $d.' ';?></p> <?php
                                        }
                                    }else{?>
                                        <p><?php echo $com->focus;?></p> <?php
                                    }
                            
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </td>
            <td class="">
                <div class="justify-text text-bg-grey">
                    <div >
                        <div>    
                            <?php foreach($comparisonCombinationArray as $key => $com){
                                if($key == $school2){
                                    if (is_array($com->focus)){
                                        foreach($com->focus as $d){?>
                                            <p><?php echo $d.' ';?></p> <?php
                                        }
                                    }else{?>
                                        <p><?php echo $com->focus;?></p> <?php
                                    }
                            
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </td>
            <td class="">
                <div class="justify-text text-bg-grey">
                    <div >
                        <div>    
                            <?php foreach($comparisonCombinationArray as $key => $com){
                                if($key == $school3){
                                    if (is_array($com->focus)){
                                        foreach($com->focus as $d){?>
                                            <p><?php echo $d.' ';?></p> <?php
                                        }
                                    }else{?>
                                        <p><?php echo $com->focus;?></p> <?php
                                    }
                            
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Time commitment</p>
                </div>
            </td>
            <?php foreach($comparisonCombinationArray as $key => $com){
                if($key == $school1){
                foreach($com->time_commitment as $data){?>
                <td class="bg-white">
                    <div class="justify-text">
                        <div>
                            <p><?php echo $data ?></p>
                        </div>
                    </div>
                </td>
            <?php 
                }}
            } ?>

            <?php foreach($comparisonCombinationArray as $key => $com){
                if($key == $school2){
                foreach($com->time_commitment as $data){?>
                <td class="bg-white">
                    <div class="justify-text">
                        <div>
                            <p><?php echo $data ?></p>
                        </div>
                    </div>
                </td>
            <?php 
                }}
            } ?>

            <?php foreach($comparisonCombinationArray as $key => $com){
                if($key == $school3){
                foreach($com->time_commitment as $data){?>
                <td class="bg-white">
                    <div class="justify-text">
                        <div>
                            <p><?php echo $data ?></p>
                        </div>
                    </div>
                </td>
            <?php 
                }}
            } ?>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Learning Style</p>
                </div>
            </td>

            <?php foreach($comparisonCombinationArray as $key => $com){
                if($key == $school1){
                    $data = (array) $com;
                    ?>
                <td class="">
                    <div class="justify-text text-bg-grey">
                        <div>
                            <?php 
                                if($data["learning-style"]->one_on_one_mentorship){
                            ?>
                                    <p>One on one mentorship</p>
                            <?php
                                }
                                if($data["learning-style"]->online_exercises){
                            ?>
                                    <p>Online Exercises</p>
                            <?php
                                }
                                if($data["learning-style"]->description){
                            ?>
                                    <p><?php echo $data["learning-style"]->description?></p>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </td>
            <?php 
                    
                }
            } ?>

            <?php foreach($comparisonCombinationArray as $key => $com){
                if($key == $school2){
                    $data = (array) $com;
                    ?>
                <td class="">
                    <div class="justify-text text-bg-grey">
                        <div>
                            <?php 
                                if($data["learning-style"]->one_on_one_mentorship){
                            ?>
                                    <p>One on one mentorship</p>
                            <?php
                                }
                                if($data["learning-style"]->online_exercises){
                            ?>
                                    <p>Online Exercises</p>
                            <?php
                                }
                                if($data["learning-style"]->description){
                            ?>
                                    <p><?php echo $data["learning-style"]->description?></p>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </td>
            <?php 
                    
                }
            } ?>

            <?php foreach($comparisonCombinationArray as $key => $com){
                if($key == $school3){
                    $data = (array) $com;
                    ?>
                <td class="">
                    <div class="justify-text text-bg-grey">
                        <div>
                    <?php 
                        if($data["learning-style"]->one_on_one_mentorship){
                    ?>
                            <p>One on one mentorship</p>
                    <?php
                        }
                        if($data["learning-style"]->online_exercises){
                    ?>
                            <p>Online Exercises</p>
                    <?php
                        }
                        if($data["learning-style"]->description){
                    ?>
                            <p><?php echo $data["learning-style"]->description?></p>
                    <?php
                        }
                    ?>
                        </div>
                    </div>
                </td>
            <?php 
                    
                }
            } ?>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Online Platform</p>
                </div>
            </td>
            
            <?php foreach($comparisonCombinationArray as $key => $com){
                if($key == $school1){
                    $data = (array) $com;
                    ?>
                <td class="bg-white">
                    <div class="justify-text">
                        <div class="online-platform">
                    <?php 
                        if($data["online-platform"]){
                    ?>
                            <i class="fas fa-check text-center"></i>
                            <p>Propietary</p>
                    <?php
                        }
                    ?>
                        </div>
                    </div>
                </td>
            <?php 
                    
                }
            } ?>

            <?php foreach($comparisonCombinationArray as $key => $com){
                if($key == $school2){
                    $data = (array) $com;
                    ?>
                <td class="bg-white">
                    <div class="justify-text">
                        <div class="online-platform">
                    <?php 
                        if($data["online-platform"]){
                    ?>
                            <i class="fas fa-check text-center"></i>
                            <p>Propietary</p>
                    <?php
                        }
                    ?>
                        </div>
                    </div>
                </td>
            <?php 
                    
                }
            } ?>

            <?php foreach($comparisonCombinationArray as $key => $com){
                if($key == $school3){
                    $data = (array) $com;
                    ?>
                <td class="bg-white">
                    <div class="justify-text">
                        <div class="online-platform">
                    <?php 
                        if($data["online-platform"]){
                    ?>
                            <i class="fas fa-check text-center"></i>
                            <p>Propietary</p>
                    <?php
                        }
                    ?>
                        </div>
                    </div>
                </td>
            <?php 
                    
                }
            } ?>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Syllabus</p>
                </div>
            </td>
            
            <td class="">
                <div class="justify-text text-bg-grey">
                    <div>
                        <p>Topics:
                            <?php foreach($comparisonCombinationArray as $key => $com){
                                if($key == $school1){
                                    $ultimo = end($com->syllabus->topics);
                                        foreach($com->syllabus->topics as $i => $d){
                                            if($d != $ultimo){
                                                echo $d.', ';
                                            }else{
                                                echo $d;
                                            }
                                        }
                                }
                            } ?>
                        </p>
                        <p>Skills:
                            <?php foreach($comparisonCombinationArray as $key => $com){
                                if($key == $school1){
                                    $ultimo = end($com->syllabus->skills);
                                        foreach($com->syllabus->skills as $i => $d){
                                            if($d != $ultimo){
                                                echo $d.', ';
                                            }else{
                                                echo $d.'asd';
                                            }
                                        }
                                }
                            } ?>
                        </p>
                    </div>
                </div>
            </td>

            <td class="">
                <div class="justify-text text-bg-grey">
                    <div>
                        <p>Topics:
                            <?php foreach($comparisonCombinationArray as $key => $com){
                                if($key == $school2){
                                    $ultimo = end($com->syllabus->topics);
                                        foreach($com->syllabus->topics as $i => $d){
                                            if($d != $ultimo){
                                                echo $d.', ';
                                            }else{
                                                echo $d;
                                            }
                                        }
                                }
                            } ?>
                        </p>
                        <p>Skills:
                            <?php foreach($comparisonCombinationArray as $key => $com){
                                if($key == $school2){
                                    $ultimo = end($com->syllabus->skills);
                                        foreach($com->syllabus->skills as $i => $d){
                                            if($d != $ultimo){
                                                echo $d.', ';
                                            }else{
                                                echo $d.'asd';
                                            }
                                        }
                                }
                            } ?>
                        </p>
                    </div>
                </div>
            </td>

            <td class="">
                <div class="justify-text text-bg-grey">
                    <div>
                        <p>Topics:
                            <?php foreach($comparisonCombinationArray as $key => $com){
                                if($key == $school3){
                                    $ultimo = end($com->syllabus->topics);
                                        foreach($com->syllabus->topics as $i => $d){
                                            if($d != $ultimo){
                                                echo $d.', ';
                                            }else{
                                                echo $d;
                                            }
                                        }
                                }
                            } ?>
                        </p>
                        <p>Skills:
                            <?php foreach($comparisonCombinationArray as $key => $com){
                                if($key == $school3){
                                    $ultimo = end($com->syllabus->skills);
                                        foreach($com->syllabus->skills as $i => $d){
                                            if($d != $ultimo){
                                                echo $d.', ';
                                            }else{
                                                echo $d.'asd';
                                            }
                                        }
                                }
                            } ?>
                        </p>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Mentors</p>
                </div>
            </td>
            <td class="bg-white">
                <div class="justify-text">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school1){
                                if($com->mentors->industry_influencers){
                                    ?><p>Industry influencers</p><?php
                                }else{
                                    ?><p>No Industry influencers</p><?php
                                };
                            }
                        }?>
                    </div>
                </div>
            </td>

            <td class="bg-white">
                <div class="justify-text ">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school2){
                                if($com->mentors->industry_influencers){
                                    ?><p>Industry influencers</p><?php
                                }else{
                                    ?><p>No Industry influencers</p><?php
                                };
                            }
                        }?>
                    </div>
                </div>
            </td>

            <td class="bg-white">
                <div class="justify-text ">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school3){
                                if($com->mentors->industry_influencers){
                                    ?><p>Industry influencers</p><?php
                                }else{
                                    ?><p>No Industry influencers</p><?php
                                };
                            }
                        }?>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Job guarantee</p>
                </div>
            </td>
            <td class="">
                <div class="justify-text text-bg-grey">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school1){
                                if($com->job_guarantee->refund){
                                    ?><p>Refund: <i class="fas fa-check"></i></p><?php
                                }else{
                                    ?><p>Refund: <i class="fas fa-times"></i></p><?php
                                };

                                if($com->job_guarantee->defered){
                                    ?><p>Defered: <i class="fas fa-check"></i></p><?php
                                }else{
                                    ?><p>Defered: <i class="fas fa-times"></i></p><?php
                                };
                            }
                        }?>
                    </div>
                </div>
            </td>
            <td class="">
                <div class="justify-text text-bg-grey">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school2){
                                if($com->job_guarantee->refund){
                                    ?><p>Refund: <i class="fas fa-check"></i></p><?php
                                }else{
                                    ?><p>Refund: <i class="fas fa-times"></i></p><?php
                                };

                                if($com->job_guarantee->defered){
                                    ?><p>Defered: <i class="fas fa-check"></i></p><?php
                                }else{
                                    ?><p>Defered: <i class="fas fa-times"></i></p><?php
                                };
                            }
                        }?>
                    </div>
                </div>
            </td>
            <td class="">
                <div class="justify-text text-bg-grey">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school3){
                                if($com->job_guarantee->refund){
                                    ?><p>Refund: <i class="fas fa-check"></i></p><?php
                                }else{
                                    ?><p>Refund: <i class="fas fa-times"></i></p><?php
                                };

                                if($com->job_guarantee->defered){
                                    ?><p>Defered: <i class="fas fa-check"></i></p><?php
                                }else{
                                    ?><p>Defered: <i class="fas fa-times"></i></p><?php
                                };
                            }
                        }?>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Placement rate</p>
                </div>
            </td>
            <td class="bg-white">
                <div class="justify-text">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school1){
                                ?><p><?php echo $com->placement_rate; ?></p><?php
                            }
                        }?>
                    </div>
                </div>
            </td>
            <td class="bg-white">
                <div class="justify-text">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school2){
                                ?><p><?php echo $com->placement_rate; ?></p><?php
                            }
                        }?>
                    </div>
                </div>
            </td>
            <td class="bg-white">
                <div class="justify-text">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school3){
                                ?><p><?php echo $com->placement_rate; ?></p><?php
                            }
                        }?>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Post graduate support</p>
                </div>
            </td>
            <td class="">
                <div class="justify-text text-bg-grey">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school1){
                                if($com->post_graduate_support){
                                    ?><p>Job Support</p><?php
                                }else{
                                    ?><p></p><?php
                                }
                            }
                        }?>
                    </div>
                </div>
            </td>
            <td class="">
                <div class="justify-text text-bg-grey">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school2){
                                if($com->post_graduate_support){
                                    ?><p>Job Support</p><?php
                                }else{
                                    ?><p></p><?php
                                }
                            }
                        }?>
                    </div>
                </div>
            </td>
            <td class="">
                <div class="justify-text text-bg-grey">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school3){
                                if($com->post_graduate_support){
                                    ?><p>Job Support</p><?php
                                }else{
                                    ?><p></p><?php
                                }
                            }
                        }?>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Pre Work</p>
                </div>
            </td>
            <td class="">
                <div class="justify-text">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school1){
                                ?><p>Avg length in days:<?php echo $com->pre_work->avg_length_in_days;?></p><?php
                                $ultimo = end($com->pre_work->technologies);
                                ?><p>Tecnologies: <?php
                                foreach($com->pre_work->technologies as $i => $t){
                                    if($t != $ultimo){
                                        echo $t.', ';
                                    }else{
                                        echo $t;
                                    }
                                }?>
                                </p>
                        <?php }
                        }?>
                    </div>
                </div>
            </td>
            
            <td>
                <div class="justify-text">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school2){
                                ?><p>Avg length in days:<?php echo $com->pre_work->avg_length_in_days;?></p><?php
                                $ultimo = end($com->pre_work->technologies);
                                ?><p>Tecnologies: <?php
                                foreach($com->pre_work->technologies as $i => $t){
                                    if($t != $ultimo){
                                        echo $t.', ';
                                    }else{
                                        echo $t;
                                    }
                                }?>
                                </p>
                        <?php }
                        }?>
                    </div>
                </div>
            </td>

            <td>
                <div class="justify-text">
                    <div>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school3){
                                ?><p>Avg length in days:<?php echo $com->pre_work->avg_length_in_days;?></p><?php
                                $ultimo = end($com->pre_work->technologies);
                                ?><p>Tecnologies: <?php
                                foreach($com->pre_work->technologies as $i => $t){
                                    if($t != $ultimo){
                                        echo $t.', ';
                                    }else{
                                        echo $t;
                                    }
                                }?>
                                </p>
                        <?php }
                        }?>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Scolarships</p>
                </div>
            </td>
            <td>
                <div class="justify-text text-bg-grey">
                    <div>
                    <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school1){
                                if($com->scolarships->for_woman){?>
                                    <p>For woman: <i class="fas fa-check"></i></p>
                                <?php
                                }else{
                                    ?><p>For woman: <i class="fas fa-times"></i></p><?php
                                }

                                if($com->scolarships->for_veterans){?>
                                    <p>For veterans: <i class="fas fa-check"></i></p>
                                <?php
                                }else{
                                    ?><p>For veterans: <i class="fas fa-times"></i></p><?php
                                }
                                ?><p>Other: <?php echo $com->scolarships->other?></p><?php
                            }
                            
                        }?>
                    </div>
                </div>
            </td>
            <td>
                <div class="justify-text text-bg-grey">
                    <div>
                    <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school2){
                                if($com->scolarships->for_woman){?>
                                    <p>For woman: <i class="fas fa-check"></i></p>
                                <?php
                                }else{
                                    ?><p>For woman: <i class="fas fa-times"></i></p><?php
                                }

                                if($com->scolarships->for_veterans){?>
                                    <p>For veterans: <i class="fas fa-check"></i></p>
                                <?php
                                }else{
                                    ?><p>For veterans: <i class="fas fa-times"></i></p><?php
                                }
                                ?><p>Other: <?php echo $com->scolarships->other?></p><?php
                            }
                            
                        }?>
                    </div>
                </div>
            </td>
            <td>
                <div class="justify-text text-bg-grey">
                    <div>
                    <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school3){
                                if($com->scolarships->for_woman){?>
                                    <p>For woman: <i class="fas fa-check"></i></p>
                                <?php
                                }else{
                                    ?><p>For woman: <i class="fas fa-times"></i></p><?php
                                }

                                if($com->scolarships->for_veterans){?>
                                    <p>For veterans: <i class="fas fa-check"></i></p>
                                <?php
                                }else{
                                    ?><p>For veterans: <i class="fas fa-times"></i></p><?php
                                }
                                ?><p>Other: <?php echo $com->scolarships->other?></p><?php
                            }
                            
                        }?>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Application process</p>
                </div>
            </td>
            <td class="bg-white">
                <div class="justify-text">
                    <div>
                    <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school1){
                                ?>
                                    <p>Avg length in days: <?php echo $com->application_process->avg_length_in_days?></p>
                                <?php
                                

                                if($com->application_process->includes_tests){?>
                                    <p>Includes tests: <i class="fas fa-check"></i></p>
                                <?php
                                }else{
                                    ?><p>For veterans: <i class="fas fa-times"></i></p><?php
                                }

                                if($com->application_process->includes_interviews){?>
                                    <p>Includes interviews: <i class="fas fa-check"></i></p>
                                <?php
                                }else{
                                    ?><p>Includes interviews: <i class="fas fa-times"></i></p><?php
                                }

                                ?><p>Description: <?php echo $com->application_process->description?></p><?php
                            }
                            
                        }?>
                    </div>
                </div>
            </td>
            <td class="bg-white">
                <div class="justify-text">
                    <div>
                    <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school2){
                                ?>
                                    <p>Avg length in days: <?php echo $com->application_process->avg_length_in_days?></p>
                                <?php
                                

                                if($com->application_process->includes_tests){?>
                                    <p>Includes tests: <i class="fas fa-check"></i></p>
                                <?php
                                }else{
                                    ?><p>For veterans: <i class="fas fa-times"></i></p><?php
                                }

                                if($com->application_process->includes_interviews){?>
                                    <p>Includes interviews: <i class="fas fa-check"></i></p>
                                <?php
                                }else{
                                    ?><p>Includes interviews: <i class="fas fa-times"></i></p><?php
                                }

                                ?><p>Description: <?php echo $com->application_process->description?></p><?php
                            }
                            
                        }?>
                    </div>
                </div>
            </td>
            <td class="bg-white">
                <div class="justify-text">
                    <div>
                    <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school3){
                                ?>
                                    <p>Avg length in days: <?php echo $com->application_process->avg_length_in_days?></p>
                                <?php
                                

                                if($com->application_process->includes_tests){?>
                                    <p>Includes tests: <i class="fas fa-check"></i></p>
                                <?php
                                }else{
                                    ?><p>For veterans: <i class="fas fa-times"></i></p><?php
                                }

                                if($com->application_process->includes_interviews){?>
                                    <p>Includes interviews: <i class="fas fa-check"></i></p>
                                <?php
                                }else{
                                    ?><p>Includes interviews: <i class="fas fa-times"></i></p><?php
                                }

                                ?><p>Description: <?php echo $com->application_process->description?></p><?php
                            }
                            
                        }?>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Reviews</p>
                </div>
            </td>
            <td>
                <div class="justify-text text-bg-grey">
                    <div>
                    <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school1){?>
                                <p>Switch_up: <?php echo $com->reviews->switch_up?></p>
                                <p>course_report: <?php echo $com->reviews->course_report?></p>
                                <p>The worse: (hay 2 descripciones)</p>
                                <?php
                            }
                        }?>
                    </div>
                </div>
            </td>
            <td>
                <div class="justify-text text-bg-grey">
                    <div>
                    <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school2){?>
                                <p>Switch_up: <?php echo $com->reviews->switch_up?></p>
                                <p>course_report: <?php echo $com->reviews->course_report?></p>
                                <p>The worse: (hay 2 descripciones)</p>
                                <?php
                            }
                        }?>
                    </div>
                </div>
            </td>
            <td class="default">
                <div class="justify-text text-bg-grey">
                    <div>
                    <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school3){?>
                                <p>Switch_up: <?php echo $com->reviews->switch_up?></p>
                                <p>course_report: <?php echo $com->reviews->course_report?></p>
                                <p>The worse: (hay 2 descripciones)</p>
                                <?php
                            }
                        }?>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="bg-grey">
                <div class="menu-title">
                    <p>Cities</p>
                </div>    
            </td>
            <td class="bg-white">
                <div class="justify-text">
                    <div>
                        <p>
                            <?php 
                            foreach($comparisonCombinationArray as $key => $com){ 
                                if($key == $school1){
                                $ultimo = end($com->cities);
                                    foreach($com->cities as $i => $d){
                                        if($d != $ultimo){
                                            echo $d.', ';
                                        }else{
                                            echo $d;
                                        }
                                    }
                                }
                            }?>
                        </p>
                    </div>
                </div>
            </td>
            <td class="bg-white">
                <div class="justify-text">
                    <div>
                        <p>
                            <?php 
                            foreach($comparisonCombinationArray as $key => $com){ 
                                if($key == $school2){
                                $ultimo = end($com->cities);
                                    foreach($com->cities as $i => $d){
                                        if($d != $ultimo){
                                            echo $d.', ';
                                        }else{
                                            echo $d;
                                        }
                                    }
                                }
                            }?>
                        </p>
                    </div>
                </div>
            </td>
            <td class="bg-white">
                <div class="justify-text">
                    <div>
                        <p>
                            <?php 
                            foreach($comparisonCombinationArray as $key => $com){ 
                                if($key == $school3){
                                $ultimo = end($com->cities);
                                    foreach($com->cities as $i => $d){
                                        if($d != $ultimo){
                                            echo $d.', ';
                                        }else{
                                            echo $d;
                                        }
                                    }
                                }
                            }?>
                        </p>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
  
</article>

    <script>            
        // window.onload = function(){
        //     let x = document.querySelectorAll("tr td:nth-child(3)");
        //     let y = document.querySelectorAll("tr td:first-child");

        //     let i;
        //     for (i = 0; i < x.length; i++) {
        //         y[i].style.height = x[i].offsetHeight;
        //     }
        // }

        // function change(){
        //     let bootcamp1 = document.getElementById("select1");
        //     let bootcamp2 = document.getElementById("select2");
        //     window.location.href = "?page=compare&school1=4geeks&school2="+bootcamp1.value+"&school3="+bootcamp2.value;
        // }
    </script>
<?php require('footer.php') ?>