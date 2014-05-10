<html>
<head>
<title>Creating a New Object</title>

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
// Using object.create
// var car = {
//     kind: 'sedan',
// }
// var honda = Object.create(car);
// console.log(honda);


// Function as constructor

// function Car(){
//     this.kind = 'sports car';
// }
// var honda = new Car();
// console.log(honda.kind);

// Function prototype
function Car (name){
    this.name = name;
}
Car.prototype.kind = 'electric';
var honda = new Car('honda');
console.log(honda);

</script>
</html>
