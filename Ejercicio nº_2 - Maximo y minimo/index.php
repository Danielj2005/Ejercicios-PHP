<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimo y Maximo</title>
    <!--
        Escribe un programa que pida 10 números por teclado y que luego muestre los números
        introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo
        respectivamente. 
    
        Creado por: Daniel Barrueta
    -->
</head>
<body>
    <div>
        <div><h1>Maximo y Minimo</h1></div>
        <div>
            <!-- se solicitan los datos -->            
            <p>ingrese 10 numeros y determine cual es el maximo (mayor) y el minimo (menor)</p>
            
            <?php for($i=0; $i<10 ; $i++): ?>
            
            <form action="" method="post">
                
                <input type="text" required="" name="num[]">
                
                <?php endfor ?>

                <input type="submit" value="enviar">
                
            </form>
        </div>
        <div>
        <?php
            if (isset($_POST["num"])) {//se conprueba que los datos se recibieron 

                $numeros=$_POST["num"];//guarda los datos en un array

                $maximo=max($numeros);//guarda en una variable el numero Maxino dado
                $minimo=min($numeros);//guarda en una variable el numero Minimo dado
                
                for ($i=0; $i <10; $i++) { 
                    if($numeros[$i] == $maximo){
                        //imprimimos la palabra "Maximo" junto al número mayor
                        echo $maximo," Es el maximo <br>";
                    }elseif ($numeros[$i] == $minimo) {
                        //imprimimos la palabra "Minimo" junto al número mayor
                        echo $minimo," Es el minimo <br>";
                    }else {
                        //imprimimos los demas números
                       echo $numeros[$i],"<br>";
                    }


                }

            }
            
            ?>
        </div>
    </div>
    
</body>
</html>