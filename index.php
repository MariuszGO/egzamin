<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Matura</title>
</head>
<body>
    <header>
        <h1>System informacji dla maturzystów</h1>
    </header>
    <aside>
        <img src="ma.jpg" alt="Matura"><br>
        <img src="tu.jpg" alt="Matura"><br>
        <img src="ra.jpg" alt="Matura">
    </aside>
    <?php 
        $polaczenie = mysqli_connect("localhost","root","","matura");
    ?>
    <section id="sekcja1">

        <h3>Wybierz ucznia z listy:</h3>
        <!-- SK2 -->
    </section>
    <section id="sekcja2">
        <section class="blok">
            <h4>Przedmioty</h4>
            <?php
            $zapytanie1 = "SELECT przedmiot FROM arkusz GROUP BY przedmiot";
            $wynik = mysqli_query($polaczenie,$zapytanie1);
            while($tablica = mysqli_fetch_array($wynik)){
                    echo $tablica['przedmiot'] . " ";   
            }
            ?>
        </section>
        <section class="blok">
            <h4>Lata</h4>
              <?php
            $zapytanie1 = "SELECT min(rok) as najstarszy, max(rok) as najmlodszy FROM `arkusz`";
            $wynik = mysqli_query($polaczenie,$zapytanie1);
            while($tablica = mysqli_fetch_array($wynik)){
                    echo $tablica['najstarszy'] . " - " . $tablica['najmlodszy']; 
                    
                    // $zm1 = $tablica['najstarszy'] ;
                    // $zm2 = $tablica['najmlodszy'];
                    // echo "$zm1 - $zm2 "; 
            }
            ?>
        </section>
        <section class="blok">
            <h4>Najlepszy wynik</h4>
        </section>
         <section class="blok">
            <h4>Najgorszy wynik</h4>
        </section>
    </section>
    <footer>
        <p>Numer zdającego: 0010100102323</p>
    </footer>
    
</body>
</html>