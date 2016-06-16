<?php
//$_POST['ref1'];
     $reference_number = 'BOL';//$_POST['ref1'];
     $reference_type = '';//$_POST['ref_type'];
	 //echo 'Your Reference number is :'.$reference_number;
	 //echo '<br>';
   

      if($reference_number == 'BOL'){
             $request = simplexml_load_file('dataservice.xml') or die("Error: Cannot create object");
   		 } else {
             $request = 'Wrong data sent!';
       };

		//$decoded = $response2->data;
		//echo '------';
	    echo $request;
?>