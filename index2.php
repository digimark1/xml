<?php
$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");

/*$xml=simplexml_load_string("<?xml version='1.0' encoding='utf-8' ?>
	<note>
		<to>Tove</to>
		<from>Jani</from>
		<heading>Reminder</heading>
		<body>Dont forget me this weekend!</body>
		<to>break dance</to>
		</note>") or die("Error: Cannot create object");*/

echo $xml->to[1] . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body."<br>";
$split_test = $xml->body;
$split_test_text = explode(",", $split_test);
echo $split_test_text. "<br>";

if(count($split_test_text)>1){
	echo "More Than one<br>";
}else{
	echo "Just one<br>";
};
echo $split_test_text[0]. "yy<br>";
echo $split_test_text[1]. "xx<br>";
print_r($xml);
?>