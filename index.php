<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Nasz sklep komputerowy</title>
        <link rel="stylesheet" type="text/css" href="styl8.css">
    </head>
    <body>
        <section id="menu">
            <a href="index.php">Główna</a>
            <a href="procesory.html">Procesory</a>
            <a href="ram.html">RAM</a>
            <a href="grafika.html">Grafika</a>
        </section>
        <section id="logo">
            <h2>Podzespoły komputerowe</h2>
        </section>
        <section id="glowny">
            <h1>Dzisiejsze promocje</h1>
            <table>
                <tr id="naglowek">
                    <td>NUMER</td>
                    <td>NAZWA PODZESPOŁU</td>
                    <td>OPIS</td>
                    <td>CENA</td>
                </tr>
                <tr>
                    <?php
                        $connect = mysqli_connect('localhost', 'root', '', 'sklep');
                        $sql = "SELECT id, nazwa, opis, cena FROM `podzespoly` WHERE cena<1000";
                        $query = mysqli_query($connect, $sql);

                            while($wiersz = mysqli_fetch_row($query)){
                                echo '<tr><td>' . $wiersz[0] . '</td><td>' . $wiersz[1] . '</td><td>' . $wiersz[2] . '</td><td id="cena">' . $wiersz[3] . '</td></tr>';
                            }

                        mysqli_close($connect);
                    ?>
                </tr>
            </table>
        </section>
        <section id="s1" class="stopka">
            <img alt="promocje na procesory" src="scalak.jpg">
        </section>
        <section id="s2" class="stopka">
            <h4>Nasz Sklep Komputerowy</h4>
            <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
        </section>
        <section id="s3" class="stopka">
            <p>zadzwoń: 601 602 603</p>
        </section>
        <section id="s4" class="stopka">
            <p>Stronę wykonał: 01234567890</p>
        </section>
    </body>
</html>