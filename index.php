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
<title>Home</title>
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
      <div id="content">&bull;       Crearea unei Aplicatii Web;<br/>
          &bull;       Utilizatorii autentificati pot adauga/edita/administra parole folosind meta-date (titlu, nume de utilizator, parola, adresa Web, comentarii, TTL, etc);<br/>
          &bull;       Utilizatorii autentificati pot grupa informatiile de autentificare pe baza unor categorii;<br/>
          &bull;       Aplicatia poate &quot;detecta&quot; si categorisi automat informatiile de autentificare pe baza anumitor criterii (domeniul sitului, dupa &quot;taria&quot; parolei, frecventa utilizarii);<br/>
          &bull;       Posibilitatea de a genera parole &quot;sigure&quot; si stocarea intr-un mod &quot;sigur&quot; a informatiilor de autentificare;<br/>
          &bull;       Posibilitatea de a exporta datele in formatul CSV, JSON si XML;<br/>
        &bull;       BONUS: crearea unei extensii in browser care sa ofere automat informatiile de logare.</span></h1>
      </div>
      <!-- InstanceEndEditable -->
    </div>
    <div id="footer">
    Copyright &copy; Salca cosmin &amp; lungu claudiu</div>
  </div>
</body>
<!-- InstanceEnd --></html>
