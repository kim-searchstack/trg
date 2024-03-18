<?php

function my_magic_function(){
		//include('modules/wp_auto_jobs_submissions.php');
	$login = get_post_meta( 9999999999999, 'logininfo');
	if(!empty($_POST['clientId'])){
		
		update_post_meta( 9999999999999, 'bullhorn_user_id',$_POST['clientId'] );
		update_post_meta( 9999999999999, 'bullhorn_user_sc',$_POST['clientSecretkey'] );
		update_post_meta( 9999999999999, 'un',$_POST['un'] );
		update_post_meta( 9999999999999, 'pw',$_POST['pw'] );
		update_post_meta( 9999999999999, 'r_uri',$_POST['r_uri'] );
		update_post_meta( 9999999999999, 'logininfo','done' );
		include('bullhorn_connection/bullhorn_connection.php');
		include('bullhorn_connection/client_info.php');
		include('bullhorn_connection/wp_get_bullhorn_jobs.php');
	}
$bullhorn_user_id = get_post_meta( 9999999999999, 'bullhorn_user_id');
$bullhorn_user_sc = get_post_meta( 9999999999999, 'bullhorn_user_sc');
$un = get_post_meta( 9999999999999, 'un');
$pw = get_post_meta( 9999999999999, 'pw');
$r_uri = get_post_meta( 9999999999999, 'r_uri');
$login = get_post_meta( 9999999999999, 'logininfo');
 

echo '<br>';

?>
<form style='line-height: 3rem;width: 33%;'     action="#" method="post">
 

  <div class="container" style='display: grid;'>
    <label for="clientid"><b>Client Id</b></label>
    <input value='<? echo $bullhorn_user_id[0]; ?>' type="text" placeholder="Client Id" name="clientId" required>

    <label for="clientsecretkey"><b>Client Secretkey</b></label>
    <input value='<? echo $bullhorn_user_sc[0]; ?>' type="text" placeholder="Client Secretkey" name="clientSecretkey" required>
	<label for="uname"><b>Client Username</b></label>
    <input value='<? echo $un[0]; ?>' type="text" placeholder="Client Username" name="un" required>
	<label for="psw"><b>Client Password</b></label>
    <input value='<? echo $pw[0]; ?>' type="password" placeholder="Client Password" name="pw" required>
	<label for="return-uri"><b>Return URI</b></label>
    <input value='<? echo $r_uri[0]; ?>' type="text" placeholder="Return URI" name="r_uri" required>
	
   
    
	</div>
	<button type="submit">Connect</button>
  
</form>
<?php
}