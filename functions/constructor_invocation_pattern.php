<html>
<head>
<title>Constructor Invocation Pattern</title>
<style>

</style>
</head>
<body>
</body>

<script type="text/javascript">


var User = function (string){
    this.name = string;
};

User.prototype.getUserName = function () {
    return this.name; 
};

var currentUser = new User("alvin pogi");

alert(currentUser.getUserName());  

</script>
</html>
