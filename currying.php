<html>
<head>
<title>Currying</title>

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
        <!-- <ul id="results"></ul> -->


</body>




<script type="text/javascript">
//     String.prototype.csv = String.prototype.split.partial(/,\s*/); 
//     var results = ("Mugan, Jin, Fuu").csv();

//     assert(results[0]=="Mugan" && 
// results[1]=="Jin" && 
// results[2]=="Fuu", 
// "The text values were split properly");

function add(a, b) {
    if (arguments.length < 1) {
        return add;
    } else if (arguments.length < 2) {
        return function(c) { return a + c }
    } else {
        return a + b;
    }
}

var first = add(5);

alert(first(5));


</script>
</html>
