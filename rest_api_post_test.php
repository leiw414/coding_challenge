<?php
/*-----TESTING REST POST-----*/
test_post();

function test_post() {

   $data_string  = '{"numbers": [5,6,8,7,5]}';
   $ch = curl_init('http://localhost/code/index.php/mmmr');
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
       'Content-Type: application/json',
       'Content-Length: ' . strlen($data_string))
   );

   $result = curl_exec($ch);
   $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
   print "Status: $httpcode" . "\n";
   print "Content-Type: $contenttype" . "\n";
   print "\n" . $result . "\n";
}