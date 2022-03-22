<style>
	.rows:hover {
		margin: 5px;
	}

	button:hover{
		border:3px solid black ;
	}

	button {
		background-color: black;
		color: white;
		padding: 5px;
		border-radius: 10px;
		margin: 2px;
	}
	textarea{
		border: none;
		text-decoration: none;
		font-size: 26px;
	}
	#id1{
		background-color: green;
	}
	#id1:hover{
		border:3px solid black ;
	}
	#id2{
		background-color: red;
	}
	#id3{
		background-color: purple;
	}
	#id4{
		background-color: blue;
	}
	#id5{
		background-color: orangered;
	}
	#id6{
		background-color: orchid;
	}
</style>
<?php
echo "<div style='text-align:center;'>";
$a = array("*");
$yes = 13;
$id = array();
for($baz=0;$baz<$yes+1;$baz++){
	array_push($id,"id$baz");
};
$egg = "egg";
$text = "king";
$a1 = rand(0, $yes - 1);
for ($i = 0; $i <= $yes; $i++) {
	echo "<form method='post' ";
	echo "<br>";
	$vg = 0;
	$vs = rand(1, $a1 + 1);
	for ($fd = 0; $fd != $i + 1; $fd++) {
		echo $a[0];
		++$vg;
		if ($vg == $i) {
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
					echo "<div class='rows'><button name='$idname1' id='$idname1'>$text $idname1</button><div>";

					++$mh;
					if ($fd == $a1 && $cv == 0) {
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
						// echo "<button name='$idname'  id='$idname'>$text $idname</button>";
						++$cv;
					};
				} else {
					$ran1=rand(1,$a1+1);
					if ($ran1 == 1) {
						$idname2 = $id[$ran1];
					};
					if ($ran1 == 2) {
						$idname2 = $id[$ran1];
					};
					if ($ran1 == 3) {
						$idname2 = $id[$ran1];
					};
					if ($ran1 == 4) {
						$idname2 = $id[$ran1];
					};
					if ($ran1 == 5) {
						$idname2 = $id[$ran1];
					};
					if ($ran1 == 6) {
						$idname2 = $id[$ran1];
					};
					echo "<button name='$idname2'  id='$idname2'>$text $idname2</button>";
				};
			};
			for ($fd = 0; $fd != $i; $fd++) {
				echo $a[0];
			};
			echo "<br>";
		};
	};

	echo "</form>";
};
echo "<div>";
echo "<form method='post'>" ;
echo "<textarea name='textara1' id='textara1' cols='30' rows='5'>";
if (isset($_POST["$idname1"])!=2) {
	$click = rand(0,2);
	$wrong=array('Nice Try You Can Do Better','Nice Try But Not Close Enough','Try Again');
	echo $wrong[$click];
	if (isset($_POST['textara1'])) {
		$list = $_POST['textara1'];
		echo "$list";
		if (str_word_count($list) > 6) {
			echo $list;
			
		} else {
			echo $list . "\n" . $item;
		};
	};
}
else{
	echo "You Found The Egg";
};
echo "</textarea>";
echo "</form>";

?>
<script>


</script>