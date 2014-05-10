<html>
<head>
<title>Call Prototype / Prototypal Inheritance</title>

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
function Product(name, price) {
    this.name = name;
    this.price = price;

    if (price < 0)
        throw RangeError('Cannot create product "' + name + '" with a negative price');
    return this;
    }
    Product.prototype.getDescrption = function () {
        return this.category + " | named: " + this.name;
    };

    Product.prototype.getDesc = function () { // get desc became a method inside the Product function 
        alert(this.category);
    };

    function Food(name, price) {
        Product.apply(this, arguments);
        this.category = 'food';
    }

    Food.prototype = new Product();    // Food now inherits the getDescription method from Product's prototype

    function Toy(name, price) {
        Product.apply(this, arguments);
        this.category = 'toy';
    }

    var cheese = new Food('feta', 5);
    var fun = new Toy('robot', 40);

    console.log(cheese.getDescrption());
    console.log(cheese.getDesc()+"hello");
    console.log(fun.getDescrption());
</script>
</html>
