<html>
<head>
<title>Apply Invocation Pattern Version 2</title>

<style>

</style>
</head>
<body>

</body>

<script type="text/javascript">

//this is another sample of apply invocation pattern


var Car = function (model){
    this.model = model
};

Car.prototype.get_model = function (){
   return this.model;

};

var teslaCar = {
    model: "tesla",
};

// in this example the teslaCar object doesnt inherit from Car.prototype
// but we can invoke the get_model on teslaCar even though tesla car doesnt
// have a  get_model 

// this is how.. 
var tesla = Car.prototype.get_model.apply(teslaCar);
// we pass teslaCar as a parameter on apply

alert(tesla);

</script>
</html>
