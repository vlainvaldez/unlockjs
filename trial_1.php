<html>
<head>
<title>work space 1</title>

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

// function Car (){
//         this.kind =  'sedan';
//         this.type =  'electric';
// }


// var honda = new Car();

// console.log(honda);

function Class(){}


Class.prototype.calc = function () {
    // takes the arguments to apply  how? because apply accepts objects
    // and arguments are objects
    var args = Array.prototype.slice.apply(arguments), 
        res = 0, c , guments = arguments;

    //  shift() method removes the first item of an array, and returns that item.
    // To remove the last item of an array, use the pop() method.
    while (c = args.shift()) 
        res += c;
    return res; 
}

var ins1 = new Class();
// Test the calc method:
console.log(ins1.calc(1,1,1));


</script>
</html>
