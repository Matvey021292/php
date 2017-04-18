<?php 
	$first = isset($_GET['first']) ? $_GET['first']:'';
	$second = isset($_GET['second']) ? $_GET['second']:'';
	$operation = isset($_GET['operation']) ? $_GET['operation']:'';
	switch ($operation) {
		case '+':
			$result = $first + $second;
			break;

		case '-':
			$result = $first - $second;
			break;

		case '*':
			$result = $first * $second;
			break;

		case '/':
			$result = $first / $second;
			break;

		case '%':
			$result = $first % $second;
			break;
		
		default:
			$result = null;
			break;
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
	<form method="get" action="index.php">
	<label>Ener number<input type="text" name="first"></label>
	<select name="operation">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
		<option value="%">%</option>
	</select>
	<label> Enter second number<input type="text" name="second"></label>
	<span>=</span>
	<?php 
		if($result){
			echo "<span>$result</span>";
		}else{ ?>
		<span >Click calulate button</span>
		<?php } ?>
		<br>
		<button type="submit" style="text-align: center;">Calculate</button>
	</form>
	
</body>
</html>