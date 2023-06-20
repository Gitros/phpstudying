<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <section id="baner">
        <h1>Portal dla wędkarzy</h1>
    </section>
    <section id="main">
        <section id="lewa">
            <section id="lewy1">
                <h3>Ryby zamieszkujące rzeki</h3>
                <ol>
                    <li></li>
                </ol>
            </section>
            <section id="lewy2">
                <h3>Ryby drapieżne naszych wód</h3>
                <table>
                    <tr>
                        <th>L.p.</th>
                        <th>Gatunek</th>
                        <th>Występowanie</th>
                    </tr>
                    <tr></tr>
                    <tr></tr>

                    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedkowanie";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Połączenie nieudane: " . mysqli_connect_error());
}

// Zapytanie 3
$sql = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby INNER JOIN lowisko ON lowisko.Ryby_id = ryby.id";
$result = mysqli_query($conn, $sql);

// Wyświetlanie wyników
echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row['nazwa'] . " pływa w rzece " . $row['akwen'] . ", " . $row['wojewodztwo'] . "</li>";
}
echo "</ul>";

// Zamykanie połączenia z bazą danych
mysqli_close($conn);
?>
                </table>
            </section>
        </section>
        <section id="prawy">
            <img src="/ryba1.jpg" alt="Sum">
            <p> <a href="/strona/zapytania.txt">Pobierz kwerendy</a> </p>
        </section>
    </section>
    <section id="stopka">
        <p>Stronę wykonał 2137</p>
    </section>
</body>

</html>