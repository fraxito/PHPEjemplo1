<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">

    </head>
    <body>
        <h1></h1>
        <div id="ejemplo"  style=" width: 700px; height: 500px; border: solid black 1px; ">
            
        </div>
        
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script>
        $( function() {
            $('#ejemplo').append('<div id="recuadro" style="width: 100px; height: 100px; border: solid green 1px; position:absolute; top:0 px; left:0px;"></div>');
            $('#recuadro').resizable().draggable();
        var numeroCuadrados = 0;
             $('#ejemplo').click(function (e) { 
                var posX = e.pageX ;
                var posY = e.pageY ;

                $('#recuadro').css({top: posY, left: posX});

            });
        } );
        


        
    </script>
  
  
</html>