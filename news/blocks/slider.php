<?php

  include "db.php";

  $query = "SELECT * FROM content order by id desc limit 1";
  $result = mysqli_query($db, $query);
  //$anons = array();
  //while($row = mysqli_fetch_assoc($result)) {
 //   $anons[] = $row;
//}
$row = mysqli_fetch_assoc($result);
 //print_r($anons);
 ?>
<div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">

      <div class="active item">
        <div class="container">
          <div class="row">
            
              <div class="span6">

                <div class="carousel-caption">
                      <h1><?=$row['name']?></h1>
                      <p class="lead"><?=$row['anons']?></p>
                      <a class="btn btn-large btn-outline text-white" href="#">Batafsil</a>
                </div>

              </div>

                <div class="span6" style="margin-top: 100px"> <img src="rasm/<?=$row['img']?>" style="height:400px"></div>

          </div>
        </div>
       



      </div>

      <div class="item">
       
        <div class="container">
          <div class="row">
            
              <div class="span6">

                <div class="carousel-caption">
                      <h1>Example headline</h1>
                      <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      <a class="btn btn-large btn-primary" href="#">Sign up today</a>
                </div>

              </div>

                <div class="span6"> <img src="img/slide/slide2.jpg"></div>

          </div>
        </div>

      </div>





    </div>
       <!-- Carousel nav -->
      <a class="carousel-control left " href="#myCarousel" data-slide="prev"><i class="icon-chevron-left"></i></a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="icon-chevron-right"></i></a>
        <!-- /.Carousel nav -->

  </div>