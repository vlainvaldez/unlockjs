<html>
<head>
<title>Closures</title>

<style>

</style>
</head>
<body>
        <!-- <ul id="results"></ul> -->


</body>




<script type="text/javascript">
var fade = function (node) {
    var level = 1;
    var step = function ( ) {
            var hex = level.toString(16);
            node.style.backgroundColor = '#FFFF' + hex +hex;
            
            console.log('#FFFF' + hex +hex);
            if (level < 15) {
                level += 1;
                setTimeout(step, 100); // recursively runs step until 15 exeeds on the if
            }
        };
        setTimeout(step, 100); // runs the step function because its a function inside fade
};

fade(document.body);

</script>
</html>
