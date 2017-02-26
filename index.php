<html>
<head>
	<title>Первая лабораторная работа</title>
</head>
<body>

<form action="" method="get">	
	Массив А <input type="text" name="massA" value="<?=$_GET['massA']?>"><br>
	Массив В <input type="text" name="massB" value="<?=$_GET['massB']?>"><br>
	<input type="submit" value="Сделать все действия">
</form>

<?php
	function validation($a,$b)
	{
		$res=false;
		
		return $res;
	}
	
	function massOb($a,$b)
	{
		$res = $a.$b;
		return $res;
	}
        if(isset($_GET["massA"]) && isset($_GET["massB"]))
	{
		$massA = $_GET["massA"];
		$massB = $_GET["massB"];
		//Объединение
		echo "Объединение двух массивов:".massOb($massA,$massB);
		echo "<br>";	
	}
?>


</body>
</html>