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
    Function.prototype.memoized = function(key){
        this.alvin = this.alvin || {}; 
        return this.alvin[key] !== undefined ? 
        this.alvin[key] :
        this.alvin[key] = this.apply(this, arguments);
        
        };

    function isPrime( num ) { 
        var prime = num != 1;
        for ( var i = 2; i < num; i++ ) {
            if ( num % i == 0 ) {
            prime = false;
            break;
            }
        }
        return prime;
    }

    console.log(isPrime.memoized(5), 
    "The function works; 5 is prime."); 
    
    console.log(isPrime.alvin[5], 
    "The answer has been cached."); 
</script>
</html>
