<?php 

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.quikr.com/public/adsByCategory?categoryId=32",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "x-quikr-app-id: 510",
    "x-quikr-signature: 629604e8414e5241e6cf1df649a76757a034a6f5",
    "x-quikr-token-id: 3067847"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $result = json_decode($response,true);
  // var_dump($result); 
  // $result = json_decode($response);
  echo ($response);
  // echo "alert(" . $result["AdsByCategoryResponse"]["AdsByCategoryData"]["docs"][0]["attribute_Ad_Type"] . ")";;
}

?>