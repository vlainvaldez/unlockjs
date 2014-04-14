<html>
<head>
<title>Test Suite</title>
<script>
    function assert(value, desc) { 
        var li = document.createElement("li"); 
        li.className = value ? "pass" : "fail"; 
        li.appendChild(document.createTextNode(desc)); 
        document.getElementById("results").appendChild(li); 
    } 

</script>
<style>
    #results li.pass { color: green; } 
    #results li.fail { color: red; } 

    #box {
        background: blue;
        height: 200px;
        width: 200px;
        position: absolute;
    }
</style>
</head>
    <body>
 

    </body>

<script type="text/javascript">
function callbacks_with_apply( arg1, arg2, callback ){

    var result1 = arg1.replace( 'argument', 'result' ),
        result2 = arg2.replace( 'argument', 'result' );
      
    this.data = 'i am some data that can be use for the callback function with `this` key word';
    
    console.log(arguments.length);
    console.log(result2);
    console.log(arg1);
    // if callback exist execute it
    callback && callback.apply( this, [ result1, result2 ]);
}

callbacks_with_apply('first','second');
</script>
</html>
