<!--p2f4act16-->
<!--Marc Ramirez Rubio-->
<!--Artur Viader Mataix-->
<!--Miguel Zhao Zhi-->
<html>
    <head>
        <title>Arxiu</title>
    </head>
    <body>
        Contingut del arxiu:
        <?php
            $archivo = fopen("prediccions.txt", "r");
            while(!feof($archivo)){
                $traer = fgets($archivo);
                echo nl2br($traer);
            }
            fclose($archivo);
        ?>
    </body>
</html>