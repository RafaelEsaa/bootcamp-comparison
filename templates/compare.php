<?php 
    $school1 = $_GET['school1'];
    $school2 = $_GET['school2'];
    $school3 = $_GET['school3'];

    $slugSchool1 = $_GET['school1'];
    $slugSchool2 = $_GET['school2'];
    $slug4Geeks = $_GET['school3'];

    //Imagenes para cada curso
    $imgSchool3 = API_URL.'/logos/'.$school3.'.png';
    $imgSchool2 = API_URL.'/logos/'.$school2.'.png';
    $imgSchool1 = API_URL.'/logos/'.$school1.'.png';
?>
<?php require('header.php') ?>

    <div class="row full-width padding-top-menu">
        <div class="col-md-12" 
            style="background-image: url('./assets/img/banner.jpg'); 
                    height: 500px;
                    width: 100%;
                    background-size: cover;
                    background-position: 20% 35%;">
            <section class="title-banner">

                <h2 class="text-center">Which Bootcamp</h1>
                <h2 class="text-center">is right for you</h1>
                <h1 class="text-center">Compare <?php echo $school1.' vs '.$school2.' vs '.$school3?></h1>
            </section>
            <div class="msj-btn-banner">
                <p class="no-margin">Pick the coding bootcamps to compare to 4Geeks Academy</p>
            </div>
        </div>
    </div>
    
    <div class="row full-width table-position">
        <div class="col-lg-12">
        <div class="search-table-outter">
            <table class="table table-lg">

            
                    <tr>
                    <th  class="bg-grey-text-menu" style="border-top-style: solid !important; border-top-width: 2px !important; border-top-color: #b2b2b3 !important;">
                        <div class="bg-features" style="background-image:url('./assets/img/codigo-10.png');">
                        </div>
                    </th>
                    <th></th>
                    <th class="">    
                        <div class="bg-bootcamp-4geeks">
                            <div class="bootcamp-logo" style="background-image: url('<?php echo $imgSchool3 ?>');"></div>
                            <div class="triangule1"></div>
                            <div class="div-select" style="text-align: center;">
                                <select class="custom-select">
                                    <option selected="">4Geeks Academy</option>
                                </select>
                            </div>
                        </div>
                    </th>
                    <th class="">    
                        <div class="bg-bootcamp-4geeks">
                            <div class="bootcamp-logo" style="background-image: url('<?php echo $imgSchool2 ?>');"></div>
                            <div class="triangule1"></div>
                            <div class="div-select" style="text-align: center;">
                                <select id="select2" class="custom-select" onchange="change()">
                                    <option selected><?php echo $school2?></option>
                                    <?php
                                        $url = API_URL.'/schools';
                                        $schools = file_get_contents($url);
                                        $dataSchools = json_decode($schools);
                                        foreach($dataSchools as $key => $com){
                                            if($key != '4geeks' && $key != $school2 && $key != $school1) {?>
                                                <option value="<?php echo $key?>"><?php echo $key?></option>
                                            <?php }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </th>

                    <th class="">    
                        <div class="bg-bootcamp-4geeks">
                            <div class="bootcamp-logo" style="background-image: url('<?php echo $imgSchool1 ?>');"></div>
                            <div class="triangule1"></div>
                            <div class="div-select" style="text-align: center;">
                                <select id="select1" class="custom-select" onchange="change()">
                                    <option selected><?php echo $school1?></option>
                                    <?php
                                        $url = API_URL.'/schools';
                                        $schools = file_get_contents($url);
                                        $dataSchools = json_decode($schools);

                                        foreach($dataSchools as $key => $com){
                                            if($key != '4geeks' && $key != $school2 && $key != $school1) {?>
                                                <option value="<?php echo $key?>"><?php echo $key?></option>
                                            <?php }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </th>
                    </tr>
                    <tr>
                        <td scope="row" class="bg-grey-text-menu">
                        </td>
                        <td></td>
                        <td >
                            <div class="bg-grey-shape">
                                <div class="triangule-white1" ></div>
                            </div>
                        </td>
                        <td>
                            <div class="bg-grey-shape" >
                                <div class="triangule-white2" ></div>
                            </div>
                        </td>
                        <td>
                            <div class="bg-grey-shape">
                                <div class="triangule-white3" ></div>
                            </div>
                        </td>
                    </tr>
                    <?php
                        $url = API_URL.'/compare/full-stack?schools='.$school1.','.$school2.','.$school3;
                        $dataComparison = file_get_contents($url);
                        $comparisonCombinationArray = json_decode($dataComparison);
                    ?>
                    <tr>
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Price</p>
                            </div>
                        </td>
                        <td></td>
                        <?php foreach($comparisonCombinationArray as $key => $com){ 
                            if($key == $school3){?>
                            <td>
                                <div class="justify-text bg-white">
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
                            <td>
                                <div class="justify-text bg-white">
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
                            if($key == $school1){?>
                            <td>
                                <div class="justify-text bg-white">
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
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Focus</p>
                            </div>
                        </td>
                        <td></td>
                        <td class="bg-grey">
                            <div>
                                <div class="justify-text">
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

                        <td class="bg-grey">
                            <div>
                                <div class="justify-text">
                                    <div>
                                        <p class="text-center">
                                            <?php foreach($comparisonCombinationArray as $key => $com){
                                                if($key == $school2){
                                                    if (is_array($com->focus)){
                                                        foreach($com->focus as $d){
                                                            echo $d.' ';
                                                        }
                                                    }else{
                                                        echo $com->focus;
                                                    }
                                            
                                                }
                                            }
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="bg-grey">
                            <div class="justify-text">
                                <p>
                                    <?php foreach($comparisonCombinationArray as $key => $com){
                                        if($key == $school1){
                                            if (is_array($com->focus)){
                                                foreach($com->focus as $d){
                                                    echo $d.' ';
                                                }
                                            }else{
                                                echo $com->focus;
                                            }
                                    
                                        }
                                    }
                                    ?>
                                </p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Time commitment</p>
                            </div>
                        </td>
                        <td></td>
                        <?php foreach($comparisonCombinationArray as $key => $com){
                            if($key == $school3){
                            foreach($com->time_commitment as $data){?>
                            <td >
                                <div class="justify-text bg-white">
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
                            <td >
                                <div class="justify-text bg-white">
                                    <div>
                                        <p><?php echo $data ?></p>
                                    </div>
                                </div>
                            </td>
                        <?php 
                            }}
                        } ?>
                        <?php foreach($comparisonCombinationArray as $key => $com){
                            if($key == $school1){
                            foreach($com->time_commitment as $data){?>
                            <td >
                                <div class="justify-text bg-white">
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
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Learning-style</p>
                            </div>
                        </td>
                        <td></td>
                        <?php foreach($comparisonCombinationArray as $key => $com){
                            if($key == $school1){
                                $data = (array) $com;
                                ?>
                            <td class="bg-grey">
                                <div class="justify-text">
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
                            <td class="bg-grey">
                                <div class="justify-text">
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
                            if($key == $school1){
                                $data = (array) $com;
                                ?>
                            <td class="bg-grey">
                                <div class="justify-text">
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
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Online-platform</p>
                            </div>
                        </td>
                        <td></td>
                        <?php foreach($comparisonCombinationArray as $key => $com){
                            if($key == $school1){
                                $data = (array) $com;
                                ?>
                            <td>
                                <div class="justify-text bg-white">
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
                            <td>
                                <div class="justify-text bg-white">
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
                            <td>
                                <div class="justify-text bg-white">
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
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Syllabus</p>
                            </div>
                        </td>
                        <td></td>
                        <td class="bg-grey">
                            <div class="justify-text ">
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
                                </div>
                            </div>
                        </td>
                        <td class="bg-grey">
                            <div class="justify-text ">
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
                                </div>
                            </div>
                        </td>
                        <td class="bg-grey">
                            <div class="justify-text ">
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
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Mentors</p>
                            </div>
                        </td>
                        <td></td>
                        <td >
                            <div class="justify-text bg-white">
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
                        <td >
                            <div class="justify-text bg-white">
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
                        <td >
                            <div class="justify-text bg-white">
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
                    </tr>
                    <tr>
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Job guarantee</p>
                            </div>
                        </td>
                        <td></td>
                        <td class="bg-grey">
                            <div class="justify-text">
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
                        <td class="bg-grey">
                            <div class="justify-text">
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
                        <td class="bg-grey">
                            <div class="justify-text">
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
                    </tr>
                    <tr>
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Placement rate</p>
                            </div>
                        </td>
                        <td></td>
                        <td >
                            <div class="justify-text bg-white">
                                <div>
                                    <?php foreach($comparisonCombinationArray as $key => $com){ 
                                        if($key == $school3){
                                            ?><p><?php echo $com->placement_rate; ?></p><?php
                                        }
                                    }?>
                                </div>
                            </div>
                        </td>
                        <td >
                            <div class="justify-text bg-white">
                                <div>
                                    <?php foreach($comparisonCombinationArray as $key => $com){ 
                                        if($key == $school2){
                                            ?><p><?php echo $com->placement_rate; ?></p><?php
                                        }
                                    }?>
                                </div>
                            </div>
                        </td>
                        <td >
                            <div class="justify-text bg-white">
                                <div>
                                    <?php foreach($comparisonCombinationArray as $key => $com){ 
                                        if($key == $school1){
                                            ?><p><?php echo $com->placement_rate; ?></p><?php
                                        }
                                    }?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Post graduate support</p>
                            </div>
                        </td>
                        <td></td>
                        <td class="bg-grey">
                            <div class="justify-text">
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
                        <td class="bg-grey">
                            <div class="justify-text">
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
                        <td class="bg-grey">
                            <div class="justify-text">
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
                    </tr>
                    <tr>
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Pre-work</p>
                            </div>
                        </td>
                        <td></td>
                        <td >
                            <div class="justify-text bg-white">
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
                        <td >
                            <div class="justify-text bg-white">
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
                        <td >
                            <div class="justify-text bg-white">
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
                    </tr>
                    <tr>
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Scolarships</p>
                            </div>
                        </td>
                        <td></td>
                        <td class="bg-grey">
                            <div class="justify-text">
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
                        <td class="bg-grey">
                            <div class="justify-text">
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
                        <td class="bg-grey">
                            <div class="justify-text">
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
                    </tr>
                    <tr>
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Application process</p>
                            </div>
                        </td>
                        <td></td>
                        <td >
                            <div class="justify-text bg-white">
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
                        <td >
                            <div class="justify-text bg-white">
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
                        <td >
                            <div class="justify-text bg-white">
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
                    </tr>
                    <tr>
                        <td scope="row" class="title-row bg-grey-text-menu">
                            <div class="section-title">
                                <p class="title">Reviews</p>
                            </div>
                        </td>
                        <td></td>
                        <td class="bg-grey">
                            <div class="justify-text">
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
                        <td class="bg-grey">
                            <div class="justify-text">
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
                        <td class="bg-grey">
                            <div class="justify-text">
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
                    </tr>
                    <tr>
                        <td scope="row" class="title-row bg-grey-text-menu-down">
                            <div class="section-title-last">
                                <p class="title-last">Cities</p>
                            </div>
                        </td>
                        <td></td>
                        <td >
                            <div class="justify-text bg-white">
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
                        <td >
                            <div class="justify-text bg-white">
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
                        <td >
                            <div class="justify-text bg-white">
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
                    </tr>
                    <tr>
                        <td scope="row">
                            
                        </td>
                        <td></td>
                        <td >
                            <div class="last-bg-grey">
                            </div>
                        </td>
                        <td >
                            <div class="last-bg-grey">
                            </div>
                        </td>
                        <td >
                            <div class="last-bg-grey">
                            </div>
                        </td>
                    </tr>
            </table>
        </div>
        </div>
    </div>

    <script>            
        window.onload = function(){
            let x = document.querySelectorAll("tr td:nth-child(3)");
            let y = document.querySelectorAll("tr td:first-child");

            let i;
            for (i = 0; i < x.length; i++) {
                y[i].style.height = x[i].offsetHeight;
            }
        }

        function change(){
            let bootcamp1 = document.getElementById("select1");
            let bootcamp2 = document.getElementById("select2");
            window.location.href = "comparison.php?school1="+bootcamp1.value+"&school2="+bootcamp2.value+"&school3=4geeks";
        }
    </script>
<?php require('header.php') ?>