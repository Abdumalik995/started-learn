<?php

  include "db.php";

  $query = "SELECT * FROM content";
  $result = mysqli_query($db, $query);
  $anons = array();
  while($row = mysqli_fetch_assoc($result)) {
    $anons[] = $row;
}
  //print_r($anons);
 ?>
<div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">

      <div class="active item">
        <div class="container">
          <div class="row">
            
              <div class="span6">

                <div class="carousel-caption">
                      <h1><?=$anons[0]['name']?></h1>
                      <p class="lead"><?=$anons[0]['anons']?></p>
                      <a class="btn btn-large btn-outline text-white" href="#">Batafsil</a>
                </div>

              </div>

                <div class="span6" style="margin-top: 100px"> <img src="rasm/<?=$anons[0]['img']?>"></div>

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