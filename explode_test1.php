<!DOCTYPE HTML>
<html>
	<head></head>

	<body>
		<% 
			$pizza = "1 2 3 4 5";
			$pieces = explode(" ", $pizza);

			echo $pieces[0];

			$length = count($pieces);

			for($i = 0; $i < $length; $i++){
				echo $pieces[$i];
			}
		%>
	</body>
</html>