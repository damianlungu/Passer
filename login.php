<?php
session_start();
if(!empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] == 'true') {
	header('Location: index.php');
}

$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if(!empty($_POST["username"]) && !empty($_POST["password"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		$conn = oci_connect('system', 'system', 'localhost/XE');
		if (!$conn) {
   		 	$e = oci_error();
   			trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		$flag=0;
		$query = "begin auth_user(:user,:pass,:flag); end;" ;
		$result = oci_parse($conn, $query);
		oci_bind_by_name($result, ':user', $username);
		oci_bind_by_name($result, ':pass', $password);
		oci_bind_by_name($result, ':flag', $flag);	
		$r = oci_execute($result);
   		if ($flag) {
			session_start();
			$_SESSION["username"] =  $username ;
			$_SESSION["authenticated"] = 'true';
			header('Location: index.php');
		}
		else {
			header('Location: errlogin.php');
		}
		
	} else { 
		header('Location: errlogin.php');
	}
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/style.css" rel="stylesheet" type="text/css">
<link href="style/style2.css" rel="stylesheet" type="text/css">
</head>
<body>
<section class="container">
    <div class="login">
      <h1>Login</h1>
      <form method="post">
        <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="index.php">Click here to reset it</a>.</p>
    </div>
  </section>
</body>
</html>
<?php } ?>
