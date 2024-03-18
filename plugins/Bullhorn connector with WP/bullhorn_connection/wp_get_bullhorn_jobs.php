<?php
include('client_info.php');
$bullhorn_bhRestToken = get_post_meta( 9999999999999, 'bullhorn_bhRestToken');
$refresh_token = $bullhorn_bhRestToken[0];
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://rest-emea.bullhornstaffing.com/oauth/token?grant_type=refresh_token&refresh_token=$refresh_token&client_id=$bullhorn_user_id[0]&client_secret=$bullhorn_user_sc[0]",
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

$response1 = curl_exec($curl);

curl_close($curl);
//echoecho $response1.'<br>';need to add code 
$ddd = json_decode($response1);
 $access_token = $ddd->access_token;
 $refresh_token = $ddd->refresh_token;
 //print_r($ddd);
 //if(property_exists($dd2, 'errorCode')){
 if (property_exists($ddd,"error"))
  {
 //echo 'hihihih';
$bullhorn_user_id = get_post_meta( 9999999999999, 'bullhorn_user_id');
$bullhorn_user_sc = get_post_meta( 9999999999999, 'bullhorn_user_sc');
$un = get_post_meta( 9999999999999, 'un');
$pw = get_post_meta( 9999999999999, 'pw');
$pwd = urlencode($pw[0]);
$r_uri = get_post_meta( 9999999999999, 'r_uri');
$r_uri1 = urlencode($r_uri[0]);
$login = get_post_meta( 9999999999999, 'logininfo');


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
$bullhorn_bhRestToken = get_post_meta( 9999999999999, 'bullhorn_bhRestToken');
$refresh_token = $bullhorn_bhRestToken[0];
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://rest-emea.bullhornstaffing.com/oauth/token?grant_type=refresh_token&refresh_token=$refresh_token&client_id=$bullhorn_user_id[0]&client_secret=$bullhorn_user_sc[0]",
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

$response1 = curl_exec($curl);

curl_close($curl);
//echo $response1.'<br>';
$ddd = json_decode($response1);
 $access_token = $ddd->access_token;
 $refresh_token = $ddd->refresh_token;
update_post_meta( 9999999999999, 'bullhorn_bhRestToken',$refresh_token );
//echo 'dddddddddddddddddddddddddddddd';
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rest-emea.bullhornstaffing.com/rest-services/login?version=*&access_token='.$access_token,
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

$response1 = curl_exec($curl);

curl_close($curl);
//echo $response1.'<br>';


$dd2 = json_decode($response1);
$bullhorn_user_id = get_post_meta( 9999999999999, 'bullhorn_user_id');
$bullhorn_user_sc = get_post_meta( 9999999999999, 'bullhorn_user_sc');
$un = get_post_meta( 9999999999999, 'un');
$pw = get_post_meta( 9999999999999, 'pw');
$pwd = urlencode($pw[0]);
$r_uri = get_post_meta( 9999999999999, 'r_uri');
$r_uri1 = urlencode($r_uri[0]);
$login = get_post_meta( 9999999999999, 'logininfo');
$bullhorn_bhRestToken = get_post_meta( 9999999999999, 'bullhorn_bhRestToken');
		
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://rest-emea.bullhornstaffing.com/oauth/token?grant_type=refresh_token&refresh_token=$refresh_token&client_id=$bullhorn_user_id[0]&client_secret=$bullhorn_user_sc[0]",
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

$response1 = curl_exec($curl);

curl_close($curl);
//echoecho $response1.'<br>';need to add code 
$ddd = json_decode($response1);
 $access_token = $ddd->access_token;
 $refresh_token = $ddd->refresh_token;
 //print_r($ddd);

  }
update_post_meta( 9999999999999, 'bullhorn_bhRestToken',$refresh_token );
//echo 'dddddddddddddddddddddddddddddd';
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rest-emea.bullhornstaffing.com/rest-services/login?version=*&access_token='.$access_token,
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

$response1 = curl_exec($curl);

curl_close($curl);
//echo $response1.'<br>';


$dd2 = json_decode($response1);
//echo '<pre>';print_r($dd2);echo '</pre>';//$dd2->errorCode
if(property_exists($dd2, 'errorCode')){
	if($dd2->errorCode == 500){
		include('bullhorn_token_access_connection_renew.php');

}
}
$bhRestToken = $dd2->BhRestToken;
$url = $dd2->restUrl;

//update_post_meta( 9999999999999, 'BhRestToken',$bhRestToken );



