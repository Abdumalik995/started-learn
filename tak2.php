<?php 
$massiv = array('Monitor','Klaviatura','Sichqoncha','Fleshka','Noutbook');
// echo "<pre>";
// print_r($massiv);
// echo "</pre>";
$massiv1 = array(array('Nomi'=>'Monitor', 'Modeli'=>'LG', 'Narxi'=>'100$', 'Soni'=>'4'),
	array('Nomi'=>'Klaviatura', 'Modeli'=>'Keyboard', 'Narxi'=>'12$', 'Soni'=>'8'),
	array('Nomi'=>'Printer', 'Modeli'=>'Canon', 'Narxi'=>'70$', 'Soni'=>'10'),
	array('Nomi'=>'Noutbook', 'Modeli'=>'Lenovo', 'Narxi'=>'300$', 'Soni'=>'3'),

);
// foreach ($massiv as $value) {
// 		//echo "$value"."<br>";
// 	}

?>

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
			    width: 100px;
			    height: 100px;
			    line-height: 100px;
			    background: rgba(0,0,0,0.4);
			    color: #fff;
			    font-size: 15px;
			    box-shadow: 0 0 10px #000;
			    cursor: pointer;
			    margin: 10px;
			}
			#gall div:hover {
				transform: scale(1.2);
				animation-duration: 2s;
				animation-direction: linear;

			}
        </style>
                                
    </head>

    <body>

    	<table border="1" width="400">
    		<th>Nomi</th>
    		<th>Modeli</th>
    		<th>Narxi</th>
    		<th>Soni</th>
    		<?php foreach ($massiv1 as $key => $value) { ?>    			
    		<tr>
    			<td><?php echo $value['Nomi']; ?></td>
    			<td><?php echo $value['Modeli']; ?></td>
    			<td><?php echo $value['Narxi']; ?></td>
    			<td><?php echo $value['Soni']; ?></td>    			
    		</tr>
    	<?php } ?>
    	</table>
   <!--  <h1>Qiymatlar bilan ishlash.</h1>
    
    <div id="gall">
    	<?php foreach ($massiv as $value) { ?>
    		
    	
    		
    	
    	
	    <div>
	    	<?php echo $value; ?>
	    </div>
	<?php } ?>
	   
    </div> -->
    </body>


</html>

