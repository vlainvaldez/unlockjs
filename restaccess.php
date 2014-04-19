<!doctype html>
<html>
<head>
<title>REST API ACCESS IN LARAVEL</title>

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



<script type="text/javascript" src="jquery.js"> </script>
<script type="text/javascript">
$(document).ready(function(){
    var data = 'username=alvinjosephvaldez&password=passwords';
    var url  = 'http://web.restapilaravel.dev/user';

    $.ajax({
           type: "GET",
           url: "http://web.restapilaravel.dev/user",
           crossDomain: true,
           processData: true,
           data: {'username':'sample', 'password':'passwords'},
           dataType: "jsonp",
           success: function (data) {
               console.log(data);
           }
        });
});
</script>
</html>
