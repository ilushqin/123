<html>
<head>
	<title>������ ������������ ������</title>
</head>
<body>

<form action="" method="get">	
	������ � <input type="text" name="massA" value="<?=$_GET['massA']?>"><br>
	������ � <input type="text" name="massB" value="<?=$_GET['massB']?>"><br>
	<input type="submit" value="������� ��� ��������">
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
		//�����������
		echo "����������� ���� ��������:".massOb($massA,$massB);
		echo "<br>";	
	}
?>


</body>
</html>