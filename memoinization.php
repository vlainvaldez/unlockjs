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
    // Function.prototype.memoized = function(key){
    //     this.alvin = this.alvin || {}; 
    //     return this.alvin[key] !== undefined ? 
    //     this.alvin[key] :
    //     this.alvin[key] = this.apply(this, arguments);
    //     };

    // Function.prototype.memorize = function() {
    //     var fn = this;
    //     return function() {
    //         return fn.memoized.apply(fn, arguments);            
    //     }
    // };


    // var isPrime = (function (num){
    //     var prime = num != 1;
    //     for ( var i = 2; i < num; i++ ) {
    //         if ( num % i == 0 ) {
    //         prime = false;
    //         break;
    //         }
    //     }
    //     return prime;
    // }).memorize();

    // console.log(isPrime(5), 
    // "The function works; 5 is prime."); 
    
    // console.log(isPrime.alvin[5], 
    // "The answer has been cached."); 
</script>
<script type="text/javascript">
    function wrap(object, method, wrapper) {
        var fn = object[method]; return object[method] = function() {
        return wrapper.apply(this, [ fn.bind(this) ].concat(
        Array.prototype.slice.call(arguments))); } };


    // Example adapted from Prototype
    if (Prototype.Browser.Opera) {
    wrap(Element.Methods, "readAttribute", function(original, elem, attr) {
           return attr == "title" ?
               elem.title :
               original(elem, attr);
       });
    }

</script>
</html>
