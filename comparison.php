<?php 
    $school1 = $_GET['school1'];
    $school2 = $_GET['school2'];
    $school3 = $_GET['school3'];

    $slugSchool1 = $_GET['school1'];
    $slugSchool2 = $_GET['school2'];
    $slug4Geeks = $_GET['school3'];

    //Imagenes para cada curso
    $imgSchool3 = 'https://assets-alesanchezr.c9users.io/apis/course-report/logos/'.$school3.'.png';
    $imgSchool2 = 'https://assets-alesanchezr.c9users.io/apis/course-report/logos/'.$school2.'.png';
    $imgSchool1 = 'https://assets-alesanchezr.c9users.io/apis/course-report/logos/'.$school1.'.png';
?>
<html>
    <head>
        <title>Rafael</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top mediumnavigation">
        <div class="container">
            <!-- Begin Logo -->
            <a class="navbar-brand" href="https://www.4geeksacademy.co/blog/">
                <img src="https://www.4geeksacademy.co/wp-content/themes/the-fastest/assets/img/logo-black.png" alt="logo">
            </a>
            <!-- End Logo -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <!-- Begin Menu -->
            <div id="navbarResponsive" class="collapse navbar-collapse"><ul id="menu-blog-header-menu" class="navbar-nav ml-auto"><li id="menu-item-2114" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-6 current_page_item current_page_parent menu-item-has-children menu-item-2114 nav-item dropdown active"><a href="https://www.4geeksacademy.co/blog/" class="nav-link dropdown-toggle active" data-toggle="dropdown">Blog Categories</a>
        <div class="dropdown-menu">
        <a href="https://www.4geeksacademy.co/category/learning-to-code/" class="dropdown-item">Learning to code</a><a href="https://www.4geeksacademy.co/category/why-learn-to-code/" class="dropdown-item">Why learn to code?</a><a href="https://www.4geeksacademy.co/category/living-and-working-as-a-developer/" class="dropdown-item">Living and working as a developer</a></div>
        </li><li id="menu-item-2347" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2347 nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About 4Geeks Academy</a>
        <div class="dropdown-menu">
        <a href="https://www.4geeksacademy.co/the-academy/" class="dropdown-item">The Academy</a><a href="https://www.4geeksacademy.co/the-program/" class="dropdown-item">The Program</a><a href="https://www.4geeksacademy.co/pricing/" class="dropdown-item">Pricing</a><a href="https://www.4geeksacademy.co/calendar/" class="dropdown-item">Upcoming Courses</a></div>
        </li><li id="menu-item-2242-es" class="lang-item lang-item-91 lang-item-es menu-item menu-item-type-custom menu-item-object-custom menu-item-2242-es nav-item"><a href="https://www.4geeksacademy.co/es/blog-en-espanol/" class="nav-link" hreflang="es-ES" lang="es-ES"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFnSURBVHjaYvzPgAD/UNlYEUAAmuTYAAAQhAEYqF/zFbe50RZ1cMmS9TLi0pJLRjZohAMTGFUN9HdnHgEE1sDw//+Tp0ClINW/f0NIKPoFJH/9//ULyGaUlQXaABBALAx/Gf4zAt31F4i+ffj3/cN/XrFfzOx//v///f//LzACM/79ZmD8/e8TA0AAMYHdDVT958vXP38nMDB0s3x94/Tj5y+YahhiAKLfQKUAAcQEdtJfoDHMF2L+vPzDmFXLelf551tGFOOhev4A/QgQQExgHwAd8IdFT/Wz6j+GhlpmXSOW/2z///8Eq/sJ18Dw/zdQA0AAMQExxJjjdy9x2/76EfLz4MXdP/i+wsyGkkA3Aw3984cBIIAYfzIwMKel/bt3jwEaLNAwgZIQxp/fDH/+MqqovL14ESCAWICeZvr9h0FSEhSgwBgAygFDEMT+wwAhgQgc4kAEVAwQQIxfUSMSTxxDAECAAQAJWke8v4u1tAAAAABJRU5ErkJggg==" title="Español" alt="Español"></a></li></ul></div>		<!-- End Menu -->
                <!-- Begin Search -->
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
                </form>
                <!-- End Search -->
            </div>
        </div>
    </nav>

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
                                        $url = 'https://assets-alesanchezr.c9users.io/apis/course-report/schools';
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
                                        $url = 'https://assets-alesanchezr.c9users.io/apis/course-report/schools';
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
                        $url = 'https://assets-alesanchezr.c9users.io/apis/course-report/compare/full-stack?schools='.$school1.','.$school2.','.$school3;
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

    <footer>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </footer>
    </body>
</html>