$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => $url."/query/JobOrder?fields=id,onSite,isPublic,isDeleted,title,address,description,location,salary,publicDescription,startDate,status,clientCorporation,owner,clientContact&where=isOpen=true%20AND%20isPublic=1&count=500&sort=-dateAdded&BhRestToken=".$bhRestToken,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/octet-stream',
    'Content-Transfer-Encoding: Binary',
    'Content-disposition: basename($request_url)',
    'response_type: code',
    'BhRestToken: '.$bhRestToken
  ),
));

$response_count = curl_exec($curl);

curl_close($curl);

$rescount = json_decode($response_count);


//echo '<pre>mnmnmnmnmn';
//print_r($rescount);
$job_total = $rescount->count;
$query_count = intval($job_total/500);

for($j=0;$j<=$query_count;$j++){ 
	$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => $url."/query/JobOrder?fields=id,onSite,title,isPublic,isDeleted,address,description,location,salary,publicDescription,startDate,status,clientCorporation,owner,clientContact&count=500&start=".$j."&where=isOpen=true%20AND%20isPublic=1&sort=-dateAdded&BhRestToken=".$bhRestToken,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/octet-stream',
    'Content-Transfer-Encoding: Binary',
    'Content-disposition: basename($request_url)',
    'response_type: code',
    'BhRestToken: '.$bhRestToken
  ),
));

$response = curl_exec($curl);

curl_close($curl);

$res = json_decode($response);
$cc=$res->count;
//echo '<pre>';

//print_r($res->count);

global $wpdb;
$table_prefix_postmeta = $wpdb->prefix . "postmeta";
 

for($i=0;$cc>$i;$i++){
	$bull_id = $res->data[$i]->id;
	global $wpdb;
	$table_prefix_postmeta = $wpdb->prefix . "postmeta";
	$sqlbid = "SELECT * FROM `$table_prefix_postmeta` WHERE `meta_key` = '_job_bullhorn_id' and `meta_value` = '$bull_id'";
	global $wpdb;
	$resultjob_term_ids = $wpdb->get_results($sqlbid);
	//echo '$rowcount = '.$wpdb->num_rows;
	 $rowcount = $wpdb->num_rows;
	 if($wpdb->num_rows){ //echo '<br>';
		 //print_r($resultjob_term_ids);
		 $pidd =  $resultjob_term_ids[0]->post_id;
		//wp_delete_post($pidd);
		$p = get_post($pidd);//echo '<br>';
		//$rowcount = 0;
		//print_r($p->post_status);//echo '<br>';
		if($p->post_status == 'expired'){
			wp_delete_post($pidd);
			 $rowcount = 0;
		}
	 }
	if($rowcount <= 0){
	 
	$wordpress_post = array(
	'post_title' => $res->data[$i]->title,
	'post_content' => $res->data[$i]->publicDescription,
	'post_status' => 'publish',
	'post_author' => 1,
	'post_type' => 'job_listing'
	);
	 
	 $iid  = wp_insert_post( $wordpress_post );
	 
	// Job location Done
	$location = $res->data[$i]->address->city.' '.$res->data[$i]->address->countryName;
	update_post_meta( $iid, '_job_location',$location );
	// Job bullhorn_id Done
	update_post_meta( $iid, '_job_bullhorn_id',$res->data[$i]->id);
	
	// Job _company_name Done
	//update_post_meta( $iid, '_company_name',$res->data[$i]->clientCorporation->name );
	$curlljbp = curl_init();
// Job Type Done
curl_setopt_array($curlljbp, array(
CURLOPT_URL => $url.'/query/JobBoardPost?fields=employmentType&where=id='.$res->data[$i]->id.'&count=3&BhRestToken='.$bhRestToken,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/octet-stream',
    'Content-Transfer-Encoding: Binary',
    'Content-disposition: basename($request_url)',
    'response_type: code',
    'BhRestToken: '.$bhRestToken
  ),
));

$responsejbp = curl_exec($curlljbp);
curl_close($curlljbp);
$rescurljbp = json_decode($responsejbp);

// job Type (contract, full-time, etc...) Done 

//echo '$rescurljbp->data<pre>';print_r($rescurljbp->data);echo'</pre>';
global $wpdb;
$table_prefix_terms = $wpdb->prefix . "terms";
if(!$res->data[$i]->onSite == 'On-Site'){
	$sqlonSite = "SELECT * FROM `$table_prefix_terms` WHERE `name` = 'Remote'";
	
}else{
	$sqlonSite = "SELECT * FROM `$table_prefix_terms` WHERE `name` = 'Office-Based'";
}
$employmentType = $rescurljbp->data[0]->employmentType;
//SELECT * FROM `wp_26623bdd2e_terms` WHERE `name` = 'Permanent'
  $sql = "SELECT * FROM `$table_prefix_terms` WHERE `name` = '$employmentType'";
  
global $wpdb;
//$num_posts = $wpdb->get_var("SELECT count(*) FROM wp_posts");
global $wpdb;
$resultjob_term_ids = $wpdb->get_results($sql);
global $wpdb;
$resultjob_onSite_ids = $wpdb->get_results($sqlonSite);

global $wpdb;
  $table_prefix_term_relationships = $wpdb->prefix . "term_relationships";
foreach( $resultjob_onSite_ids as $_job_term_id ) {

      global $wpdb;
	
	  $wpdb->query("INSERT INTO `$table_prefix_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES ($iid, '$_job_term_id->term_id', '0')");
 
    }
	
	foreach( $resultjob_term_ids as $_job_onSite_id ) {

      global $wpdb;
	  $wpdb->query("INSERT INTO `$table_prefix_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES ($iid, '$_job_onSite_id->term_id', '0')");
 
    }
 
	$curll = curl_init();

//echo ' $client_id =========== ';
  $client_id = $res->data[$i]->owner->id;
//echo $client_id = 2860;

curl_setopt_array($curll, array(
CURLOPT_URL => $url.'/query/CorporateUser?fields=userType,email,firstName,lastName&where=id='.$client_id.'&count=3&BhRestToken='.$bhRestToken,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/octet-stream',
    'Content-Transfer-Encoding: Binary',
    'Content-disposition: basename($request_url)',
    'response_type: code',
    'BhRestToken: '.$bhRestToken
  ),
));

