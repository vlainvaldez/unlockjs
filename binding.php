<html>
<title>binding</title>
<head>
</head>
    <body>
        <button id="test">Click Me!</button> 
    </body>
    <script>
        var button = { 
            clicked: false,
            click: function(){ 
            this.clicked = true;
            assert(button.clicked,"The button has been clicked"); 
            }
        };
        assert( 5 > 1,'wew');

        var elem = document.getElementById("test"); 
        elem.addEventListener("click",button.click,false);
    </script>
</html>
