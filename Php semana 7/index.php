<?php
   //Comentario de una linea
   /*
     Comentarios
  
    $numero = 10;
    echo "<h1>Hola Mundo</h1>" . $numero; 
    */
    if(isset($_POST['seleccion'])){
        echo "Click sobre el boton";
        $idioma = $_POST['idioma'];
        INCLUDE $idioma. ".php";
    }
    else{
        echo "No se ha enviado el click";
        INCLUDE "es.php";
    }
?>

<!-- Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<html>
    <head>
        <title><?php echo TITLE; ?>></title>
    </head>
    <body>
        <form method = "POST">
            <select name = "idioma"> 
                <option value ="es">Spanish</option>
                <option value ="en">English</option>
            </select>
            <input type = "submit" name ="seleccion" value="Cambiar"/>
        </form>
        <h1><?php echo TITLE; ?></h1>
        <h1><?php echo HEADING_TITLE; ?></h1>
        <h2><?php echo OVERVIEW_TITLE; ?></h2>
    </body>
</html>