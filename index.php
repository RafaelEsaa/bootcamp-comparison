<!doctype html>
<html lang="en">
    <head>
        <title>Rafael</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./css/style.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"> <img class="logo" src="http://bootstrap-ecommerce.com/main/images/logo-white.png" height="40"> LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav ml-auto"> 
                <li class="nav-item">
                    <a class="nav-link" href="#">Compare bootcamps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Explore all bootcamps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Find by bootcamp location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Discover bootcamps by topic</a>
                </li>
            </ul>
        </div>
    </nav>
    
        <div class="row full-width">
            <div class="col-md-12" 
                style="background-image: url('./assets/img/banner-home.jpg'); 
                        height: 100vh; 
                        width: 100%;
                        background-size: cover">
                <section class="title-banner">
                    <h1 class="text-center">Compare top coding bootcamps</h1>
                    <h2 class="text-center">Get the scoop on the world's best coding schools.</h2>
                </section>

                <section class="row justify-content-center form-banner">
                    <div class="col-md-9 form">
                        <form>
                            <div class="form-row">
                                <div class="col-md-5">
                                    <label>Compare any bootcamp</label>
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-md-2">
                                    <p class="text-center">vs</p>
                                </div>
                                <div class="col-md-5">
                                    <label>Any bootcamp</label>
                                    <input type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center sect-btn">
                                <button type="submit" class="btn btn-primary btn-form">Compare</button>
                            </div>
                        </form>
                        <p class="text-center text-menu">Or explore all bootcamps</p>              
                    </div>
                </section>
            </div>
        </div>

  
    <div class="row full-width bg-location-bootcamp">  
        <div class="col-md-5 text-location-bootcamp">
            <p>Find the best bootcamp for you</p>
            <p>Not sure if you're looking at the right bootcamps? Answer a few questions and we'll help you find top schools that fit your needs.</p>
        </div>
        <div class="col-md-7 form-location-bootcamp">
            <form>
                <div class="form-row">
                    <div class="col-md-8 sect-input-form mb-2">
                        <label class="">Where are you located</label>
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col-md-4 align-self-end">
                        <button type="submit" class="btn btn-primary mb-2 text-right">Confirm identity</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row sect-comparations">
            <div class="col-md-12 title-banner">
                <h2 class="text-center">Explore popular comparisons</h2>
            </div>

            <?php
                $dataComparison = file_get_contents('https://assets-alesanchezr.c9users.io/apis/course-report/permute/full-stack');
                $comparisonCombinationArray = json_decode($dataComparison);
                ?>
                <?php foreach($comparisonCombinationArray as $com){ ?>
                    <div class="col-md-4 px-2 pt-2">
                    <div class="border box-shw pt-3">
                        <a href="comparison.php?school1=<?php echo $com[0];?>&school2=<?php echo $com[1]?>&school3=<?php echo $com[2]?>">
                            <?php  ?>
                            <p class="text-center"><?php echo $com[0]?></p>
                            <p class="text-center">vs</p>
                            <p class="text-center"><?php echo $com[1]?></p>
                            <p class="text-center">vs</p>
                            <p class="text-center"><?php echo $com[2]?></p>
                        </a>
                    </div>
                    </div>
                <?php } ?>
            
        </div>
    </div>

    <div class="row full-width justify-content-center get-informed">
        <div class="col-md-8 title-banner">
            <h2 class="text-center">Get informed. Reviews and facts on every bootamp.</h2>
            <form>
                <div class="form-row form-get-informed pt-2">
                    <div class="col-md-9 sect-input-form">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col-md-3 align-self-end btn-search">
                        <button type="submit" class="btn bg-transparent">or See All</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 text-center img-get-informed pt-3">
            <img src="./assets/img/banner-home.jpg" style="width: 100px" alt="">
            <img src="./assets/img/banner-home.jpg" style="width: 100px" alt="">
            <img src="./assets/img/banner-home.jpg" style="width: 100px" alt="">
            <img src="./assets/img/banner-home.jpg" style="width: 100px" alt="">
            <img src="./assets/img/banner-home.jpg" style="width: 100px" alt="">
            <img src="./assets/img/banner-home.jpg" style="width: 100px" alt="">
        </div>
    </div>

    <div class="row full-width questions">
        <div class="col-md-2 offset-md-2">
            <img src="./assets/img/banner-home.jpg" style="width: 100px" alt="">
        </div>
        <div class="col-md-7">
            <h3 class="title-question">What is a coding bootcamp?</h3>
            <p class="text-question">Coding bootcamps are schools that promise to make you a job-ready developer. Most in-person bootcamps last 3-4 months, require full-time attendance, and charge tuition in the range of $10,000 to $20,000. Other programs can be taken part-time and/or online at a lower cost. Students spend relatively little time in lectures, instead spending most of the day building projects that demonstrate their skills and prepare them to get jobs as developers.</p>
        </div>
        <div class="col-md-2 offset-md-2 pt-3">
            <img src="./assets/img/banner-home.jpg" style="width: 100px" alt="">
        </div>
        <div class="col-md-7 pt-3">
            <h3 class="title-question">How should I select a bootcamp?</h3>
            <p class="text-question">Though most bootcamps make the same promise, they vary dramatically in quality. Bootcamps have three main levers to make their students more likely to succeed:</p>
            <ul class="check-list-inline">
                <li><i class="fas fa-check"></i>Teacher Quality </li>
                <li><i class="fas fa-check"></i>Hiring Outcomes </li>
                <li><i class="fas fa-check"></i>Peer Quality</li>
            </ul>
            <p class="text-question">We’ve created this tool to help you find and compare top bootcamps. In the pages that follow you’ll discover all the information you need to judge bootcamps and pick the one to help you succeed.</p>
        </div>
        <div class="col-md-2 offset-md-2 pt-3">
            <img src="./assets/img/banner-home.jpg" style="width: 100px" alt="">
        </div>
        <div class="col-md-7 pt-3">
            <h3 class="title-question">How do I prepare for a bootcamp?</h3>
            <ul class="check-list">
                <li>
                    <a href="">
                        <p>3 Tips to Help You Prepare for a Coding Bootcamp</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <p>How to Prepare for MakerSqaure</p>
                    </a>
                </li>
            </ul>
            <p class="text-question">Once you've narrowed down your list of schools, it's time to start applying. Many bootcamps have a simple admissions process, while others require coding tests and technical interviews. Once accepted, it's important that you set clear goals, allocate the right amount of time for studying, and attend all lectures or mentor sessions.</p>
        </div>
    </div>

    <div class="row justify-content-center full-width footer-menu" 
        style="background-image: url('./assets/img/banner-home.jpg');
        width: 100%;
        background-size: cover">
        <div class="col-md-3 pt-5">
            <p>Popular schools</p>
            <ul class="list-footer">
                <li>General Assembly</li>
                <li>Thinkful</li>
                <li>MakerSquare</li>
                <li>DevMountain</li>
            </ul>
        </div>
        <div class="col-md-3 pt-5">
            <p>Popular topics</p>
            <ul class="list-footer">
                <li>Javascript</li>
                <li>Python</li>
                <li>Ruby on Rails</li>
                <li>AngularJS</li>
            </ul>
        </div>
        <div class="col-md-3 pt-5">
            <p>Resources</p>
            <ul class="list-footer">
                <li>Bootcamps jobs report</li>
                <li>Free learning guides</li>
                <li>Thinkful blog</li>
            </ul>
        </div>
    </div>

    <div class="row justify-content-center full-width footer">
        <div class="col-md-4 pt-5">
            <p>img</p>
            <p><i class="far fa-copyright"></i>2016 Thinkful, Inc.</p>
        </div>
        <div class="col-md-2 pt-5">
            <p>Terms fo service</p>
            <p>Privacy Policy</p>
        </div>
        <div class="col-md-3 pt-5">
            <p>Email us:</p>
            <p>hello@prueba.com</p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>