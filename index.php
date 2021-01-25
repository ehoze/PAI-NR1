<?php
    $baza = mysqli_connect("localhost", "root", "", "sklep");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nasz sklep komputerowy</title>
        <link rel="stylesheet" href="styl8.css">

    </head>

    <body>
        <h2>STEP-2</h2>
        <header>
            <div id="menu">
                <a href="index.php">Główna</a>
                <a href="procesory.html">Procesory</a>
                <a href="ram.html">Ram</a>
                <a href="grafika.html">Grafika</a>
            </div>
            <div id="logo">
                <h2>Podzespoły komputerowe</h2>
            </div>
        </header>

        <section>
            <div id="glowny">
                <h1>Dzisiejsze promocje</h1>

                <table>
                    <tr>
                    <th>NUMER</th>
                    <th>NAZWA PODZESPOŁU</th>
                    <th>OPIS</th>
                    <th>CENA</th>
                    </tr>
                    <?php
                        $sql="SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000;";
                        $result=mysqli_query($baza ,$sql);
                        if(mysqli_num_rows($result)>0)
                        {
                            while($row=mysqli_fetch_assoc($result)){
                            ?>
                            <tr> 
                                <td><?= $row['id']?></td>
                                <td><?= $row['nazwa']?></td>
                                <td><?= $row['opis']?></td>
                                <td><?= $row['cena']?></td>
                            </tr>


                            
                            <?php
                            };
                            }
                    
                        mysqli_close($baza);
                    ?>

                </table>

            </div>

        </section>
        <footer>
            <div class="stopka">
                <img src="scalak.jpg" alt="promocje na procesory">
            </div>
            <div class="stopka">
                <h4>Nasz Sklep Komputerowy</h4>
                <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
            </div>
            <div class="stopka">
                <p>
                    zadzwoń: 601 602 603
                </p>
            </div>
            <div class="stopka">
                <p>
                    Stronę wykonał: 12345678901
                </p>
            </div>
        </footer>

    </body>

</html>