<?php
header('Content-Type: text/xml');
$csvData = file_get_contents('test.csv');
$lines = explode(PHP_EOL, $csvData);
$array = array();
foreach ($lines as $line) {
    $array[] = str_getcsv($line);
}
$template ="<?xml version='1.0' encoding='UTF-8'?><!-- The characters within this tag syntax are comments and will not be read by the loader.-->
<!-- All tag are required unless specified otherwise.If a tag is not required, its contents may be blank.-->
<!-- XML documents require a root element, in this case 'MercuryGate'. -->
<MercuryGate>
	<!-- The Header section (i.e. opening and closign tag) provides information
	to the importer, regarding where/how to load, the document -->
	<Header>
		<!-- Sender (Optional) -->
		<SenderID>MySenderId</SenderID>
		<!-- Receiver (Optional) -->
		<ReceiverID>MyResceiverId</ReceiverID>
		<!-- The Action Tag determines what action to perform for this import. 
			'Add' adds the carrier if not found or throws an error if carrier already exists. 
			'Update' updates the carrier if found in the hierarchy or throws an error if the carrier is not found. 
		-->
		<Action>Add</Action>
		<!--Type of Object in the system which this document represents-->
		<DocTypeID>Carrier</DocTypeID>
		<!--Document Index Default to 1 -->
		<DocCount>1</DocCount>
		<!--The Date and Time for which this document was created -->
		<Date type='created'>04/29/2004 10:00</Date>
	</Header>
	<!-- Closing tag for the Header section -->
	<!-- Specify one or more carriers within the 'Carriers' tag.-->
	<Carriers>
		<!-- Represents a carrier with the specified attributes in the system. 
			The 'CustomerAcctNum' value is the account number of the enterprise for which this carrier will load. This value overrides the Global Receiver Id specified above..-->
		<Carrier name='Acme Transport' mcNum='MCNum01' active='true' action='' airDimNum='AirDim01' scac='ACME' fedEin='FEDEIN01' customerAcctNum='MercuryGateAcct01' usdotNum='' carrierId='CarrierID-01' dunsNum='Duns01'>
			<!-- Specify One or more References if needed -->
			<ReferenceNumbers>
				<ReferenceNumber type='RefTypeOne'>1234</ReferenceNumber>
				<ReferenceNumber type='RefTypeTwo'>5678</ReferenceNumber>
				<ReferenceNumber type='RefTypeThree'>90123</ReferenceNumber>
			</ReferenceNumbers>
			<!-- Specify One or more modes if needed -->
			<Modes>
				<Mode type='Truckload'/>
				<Mode type='External Carrier'/>
			</Modes>
			<!-- Specify None, One, or more equipment codes. -->
			<Equipment>
				<EquipmentCode description='AIRRIDE'>A</EquipmentCode>
				<EquipmentCode description='VAN'>V</EquipmentCode>
			</Equipment>
			<!-- Specify One or more Hazmats if needed -->
			<HazMats>
				<HazMat type=''/>
				<HazMat type=''/>
			</HazMats>
			<!-- Specify one or more insurance types if needed -->
			<InsuranceTypes>
				<Insurance type='General' amount='10000.00' company='GeneralIns' contactName='John Smith' contactPhone='111-222-3333' expirationDate='11/29/2008 00:00'/>
			</InsuranceTypes>
			<!-- TenderConfiguration (Optional) specify type = None or Email or Electronic -->
			<TenderConfiguration type='Email'>
				<PROSequence>			SequenceID		</PROSequence>
				<EmailTo>			abbbb@aol.org		</EmailTo>
				<!-- required if type=Email.  Applies only if type=Email. -->
				<EmailFrom>			aacccc@aol.org		</EmailFrom>
				<!-- required if type=Email Applies only if type=Email.  -->
				<EmailBody>			Please respond ASAP.	</EmailBody>
				<!-- Applies only if type=Email -->
				<HideRateInTender>		true			</HideRateInTender>
				<!-- optional.  default is false -->
				<AllowSendTenderRevokeMsgs>	true			</AllowSendTenderRevokeMsgs>
				<!-- optional.  default is false -->
				<AutoAccept>			true			</AutoAccept>
				<!-- optional.  default is false -->
				<EarliestTenderTime>		06:00			</EarliestTenderTime>
				<!-- optional.  HH:mm format -->
				<LatestTenderTime>		18:00			</LatestTenderTime>
				<!-- optional. -->
				<TenderTimeZone>		Western			</TenderTimeZone>
				<!-- optional.  Code value in TimeZones codes table -->
			</TenderConfiguration>
			<!-- Specify None, One, or more locations. -->
			<Locations>
				<!-- One or more Address tags represent a location in the system. -->
				<Address type='Carrier' isPrimary='true'>
					<ReferenceNumbers>
						<ReferenceNumber type='Account Number'>Mercury01</ReferenceNumber>
					</ReferenceNumbers>
					<LocationCode>MGLOC1</LocationCode>
					<Alias/>
					<Name>MercuryGate</Name>
					<AddrLine1>2410 Reliance Ave</AddrLine1>
					<City>Apex</City>
					<StateProvince>NC</StateProvince>
					<PostalCode>27539</PostalCode>
					<CountryCode>USA</CountryCode>
					<Contacts>
						<Contact type='CSR'>
							<Name>Steve Blough</Name>
							<ContactMethods>
								<ContactMethod type='phone' sequenceNum='1'>919-303-8047</ContactMethod>
								<ContactMethod type='fax' sequenceNum='2'>919-303-1719</ContactMethod>
							</ContactMethods>
						</Contact>
					</Contacts>
					<!-- TenderConfiguration on carrier location (Optional) specify type = None or Email or Electronic -->
					<TenderConfiguration type='Email'>
						<PROSequence>			SequenceID		</PROSequence>
						<EmailTo>			abbbb@aol.org		</EmailTo>
						<!-- required if type=Email.  Applies only if type=Email. -->
						<EmailFrom>			aacccc@aol.org		</EmailFrom>
						<!-- required if type=Email.  Applies only if type=Email.  -->
						<EmailBody>			Please respond ASAP.	</EmailBody>
						<!-- optional.  Applies only if type=Email -->
						<HideRateInTender>		true			</HideRateInTender>
						<!-- optional.  default is false -->
						<AllowSendTenderRevokeMsgs>	true			</AllowSendTenderRevokeMsgs>
						<!-- optional.  default is false -->
						<AutoAccept>			true			</AutoAccept>
						<!-- optional.  default is false -->
						<EarliestTenderTime>		06:00			</EarliestTenderTime>
						<!-- optional.  use 17:00 format if enterprise configured for military time, else 05:00 pm -->
						<LatestTenderTime>		18:00			</LatestTenderTime>
						<!-- optional.  use 17:00 format if enterprise configured for military time, else 05:00 pm -->
						<TenderTimeZone>		Western			</TenderTimeZone>
						<!-- optional.  Code value in TimeZones codes table -->
					</TenderConfiguration>
				</Address>
			</Locations>
		</Carrier>
		<Carrier>
			<!-- Multilple Carriers may be specified -->
		</Carrier>
	</Carriers>