$responsecemail = curl_exec($curll);
curl_close($curll);
$rescemail1 = json_decode($responsecemail);

// consultant label DONE
//echo 'consult_name lastName  '.$rescemail1->data[0]->firstName.' '.$rescemail1->data[0]->lastName;
update_post_meta( $iid, 'consultant_label',$rescemail1->data[0]->firstName.' '.$rescemail1->data[0]->lastName );
// job email done
update_post_meta( $iid, '_application',$rescemail1->data[0]->email );
//userType Done
update_post_meta( $iid, 'bullhorn_userType',$rescemail1->data[0]->userType->id );
//userType Done
update_post_meta( $iid, 'bullhorn_owner_id',$res->data[$i]->owner->id );
// job salary done
//update_post_meta( $iid, '_job_salary',$res->data[$i]->salary );
 
	// Position Filled  status Done
	 
	if($res->data[$i]->status == 'Accepting Candidates'){
		update_post_meta( $iid, '_filled',0 );
	}else{
		update_post_meta( $iid, '_filled',1 );
	}
	// job salary done
	$salary = $res->data[$i]->salary;
	if(!$salary){
		$salary = 'Not available';
	}
	update_post_meta( $iid, '_job_salary',$salary );
	
	// job  remote position done
	if($res->data[$i]->onSite == 'On-Site'){ //$res->data[$i]->salary
	
		update_post_meta( $iid, '_remote_position',0 );
	}else{
		update_post_meta( $iid, '_remote_position',1 );
	}
	
	$curl = curl_init();
//clientCorporation
 
curl_setopt_array($curl, array(
CURLOPT_URL => $url.'/query/ClientCorporation?fields=companyURL,owners&where=id='.$res->data[$i]->clientCorporation->id.'&count=3&BhRestToken='.$bhRestToken,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/octet-stream',
    'Content-Transfer-Encoding: Binary',
    'Content-disposition: basename($request_url)',
    'response_type: code',
    'BhRestToken: '.$bhRestToken
  ),
));

$response = curl_exec($curl);
//search/JobOrder?query=isOpen:true&fields=id,title,clientCorporation&sort=-dateAdded
curl_close($curl);
//echo $response;
//echo '<pre><br>';
$res11 = json_decode($response);
//print_r($res11);
//echo '</pre>';
//update_post_meta( $iid, '_company_website',$res11->data[0]->companyURL );
if (!is_wp_error($iid)) {
		$current_url = $_SERVER['REQUEST_URI'];
		header("Location: $current_url");
		die();
}

}
}
}

