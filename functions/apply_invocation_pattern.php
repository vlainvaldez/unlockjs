<html>
<head>
<title>Apply Invocation Pattern</title>

<style>

</style>
</head>
<body>

</body>

<script type="text/javascript">
// i just copy pasted the code from the function_invocation_pattern.php
// to solve the problem when invoking a function using ()

var value = 500;
var obj = {
    value: 0,
    increment: function (){
        this.value++;

        var that = this;

        var innerFunction = function (){
            alert(this.value);
        }
        // this invocation of function below is from the previous code
        // remember that even its inside the scope of "var obj" still 
        // the "this" of innerFunction will still be on the global 
        //innerFunction();
        // to solve that we will be using "Apply Invocation Pattern"

        innerFunction.apply(this);
        // see? we you use .apply() then pass the context of "obj" inside the .apply
        // the "this" here is "obj" because its already outside the innerFunction but
        // its inside the scope of "obj" object

        // so the alert value must be "1" because we are now calling the 
        // this.value which is value:0, who gets incremented upon invoking the "increment" method using obj.increment()
        
        //event if we dont use "that" which we use to pass the context of obj 
        // we can still have an alert that has a value of "1"

        // we can also use .call() instead of .apply()
        
        // innerFunction.call(this);
    },
};

obj.increment(); 


</script>
</html>
