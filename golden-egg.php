<style>
	img {
		border: 1px solid red;
		border-radius: 7px;
		width: 25px;
	}

	img:hover {
		border: 1px solid white;
	}

	button:hover {
		border: 2px solid white;
		box-shadow: 0px 10px 10px 0 rgba(73, 248, 4, 0.589), 0px 0px 0px 1px rgba(73, 248, 4, 0.589);
	}



	button:focus {
		background-color: red;
	}

	button {
		text-align: center;
		color: white;
		padding: 5px;
		border-radius: 10px;
		margin: 2px;
		width: 40px;
	}

	span {
		transition: 3s;
	}

	#id_name_2 {}

	#textara1 {
		border: none;
		text-decoration: none;
		font-size: 26px;
		text-align: center;
	}

	#id1 {
		background-color: gold;
	}

	#id2 {
		background-color: red;
	}

	#id3 {
		background-color: purple;
	}

	#id4 {
		background-color: blue;
	}

	#id5 {
		background-color: khaki;
	}

	#id6 {
		background-color: orchid;
	}
</style>
<?php

$color = array('orchid', 'khaki', 'blue', 'purple', 'red', 'gold'); // <- button and span background color
$ran_color = rand(0, 5); // <- to randomize background color

// css to randomize background color
// ............................................................//
echo "<style>";
echo "span:hover{background-color: $color[$ran_color];}";
echo "</style>";
echo "<div id='main-body' style='text-align:center;'>";
echo "<form  method='post' action='golden-egg.php'";
// ............................................................//
$yes = 6; // <- amount of button rows
$id = array(); // <- array to store id
// to increment button id according to the amount of  rows
// ............................................................//
for ($baz = 0; $baz < $yes + 2; $baz++) {
	array_push($id, "id$baz");
};
// ............................................................//
$a1 = rand(0, $yes);
for ($i = 0; $i <= $yes; $i++) {
	echo "<br>\n";
	$vg = 0;
	$vs = rand(1, $a1 + 1);
	$ran2 = rand(1, 6);
	$id_name_2 = $id[$ran2];
	for ($fd = 0; $fd != $i + 1; $fd++) {
		$ran2 = rand(1, 6);
		$id_name_2 = $id[$ran2];
		echo "<span id='$id_name_2'><span>";
		++$vg;
		if ($vg == $i) {
			for ($fk = -1; $fk < $vg - 1; $fk++) {
				if ($fd == $a1) {
					$ran2 = rand(1, 6);
					$id_name_2 = $id[$ran2];
					echo "<span id='$id_name_2'><span>";
					echo "<div class='rows'><button name='$id_name_2' id='$id_name_2' placeholder=''><img src='chicago.jpg' alt=''></button></div>";
					echo "<span id='$id_name_2'><span>";
					if ($fd == 1) { // to organize the second set of button's
						$ran2 = rand(1, 6);
						$id_name_2 = $id[$ran2];
						echo "<span id='$id_name_2'><span>";
						echo "<div class='rows'><button name='$id_name_2' id='$id_name_2' placeholder=''><img src='chicago.jpg' alt=''></button><div\n>"; // <- third set of button's
					};
				} else {
					$ran1 = rand(1, $a1 + 2); // <- to randomize third set of button's
					$ran3 = rand(1, 6); // <- to randomize span color according to button color
					$id_name_2 = $id[$ran3]; // <- to get id for span
					// ............................................................//
					if ($ran1 == 2) { // <- to add extra button for extra random style
						echo "<span id='$id_name_2'><span>";
						echo "<button name='$id_name_2'  id='$id_name_2' placeholder=''><img src='chicago.jpg' alt=''></button>\n";
					};
					// ............................................................//
					echo "<span id='$id_name_2'><span>";
					echo "<button name='$id_name_2'  id='$id_name_2' placeholder=''><img src='chicago.jpg' alt=''></button>\n"; // <- last set of button's
				};
			};
			echo "<br>\n";
		};
	};
};
echo "</form>";
echo "</div>";
// <- to connect to database
// ............................................................//
$dbServer_name = 'localhost';
$db_username = 'root';
$db_password = "";
$db_name = 'game';
$connect = mysqli_connect($dbServer_name, $db_username, $db_password, $db_name);
// ............................................................//
echo "Chances: ";
$chance = 'SELECT * FROM `chance` WHERE 1'; // <- to select chance from database
$result = $connect->query($chance);
$row1 = $result->fetch_array(); // <- fetch chance
echo "$row1[1]"; // <- to show remaining chances
echo " ";
// ............................................................//
mysqli_free_result($result); // <- to free guery result
$connect = mysqli_connect($dbServer_name, $db_username, $db_password, $db_name); // <- to reconnect back to database
// ............................................................//
echo "Score:";
$score = 'SELECT * FROM `score` WHERE 1'; // <- to select score from database
$result1 = $connect->query($score);
$row = $result1->fetch_array(); // <- to fetch result
echo "$row[1]<br>"; // <- to show score

