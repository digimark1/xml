<?php

function httpPost($url, $params) {
            $postData = '';
            //create name value pairs seperated by &
            foreach ($params as $k => $v) {
                $postData .= $k . '=' . $v . '&';
            }
            rtrim($postData, '&');

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_POST, count($postData));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

            $output = curl_exec($ch);

            curl_close($ch);
            return $output;
        };

 $company_name = 'dhl';
 $params = array(
    "userid" => "leanstaffing",
    "password" => "5a43355749f79253d7f1232b95ddfc77",
    "request" => urlencode("<data>
                                <group>
                                    <company>".$company_name."</company>
                                    <reference>Test</reference>
                                    <id>Test_id</id>
                                </group>
                            </data>")//urlencode($request)
);

       $answer = httpPost("http://leanstaffing.com/xml/data.php?", $params);

        $response = simplexml_load_string($answer);

        $response2 = $response;
        //echo 'Hello';
        echo base64_decode($answer);
        //echo $answer;
        //echo $xml;
?>
