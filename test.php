<!DOCTYPE html>

<html>
<head>
    <title>Title</title>
    <script type="text/javascript">
        var recipe = [
            {
                'rname' : 'pork'
            },
            {
                'rname' : 'beef'
            }
        ];

        var rname = 'someone';

        for(var index in recipe) {
            rname = rname.toLowerCase();
            if(recipe[index].rname != rname) { continue; }

            if(recipe[index].hasOwnProperty('rname') &&
               recipe[index].rname.toLowerCase() == rname) {

                console.log('Found');

                break;
            }
        }
    </script>
</head>
<body>

</body>
</html>
