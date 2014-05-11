<html>
<head>
<title>work space 2</title>

<style>

</style>
</head>
<body>
        <!-- <ul id="results"></ul> -->


</body>




<script type="text/javascript">
//http://javascriptissexy.com/oop-in-javascript-what-you-need-to-know/
//this is a tutorial from this site


// this is a bad practice of inheritance because we are overwritting the prototype by
// User.prototype = 

//this is an attemp to make a good inheritance
// by adding this code

Function.prototype.protos = function(name, func){
    if(!this.prototype[name]){
        this.prototype[name] = func;
        return this;
    }
};

var User = function(theName, theEmail){
    this.name           = theName;
    this.email          = theEmail;
    this.quizScores     = [];
    this.currentScore   = 0;  
};

// NEW INHERITANCE FROM DOUGLAS CROCKFORD'S JAVASCRIPT THE GOOD PARTS AUGMENTED TYPES

User.protos('saveScore', function (theScoreToAdd) {
    this.quizScores.push(theScoreToAdd);
    return this; // this is added to make a chain functionality
});

// this wont work because of  if(!this.prototype[name]){ } on line 30
User.protos('saveScore', function () {
    alert("bull")
    return this; 
});

User.protos('showNameAndScores', function(){
      var scores = this.quizScores.length > 0 ?
    this.quizScores.join(","): "No Scores Yet";
    return this.name+" Scores: " +scores;
});

User.protos('changeEmail', function(newEmail){
     this.email = newEmail;
     return "New Email Saved: "+this.email;     
});

//OLD INHERITANCE FROM JAVASCRIPT IS SEXY 

// User.prototype =  {
//  constructor: User,
//  saveScore: function(theScoreToAdd){
//     this.quizScores.push(theScoreToAdd);
//  },
//  showNameAndScores:function () {
//     var scores = this.quizScores.length > 0 ?
//     this.quizScores.join(","): "No Scores Yet";
//     return this.name+" Scores: " +scores;
//  },
//  changeEmail:function(newEmail){
//     this.email = newEmail;
//     return "New Email Saved: "+this.email; 
//  }
// };

// ################code application ###############

var alvin = new User("alvin", "alvinjosephvaldez@yahoo.com");

alvin.saveScore(15).saveScore(10);
alvin.saveScore(15);

console.log(alvin.constructor);

console.log(alvin.showNameAndScores());

</script>
</html>
