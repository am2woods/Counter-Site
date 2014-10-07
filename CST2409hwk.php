<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="format.css" />
	</head>

	<body>

		<div class="container">
			<?php
				$start = 0;
				$countBy = 1;
				$range = 100;
				$highlight = 2; 

				$marker = explode(",", $highlight, 3);
				$length = count($marker);

				$validRange = isset ($_GET["numberRange"]);
				$validStart = isset($_GET["starter"]);
				$ValidCount = isset($_GET["counter"]);
				$validHighLight = isset($_GET["HighLight"]);

				if($validRange){
					$range = $_GET["numberRange"];
				}

				if($ValidCount){
					$countBy = $_GET["counter"];
				}

				if($validStart){
					$start = $_GET["starter"];
				}

				if($validHighLight){
					$highlight = $_GET["HighLight"];
				}

			?>

			<center><h1>Counter</h1></center>

			<form>
		
				<label>Start: </label><input type="text"  
				value="<%=$start;%>" name="starter" id="starter"/>
				
				<label>Counter: </label><input type="text"  
				value="<%=$countBy;%>" name="counter" id="counter"/>

				<label>Range: </label><input type="text"  
				value="<%=$range;%>" name="numberRange" id="numberRange"/>

				<label>Highlight: </label><input type="text"
				value="<%=$highlight%>" name="HighLight" id="HighLight"/>

				<input type="submit"  value="Submit" />
				
			</form>

			<?php

				for($i=$start; $i<=$range; $i=$i+$countBy){
					if($i%$highlight == 0){
						echo "<div class='highlight'>$i</div>";
					}
					else{
						echo "<div class='num'>$i</div>";
					}
				}

				/*
				This is my stab at the multi highlight 
				it doesn't work as intended but it's something

				for($i=$start; $i<=$range; $i=$i+$countBy){
					for($x = 0; $x<$length; $x++){
						if($i % $marker[$x] == 0){						
							echo "<div class='highlight'>$i</div>";
						}

						else{
							echo "<div class='num'>$i</div>";
						}
					}
				}*/
			?>
		</div>
	</body>
</html>