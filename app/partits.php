<!--gp2f4act16-->
<!--Marc Ramirez Rubio-->
<!--Artur Viader Mataix-->
<!--Miguel Zhao Zhi-->
<html>
    <head>
        <title>Partits</title>
        <script type="text/javascript">
            function ShowHideDiv(partits) {
                var dvPassport = document.getElementById("content");
                dvPassport.style.display = partits.checked ? "none" : "block";
            }
        </script>
    </style>
        </head>
        <body>
        <?php
            if (isset($_POST["usuari"])) {
                $myfile = fopen("prediccions.txt", "a") or die("No es pot obrir l'arxiu");
                $usuari = $_POST["usuari"];
                $partit = $_POST["partit"];
                if (isset($_POST["empat"])) {
                    $empat = $_POST["empat"];
                } else {
                    $empat = false;
                }
                $guanyador = $_POST["guanyador"];
                $golslocal = $_POST["golslocal"];
                $golsvisitant = $_POST["golsvisitant"];
                $marca = $_POST["marca"];
                $posessio = $_POST["posessio"];
                $xuts = $_POST["xuts"];
                $corners = $_POST["corners"];
                $faltes = $_POST["faltes"];
                $targetes = $_POST["targetes"];
                $targrogues = $_POST["targrogues"];
                $tarvermelles = $_POST["tarvermelles"];
                $min20 = $POST_["min20"];
                $min40 = $POST_["min40"];
                $min60 = $POST_["min60"];
                $min80 = $POST_["min80"];
                $punts = $_POST["punts"]    ;

                $txt = "Usuari: $usuari\n";
                $txt .= "Partit: $partit\n";
                if($empat) {
                    $empatsi = "Si";
                } else {
                    $empatsi = "No";
                }
                $txt .= "Empat: $empatsi\n";
                if(!$empat) {
                    $txt .= "Guanyador: $guanyador\n";
                }
                $txt.= "Gols equip local: $golslocal\n";
                $txt.= "Gols equip visitant: $golsvisitant\n";

                $txt .= "Equip amb més possesió de la pilota: $posessio\n";
                $txt .= "Equip que farà més xuts a porteria: $xuts\n";
                $txt .= "Equip que llançara més corners: $corners\n";
                $txt .= "Equip que farà més faltes: $faltes\n";
                $txt .= "Equip que treuran més targetes: $targetes\n";
                $txt .= "Quantitat de targetes grogues: $targrogues\n";
                $txt .= "Quantitat de targetes vermelles: $tarvermelles\n";
                $txt .= "Resultat en el minut 20: $min20\n";
                $txt .= "Resultat en el minut 40: $min40\n";
                $txt .= "Resultat en el minut 60: $min60\n";
                $txt .= "Resultat en el minut 80: $min80\n";
                $txt .= "Quantitat de micropunts: $punts\n";
                $txt .= "------------------------\n";
                fwrite($myfile, $txt);
                fclose($myfile);
                echo "Arxiu escrit";
            }
        ?>
    <form action="partits.php" method="post">
        <?php
            
            $partits[]="Leeds United - AFC Bourmemouth";
            $partits[]="Man. City - Fullham";
            $partits[]="Nottingham Forest - Brentford";
            $partits[]="Wolves - Brighton & Hove Albion";
            $partits[]="Everton - Leicester";
            $partits[]="Chelsea - Arsenal";
            $partits[]="Aston Villa - Man Utd";
            $partits[]="Southampton - Newcastle";
            $partits[]="West Ham - Crystal Palace";
            $partits[]="Totenham Hotspur - Liverpool";
        ?>
        <br><br><br><br>
        <table border="1" align="center">
            <tr><td>
            Sel.lecciona un partit - <select name="partit" id="partit">
            
            <?php
            foreach($partits as $valor) {
                echo "<option value='$valor'>$valor</option>";
            }
            ?>
            </select>
            </tr></td>
            <tr><td>
            Marca la casella si creus que el partit finalitzarà en empat:<input type="checkbox" name="empat" id="empat" onclick="ShowHideDiv(this)">
            </tr></td>
            <tr><td>
            <div id="content" style="display: block;">
                Guanyador:
                <select id="guanyador" name="guanyador" required>
                    <option value='Equip local'>Equip local</option>
                    <option value='Equip visitant'>Equip visitant</option>
                </select>
            </div>
            </tr></td>
            <tr><td>
            Resultat: Gols equip local <input type='number' name='golslocal' id='golslocal' required>
            - Gols equip visitant  <input type='number' name='golsvisitant' id='golsvisitant' required>
            </tr></td>
            <tr><td>
            Indica l'equip que marcarà primer: 
            <select id="marca" name="marca" required>
                <option value='Equip local'>Equip local</option>
                <option value='Equip visitant'>Equip visitant</option>
            </select>
            </tr></td>
            <tr><td>
            Indica l'equip amb més possesió:
            <select id="posessio" name="posessio" required>
                <option value='Equip local'>Equip local</option>
                <option value='Equip visitant'>Equip visitant</option>
            </select>
            </tr></td>
            <tr><td>
            Indica l'equip que farà més xuts a la porteria:
            <select id="xuts" name="xuts" required>
                <option value='Equip local'>Equip local</option>
                <option value='Equip visitant'>Equip visitant</option>
            </select>
            </tr></td>
            <tr><td>
            Indica l'equip que llançara més corners.
            <select id="corners" name="corners" required>
                <option value='Equip local'>Equip local</option>
                <option value='Equip visitant'>Equip visitant</option>
            </select>
            </tr></td>
            <tr><td>
            Indica l'equip que farà més faltes:
            <select id="faltes" name="faltes" required>
                <option value='Equip local'>Equip local</option>
                <option value='Equip visitant'>Equip visitant</option>
            </select>
            </tr></td>
            <tr><td>
            Indica a quin equip treuren més targetes:
            <select id="targetes" name="targetes" required>
                <option value='Equip local'>Equip local</option>
                <option value='Equip visitant'>Equip visitant</option>
            </select>
            Indica la cuantitat de targetes Grogues: <input type="number" id="targrogues" name="targrogues">
            Indica la cuantitat de targetes Vermelles: <input type="number" id="tarvermelles" name="tarvermelles">
            </tr></td>
            <tr><td>
            Indica el resultat en els minuts::
            Minut 20: <input type="number" id="min20" name="min20">
            Minut 40: <input type="number" id="min40" name="min40">
            Minut 60: <input type="number" id="min60" name="min60">
            Minut 80: <input type="number" id="min80" name="min80">
            </tr></td>
            <tr><td>
            Nom de usuari: <input type="text" id="usuari" name="usuari">
            </tr></td>
            <tr><td>
            Quantitat de micropunts que vols arriscar:
            <input type="number" id="punts" name="punts" max=1000 required>
            </tr></td>
            <tr><td>
            <input type="submit" value="Enviar dades" />
            </tr></td>
        </table>
        </form>

        <?php
            if (isset($_POST["usuari"])) {
                echo "Usuari: $usuari<br>";
                echo "Partit: $partit<br>";
                echo "Empat: $empatsi<br>";
                echo "Guanyador: $guanyador<br>";
                echo "Gols equip local: $golslocal<br>";
                echo "Gols equip visitant: $golsvisitant<br>";
                echo "Qui marca primer: $marca<br>";
                echo "Equip amb més possesió de la pilota: $posessio<br>";
                echo "Equip que farà més xuts a porteria:: $xuts<br>";
                echo "Equip que llançara més corners: $corners<br>";
                echo "Equip que farà més faltes: $faltes<br>";
                echo "Quantitat de targetes grogues: $targrogues<br>";
                echo "Quantitat de targetes vermelles: $tarvermelles<br>";
                echo "Resultat en el minut 20: $min20<br>";
                echo "Resultat en el minut 40: $min40<br>";
                echo "Resultat en el minut 60: $min60<br>";
                echo "Resultat en el minut 80: $min80<br>";
                echo "Quantitat de micropunts: $punts<br>";
            }
        ?>

        <div align="center"><a href="llegeix.php">Clic aquí per a veure el contingut de l'arxiu prediccions.txt</a>
        </div>
    </body>
</html>