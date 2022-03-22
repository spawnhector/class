<style>
	button:hover {
		border: 2px solid white;
	}

	button::before {
		color: black;
	}

	button:focus {
		background-color: red;
	}

	button {
		color: white;
		padding: 5px;
		border-radius: 10px;
		margin: 2px;
		width: 30px;
	}

	span {
		border-radius: 5px;
	}
    form{
        position: relative;
    }

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
echo "<div style='text-align:center;'>";
$a = array("*");
$yes = 6;
$id = array();
for ($baz = 0; $baz < $yes + 1; $baz++) {
	array_push($id, "id$baz");
};
$egg = "egg";
$text = "king";
$a1 = rand(0, $yes - 1);
for ($i = 0; $i <= $yes; $i++) {
	echo "<form method='post' >";
	echo "<br>\n";
	$vg = 0;
	$vs = rand(1, $a1 + 1);
	$ran2 = rand(1, 6);
	$idname2 = $id[$ran2];
	echo "<div class='main-body' id='$idname2'> <div>";
	for ($fd = 0; $fd != $i + 3; $fd++) {
		$ran2 = rand(1, 6);
		$idname2 = $id[$ran2];
		echo "<span id=''>$a[0]</span>";
		++$vg;

		if ($vg == $i+1) {
			$cv = 0;
			$mh = 1;
			for ($fk = -1; $fk < $vg - 1; $fk++) {

				if ($fd == $a1) {
					if ($mh == 1) {
						$idname1 = $id[$mh];
					};
					if ($mh == 2) {
						$idname1 = $id[$mh];
					};
					if ($mh == 3) {
						$idname1 = $id[$mh];
					};
					if ($mh == 4) {
						$idname1 = $id[$mh];
					};
					if ($mh == 5) {
						$idname1 = $id[$mh];
					};
					if ($mh == 6) {
						$idname1 = $id[$mh];
					};
					echo "<div class='rows'><button name='$idname1' id='$idname1' placeholder=''>$idname1</button><div>\n";

					++$mh;
					if ($fd == 1) {
						if ($vs == 1) {
							$idname = $id[$vs];
						};
						if ($vs == 2) {
							$idname = $id[$vs];
						};
						if ($vs == 3) {
							$idname = $id[$vs];
						};
						if ($vs == 4) {
							$idname = $id[$vs];
						};
						if ($vs == 5) {
							$idname = $id[$vs];
						};
						if ($vs == 6) {
							$idname = $id[$vs];
						};
						echo "<div class='rows'><button name='$idname1' id='$idname1' placeholder=''>yes</button><div\n>";
						++$cv;
					};
				} else {
					$ran1 = rand(1, $a1 + 2);
					for ($ghj = 1; $ghj <= $ran1; $ghj++) {
						$ran2 = rand(1, 6);
						$idname2 = $id[$ran2];
					}
					echo "<button name='$idname2'  id='$idname2' placeholder=''>$idname2</button>";
				};
			};
			for ($fd = 0; $fd != $i; $fd++) {
				$ran2 = rand(1, 6);
				$idname2 = $id[$ran2];
				echo "<span id=''>$a[0]</span>";
			};
			echo "<br>\n";
		};
	};

	echo "</form>";
};
echo "<div>";
echo "<form method='post'>";
echo "<div name='textara1' id='textara1' cols='30' rows='5'>";
if (isset($_POST["$idname2"]) == 4 && isset($_POST["$idname1"]) != 1 or isset($_POST["$idname1"]) != 2 or isset($_POST["$idname1"]) != 3 or isset($_POST["$idname1"]) != 5 or isset($_POST["$idname1"]) != 6) {
	$click = rand(0, 2);
	$wrong = array('Nice Try You Can Do Better', 'Try A Bit Harder Not Close Enough', 'Try Again', 'Keep Pressing', 'Not God Enough');
	echo $wrong[$click];
	if (isset($_POST["$idname1"]) == 1) {
		echo "<label>1<label>";
	}
	if (isset($_POST["$idname1"]) == 2) {
		echo "<label>2</label>";
	}
	if (isset($_POST["$idname1"]) == 3) {
		echo "<label>3</label>";
	}
	if (isset($_POST["$idname1"]) != 4) {
		echo "<label> 4</label>" . " ";
	}
	if (isset($_POST["$idname1"]) == 5) {
		echo "<label>5</label>";
	}
	if (isset($_POST["$idname1"]) == 6) {
		echo "<label>6</label>";
	}
	if (isset($_POST["$idname1"]) == 3 && isset($_POST["$idname1"]) != 1 or isset($_POST["$idname1"]) != 2 or isset($_POST["$idname1"]) != 4 or isset($_POST["$idname1"]) != 5 or isset($_POST["$idname1"]) != 6) {
		$click = rand(0, 2);
		$wrong = array('Nice Try You Can Do Better', 'Nice Try But Not Close Enough', 'Try Again');

		if (isset($_POST["$idname2"]) == 1) {
			echo "<label>1<label>";
		}
		if (isset($_POST["$idname2"]) == 2) {
			echo "<label>2</label>";
		}
		if (isset($_POST["$idname2"]) != 3) {
			echo "<label>3</label>";
		}
		if (isset($_POST["$idname2"]) == 4) {
			echo "<label> 4</label>";
		}
		if (isset($_POST["$idname2"]) == 5) {
			echo "<label>5</label>";
		}
		if (isset($_POST["$idname2"]) == 6) {
			echo "<label>6</label>";
		}
	}
} else {

	if (isset($_POST["$idname2"]) != isset($_POST["$idname1"])) {

		echo "You Found A Golden Egg";
		// if (isset($_POST["$idname1"])==1) {
		// 	$list = 0;
		// 	if (isset($_POST["$idname1"])!=1) {
		// 		echo "<label>1<label>";


		// 	} 
		// 	if (isset($_POST["$idname1"])==2) {
		// 		echo "<label>2</label>";


		// 	} 
		// 	if (isset($_POST["$idname1"])==3) {
		// 		echo "<label>3</label>";


		// 	} 
		// 	if (isset($_POST["$idname1"])==4) {
		// 		echo "<label>4</label>";


		// 	} 
		// 	if (isset($_POST["$idname1"])==5) {
		// 		echo "<label>1</label>";


		// 	} 
		// 	if (isset($_POST["$idname1"])==1) {
		// 		echo "<label>1</label>";


		// 	} 
		// };
	} else {
		echo "You Found A Bronze Egg";
	};
};

echo "</div>";
echo "</form>";

?>
<script>


</script>