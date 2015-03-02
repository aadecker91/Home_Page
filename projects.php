#!/usr/local/bin/php

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
  <h2>e-Studio (Current Project)</h2>
    <p>e-Studio is a web based entertainment system designed to manage and store information about movies, TV shows, games, and music. The application will contain a wide variety of data including a huge selection of movie genres such as Romance, Thriller, Comedy, Adventure, and Horror; the most popular movie actors/directors; music genres such as Rock, Pop, Metal, Punk, Hard Rock, Death Metal, and Jazz; the most recent song artists and producers; the latest video games for each platform; and much more. By the time of project completion, there should be a total of around 400,00 data entries in the database for this application.</p>
    <p>&nbsp;</p>
    <p>When the project is complete, a link will appear at the top of the page.</p>
    <hr width="98%">
    <h2>PHPoor Security</h2>
    <p>PHPoor Security is a vulnerable web application that I created in order to help beginner PHP developers avoid making some common mistakes dealing with security. The application assumes a basic knowledge of programming and computer networking. It emphasizes the top 3 vulnerabilities that were on the OWASP (Open Web Application Security Project) Top Ten Project for 2013. This includes Injections, Session Management, and Cross Site Scripting. </p>
    <p>&nbsp;</p>
    <p>It involves a hands-on approach to solving these security problems, and it also gives the user the ability to fix these problems as well as try new things in a Virtual Machine Sandbox evironment.</p>
    <p>&nbsp;</p>
    <p>There is also a report that goes with the application explaining my motivation for the app, the details of the app, and future work. The report can be downloaded <a href="PHPoorSecurityReport.pdf">here</a>.</p>
    <p>&nbsp;</p>
    <p>You can download the project <a href="PHPoorSecurity.zip">here</a>.    </p>
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
    <h2>ParkUF</h2>
    <p>ParkUF is an Android application that was made to monitor available parking in University of Florida parking lots. It uses an Arduino microcontroller, two IR sensors, and one ultrasonic sensor to detect when a car enters/leaves a parking lot. When a detection is made, the Arduino sends a put request  to  a server hosted on Amazon Web Services. That server then updates the parking information. The Android application is programmed to send a new GET request every thirty seconds in order to stay up to date with the information held on the server.</p>
    <p>&nbsp;</p>
    <p>I worked on the server portion of this application. My code can be found at the GitHub link at the top of this page.</p>
    <hr width="98%">
    <h2>Gambling Guide (Current Project)</h2>
    <p>Gambling Guide is an application for people who may be going on a trip to Las Vegas and want to gamble, but they don't want to lose too much money. More often than not, following a few simple rules for a casino game can be the difference between losing 200 dollars and losing 20.</p>
    <p>&nbsp;</p>
    <p>The goal of the Gambling Guide is to give the user a few optimized betting strategies that are easy to remember, and can reduce the house edge of a casion game significantly. It will also give the user helpful tips like how much money they should bring to a casino, when to walk away, common mistakes, and some other beginner tips.    </p>
    <p>&nbsp;</p>
    <p>The .apk file will soon be available <a href="GamblingGuide.apk">here</a>.</p>
    <hr width="98%">
    <h2>Dungeonesque</h2>
    <p>I was part of a team that created a RPG named Dungeonesque.  It was built using the Starcraft II Map Editor.</p>
    <p>&nbsp;</p>
    <p>You can download the game <a href="Dungeonesque.zip">here</a>.</p>
    <p>&nbsp;</p>
    <p>Once you've downloaded and unzipped the folder, run Dungeonesque.SC2Map. This will open the SC2 Map Editor, from there  test the map by clicking the test icon in the upper right hand corner. This will run the map in Starcraft II.</p>
    <p>&nbsp;</p>
    <p><strong>Note:</strong> Some of the functionality has changed since the games original release. Hopefully, I can soon work on it, or release my own version of Dungeonesque. Until then, though, it will be buggy.</p>
    <p>&nbsp;</p>
    <p><strong>Note:</strong> You may have to log in to a Battle.net Account.</p>
    <hr width="98%">
    <h2>UF Club Tennis</h2>
    <p>I made all of the UF Club Tennis videos found on the the UF Club Tennis Channel <a href="https://www.youtube.com/channel/UC9MZrFVPk7ZKTLmpoXc7CpA">here</a>. I have embedded a few below:</p>
    <p>&nbsp;</p>
    <iframe width="560" height="315" src="//www.youtube.com/embed/uxpXbkABw3A" frameborder="0" allowfullscreen></iframe>
    <p>&nbsp;</p>
    <iframe width="560" height="315" src="//www.youtube.com/embed/jfGrAvKl_Ls" frameborder="0" allowfullscreen></iframe>
    <p>&nbsp;</p>
    <iframe width="560" height="315" src="//www.youtube.com/embed/QBhtHm6PWg8" frameborder="0" allowfullscreen></iframe>
    <p>&nbsp;</p>
    <p>I also created this video on my personal channel:</p>
    <iframe width="560" height="315" src="//www.youtube.com/embed/sNKnmd1bMRw" frameborder="0" allowfullscreen></iframe>
    <hr width="98%">
    <h2>Additional Projects</h2>
    <p>The rest of my software projects can be found at the Github Link at the top of this page. I hope soon to unveil a project using genetic algorithms.</p>
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
