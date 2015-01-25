<html>
<head>
<title>Php Trick</title>
<script>
	counter = 0;
	function action()
	{
		counterNext = counter + 1;
		document.getElementById("input"+counter).innerHTML = "<p>Masukan Data <input type='text' name='data[]'></p>"+
		"<div id=\"input"+counterNext+"\"></div>";
		counter++;
	}
</script>
</head>
<body>
<h2>Form Dinamis</h2>
<form method="post" action="...">
	<div id="input0"></div>
	Masukan Data <input type="text" name="data[]"> <a href="javascript:action()">add</a>
	<br>
	<p></p>
</form>
</body>
</html>