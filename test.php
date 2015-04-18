<?php 
$conn = oci_connect('system', 'system', 'localhost/XE');
		if (!$conn) {
   		 	$e = oci_error();
   			trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		$username = 'admin';
		$password = 'admin';
		$flag=0;
		$query = "begin auth_user(:user,:pass,:flag); end;" ;
		$result = oci_parse($conn, $query);
		oci_bind_by_name($result, ':user', $username);
		oci_bind_by_name($result, ':pass', $password);
		oci_bind_by_name($result, ':flag', $flag);	
		$r = oci_execute($result);

?>