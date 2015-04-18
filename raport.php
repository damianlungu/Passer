<?php
require_once('authenticate.php');
?>
<!DOCTYPE HTML>
<html><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="icon" 
      type="image/png" 
      href="http://www.veryicon.com/icon/ico/Application/Wooden%20Social/p.ico">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Raport</title>
<!-- InstanceEndEditable -->
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <!-- InstanceBeginEditable name="head" -->
  
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  
  <link rel="stylesheet" type="text/css" href="style/style.css" />
<!-- InstanceEndEditable -->
</head>
<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1>Passer</h1>
          <h2>Password Manager</h2>
        </div> 
        <div align="right"  id="userinfo">
         Welcome! <?php echo $_SESSION["username"] ?>, <a href="logout.php"><em>logout</em></a>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="index.php">Home</a></li>
          <li class="selected"></li>
          <li></li>
          <li><a href="raport.php">Raport</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
    <!-- InstanceBeginEditable name="continut" -->
	<p>Taskuri:<br>
	<strong>Salca Cosmin </strong>:<br>
	-arhitectura aplicatiei:schema aplicatiei si proiectarea intefetei<br>
	-baza de date:configurarea bazei de date,crearea tabelelor,functiilor si procedurilor<br>
	<strong>Lungu Claudiu</strong>:<br>
	-configurare server Apache si php<br>
	-crearea situ-lui ( fisierele php,login-ul userului,tot ce tine de site )<br>
	-conexiunea cu baza de date Oracle<br>
	</p>
    <p>Baza de date este compusa din doua tabele :</p>
    <p> 1.Users,care are campurile :<br>
      -Username : este cheie primara<br>
      -Password : parola cu fiecarui Username<br>
      2.Passwords,care are campurile :<br>
      -Username : este cheie straina la tabelul Users<br>
      -Account  : un account al unui user autentificat<br>
      -Website  : este site-ul web pe care user-ul autentificat are account-ul specificat mai sus<br>
      -Password : este parola de la account-ul specificat mai sus al user-ului autentificat </p>
	  <p>Prezentarea arhitecturii aplicatiei</p>
    <pre><object data="Prezentare.pdf" type="application/pdf" width="100%" height="500">
  <p>Alternative text - include a link <a href="Prezentare.pdf">to the PDF!</a></p>
</object></pre>
 
    <!-- InstanceEndEditable -->
    </div>
    <div id="footer">
    Copyright &copy; Salca cosmin &amp; lungu claudiu</div>
  </div>
</body>
<!-- InstanceEnd --></html>
