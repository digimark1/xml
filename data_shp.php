<?php
header('Access-Control-Allow-Origin: *');  
   $userid = $_REQUEST['userid'];
   $password = $_REQUEST['password'];
   $request = $_REQUEST['request'];
   $request2 = urldecode($request);
//----

$database = '<?xml version="1.0" encoding="UTF-8"?>
<shipment_menu>
	<shp>
		<name>Shipment 1</name>
		<item>14 Pallets</item>
		<contact_phone>843-488-0858</contact_phone>
		<origin>Conway, SC</origin>
		<destination>Boston, MA</destination>
	</shp>
	<shp>
		<name>Shipment 2</name>
		<item>3 Skids</item>
		<contact_phone>818-529-8027</contact_phone>
		<origin>Westbury, NY</origin>
		<destination>Houston, TX</destination>
	</shp>
	<shp>
		<name>Shipment 3</name>
		<item>8 Pallets</item>
		<contact_phone>850-305-3235</contact_phone>
		<origin>Richmond, VA</origin>
		<destination>Clay, NY</destination>
	</shp>
	<shp>
		<name>Shipment 4</name>
		<item>9 Drums</item>
		<contact_phone>559-792-6374</contact_phone>
		<origin>Dickson, TN</origin>
		<destination>Mount Vernon, IL</destination>
	</shp>
	<shp>
		<name>Shipment 5</name>
		<item>20 Cartons</item>
		<contact_phone>703-502-0948</contact_phone>
		<origin>Union City, CA</origin>
		<destination>Centerville, VA</destination>
	</shp>
</shipment_menu>';

if ($userid == 'leanstaffing' && $password == md5('lean2016')){
  
  $company_name = simplexml_load_string($request2);
  $company_name_val = $company_name->group->shipment;

  			switch ($company_name_val) {
					  	case 'shp1':
					  		$result = '<shipment_menu>
										<shp1>
											<name>Shipment1</name>
											<item>14 Pallets</item>
											<contact_phone>843-488-0858</contact_phone>
											<origin>Conway, SC</origin>
											<destination>Boston, MA</destination>
										</shp1>
					  		</shipment_menu>';
					  		break;
					  	case 'shp2':
					  		$result = '<shipment_menu>
										<shp2>
											<name>Shipment2</name>
											<item>3 Skids</item>
											<contact_phone>818-529-8027</contact_phone>
											<origin>Westbury, NY</origin>
											<destination>Houston, TX</destination>
										</shp2>
					  		</shipment_menu>';
					  		break;
					  	case 'shp3':
					  	$result = '<shipment_menu>
										<shp3>
											<name>Shipment3</name>
											<item>8 Pallets</item>
											<contact_phone>850-305-3235</contact_phone>
											<origin>Richmond, VA</origin>
											<destination>Clay, NY</destination>
										</shp3>
							</shipment_menu>';
					  		break;
					     case 'shp4':
					  		$result = '<shipment_menu>
											<shp4>
												<name>Shipment 4</name>
												<item>9 Drums</item>
												<contact_phone>559-792-6374</contact_phone>
												<origin>Dickson, TN</origin>
												<destination>Mount Vernon, IL</destination>
											</shp4>
							</shipment_menu>';
					  		break;
					  	case 'shp5':
					  		 $result = '<shipment_menu>
												<shp5>
													<name>Shipment 5</name>
													<item>20 Cartons</item>
													<contact_phone>703-502-0948</contact_phone>
													<origin>Union City, CA</origin>
													<destination>Centerville, VA</destination>
												</shp5>
								</shipment_menu>';
					  		break;
					  	case 'all':
					  		$result = $database;
					  		break;

					  	
					  	default:
					  		  $result = 'There is not a shipment with that name!';
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