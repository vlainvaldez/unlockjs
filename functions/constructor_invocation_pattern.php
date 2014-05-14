<html>
<head>
<title>Constructor Invocation Pattern</title>
<style>

</style>
</head>
<body>
</body>

<script type="text/javascript">

// so this is a simple example of contructor invocation pattern

var User = function (string){
    // we assume that we are going to use "new" invoke the function here
    // so in theory we can the "this" will bound to the scope of "var = User" not in the global 
    // unlike this one " User(); ""
    this.name = string;
};

// when a function is invoke with "new" prefix 
// then a new object will be created with a
//hidden link to the value of the function’s "prototype" member, and this will be bound
// to that new object.

// wait, what is prototype?
// according to this site http://yehudakatz.com/2011/08/12/understanding-prototypes-in-javascript/
// it says
//JavaScript objects also have one additional attribute: a pointer to another object. We call this pointer the 
// object’s prototype. If you try to look up a key on an object and it is not found, JavaScript will look for
// it in the prototype. It will follow the “prototype chain” until it sees a null value. In that case, it 
// returns undefined.

User.prototype.getUserName = function () {
    return this.name; 
};

var currentUser = new User("alvin pogi");

alert(currentUser.getUserName());  

</script>
</html>
