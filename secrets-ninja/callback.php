<html>
<head>
<title>Javascript Nina Ebook</title>

<link rel="text/css" href="styles.css">
</head>
<body>
	<ul id="results"></ul>
</body>
<script type="text/javascript" src="assert.js"></script>
<script type="text/javascript">
 function useless(callback){
 	return callback();
 };

 var text = "alvin is so handsome";

 assert(useless(function(){
 	return text;
 }) === text, "the useless function works "+ text);

</script>
</html>
