<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content Type" content="text/html" >
	<meta lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0">
	<title>Favorite Part about Winter</title>
	<style>

		header, footer {
			margin: 2em 2em;
		}

		footer {
			text-align: center;
		}

		ul.tab-list {
			margin: 2em 2em;
		}
		.tab-panel {
			display: none;
			margin: 2em 6em;
		}
		.tab-panel.active {
			display: block;
		}

		.progress {
			width: 300px;
		}

		li {
			list-style-type: none;
		}

		li.active a {
			background-color: gray;
		}

		ul {
			border-bottom: .1em dotted black;
		}

	</style>
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<header>
	<h1>What Are Your Favorite Things About Winter?</h1>
</header>

<ul class="tab-list nav nav-tabs">
	<li class="active"><a class="btn btn-info tab-control" role="button" href="#activities">Your favorite activity</a></li>
	<li><a class="btn btn-info tab-control" role="button" href="#beverages">Your favorite beverage</a></li>
	<li><a class="btn btn-info tab-control" role="button" href="#holiday">Your favorite holiday</a></li>
</ul>

<div class="row">
	<div class="tab-panel active col-md-12" id="activities">
		<h2>What is your favorite thing about winter?</h2>
		<form>
			<input type="radio" name="winter_activity" value="sledding"> Sledding</input>
			<br><input type="radio" name="winter_activity" value="snowball"> Snowball throwing</input>
			<br><input type="radio" name="winter_activity" value="hotcocoa"> Drinking hot cocoa</input>
			<br><input type="radio" name="winter_activity" value="snowflakes"> Making paper snowflakes</input>
			<br><input type="button" value="Submit" id="submitButton"></input>
		</form>
	</div>
</div>

<div class="tab-panel" id="beverages">
	<h2>Coming Soon: What is your favorite winter beverage?</h2>

	<!--
	<form>
		<input type="radio" name="winter_beverage" value="hotcocoa"> Hot cocoa</input>
		<br><input type="radio" name="winter_beverage" value="hottoddies"> Hot toddies</input>
		<br><input type="radio" name="winter_beverage" value="eggnog"> Egg Nog</input>
		<br><input type="radio" name="winter_beverage" value="applecider"> Apple Cider</input>
		<br><input type="button" value="Submit" id="submitButtonBeverages"></input>
	</form>
	-->
</div>
<div class="tab-panel" id="holiday">
	<h2>Coming Soon: What is your favorite winter holiday?</h2>

	<!--
		<form>
		<input type="radio" name="winter_holiday" value="solistice"> Winter Solstice</input>
		<br><input type="radio" name="winter_holiday" value="christmas"> Christmas</input>
		<br><input type="radio" name="winter_holiday" value="hanukkah"> Hanukkah</input>
		<br><input type="radio" name="winter_holiday" value="kwanzaa"> Kwanzaa</input>
		<br><input type="radio" name="winter_holiday" value="yule"> Yule</input>
		<br><input type="radio" name="winter_holiday" value="newyear"> New Year's Day</input>
		<br><input type="button" value="Submit" id="submitButtonHoliday"></input>
	</form>
	-->
</div>

<footer>
<a href="http://charleneuban.com/">charleneuban.com</a> by Charlene Uban &#xA9; <?php echo date('Y'); ?>
</footer>

<script language="javascript" type="text/javascript" src="pollscript.js"></script>
</body>
</html>