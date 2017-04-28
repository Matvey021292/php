<?php
	$lastvisit = $_COOKIE['lastvisit'] ? $_COOKIE['lastvisit'] : '';
	setcookie('lastvisit',time());
?>

<?php
	ob_start();
	$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter']:0;
	setcookie('counter',++$counter);
	ob_flush();
?>
<?php
	require 'function.php';
	if (empty($_GET)) {
		$noget = true;

	}else{
		$rows = isset($_GET['rows']) ? $_GET['rows']:'';
		$cols = isset($_GET['cols']) ? $_GET['cols']:'';
		$color = isset($_GET['color']) ? $_GET['color']:'';
	}
?>
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
<?php
	$login = isset($_GET['login']) ? $_GET['login']: null;
	$pass = isset($_GET['pass']) ? $_GET['pass']: null;

	if (!is_null($login))
		setcookie('login',$login);
	
	$login = $_COOKIE['login'] || $login;
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
            var_dump($_SERVER)
        ?>
    </ul>
</nav>

<h1>Main</h1>
<h1><?php
echo Myfunc('hello','word')
?></h1>


<form action="" method="get">
	<label>Enter rows
		<input type="number" name="rows">
	</label>
	<label>Enter cols
		<input type="number" name="cols">
	</label>
	<label>Enter color
		<input type="color" name="color">
	</label>
	<input type="submit" name="submit">
</form>
<?php
	DrowTable($rows,$cols,$color);

	
?>
<?php
function DrowTable($row, $col, $color = 'blue'){
echo '<table>';
for($i = 1;$i<=$row;$i++){
	echo '<tr>';
	for($j=1;$j<$col;$j++){
		echo "<td style='background-color:$color'>" . $i * $j . '</td>';
	}
	echo '</tr>';
}
echo'</table>';

}
?>
<br>
<?php
	if($login){
		echo "<h1> HEllo" .$login ."</h1>";
	}else
?><form action="" method="get">
	<input type="text" name="login">
	<input type="password" name="pass">
	<input type="submit" name="submit">
</form>
<h1><?=$counter?></h1>
<?php
	if($lastvisit){
		echo "<h1>Last Visit".$lastvisit."</h1>";

	}else{
		echo "<h1>HEllo Darling</h1>";
	}
?>
</body>
</html>