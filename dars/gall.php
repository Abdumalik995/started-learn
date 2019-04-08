
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>
            Vazifa
        </title>        
        
        <link href="" rel="stylesheet" type="text/css">
        <style type="">
        	body {
        		background: lightblue;
        		text-align: center;
        	}
        	#gall {
			    display: flex;
			    justify-content: space-around;
			    flex-wrap: wrap;
			    
			}
			#gall div {
			    width: 70px;
			    height: 70px;
			    line-height: 70px;
			    background: rgba(0,0,0,0.4);
			    color: #fff;
			    font-size: 30px;
			    box-shadow: 0 0 10px #000;
			    cursor: pointer;
			    margin: 10px;
			}
			#gall div:hover {
				transform: scale(1.4);
				transition-duration: 2s;
				
			}
			.matn {
				border-radius: 50%;
			}
        </style>
                                
    </head>

    <body>
    <h1>Qiymatlar bilan ishlash.</h1>
    
    <div id="gall">
    	<?php for ($i=12; $i >=1 ; $i--) { ?>
    		    	
	    <div class="matn">
	    	<?php echo $i; ?>
	    </div>
	<?php } ?>
	   
    </div>
    </body>


</html>

