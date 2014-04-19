<html>
<head>
<title>Apply and Call</title>

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

var something = {
    features : 'handsome',
        greet: function (name){
        alert(name+' is so '+this.features );
    }  
};

something.greet("alvin");
  
var aoi = {
    name: 'aoi',
    features: 'hansome'
}

something.greet.call(aoi, 'aoi');

</script>
</html>
