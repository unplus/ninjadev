<?

$yesterday = date('Y-m-d', strtotime('-1 day'));

$token = $_ENV["TOKEN"];

$url = "https://api.shinobi.jp/admax/v2/report/tool/tags?start=" . $yesterday
  . "&end=" . $yesterday;

$headers = array(
  "Authorization: Bearer " . $token,
);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$response =  curl_exec($curl);

var_dump($response);

curl_close($curl);