</MercuryGate>";

$header = "<!-- The characters within this tag syntax are comments and will not be read by the loader.-->
<!-- All tag are required unless specified otherwise.If a tag is not required, its contents may be blank.-->
<!-- XML documents require a root element, in this case 'MercuryGate'. -->
<MercuryGate>
	<!-- The Header section (i.e. opening and closign tag) provides information
	to the importer, regarding where/how to load, the document -->
	<Header>
		<!-- Sender (Optional) -->
		<SenderID>MySenderId</SenderID>
		<!-- Receiver (Optional) -->
		<ReceiverID>MyResceiverId</ReceiverID>
		<!-- The Action Tag determines what action to perform for this import. 
			'Add' adds the carrier if not found or throws an error if carrier already exists. 
			'Update' updates the carrier if found in the hierarchy or throws an error if the carrier is not found. 
		-->
		<Action>Add</Action>
		<!--Type of Object in the system which this document represents-->
		<DocTypeID>Carrier</DocTypeID>
		<!--Document Index Default to 1 -->
		<DocCount>1</DocCount>
		<!--The Date and Time for which this document was created -->
		<Date type='created'>04/29/2004 10:00</Date>
	</Header>
	<Carriers>
		<!-- Represents a carrier with the specified attributes in the system. 
			The 'CustomerAcctNum' value is the account number of the enterprise for which this carrier will load. This value overrides the Global Receiver Id specified above..-->";

//echo $header;
$xml_string .= $header;

