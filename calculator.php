<html>
<head>
	</head>
	<body>
		<form>
			<input type="text" name="num1" placeholder="enter a number :">
			<input type="text" name="num2" placeholder="enter a number:">
			<select name='operator'>
				<option>NONE</option>
				<option>ADD</option>
				<option>SUB</option>
				<option>MUL</option>
				<option>DIV</option>
				<option>MOD</option>
			</select><br><br>
			<button type="submit" name="submit" value="submit">CALCULATE</button>

		</form>
		<h2>The answer is :</h2>

		<?php

		if(isset($_GET['submit']))
		{
			$result1=$_GET['num1'];
			$result2=$_GET['num2'];
			$operator=$_GET['operator'];

		switch ($operator) {
			case 'NONE':
				echo "ERROR";
				break;
			case 'ADD':
				echo $result1+$result2;
				break;
			case 'SUB':
				echo $result1-$result2;
				break;
			case 'MUL':
				echo $result1*$result2;
				break;
			case 'DIV':
				echo $result1/$result2;
				break;
			case 'MOD':
				echo $result1%$result2;
				break;

		}


		}
		?>
	</body>

</html>
