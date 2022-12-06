<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimo y Maximo</title>
    <!--Escribe un programa que pida 10 números por teclado y que luego muestre los números
    introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo
    respectivamente. -->
</head>
<body>
    <div>
        <div><h1>Maximo y Minimo</h1></div>
        <div>
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
            if (isset($_POST["num"])) {

                $numeros=$_POST["num"];

                $maximo=max($numeros);
                $minimo=min($numeros);
                
                for ($i=0; $i <10; $i++) { 
                    if($numeros[$i] == $maximo){
                        echo $maximo," Es el maximo <br>";

                    }elseif ($numeros[$i] == $minimo) {
                        echo $minimo," Es el minimo <br>";
                    }else {
                       echo $numeros[$i],"<br>";
                    }


                }

            }
            
            ?>
        </div>
    </div>
    
</body>
</html>