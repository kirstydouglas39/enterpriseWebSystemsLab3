<head>
</head>
<body>
</body>
<? php 
	$output = shell_exec('pythonr.py');
	echo "<p>The python script said</p>";
	echo "<pre>$output</pre>
?>
	