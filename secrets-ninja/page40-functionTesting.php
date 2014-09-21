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
 function isNimble(){ return true; } //#1

assert(typeof window.isNimble === 'function', //#2
"isNimble() defined");

assert(isNimble.name === 'isNimble',
"isNimble() has a name");

var canFly = function(){ return true; }; //#3
assert(typeof window.canFly === 'function', //#4
"canFly() defined");

assert(canFly.name === '',
"canFly() has no name");

window.isDeadly = function(){ return true; }; //#5
assert(typeof window.isDeadly === 'function', //#6
"isDeadly() defined");

function outer(){ //#7
	assert(typeof inner === 'function',
	"inner() in scope before declaration");

	function inner(){}
	assert(typeof inner === 'function',"inner() in scope after declaration");
	assert(window.inner === undefined,
	"inner() not in global scope");
};

outer(); //#8
assert(inner === undefined,
"inner() still not in global scope");

</script>
</html>
