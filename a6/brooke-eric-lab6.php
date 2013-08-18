<?php

if (isset($_POST['city'])) {
	$c = $_POST['city'];
} elseif (isset($_GET['city'])) {
	$c = $_GET['city'];
} else {
	echo "nothing sent";
}

if (isset($c)) {
	switch ($c) {
		case "anaheim":
			$team = "Ducks";
			break;
		case "boston":
			$team = "Bruins";
			break;
		case "buffalo":
			$team = "Sabres";
			break;
		case "calgary":
			$team = "Flames";
			break;
		case "carolina":
			$team = "Hurricanes";
			break;
		case "chicago":
			$team = "Blackhawks";
			break;
		case "colorado":
			$team = "Avalanche";
			break;
		case "columbus":
			$team = "Blue Jackets";
			break;
		case "dallas":
			$team = "Stars";
			break;
		case "detroit":
			$team = "Red Wings";
			break;
		case "edmonton":
			$team = "Oilers";
			break;
		case "florida":
			$team = "anthers";
			break;
		case "los_angeles":
			$team = "Kings";
			break;
		case "minnesota":
			$team = "Wild";
			break;
		case "montreal":
			$team = "Canadiens";
			break;
		case "nashville":
			$team = "Predators";
			break;
		case "new_jersey":
			$team = "Devils";
			break;
		case "new_york":
			$team = "Rangers";
			break;
		case "ottawa":
			$team = "Senators";
			break;
		case "philadelphia":
			$team = "Flyers";
			break;
		case "phoenix":
			$team = "Coyotes";
			break;
		case "pittsburgh":
			$team = "Penguins";
			break;
		case "san_jose":
			$team = "Sharks";
			break;
		case "st_louis":
			$team = "Blues";
			break;
		case "tampa_bay":
			$team = "Lightning";
			break;
		case "toronto":
			$team = "Maple Leafs";
			break;
		case "vancouver":
			$team = "Canucks";
			break;
		case "washington":
			$team = "Capitals";
			break;
		case "winnipeg":
			$team = "Jets";
			break;
		default:
			$team = "no team";
			break;
	}
	echo $team;
}
	
?>