<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>New Client Form</title>
	<link rel="stylesheet" type="text/css" href="form/view.css" media="all">
	<script type="text/javascript" src="form/view.js"></script>
</head>

<body id="main_body">

	<img id="top" src="form/top.png" alt="">
	<div id="form_container">

		<h1><a>New Client Form</a></h1>
		<form id="form_36409" class="appnitro" method="post" action="new.php">
			<div class="form_description">
				<h2>New Client Form</h2>
				<p>DAW Advertising</p>
			</div>
			<ul>

				<li id="li_1">
					<label class="description" for="id">ID </label>
					<div>
						<input id="id" name="id" class="element text small" type="text" maxlength="255" value="" />
					</div>
				</li>
				<li id="li_2">
					<label class="description" for="company">Company </label>
					<div>
						<input id="company" name="company" class="element text medium" type="text" maxlength="255" value="" />
					</div>
				</li>
				<li id="li_3">
					<label class="description" for="investment">Investment </label>
					<div>
						<input id="investment" name="investment" type="number" value="" />
					</div>
				</li>
				<li id="li_4">
					<label class="description" for="date">Date </label>
					<input id="investment" name="date" type="date" />
				</li>
				<li id="li_5">
					<span>
						<input id="active" name="active" class="element checkbox" type="checkbox" value="1" />
						<label class="choice" for="active">Active?</label>
					</span>
				</li>

				<li class="buttons">
					<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
				</li>
			</ul>
		</form>
		<div id="footer">
			Generated by <a href="http://www.dawadvertising.org">DAW Advertising</a>
		</div>
	</div>
	<img id="bottom" src="form/bottom.png" alt="">
</body>

</html>


<?php
require_once "autoload.php";
$cartera1 = new Cartera;
if(count($_POST)>0){
	$cartera1->create($_POST);
}