<!--#!/usr/local/bin/php-->

<html>
<head>
<meta charset="utf-8">
<title>Adam Decker</title>

<link href="_CSS/styleSheet.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.content {
	width: 98%;
	margin-left: 1%;
	padding: 10px 0;
	min-height: 100%;
	background-color: rgba(255,255,255,0.9);
}
.header {
	text-align: left;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<meta name="description" content="Adam Decker, Computer Science Master's Student, home page and portfolio.  Contains links to UF Club Tennis Information, PHPoor Security, and TA information." />
<meta name="keywords" content="Adam Decker, UF, Home, University of Florida, UF Club Tennis, teaching assistant, portfolio" />
</head>

<body>

<div class="container">
  <div class="header">
 	<?php include("_includes/header.php"); ?>
  <!-- end .header --></div>
  <div class="content">
    <h2>PHPoor Security</h2>
    <p>PHPoor Security is a vulnerable web application that I created in order to help beginner PHP developers avoid making some common mistakes dealing with security.</p>
    <p>&nbsp;</p>
    <p>You can download the project <a href="PHPoorSecurity.zip">here</a>.</p>
    <p>&nbsp;</p>
    <p><strong>Instructions:</strong></p>
    <ol>
      <li>Edit your hosts file and add the line &quot;127.0.0.1  sandbox.dev&quot; without the quotes. The hosts file can be found at Windows/System32/drivers/etc/hosts on Windows, and at /etc/hosts on OS X      </li>
      <li>Download the above .zip</li>
      <li>Extract the contents. One .ova file and a folder named &quot;sandbox&quot;</li>
      <li>Using VirtualBox, go to File &gt; Import Appliance and find the .ova file. The default settings will be fine</li>
      <li>After importing, go to Settings &gt; Shared Folders . Edit the shared folder path to the &quot;sandbox&quot; folder previously downloaded</li>
      <li>Start the VM</li>
<li>The PHPoor Security page can be accessed in a browser at sandbox.dev:8080    </li></ol>
    <hr width="98%">
    <h2>Gambling Guide</h2>
    <p>This is an application for help beginner gamblers.</p>
    <p>&nbsp;</p>
    <p>The .apk file will soon be available here.</p>
    <hr width="98%">
    <h2>UF Club Tennis</h2>
    <p>I made all of the UF Club Tennis videos. I will include some below.</p>
    <hr width="98%">
    <h2>Additional Projects</h2>
    <p>The rest of my projects can be found at the Github Link at the top of this page. I hope soon to unveil a project using genetic algorithms.</p>
  </div>
  <div id="body"><!-- body div for footer --></div>
  <div class="footer">Adam Decker
  <!-- end .footer --></div>
  <!-- end .container --></div>
<script type="text/javascript">
<?php include("_includes/menuBar1.php"); ?>
</script>
</body>
</html>
