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
    <ul id="list"></ul>

</body>



<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">
(function (){

    function Ninja() { 
        var slices = 0; 
        this.getSlices = function(){ 
            return slices; 
        };

        this.slice = function(){ 
            slices++; 
        }; 

        this.back = function(){ 
            slices--; 
        }; 
    }

var ninja = new Ninja();

var number = ninja.slice();
ninja.slice();
ninja.slice();


console.log(ninja.getSlices());


})();

// var someObject = { 
//     firstObject: 'alvin' , 
//      alertAlvin: function (){
//         alert(this.firstObject);
// }}

// someObject.alertAlvin.call({firstObject: someObject.firstObject+' is so handsome'});

</script>
</html>
