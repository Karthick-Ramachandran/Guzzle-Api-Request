<?php

class Controller extends Controller

{
    public function api(){

$client = new \GuzzleHttp\Client(); 

$res = $client->request('GET', 'http://postalpincode.in/api/pincode/630002')->getBody();


$obj = json_decode($res, true);
$dta = $obj['PostOffice'];


$data = json_decode(json_encode($dta), true);

$val = $data[0];

$output = $val['Taluk'];

return response()->json($output);


}

}


// return $res->getBody()->getContents(); which is important 
