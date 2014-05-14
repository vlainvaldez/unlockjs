<html>
<head>
<title>Function Invocation Pattern</title>

<style>

</style>
</head>
<body>
        <!-- <ul id="results"></ul> -->


</body>




<script type="text/javascript">
//ref : http://doctrina.org/Javascript-Function-Invocation-Patterns.html

//  add(2,3);

//When using the function invocation pattern, this is set to the global object. This was a mistake in the JavaScript language!
//Blindly binding this to the global object can destroy its current context. It is noticable when using an inner function
//within a method function. An example should explain things better: 

var add = function(a, b){
    return a+b;
};    

var sum = add(2,3); //5

var value = 500;

var obj = {
    value: 0,
    increment: function (){
        this.value++;

        var that = this;

        var innerFunction = function (){
            alert(this.value); // this.value became global because of innerFunction(); bellow the global this.value is var = 500 
        };
        // though this is inside a method, which is invoked later using method invocation pattern
        innerFunction();
    },
};

obj.increment(); 


</script>
</html>
