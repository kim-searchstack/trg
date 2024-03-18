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