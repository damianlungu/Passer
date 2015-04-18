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
<title>Contact Us</title>
<!-- InstanceEndEditable -->
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <!-- InstanceBeginEditable name="head" -->
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
    damian.lungu@info.uaic.ro<br/>
    cosmin.salca@info.uaic.ro
    <!-- InstanceEndEditable -->
    </div>
    <div id="footer">
    Copyright &copy; Salca cosmin &amp; lungu claudiu</div>
  </div>
</body>
<!-- InstanceEnd --></html>
