<html>
<head>
<title>30Weeks.com</title>

<style>

</style>
</head>
<body>

    <button id="fire">Fire</button>
</body>


<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
<script type="text/javascript">

var app = {
    init: function(){
        app.events();
    },

    events:function(){
        $('#fire').on('click', function(){
            alert("congratulations");
        });

    }
};

$(function() {app.init()});

</script>
</html>
