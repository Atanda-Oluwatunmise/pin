 <?php 
include('header.php');
?>
<body>
<br>
<br>
<br>

<div class="container" id="wrapper">

<?php
function RandomSourceCode() {
	$var = "0123456789";
	srand((double)microtime()*200);
	$i = 1;
	$rand_Code = '' ;

	while ($i <= 17) {
		$num = rand() % 10;
		$tmp = substr($var, $num, 1);
		$rand_Code = $rand_Code . $tmp;
		$i++;
	}
	return $rand_Code;
}
?>
<h1>
<?php
echo RandomSourceCode();
?>
</h1>
<br>
<a href="index.php" class="btn btn-primary">Next</a>
</div>

</body>
</html>