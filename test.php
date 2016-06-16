<?php
$csvData = file_get_contents('test.csv');
$lines = explode(PHP_EOL, $csvData);
$array = array();
foreach ($lines as $line) {
    $array[] = str_getcsv($line);
}

echo $array[0][0];
echo $array[400][0];
echo '<company_name>'.$array[400][0].'</company_name>';
//print_r($array);

?>