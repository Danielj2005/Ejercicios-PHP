<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diccionario</title>
    <link type="image/png" sizes="32x32" rel="icon" href="favicon.png">
    <link rel="stylesheet" href="style_diccionario.css">
    <!-- 
        Autores:Daniel Barrueta C:I: 28.587.583, Jesús Colmenares C:I: 30.776.077
        Institución:UPTP
        Asignatura:programación
        
    -->
</head>
<body>
    <div class="container">
        <div class="container-header">
            <h1>Diccionario Español - Inglés</h1>
            <h3>Ingrese una palabra para ver su significado en inglés</h3>
        </div>
        <div class="container-form">
            <form action="" method="post">
                <label for="palabra">Ingrese la palabra</label><br><br>
                <div class="container-form-input">
                    <input type="text" class="buscador" placeholder="ingrese una palabra" name="palabra" id="palabra">
                    <input type="submit" class="btn" name="buscar" alt="Buscar" value="Buscar">
                   
                </div>

            </form>
        </div>
        <div class="container-php">
            <?php
                $diccionario=[
                    "carro"=>"car", "gato"=>"cat","porque"=>"because","nosotros"=>"us , we",
                    "dar"=>"give","nuevo"=>"new","por qué"=>"why","hacer"=>"make",
                    "pez"=>"fish","perro"=>"dog","well"=>" bien","primero"=>"first",
                    "ultimo"=>"last","niño"=>"child","trabajo"=>"work","colmena"=>"hive",
                    "teclado"=>"keyboard","raton"=>"mouse","escuela"=>"school","telefono"=>"smartphone",
                    "jugar"=>"play","un"=>"one","mi"=> "my","voluntad"=> "will",
                    "todo"=>"all","toda"=>"all","todos"=>"all","todas"=>"all",
                    "o"=>"or","ella"=>"she","decir"=>"say","el"=>"his",
                    "pero" =>"but","como"=>"how","día"=>"day","usar"=>"use",
                    "dos"=> "two","después"=> "after","atrás"=> "back","también"=> "also",
                    "pensar"=> "think","encima"=> "over","venir"=> "come","solo"=> "only",
                    "mirar"=>"look","ahora"=> "now","entonces"=> "then","que"=> "than",
                    "otra"=> "other","otro"=> "other","ver"=> "see","ellos"=> "them"                    
                ];

                if (isset($_POST["palabra"])) {
                    $palabra=$_POST["palabra"];
                    
                    if (array_key_exists($palabra, $diccionario)) {
                       //El array_key_exists sirve para buscar una key en un array asosiativo

                       ?>
                            <p class="resultado-1"> 
                            
                            
                            
                            
                                La palabra <?= $palabra ?> significa <?=$diccionario[$palabra] ?>
                            
                            </p>
                        <?php

                    }else {//si la palabra no existe
                        //Mostrar un Mensaje para indicar que la palabra ingresada no existe
                        ?>
                        <p class="resultado-2"> Lo sentimos, "<?= $palabra ?>" no esta en el Diccionario</p>
                        <?php

                    }




                }
            ?>
        </div>
    </div>
    
</body>
</html>