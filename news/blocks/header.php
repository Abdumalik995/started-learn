<?php 
include "db.php";
  $query = "SELECT * FROM kategoriya";
  $result = mysqli_query($db, $query);

 ?>
<div id="header-row">
    <div class="container">
      <div class="row">
              <!--LOGO-->
              <div class="span3"><a class="brand" href="#"><img src="img/logo.png"/></a></div>
              <!-- /LOGO -->

            <!-- MAIN NAVIGATION -->  
              <div class="span9">
                <div class="navbar  pull-right">
                  <div class="navbar-inner">
                    <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
                    <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                        <li class="active"><a href="index.php">Asosiy</a></li>
                        <?php while($row = mysqli_fetch_assoc($result)) { ?>                       

                        <li><a href="content.php?id=<?=$row['id']?>"><?=$row['name']?></a></li>
                        <?php } ?>                        
                    
                    </ul>
                  </div>

                  </div>
                </div>
              </div>
            <!-- MAIN NAVIGATION -->  
      </div>
    </div>
  </div>