<?php 
$friends = array(array('ismi'=>'Muh','yoshi'=>'24','kasbi'=>'mebelchi'),
	array('ismi'=>'Islom','yoshi'=>'23','kasbi'=>'fermer'),
	array('ismi'=>'Sherzod','yoshi'=>'23','kasbi'=>'Shafyor'),
	array('ismi'=>'Zafar', 'yoshi'=>'24','kasbi'=>'Chorvador'),
	array('ismi'=>'Otash', 'yoshi'=>'24','kasbi'=>'Loyihalovchi'));
//print_r($friends);


 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <title>
            Jadval php
        </title>        
        
        <link href="" rel="stylesheet" type="text/css">
        <style type="text/css">
        	/*body{
        		display: flex;
        		justify-content: space-between;
        	}*/
        	div {

        		width: 100px;
        		height: 100px;
        		border: 1px solid #abcaaa;
        		float: left;
        		margin: 10px;
        		line-height: 50px;
        		text-align: center;
        	}
        </style>
                                
    </head>

    <body>    
    	<?php for ($i=5; $i <=8; $i++) { ?>    		    	
	    <div>
	    	<p><?php echo $i; ?></p>
	    </div>
		<?php } ?>
	   
    	<table border="1" width="400">
    		<?php for ($i=1; $i<=3 ; $i++) { ?>
    			<th><?php echo $i ?></th>
    		<?php } ?> 
    		
    		<?php foreach ($friends as  $value) { ?>    			
    		<tr>
    			<td><?php echo $value['ismi']; ?></td>
    			<td><?php echo $value['yoshi']; ?></td>
    			<td><?php echo $value['kasbi']; ?></td>
    			   			
    		</tr>
    		<?php } ?>
    	
    	</table>
    </body>


</html>

