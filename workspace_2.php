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


function User(theName, theEmail){
    this.name           = theName;
    this.email          = theEmail;
    this.quizScores     = [];
    this.currentScore   = 0;  
};

User.prototype =  {
 constructor: User,
 saveScore: function(theScoreToAdd){
    this.quizScores.push(theScoreToAdd);
 },
 showNameAndScores:function () {
    var scores = this.quizScores.length > 0 ?
    this.quizScores.join(","): "No Scores Yet";
    return this.name+" Scores: " +scores;
 },
 changeEmail:function(newEmail){
    this.email = newEmail;
    return "New Email Saved: "+this.email; 
 }
};

var alvin = new User("alvin", "alvinjosephvaldez@yahoo.com");

alvin.saveScore(15);
alvin.saveScore(15);



</script>
</html>