// ............................................................//
// if not egg -- $id_name_2 == 0 **required//do not change
// ............................................................//
if (isset($_POST["$id_name_2"]) === False) { // <- if not egg
	if ($row1[1] > 0) { // <- if chance not equal 0 and egg not found -1 
		$first_chance = $row1[1];
		$new_chance = $first_chance - 1;
		$chance = "UPDATE chance SET   chances=$new_chance WHERE id=0;";
		$result1 = $connect->query($chance);
		$click = rand(0, 4);
		$wrong = array('Nice Try You Can Do Better', 'Try A Bit Harder Not Close Enough', 'Try Again', 'Keep Pressing', 'Not God Enough');
		echo $wrong[$click];
	} else {
		echo "<style>";
		echo "#main-body{display:none; transition: 80s ease;}";
		echo "</style>";
		for ($fd = 0; $fd != 1; $fd++) {
			$ran2 = rand(1, 6);
			$id_name_3 = $id[$ran2];
			echo "<button type='submit' name='$id_name_3' onClick='retry()' id='$id_name_3' style='color:black; padding:5px; border: 1px solid black; border-radius:10px; width:30%;'>Try Again1</button>";
	
		};
		$first_chance = $row1[1];
		$new_chance = $first_chance + 2;
		$chance = "UPDATE chance SET   chances=$new_chance WHERE id=0;";
		$result1 = $connect->query($chance);
	};
}
// if is egg -- $id_name_2 == 1 **required//do not change
if (isset($_POST["$id_name_2"]) === True) {
	// check if egg is found and 
	if ($row1[1] > 0) {
		$lucky_egg = array('Silver Egg', 'Bronze Egg', 'Golden Egg');
		$get_egg = rand(0, 2);
		echo $lucky_egg[$get_egg];
		if ($lucky_egg[$get_egg] == 'Bronze Egg') {
			echo "<span>+1</span>";
			$first_chance = $row1[1];
			$new_chance = $first_chance + 1;
			$chance = "UPDATE chance SET   chances=$new_chance WHERE id=0;";
			$result1 = $connect->query($chance);
		}
		if ($lucky_egg[$get_egg] == 'Silver Egg') {
			echo "<span>+1</span>";
			$first_chance = $row1[1];
			$new_chance = $first_chance + 1;
			$chance = "UPDATE chance SET   chances=$new_chance WHERE id=0;";
			$result1 = $connect->query($chance);
		}
		if ($lucky_egg[$get_egg] == 'Golden Egg') {
			echo "<span>+3</span>";
			$first_chance = $row1[1];
			$new_chance = $first_chance + 3;
			$chance = "UPDATE chance SET   chances=$new_chance WHERE id=0;";
			$result1 = $connect->query($chance);
		}
	} else {
		echo "<style>";
		echo "#main-body{display:none; transition: 80s ease;}";
		echo "</style>";
		for ($fd = 0; $fd != 1; $fd++) {
			$ran2 = rand(1, 6);
			$id_name_3 = $id[$ran2];
			echo "<button type='submit' name='$id_name_3' onClick='retry()' id='$id_name_3' style='color:black; padding:5px; border: 1px solid black; border-radius:10px; width:30%;'>Try Again1</button>";
		
		};
	};
}
function retry()
{
	return "yes";
}
// if ($row1[1] === 0) {
// 	echo "<style>";
// 	// echo "#main-body{display:none; transition: 80s ease;}";
// 	echo "#text-ara1{display:none; transition: 80s ease;}";
// 	echo ".retry{display:block;}";
// 	echo "<style>";
// 	echo "<div id='main-bod' method='post' action='golden-egg.php' style='width: 10%; border: 1px solid black; border-radius:10px;'";
// 	echo "yes";
// 	for ($rd = 0; $rd != 2; $rd++) {
// 		$ran2 = rand(1, 6);
// 		$id_name_2 = $id[$ran2];echo "<button name='$id_name_2' onclick='' id='$id_name_2' style='color:black; padding:5px; border: 1px solid black; border-radius:10px;'><span>Try Again<span></button>";
// 		for ($fd1 = 0; $fd1 != 1; $fd1++) {
// 			$ran2 = rand(1, 6);
// 			$id_name_2 = $id[$ran2];
// 			echo "<button name='$id_name_2' )' id='$id_name_2' style='color:black; padding:5px; border: 1px solid black; border-radius:10px; width:50px;'><img src='chicago.jpg' alt=''></button>";
// 		};
// 	};
// 	echo "<div>";
// }
?>