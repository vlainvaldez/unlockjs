<html>
<head>
<title>Apply Invocation Pattern Version 2</title>

<style>

</style>
</head>
<body>

</body>

<script type="text/javascript">

Function.prototype.protos = function (name, func){
    this.prototype[name] = func;
    return this;
} 

var Car = function (model){
    this.model = model
};

Car.protos('get_model', function(){
    return this.model;
});

var teslaCar = {
    model: "tesla",
};

var tesla = Car.protos('get_model', function(){
    this.apply(teslaCar);
});


alert(tesla);

</script>
</html>
