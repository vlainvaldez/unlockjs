<html>
<head>
<title>Apply Invocation Pattern Version 2</title>

<style>

</style>
</head>
<body>

</body>

<script type="text/javascript">
// we use this to shorten the use of
// Obj.prototype.obj 
Function.prototype.protos = function (name, func){
    if(!this.prototype[name]){
        this.prototype[name] = func;
        return this;
    }
}; 

var Car = function (model){
    this.model = model
};

// this is how we use it.
// the first parameter is the name of the prototype
// the second is the function

// so if we use the old one it would be like this
// Car.prototype.get_model = function() {};
Car.protos('get_model', function(){
    return this.model;
});

var teslaCar = {
    model: "tesla",
};

// with the use of apply invocation inside the augmented prototype
// instead of making this " var tesla = Car.prototype.get_model.apply(teslaCar); "
// from the old one we can use the new one below
// we use "this" in this.apply()
// because the this == get_model because its inside the context of "get_model"
var tesla = Car.protos('get_model', function(){
    this.apply(teslaCar);
});

// we still have the same result as the apply_invocation_patern_v2.php

alert(tesla);

</script>
</html>
