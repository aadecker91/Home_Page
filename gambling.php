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
  <h1>Craps</h1>
  <form name="crapsBR" method="post" action="">
    <p>
      <label for="amount">Betting Amount: </label>
      <input type="text" name="amount" id="amount">
    </p>
    <p>
      <label for="strategy">Betting Strategy: </label>
      <select name="strategy" id="strategy">
        <option value="1" selected="selected">One Point</option>
        <option value="2">Three Points</option>
        <option value="3">All Points</option>
      </select>
    </p>
    <p>
      <label for="odds">Odds: </label>
      <select name="odds" id="odds">
        <option value="1" selected="selected">1X</option>
        <option value="2">3X 4X 5X</option>
      </select>
    </p>
    <p>
      <label for="time">Play Time: </label>
      <select name="time" id="time">
        <option value="1" selected="selected">30 Minutes</option>
        <option value="2">1 Hour</option>
        <option value="3">2 Hours</option>
        <option value="4">3 Hours</option>
        <option value="5">4 Hours</option>
        <option value="6">8 Hours</option>
      </select>
    </p>
    <p>
      <input type="button" name="calculate" id="calculate" value="Calculate" onClick="getCalculation()">
    </p>
  </form>
  <h2 id = "recommend">Recommended bankroll is: 0</h2>
  <h2 id = "walk">Recommended walk away is: +0</h2>
  <script>
  	function getCalculation() {
		var form = document.forms["crapsBR"];
		var amount = form.elements["amount"];
		
		// starting values
		var average_rolls = 3.376;
		var pass_std_dev = 1.0;
		var four_ten_std_dev = 1.41;
		var five_nine_std_dev = 1.22;
		var six_eight_std_dev = 1.10;
		var adjusted_pass_std_dev = 1.6 * 1.0;
		var adjusted_four_ten_std_dev = 1.6 * 1.41;
		var adjusted_five_nine_std_dev = 1.6 * 1.22;
		var adjusted_six_eight_std_dev = 1.6 * 1.10;
		var house_edge = 0.0141;
		var number_of_rolls = 170;
		var rolls_resolved = 0;
		var base_value = 0;
		var final_value = 0;
		var final_value_walk_away = 0;
		
		var average_bet = 0;
		
		if (amount.value != "") {
			average_bet = parseInt(amount.value);
		}
		
		var selected_strategy = form.elements["strategy"];
		
		var selected_odds = form.elements["odds"];
		
		var selected_time = form.elements["time"];
		
		var strategy_list = new Array();
		strategy_list["1"] = 1;
		strategy_list["2"] = 2;
		strategy_list["3"] = 3;
		
		var odds_list = new Array();
		odds_list["1"] = 1;
		odds_list["2"] = 2;
		
		var time_list = new Array();
		time_list["1"] = 1;
		time_list["2"] = 2;
		time_list["3"] = 3;
		time_list["4"] = 4;
		time_list["5"] = 5;
		time_list["6"] = 6;
		
		var strategy = strategy_list[selected_strategy.value];
		
		var odds = odds_list[selected_odds.value];
		
		var time = time_list[selected_time.value];
		
		if (time == 1) {
			number_of_rolls = 0.5 * number_of_rolls;
		} else if (time == 2) {
			// do nothing
		} else if (time == 3) {
			number_of_rolls = 2 * number_of_rolls;
		} else if (time == 4) {
			number_of_rolls = 3 * number_of_rolls;
		} else if (time == 5) {
			number_of_rolls = 4 * number_of_rolls;
		} else if (time == 6) {
			number_of_rolls = 8 * number_of_rolls;
		} else {
			// do nothing
		}
		
		if (strategy == 1) {
			// do nothing
		} else if (strategy == 2) {
			average_bet = average_rolls * average_bet / 2;
		} else if (strategy == 3) {
			average_bet = average_rolls * average_bet;
		} else {
			// do nothing
		}
		
		rolls_resolved = number_of_rolls / average_rolls;
		
		base_value = (average_bet * rolls_resolved) * house_edge;
		
		if (odds == 1) {
			final_value = base_value + (adjusted_pass_std_dev * Math.sqrt(rolls_resolved) * average_bet) + (adjusted_four_ten_std_dev * Math.sqrt(rolls_resolved) * average_bet * 6 / 36) + (adjusted_five_nine_std_dev * Math.sqrt(rolls_resolved) * average_bet * 8 / 36) + (adjusted_six_eight_std_dev * Math.sqrt(rolls_resolved) * average_bet * 10 / 36);

		final_value_walk_away = (0.5 * pass_std_dev * Math.sqrt(rolls_resolved) * average_bet) + (0.5 * four_ten_std_dev * Math.sqrt(rolls_resolved) * average_bet * 6 / 36) + (0.5 * five_nine_std_dev * Math.sqrt(rolls_resolved) * average_bet * 8 / 36) + (0.5 * six_eight_std_dev * Math.sqrt(rolls_resolved) * average_bet * 10 / 36);
		} else if (odds == 2) {
			final_value = base_value + (adjusted_pass_std_dev * Math.sqrt(rolls_resolved) * average_bet) + (5 * adjusted_four_ten_std_dev * Math.sqrt(rolls_resolved) * average_bet * 6 / 36) + (4 * adjusted_five_nine_std_dev * Math.sqrt(rolls_resolved) * average_bet * 8 / 36) + (3 * adjusted_six_eight_std_dev * Math.sqrt(rolls_resolved) * average_bet * 10 / 36);

		final_value_walk_away = (0.5 * pass_std_dev * Math.sqrt(rolls_resolved) * average_bet) + (0.5 * 5 * four_ten_std_dev * Math.sqrt(rolls_resolved) * average_bet * 6 / 36) + (0.5 * 4 * five_nine_std_dev * Math.sqrt(rolls_resolved) * average_bet * 8 / 36) + (0.5 * 3 * six_eight_std_dev * Math.sqrt(rolls_resolved) * average_bet * 10 / 36);
		} else {
			// do nothing
		}
		
		document.getElementById("recommend").innerHTML = "Recommended bankroll is: " + Math.round(final_value);
		document.getElementById("walk").innerHTML = "Recommended walk away is: +" + Math.round(final_value_walk_away);
	}
  </script>
  
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
