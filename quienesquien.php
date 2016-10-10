<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">

    </head>
    <body>
        <div id="ejemplo"  style=" width: 700px; height: 500px; border: solid black 1px; ">
            
        </div>
        
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script>
        $( function() {
             $('#ejemplo').click(function (e) { //Relative ( to its parent) mouse position 
                var posX = e.pageX - $(this).position().left;
                var posY = e.pageY - $(this).position().top;
                console.log (posX);
                $('#ejemplo').append('<div id="recuadro" style="width: 10px; height: 10px; border: solid green 1px; position:absolute; top:'+posY+'px; left:'+posX+'px;"></div>');
            });
        } );

        
    </script>
  
  
</html>