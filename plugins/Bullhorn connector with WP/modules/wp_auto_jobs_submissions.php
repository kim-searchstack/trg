<?php
//bullhorn client info

$bullhorn_user_id = get_post_meta( 9999999999999, 'bullhorn_user_id');
$bullhorn_user_sc = get_post_meta( 9999999999999, 'bullhorn_user_sc');
$un = get_post_meta( 9999999999999, 'un');
$pw = get_post_meta( 9999999999999, 'pw');
$pwd = urlencode($pw[0]);
$r_uri = get_post_meta( 9999999999999, 'r_uri');
$r_uri1 = urlencode($r_uri[0]);
$login = get_post_meta( 9999999999999, 'logininfo');
$bullhorn_bhRestToken = get_post_meta( 9999999999999, 'bullhorn_bhRestToken');
$bullhorn_bhRestToken = get_post_meta( 9999999999999, 'bullhorn_bhRestToken');
$refresh_token = $bullhorn_bhRestToken[0];

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

$bullhorn_user_id = get_post_meta( 9999999999999, 'bullhorn_user_id');
$bullhorn_user_sc = get_post_meta( 9999999999999, 'bullhorn_user_sc');
$un = get_post_meta( 9999999999999, 'un');
$pw = get_post_meta( 9999999999999, 'pw');
$pwd = urlencode($pw[0]);
$r_uri = get_post_meta( 9999999999999, 'r_uri');
$r_uri1 = urlencode($r_uri[0]);
$login = get_post_meta( 9999999999999, 'logininfo');
$bullhorn_bhRestToken = get_post_meta( 9999999999999, 'bullhorn_bhRestToken');
$bullhorn_bhRestToken = get_post_meta( 9999999999999, 'bullhorn_bhRestToken');
$refresh_token = $bullhorn_bhRestToken[0];


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
//update_post_meta( 9999999999999, 'bullhorn_bhRestToken',$refresh_token );
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
$dd2 = json_decode($response1);
//echo $response1.'<br>';
if(property_exists($dd2, 'errorCode')){
	if($dd2->errorCode == 500){
		//echo plugin_dir_path( __FILE__ );
		$dir = plugin_dir_path( __DIR__ );;
	include($dir.'bullhorn_connection/bullhorn_token_access_connection_renew.php');
}
}


$bhRestToken = $dd2->BhRestToken;
$url = $dd2->restUrl;

?>

<?php		$url_web = get_site_url();
			$args = array(
				'post_type' => 'job_application',
				//'post_status' => 'publish',
				'posts_per_page' => '-1',
				'meta_query' => array(
					array(
						'key'       => 'bullhorn_jobsubmission',
						'compare' => 'NOT EXISTS'
					)
				)
			);
			$blog_posts = new WP_Query( $args );
			 //echo 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiii.......................';
				 
				
			  if ( $blog_posts->have_posts() ) :  
				  while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); 
				//echo 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiii.......................';
				$id = get_the_ID();
				 $pid = wp_get_post_parent_id();
				$firstName = get_the_title();
				$lastName = get_the_title();
				$email = get_post_meta( $id, '_candidate_email');
				$_attachment = get_post_meta( $id, '_attachment');
				$userType = get_post_meta( $pid, 'bullhorn_userType');
				//$userType1 = $userType[0];
				$category = get_post_meta( $pid, 'bullhorn_owner_id');
				//print_r($category);
				$filename = $_attachment[0][0];
				
				$txt = array('txt');
				$pdf = array('pdf');
				$docx = array('docx');
				
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				if (in_array($ext,$txt)) {
					$ccc = file_get_contents($_attachment[0][0]);
				}else if (in_array($ext,$pdf)) {
					$pdf_path = $_attachment[0][0];
					include 'pdfparser-master2/test_pdf.php';
				}else if (in_array($ext,$docx)) {
					$url_docx = '.'.str_replace($url_web,"",$filename);
					$ccc = read_docx($url_docx);  
				}else{
					$ccc = 'No Resume Uploaded';
					
				}
				$name = get_the_title();
				$username = get_the_title();
				$password = get_the_title();
				//print_r($_attachment[0][0]);
				//https://disruptivehiring.com/wp-content/uploads/2023/10/sample.txt
				// print_r($email);
				 //Array ( [0] => Array ( [0] => https://disruptivehiring.com/wp-content/uploads/2023/10/sample.txt ) )
				 // data to be posted
				  $cat = $category[0];
				 $utype = $userType[0];
				$post_fields = array(
							
							"firstName"=> "$firstName",
							"lastName"=> "$lastName",
							"email"=> "$email[0]",
							"description"=> "$ccc",
							"name"=> "$name",
							"username"=> "$username",
							"password"=> "$password",
							"category"=> [ "id"=> $cat ],
							"userType"=> ["id"=>$utype]
						);

				// encode json data
				$data = json_encode($post_fields);
				$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL => $url.'/entity/Candidate?BhRestToken='.$bhRestToken,
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => '',
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 0,
				  CURLOPT_FOLLOWLOCATION => true,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => 'PUT',
				  CURLOPT_POSTFIELDS =>$data,
				  CURLOPT_HTTPHEADER => array(
					'Content-Type: text/plain'
				  ),
				));

				$response = curl_exec($curl);
				 $res11 = json_decode($response);
				curl_close($curl);
				//echo $response;
				// New Candidate Id In bullhorn
				$bc_id = $res11->changedEntityId;
				update_post_meta( $id, 'bullhorn_candidate',$bc_id );
				$_job_bullhorn_id = get_post_meta( $pid, '_job_bullhorn_id');
				$job = $_job_bullhorn_id[0];
				$curl = curl_init();
			
				$data3 =  '{
								"candidate": {"id": '.$bc_id.'},
								"jobOrder": {"id": '.$job.'},
								"status": "New Lead",
								"dateWebResponse": 1370522348880
							}';

