<?php 
header("Content-Type: text/html; charset=utf-8");
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		include "db.php";

		
  		$query = "SELECT * FROM content WHERE cat_id=$id";
  		$query2 = "SELECT * FROM kategoriya WHERE id=$id";
		$result = mysqli_query($db, $query);
		$result2 = mysqli_query($db, $query2);
		$row2 = mysqli_fetch_assoc($result2);

		$massiv = array();	
		while($row = mysqli_fetch_assoc($result)) {
		$massiv[] = $row;
		}
		/*if($result) {
			echo "yest";
		} else {
			echo "yy";
		}*/
 
	} else {
		die();
	}
 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ShapeBootstrap Clean Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> 
    
    <!--Font-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
    
    
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
      
      <!-- Fav and touch icons -->
      <link rel="shortcut icon" href="ico/favicon.ico">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">


      

    <!-- SCRIPT 
    ============================================================-->  
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
      
      
  </head>
  <body>
    <div class="width=100% height=100% align-left">      
    </div>
    <div class="width=100% height=100% align-left"></div><div class="align-left"></div><div style="position:absolute;left:-3072px;top:0"><a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#108;&#105;&#110;&#105;&#121;&#97;&#111;&#107;&#111;&#110;&#46;&#114;&#117;">&#1086;&#1082;&#1085;&#1072;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#112;&#114;&#101;&#109;&#105;&#117;&#109;&#107;&#97;&#100;&#114;&#46;&#114;&#117;">&#1092;&#1086;&#1090;&#1086;&#1075;&#1088;&#1072;&#1092;</a> <!-- div --><!-- div end --> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#117;&#110;&#105;&#115;&#104;&#97;&#98;&#108;&#111;&#110;.&#99;&#111;&#109;">html php</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#114;&#105;&#116;&#117;&#97;&#108;&#103;&#97;&#114;&#97;&#110;&#116;&#46;&#114;&#117;">&#1087;&#1072;&#1084;&#1103;&#1090;&#1085;&#1080;&#1082;&#1080;</a> <a href="&#104;&#116;&#116;&#112;&#58;&#47;&#47;&#116;&#117;&#116;&#108;&#111;&#118;&#101;&#46;&#114;&#117;">&#1079;&#1085;&#1072;&#1082;&#1086;&#1084;&#1089;&#1090;&#1074;&#1072;</a></div><div class="padding valign-image-left"></div><div class="padding  valign-image-right"></div><div class="padding valign-image-center"></div>
<!--HEADER ROW-->
  <?php 
    include_once('blocks/header.php');
   ?>
  <!-- /HEADER ROW -->



  <div class="container">

  <!--Carousel
  ==================================================-->
  <?php 
    include_once('blocks/slider.php');
   ?>
  
    <!-- /Carousel -->



<!-- Feature 
  ==============================================-->

 <div class="row feature-box">
      <div class="span12 cnt-title">
       <h1><?php echo $row2['name']?> yangiliklari</h1> 
             
      </div>
      <?php foreach ($massiv as $value) { ?>
      	 <div class="span4">
      	 	<img src="rasm/<?=$value['img']?>">
      	 </div>
      <?php } ?>
     
        <img src="img/icon3.png">
        <h2>Feature A</h2>
        <p>
            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
        </p>

        <a href="#">Read More &rarr;</a>

      </div>

      <div class="span4">
        <img src="img/icon2.png">
        <h2>Feature B</h2>
        <p>
            Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
            aliqua. 
        </p>   
          <a href="#">Read More &rarr;</a>    
      </div>

      <div class="span4">
        <img src="img/icon1.png">
        <h2>Feature C</h2>
        <p>
            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. 
        </p>
          <a href="#">Read More &rarr;</a>
      </div>
  </div>


<!-- /.Feature -->

  <div class="hr-divider"></div>

<!-- Row View -->

<?php 
    include_once('blocks/f_block.php');
   ?>
  
</div>


<!-- /.Row View -->



<!--Footer
==========================-->
  <?php 
    include_once('blocks/footer.php');
   ?>


<!--/.Footer-->

  </body>
</html>