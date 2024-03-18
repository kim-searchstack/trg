<?php
$bullhorn_user_id = get_post_meta( 9999999999999, 'bullhorn_user_id');
$bullhorn_user_sc = get_post_meta( 9999999999999, 'bullhorn_user_sc');
$un = get_post_meta( 9999999999999, 'un');
$pw = get_post_meta( 9999999999999, 'pw');
$pwd = urlencode($pw[0]);
$r_uri = get_post_meta( 9999999999999, 'r_uri');
$r_uri1 = urlencode($r_uri[0]);
$login = get_post_meta( 9999999999999, 'logininfo');
 $bullhorn_bhRestToken = get_post_meta( 9999999999999, 'bullhorn_bhRestToken');
 //print_r($bullhorn_bhRestToken);
if(empty($bullhorn_bhRestToken[0]) || is_null($bullhorn_bhRestToken[0])){




//setup the request, you can also use CURLOPT_URL

$sql = "https://auth-emea.bullhornstaffing.com/oauth/authorize?client_id=$bullhorn_user_id[0]&client_secret=$bullhorn_user_sc[0]&response_type=code&redirect_uri=$r_uri1&state=55555555&action=Login&username=$un[0]&password=$pwd";
$ch = curl_init($sql);

// Returns the data/output as a string instead of raw data
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Set your auth headers
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   'Content-Type: application/json',
   
   'Accept: application/json'
   ));

// get stringified data/output. See CURLOPT_RETURNTRANSFER
$data = curl_exec($ch);
//print_r($data);
// get info about the request
 $info = curl_getinfo($ch);
// echo '<pre>';
//print_r($info['redirect_url']);
 
 $string = $info['redirect_url'];
$start_pos = strpos($string, 'code=');
$end_pos = strpos($string, '&client_id=');

$substring = substr($string, $start_pos+5, $end_pos - $start_pos + strlen($end_pos)-5);
//echo '<br>'.$substring;

// close curl resource to free up system resources
curl_close($ch);
//
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://auth-emea.bullhornstaffing.com/oauth/token?grant_type=authorization_code&code=$substring&client_id=$bullhorn_user_id[0]&client_secret=$bullhorn_user_sc[0]&redirect_uri=$r_uri1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/octet-stream',
    'Content-Transfer-Encoding: Binary',
    'Content-disposition: basename($request_url)',
    'response_type: code',
    'Cookie: JSESSIONID=F24DE47EF1058AAADCE88C5E16F1043B'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
 

$dd = json_decode($response);
 $access_token = $dd->access_token;
 $refresh_token = $dd->refresh_token;
 

update_post_meta( 9999999999999, 'bullhorn_bhRestToken',$refresh_token );

}

?>


