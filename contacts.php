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

		case 'Pow':
			$result = 1;
			$i =1;
			while($i<$second){
				$result *=$first;
				$i++;
			}
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
		<option value="Pow">pow</option>
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
<!-- <?php
		$a = 2;
		$b = 3;
		$i = 1;
		$res = 1;
	while($i<=$b){
		$res *=$a; 
		$i++;
	}
	var_dump($res);

	?> -->
<!-- 
	<?php
		
		$arr = array('HTML','CSS','JS');
		$arr[] = 'Ruby';
		$arr[1] = 'Pyton';
		var_dump($arr);
	?> -->
<?php
// $menu = array(
//     Array('id' => 0, 'url' => '/', 'title' => 'Main'),
//     Array('id' => 1, 'url' => 'contacts.php', 'title' => 'Contacts'),
//     Array('id' => 2, 'url' => 'about.php', 'title' => 'About'),
//     Array('id' => 3, 'url' => 'shop.php', 'title' => 'Shop'),
// );
?>
<?php
	include "menu.php"
?>
<nav>
    <ul class="menu">
        <?php
            foreach ($menu as $m){
                
                echo '<li data-id="' . $m['id'] .'"><a href="' . $m['url'] . '">' . $m['title'] .'</a></li>';
            }

            $menu2 = array();
            foreach ($menu[1] as $k => $v) {
            	if($k == 'url'){
            		$manu[$k] = 'catalog/' . $v;
            		continue;
            	}

            	$menu2[$k] = $v;
            }

        ?>
    </ul>
</nav>

<h1>Contacts</h1>
</body>
</html>