curl_setopt_array($curl, array(
  CURLOPT_URL => $url.'/entity/JobSubmission?&BhRestToken='.$bhRestToken,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS => $data3,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;2514
$res12 = json_decode($response);          
 update_post_meta( $id, 'bullhorn_jobsubmission',$res12->changedEntityId );
 $curl = curl_init();
$changedEntityId = $res12->changedEntityId;
curl_setopt_array($curl, array(
CURLOPT_URL => $url.'/entity/JobSubmission/'.$changedEntityId.'?BhRestToken='.$bhRestToken,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "status": "Submitted",
    "dateAdded": 1370522348880
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);
 
curl_close($curl);
//echo $response;
//echo '<pre><br>';
$res = json_decode($response);
///print_r($res);
//echo '</pre>';

 endwhile; 
      endif;
	  
	   function read_docx($filename) {
    //var_dump($filename);
    $striped_content = '';
    $content = '';

    $zip = zip_open($filename);

    if (!$zip || is_numeric($zip))
        return false;

    while ($zip_entry = zip_read($zip)) {

        if (zip_entry_open($zip, $zip_entry) == FALSE)
            continue;

        if (zip_entry_name($zip_entry) != "word/document.xml")
            continue;

        $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));

        zip_entry_close($zip_entry);
    }// end while

    zip_close($zip);

    $content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);
    $content = str_replace('</w:r></w:p>', "\r\n", $content);
    $striped_content = strip_tags($content);

    return $striped_content;
}
	 /* $allowed = array('gif', 'png', 'jpg');
$filename = $_FILES['video_file']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if (!in_array($ext, $allowed)) {
    echo 'error';
}
	// echo read_docx('./wp-content/uploads/2023/10/Titis-NEW-Resume-2023.docx');  
	/*  $striped_content = '';
        $content = '';
		//https://disruptivehiring.com
 $filename = var_dump('https://disruptivehiring.com/wp-content/uploads/2023/10/Titis-NEW-Resume-2023.docx');
        $zip = zip_open($filename);

        if (!$zip || is_numeric($zip)) return false;

        while ($zip_entry = zip_read($zip)) {

            if (zip_entry_open($zip, $zip_entry) == FALSE) continue;

            if (zip_entry_name($zip_entry) != "word/document.xml") continue;

            $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));

            zip_entry_close($zip_entry);
        }// end while

        zip_close($zip);

        $content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);
        $content = str_replace('</w:r></w:p>', "\r\n", $content);
        $striped_content = strip_tags($content);

        echo $striped_content;
	 // include 'pdfparser-master/test_pdf.php';
	  
	/*  include 'pdfparser-master/composer.json';
	  include 'vendor/autoload.php';
 
// Parse pdf file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile('https://disruptivehiring.com/wp-content/uploads/2023/10/team-one-pager-Andrew.pdf');
 
$text = $pdf->getText();
echo $text;
/*
include ( 'PdfToText.phpclass' ) ;

	function  output ( $message )
	   {
		if  ( php_sapi_name ( )  ==  'cli' )
			echo ( $message ) ;
		else
			echo ( nl2br ( $message ) ) ;
	    }

	$file	=  'https://disruptivehiring.com/wp-content/uploads/2023/10/team-one-pager-Andrew' ;
	$pdf	=  new PdfToText ( "$file.pdf" ) ;

	output ( "Original file contents :\n" ) ;
	output ( file_get_contents ( "$file.txt" ) ) ;
	output ( "-----------------------------------------------------------\n" ) ;

	output ( "Extracted file contents :\n" ) ;
	output ( $pdf -> Text ) ;




	 /* $ddata = ' {"changedEntityType":"JobSubmission","changedEntityId":2513,"changeType":"INSERT","data":{"candidate":{"id":6904},"jobOrder":{"id":1},"status":"New Lead","dateWebResponse":1370522348880}}';
	  $res12 = json_decode($ddata);
	  echo '<pre>';
	  print_r($res12->changedEntityId);
	  echo '</pre>';
	  stdClass Object
(
    [changedEntityType] => JobSubmission
    [changedEntityId] => 2513
    [changeType] => INSERT
    [data] => stdClass Object
        (
            [candidate] => stdClass Object
                (
                    [id] => 6904
                )

            [jobOrder] => stdClass Object
                (
                    [id] => 1
                )

            [status] => New Lead
            [dateWebResponse] => 1370522348880
        )

)
	  */