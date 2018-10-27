<?php require('header.php') ?>
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

    <!-- DIRTY Responsive pricing table HTML -->

<article style="margin-top: 100px;">

<ul class="menu-table-mobile">
  <li class="bg-purple">
      <div>
          Hola
      </div>
    <button>Self-Employed</button>
  </li>
  <li class="bg-blue">
    <button>Simple Start</button>
  </li>
  <li class="bg-blue active">
    <button>Essentials</button>
  </li>
  <li class="bg-blue">
    <button>Plus</button>
  </li>
</ul>  

<table>
    <thead>
        <tr>
            <th class="">
                <div>
                    <div class="img-first-table" style="background-image:url('../codigo-10.png')">
                    </div>
                </div>
            </th>
            <th class="bg-purple">
                <div class="bg-4geeks-school">
                    <div class="img-second-table" style="background-image:url('../4geeks-icon.png')">
                    </div>
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
                <div class="tg-4geeks-school"></div>
            </th>
            <th class="bg-blue">
                <div class="bg-other-school">
                    <div class="img-three-table" style="background-image:url('../4geeks-icon.png')">
                    </div>
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
                <div class="tg-other-school"></div>
            </th>
            <th class="bg-blue default">
                <div class="bg-other-school">
                    <div class="img-four-table" style="background-image:url('../4geeks-icon.png')">
                    </div>
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
                <div class="tg-other-school"></div>
            </th>
        </tr>
        <tr>
            <th>
                <div>
                    
                </div>
            </th>
            <th>
                <div>

                </div>
            </th>
            <th>
                <div>

                </div>
            </th>
            <th>
                <div>

                </div>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Price</td>
            <td><span class="txt-top">&pound;</span><span class="txt-l">6</span></td>
            <td><span class="txt-top">&pound;</span><span class="txt-l">7</span></td>
            <td class="default"><span class="txt-top">&pound;</span><span class="txt-l">15</span></td>
        </tr>
        <tr>
            <td>Focus</td>
            <td><span class="tick">&#10004;</span></td>
            <td><span class="tick">&#10004;</span></td>
            <td class="default"><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
            <td>Time commitment</td>
            <td><span class="tick">&#10004;</span></td>
            <td><span class="tick">&#10004;</span></td>
            <td class="default"><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
            <td>Learning-style</td>
            <td></td>
            <td><span class="tick">&#10004;</span></td>
            <td class="default"><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
            <td>Online-platform</td>
            <td></td>
            <td><span class="tick">&#10004;</span></td>
            <td class="default"><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
            <td>Free telephone and online support</td>
            <td></td>
            <td><span class="tick">&#10004;</span></td>
            <td class="default"><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
            <td>Strong encryption protects your business data</td>
            <td><span class="tick">&#10004;</span></td>
            <td><span class="tick">&#10004;</span></td>
            <td class="default"><span class="tick">&#10004;</span></td>
        </tr>
        <tr>
            <td>Automatic data backups</td>
            <td><span class="tick">&#10004;</span></td>
            <td><span class="tick">&#10004;</span></td>
            <td class="default"><span class="tick">&#10004;</span></td>
        </tr>
    </tbody>
</table>
  
</article>

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
<?php require('footer.php') ?>