<html>
<head>
<title>Prototypal</title>

<style>

</style>
</head>
<body>

</body>

<script type="text/javascript">
var myBuild = {
    name: 'Maserati',
    get_name:function(){
        return this.name;
    },
    model:function(){
        return this.model || '';
    }
};

var myCar = Object.create(myBuild);

myCar.name = 'tesla';
myCar.model = 'model S';
myCar.type = 'fueled';

myCar.overAll = function(){
    return 'Car name: '+this.name+' model: '+this.model+' type: '+this.type;
};

console.log(myCar.overAll());

</script>
</html>
