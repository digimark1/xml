<?php
header('Access-Control-Allow-Origin: *');  
   $userid = $_REQUEST['userid'];
   $password = $_REQUEST['password'];
   $request = $_REQUEST['request'];
   $request2 = urldecode($request);
//----

$database = '<?xml version="1.0" encoding="UTF-8"?>
<courier_menu>
	<ups>
		<name>Belgian Waffles</name>
		<price>$5.95</price>
		<description>Two of our famous Belgian Waffles with plenty of real maple syrup</description>
		<calories>650</calories>
	</ups>
	<dhl>
		<name>Strawberry Belgian Waffles</name>
		<price>$7.95</price>
		<description>Light Belgian waffles covered with strawberries and whipped cream</description>
		<calories>900</calories>
	</dhl>
	<tnt>
		<name>Berry-Berry Belgian Waffles</name>
		<price>$8.95</price>
		<description>Light Belgian waffles covered with an assortment of fresh berries and whipped cream</description>
		<calories>900</calories>
	</tnt>
	<fedex>
		<name>French Toast</name>
		<price>$4.50</price>
		<description>Thick slices made from our homemade sourdough bread</description>
		<calories>600</calories>
	</fedex>
	<dealtime>
		<name>Homestyle Breakfast</name>
		<price>$6.95</price>
		<description>Two eggs, bacon or sausage, toast, and our ever-popular hash browns</description>
		<calories>950</calories>
	</dealtime>
</courier_menu>';

if ($userid == 'leanstaffing' && $password == md5('lean2016')){
  
  $company_name = simplexml_load_string($request2);
  $company_name_val = $company_name->group->company;

  			switch ($company_name_val) {
					  	case 'ups':
					  		$result = '<courier_menu>
					  				<ups>
										<name>UPS Belgian Waffles</name>
										<price>$5.95</price>
										<description>Two of our famous Belgian Waffles with plenty of real maple syrup</description>
										<calories>650</calories>
									</ups>	
					  		</courier_menu>';
					  		break;
					  	case 'dhl':
					  		$result = '<courier_menu>
									  	<dhl>
											<name>DHL Strawberry Belgian Waffles</name>
											<price>$7.95</price>
											<description>Light Belgian waffles covered with strawberries and whipped cream</description>
											<calories>900</calories>
										</dhl>
					  		</courier_menu>';
					  		break;
					  	case 'tnt':
					  	$result = '<courier_menu>
					  		  	<tnt>
									<name>TNT Berry-Berry Belgian Waffles</name>
									<price>$8.95</price>
									<description>Light Belgian waffles covered with an assortment of fresh berries and whipped cream</description>
									<calories>900</calories>
								</tnt>
							</courier_menu>';
					  		break;
					     case 'fedex':
					  		$result = '<courier_menu>
					  		  	<fedex>
										<name>FEDEX French Toast</name>
										<price>$4.50</price>
										<description>Thick slices made from our homemade sourdough bread</description>
										<calories>600</calories>
									</fedex>
							</courier_menu>';
					  		break;
					  	case 'dealtime':
					  		 $result = '<courier_menu>
					  		  				<dealtime>
												<name>DEALTIME Homestyle Breakfast</name>
												<price>$6.95</price>
												<description>Two eggs, bacon or sausage, toast, and our ever-popular hash browns</description>
												<calories>950</calories>
											</dealtime>
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