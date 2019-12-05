<?php
function upload_media(){
	$img=$_FILES['fileUpload'];
  $filename = $img['tmp_name'];	
  $handle = fopen($filename, 'r');
  $data = fread($handle, filesize($filename));
  $imgbase64 = array('image' => base64_encode($data));

$client_id="b425210eac51813";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.imgur.com/3/image.json",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_FOLLOWLOCATION => false,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $imgbase64,
  CURLOPT_HTTPHEADER => array('Authorization: Client-ID ' . $client_id),
  CURLOPT_SSL_VERIFYHOST=> false,
  CURLOPT_SSL_VERIFYPEER=>false,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
	echo "<h3>curl ERROR</h3>";
} else {
	$decoded = json_decode($response);
	echo "<h3>Image</h3>";
	var_dump( $decoded);
	return $decoded;
}
}
	
?>