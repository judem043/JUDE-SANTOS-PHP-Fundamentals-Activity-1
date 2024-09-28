<?php  
if (isset($_GET['getSum'])) {
	$a = $_GET['num1'];
	$b = $_GET['num2'];
    $c = $_GET['num3'];

    $discriminant = ($b * $b) - (4 * $a * $c);

	echo "<h2>Answer is " . $discriminant . "</h2>";
}
?>
</body>
</html>