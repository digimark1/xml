<?php
header('Access-Control-Allow-Origin: *');  
   $userid = $_REQUEST['userid'];
   $password = $_REQUEST['password'];
   $request = $_REQUEST['request'];
   $request2 = urldecode($request);
//----

$database = '<?xml version="1.0" encoding="UTF-8"?>
<courier_menu>
	<cpy>
		<name>UPS Shipping Freight</name>
		<address>3264 Lynn Ogden Lane</address>
		<city>Houston, TX</city>
		<phone>409-932-8538</phone>
	</cpy>
	<cpy>
		<name>DHL Global</name>
		<address>440 Edwards Street</address>
		<city>Greenville, NC</city>
		<phone>252-643-8551</phone>
	</cpy>
	<cpy>
		<name>TNT Express Shipping</name>
		<address>483 Illinois Avenue</address>
		<city>Sandy, OR</city>
		<phone>503-668-3265</phone>
	</cpy>
	<cpy>
		<name>FedEx tracking</name>
		<address>256 Rardin Drive</address>
		<city>Burlingame, CA</city>
		<phone>650-696-4930</phone>
	</cpy>
	<cpy>
		<name>US Postal Services</name>
		<address>957 Medical Center Drive</address>
		<city>Tampa, FL</city>
		<phone>941-374-3068</phone>
	</cpy>
</courier_menu>';

if ($userid == 'leanstaffing' && $password == md5('lean2016')){
  
  $company_name = simplexml_load_string($request2);
  $company_name_val = $company_name->group->company;

  			switch ($company_name_val) {
					  	case 'ups':
					  		$result = '<courier_menu>
					  				<ups>
										<name>UPS Shipping Freight</name>
										<address>3264 Lynn Ogden Lane</address>
										<city>Houston, TX</city>
										<phone>409-932-8538</phone>
									</ups>	
					  		</courier_menu>';
					  		break;
					  	case 'dhl':
					  		$result = '<courier_menu>
									  	<dhl>
											<name>DHL Global</name>
											<address>440 Edwards Street</address>
											<city>Greenville, NC</city>
											<phone>252-643-8551</phone>
										</dhl>
					  		</courier_menu>';
					  		break;
					  	case 'tnt':
					  	$result = '<courier_menu>
											<tnt>
												<name>TNT Express Shipping</name>
												<address>483 Illinois Avenue</address>
												<city>Sandy, OR</city>
												<phone>503-668-3265</phone>
											</tnt>
							</courier_menu>';
					  		break;
					     case 'fedex':
					  		$result = '<courier_menu>
											<fedex>
												<name>FedEx tracking</name>
												<address>256 Rardin Drive</address>
												<city>Burlingame, CA</city>
												<phone>650-696-4930</phone>
											</fedex>
							</courier_menu>';
					  		break;
					  	case 'dealtime':
					  		 $result = '<courier_menu>
											<usps>
												<name>US Postal Services</name>
												<address>957 Medical Center Drive</address>
												<city>Tampa, FL</city>
												<phone>941-374-3068</phone>
											</usps>
								</courier_menu>';
					  		break;
					  	case 'all':
					  		$result = $database;
					  		break;

					  	
					  	default:
					  		  $result = 'There is not a company with that name!';
					  		break;
					  }
			echo base64_encode($result);
}else{
			echo base64_encode('There is an error: "Password" or "Userid" incorrect');
}
//echo base64_encode('hallo');
   
    //print_r($request3->data->group->item3);
//----
?>