for ($i=0; $i < count($array); $i++) { 
	$carrier = "<Carrier name='".$array[$i][0]."' mcNum='".$array[$i][5]."' active='true' action='' airDimNum='AirDim01' scac='ACME' fedEin='FEDEIN01' customerAcctNum='MercuryGateAcct01' usdotNum='' carrierId='CarrierID-01' dunsNum='Duns01'>
			<!-- Specify One or more References if needed -->
			<ReferenceNumbers>
				<ReferenceNumber type='RefTypeOne'>1234</ReferenceNumber>
				<ReferenceNumber type='RefTypeTwo'>5678</ReferenceNumber>
				<ReferenceNumber type='RefTypeThree'>90123</ReferenceNumber>
			</ReferenceNumbers>
			<!-- Specify One or more modes if needed -->
			<Modes>
				<Mode type='Truckload'/>
				<Mode type='External Carrier'/>
			</Modes>
			<!-- Specify None, One, or more equipment codes. -->
			<Equipment>
				<EquipmentCode description='AIRRIDE'>A</EquipmentCode>
				<EquipmentCode description='VAN'>V</EquipmentCode>
			</Equipment>
			<!-- Specify One or more Hazmats if needed -->
			<HazMats>
				<HazMat type=''/>
				<HazMat type=''/>
			</HazMats>
			<!-- Specify one or more insurance types if needed -->
			<InsuranceTypes>
				<Insurance type='General' amount='10000.00' company='GeneralIns' contactName='John Smith' contactPhone='111-222-3333' expirationDate='11/29/2008 00:00'/>
			</InsuranceTypes>
			<!-- TenderConfiguration (Optional) specify type = None or Email or Electronic -->
			<TenderConfiguration type='Email'>
				<PROSequence>			SequenceID		</PROSequence>
				<EmailTo>			abbbb@aol.org		</EmailTo>
				<!-- required if type=Email.  Applies only if type=Email. -->
				<EmailFrom>			aacccc@aol.org		</EmailFrom>
				<!-- required if type=Email Applies only if type=Email.  -->
				<EmailBody>			Please respond ASAP.	</EmailBody>
				<!-- Applies only if type=Email -->
				<HideRateInTender>		true			</HideRateInTender>
				<!-- optional.  default is false -->
				<AllowSendTenderRevokeMsgs>	true			</AllowSendTenderRevokeMsgs>
				<!-- optional.  default is false -->
				<AutoAccept>			true			</AutoAccept>
				<!-- optional.  default is false -->
				<EarliestTenderTime>		06:00			</EarliestTenderTime>
				<!-- optional.  HH:mm format -->
				<LatestTenderTime>		18:00			</LatestTenderTime>
				<!-- optional. -->
				<TenderTimeZone>		Western			</TenderTimeZone>
				<!-- optional.  Code value in TimeZones codes table -->
			</TenderConfiguration>
			<!-- Specify None, One, or more locations. -->
			<Locations>
				<!-- One or more Address tags represent a location in the system. -->
				<Address type='Carrier' isPrimary='true'>
					<ReferenceNumbers>
						<ReferenceNumber type='Account Number'>Mercury01</ReferenceNumber>
					</ReferenceNumbers>
					<LocationCode>MGLOC1</LocationCode>
					<Alias/>
					<Name>MercuryGate</Name>
					<AddrLine1>2410 Reliance Ave</AddrLine1>
					<City>".$array[$i][1]."</City>
					<StateProvince>".$array[$i][2]."</StateProvince>
					<PostalCode>27539</PostalCode>
					<CountryCode>".$array[$i][3]."</CountryCode>
					<Contacts>
						<Contact type='CSR'>
							<Name>Steve Blough</Name>
							<ContactMethods>
								<ContactMethod type='phone' sequenceNum='1'>".$array[$i][8]."</ContactMethod>
								<ContactMethod type='fax' sequenceNum='2'>".$array[$i][8]."</ContactMethod>
							</ContactMethods>
						</Contact>
					</Contacts>
					<!-- TenderConfiguration on carrier location (Optional) specify type = None or Email or Electronic -->
					<TenderConfiguration type='Email'>
						<PROSequence>			SequenceID		</PROSequence>
						<EmailTo>		".$array[$i][10]."		</EmailTo>
						<!-- required if type=Email.  Applies only if type=Email. -->
						<EmailFrom>			".$array[$i][10]."		</EmailFrom>
						<!-- required if type=Email.  Applies only if type=Email.  -->
						<EmailBody>			Please respond ASAP.	</EmailBody>
						<!-- optional.  Applies only if type=Email -->
						<HideRateInTender>		true			</HideRateInTender>
						<!-- optional.  default is false -->
						<AllowSendTenderRevokeMsgs>	true			</AllowSendTenderRevokeMsgs>
						<!-- optional.  default is false -->
						<AutoAccept>			true			</AutoAccept>
						<!-- optional.  default is false -->
						<EarliestTenderTime>		06:00			</EarliestTenderTime>
						<!-- optional.  use 17:00 format if enterprise configured for military time, else 05:00 pm -->
						<LatestTenderTime>		18:00			</LatestTenderTime>
						<!-- optional.  use 17:00 format if enterprise configured for military time, else 05:00 pm -->
						<TenderTimeZone>		Western			</TenderTimeZone>
						<!-- optional.  Code value in TimeZones codes table -->
					</TenderConfiguration>
				</Address>
			</Locations>
		</Carrier>";
		//echo $carrier;
		$xml_string .= $carrier;
}

$footer = "</Carriers>
</MercuryGate>";

//echo $footer;
$xml_string .= $footer;
echo $xml_string;
//echo $array[400][0];
//echo '<company_name>'.$array[400][0].'</company_name><br>';
//echo '<counter>'.count($array).'</counter>';
//print_r($array);

?>