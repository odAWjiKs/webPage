<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <!-- <link rel="stylesheet" href="style.css" /> -->
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <header>
            <nav>
                <div id="container1">
                    <img
                        src="tyler-creator-mugshot.jpg"
                        alt="Logo"
                        height="70px"
                        width="70px"
                        id="logo"
                    />
                    <a href="index.php">STRONA GŁÓWNA</a>
                    <a href="wydruki.html">WYDRUKI</a>
                    <a href="kontakt.html">KONTAKT</a>
                </div>
                <div id="container2">
                    <button onclick="colorChange()">Color Mode</button>
                </div>
            </nav>
        </header>
        <h1 style="text-align: center" id="h11">Druk 3D na zamówienie</h1>
        <div id="boxcontainer">
            <div class="box" id="box1">
                <h1 class="boxh1">Niska cena</h1>
                <h2 class="boxh2">Niskie ceny, bo dużych nie dam.</h2>
            </div>
            <div class="box">
                <h1 class="boxh1">Szybki czas realizacji</h1>
                <h2 class="boxh2">Bo mało zamówień.</h2>
            </div>
            <div class="box">
                <h1 class="boxh1">Miła obsługa klienta.</h1>
                <h2 class="boxh2">Bez niego nie mialbym tych 5 złotych.</h2>
            </div>
        </div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <p>Podaj imię</p>
            <input type="text" name="imie" id="imie" />
            <p>Podaj nazwisko</p>
            <input type="text" name="nazwisko" id="nazwisko" />
            <p>Podaj e-mail</p>
            <input type="email" name="email" id="email" /><br><br>
            <input type="file" name="file" id="file" style="display: none" />
            <label for="file">Naciśnij, aby wybrać plik.</label>
            <input type="submit" name="submit" value="Prześlij plik" id="submitBtn"/>
        </form>
    </body>

    <script src="index.js"></script>
</html>


