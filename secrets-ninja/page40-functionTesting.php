<html>
<head>
<title>function testing</title>

<link rel="stylesheet" href="styles.css">
</head>
<body>
	<ul id="results"></ul>
</body>
<script type="text/javascript" src="assert.js"></script>
<script type="text/javascript">
 function isNimble(){ return true; } 

assert(typeof window.isNimble === 'function', "isNimble() defined");

assert(isNimble.name === 'isNimble', "isNimble() has a name");

var canFly = function(){ return true; }; 
assert(typeof window.canFly === 'function', "canFly() defined");

assert(canFly.name === '', "canFly() has no name");

window.isDeadly = function(){ return true; }; 
assert(typeof window.isDeadly === 'function', "isDeadly() defined");

function outer(){ 
	assert(typeof inner === 'function',"inner() in scope before declaration");

	function inner(){}
	assert(typeof inner === 'function', "inner() in scope after declaration");
	assert(window.inner === undefined, "inner() not in global scope");
};

outer(); 
assert(inner === undefined, "inner() still not in global scope");

</script>
</html>
