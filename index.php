<html>
<head>
<title>Test Suite</title>
<script>
    function assert(value, desc) { 
        var li = document.createElement("li"); 
        li.className = value ? "pass" : "fail"; 
        li.appendChild(document.createTextNode(desc)); 
        document.getElementById("results").appendChild(li); 
    } 

</script>
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

<div id="box"> ボックス</div> 
<ul id="results"></ul>

</body>

<script type="text/javascript">
var elem = document.getElementById("box");



var tick = 0;

// (function() {
//     elem.style.top = tick + "px";
// })();
 

var timer = setInterval(func2, 10);
var timer2 = 0;
console.log(elem.style);

function func2(){ 
    if (tick < 100) {
        elem.style.left = elem.style.top = tick + "px";
        tick++;
        console.log(tick);
    }
    else {

        clearInterval(timer);
        
         timer2 = setInterval(func, 10);
        }

};

function func(){ 
        
    if (tick > 1) {
        elem.style.left = elem.style.top = tick + "px";
        tick--;
        console.log(tick);
    }
    else {
    clearInterval(timer2);
       }

};

console.log("im pending");

</script>

<script type="text/javascript">
// var outerValue = 'ninja'; 
//     function outerFunction() {
//         assert(outerValue == "ninja","I can see the ninja."); 
//     }
// outerFunction(); 

// var outerValue = 'ninja';
// var later; 

// function outerFunction() {
//     var innerValue = 'samuriai'; 
//     function innerFunction() { 
//         assert(outerValue,"I can see the ninja."); 
//         assert(innerValue,"I can see the samurai"); 
//         } 
//     later = innerFunction; 
// }
// outerFunction(); 
// later();
</script>
</html>
