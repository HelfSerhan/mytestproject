<?php

	if (file_exists('count_file.txt')) 
	{
		$fil = fopen('count_file.txt', r);
		$dat = fread($fil, filesize('count_file.txt')); 
		echo $dat+1;
		fclose($fil);
		$fil = fopen('count_file.txt', w);
		fwrite($fil, $dat+1);
	}

	else
	{
		$fil = fopen('count_file.txt', w);
		fwrite($fil, 1);
		echo '1';
		fclose($fil);
	}
	 header("Location: ./ahmash.php");
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>test</title>
<link href="style/monitor2.css" rel="stylesheet">
<link href="style/+.css" rel="stylesheet">
ddddd</head>
<body>
<div id="space"><br></div>
<div id="container">

</div>
</body>
</html>