//put URL/IP of yours JSON read/write enabled PowerCable device below
$url = 'http://pc-rest.netio-products.com:22888/netio.json';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'Outputs' =>  array(['ID' => 1, 'Action' => 4])
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

curl_setopt($ch, CURLOPT_USERPWD, "write:demo"); 

//Execute the request
$result = curl_exec($ch);
