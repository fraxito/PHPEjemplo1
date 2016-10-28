<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PRUEBA quien es quien</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container" id="centro">
            <div class="row">
                 <div class="col-md-12">
                     <div id="posicionY" ></div><br/>
                     <div id="posicionX" ></div>
                     <div id="etiqueta01" class="btn btn-primary" style="position: absolute; top:200px; left:100px;">ETIQUETA 1</div>
                 </div>
            </div>
        </div>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        
        $('#etiqueta01').draggable({
            drag: function(){
                var posicion = $(this).position();
                $('#posicionY').html(posicion.top);
                $('#posicionX').html(posicion.left);
            },
            stop: function(){
                var posicion = $(this).position();
                var altura =  window.innerHeight;
                if (posicion.top < altura/4){
                    $('#etiqueta01').removeClass('btn-primary').addClass('btn-danger');
                } else if (posicion.top >= altura/4 && posicion < altura/2){
                    
                } 
            }
        });
    </script>
    
</html>




<?php



