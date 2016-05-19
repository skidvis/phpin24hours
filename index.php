<?
	//PHP lives inside the bracket-question tag: < ? bla bla bla ? >
	//The bulk of the php code lives at the top of the web page.

	//Rule #0: semi-colons are super-super important! (Never Forget!)

	//You can (and often will) include external PHP pages for DRY purposes.
	require_once $_SERVER['DOCUMENT_ROOT'] . "/02-functions.php";


	//variables names start with the $ sign
	$username = "";
	$greeting = "Hello, ";
	$hours = 24;

	//arrays
	$directions = ["North", "East", "West", "South"];

	//dictionary-style array
	$teacher = [
		"fname" => "Skid",
		"lname" => "Vis",
		"awesomeness" => "Off the charts!"
	];

	require_once $_SERVER['DOCUMENT_ROOT'] . "/03-classes.php";
	$honda = new Car;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP in <?= $hours ?> hours or more!</title>
	</head>

	<body>
		<h1><?= $greeting . $username ?>!!!</h1>
		<h4>The current date and time is <?= getTheDate() ?>.</h4>
		<hr />
		<ul>
			<?
				foreach($directions as $direction){
					echo "<li>" . $direction . "</li>";
				}
			?>
		</ul>
		<hr />

		<h4>Your teacher today is <?= $teacher["fname"] . " " . $teacher["lname"] ?> and he's <?= $teacher["awesomeness"] ?></h4>
		<hr />

		<h4>Lets talk cars..</h4>
		<ul>
			<li>Is it a truck? <?= Car::isTruck() ?></li>
			<li>Commonly called: <?= Car::$nickname ?></li>
			<li>How many wheels? <?= $honda->getWheelCount() ?></li>
			<li>How many miles? <?= $honda->getMiles() ?></li>
		</ul>
	</body>
</html>