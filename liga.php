<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>piłka nożna</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>
    <?php
        $db = new mysqli('localhost', 'root', '', 'egzamin');

    ?>
    <header>
        <h3>Reprezentacja polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">
    </header>
    <div id="podzial">
        <div id="lewy">
            <form action="liga.php" method="post">
                <select>
                    <option value="">Bramkarze</option>
                    <option value="">Obrońcy</option>
                    <option value="">Pomocnicy</option>
                    <option value="">Napastnicy</option>
                </select>
                <button type="submit">Zobacz</button>
            </form>
            <img src="zad2.png" alt="piłka">
            <p>Autor: 86123019619</p>
        </div>

        <div id="prawy">
            <ol>
                <li></li>
            </ol>
        </div>

    </div>
    <main>
        <h3>Liga mistrów</h3>
    </main>

    <div id="liga">
        <div id="druzyna"></div>
    </div>
    <?php
    $db->close();
    ?>
</body>

</html>