<?php
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "plop";

$dblink = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
    or die("Niet mogelijk om te verbinden");
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Nieuws - KVW</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>📰 Nieuws</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="dagplanning.php">Dagprogramma</a>
    <a href="nieuws.php">Nieuws</a>
    <a href="fotos.php">Foto's</a>
    <a href="admin.php">Admin</a>
</nav>

<section>
    <h2>Laatste updates</h2>

    <?php
    $result = $dblink->query("SELECT * FROM nieuws ORDER BY datum DESC");

    while ($row = $result->fetch_assoc()) {
        $mooieDatum = date("d-m-Y", strtotime($row['datum']));

        echo "<h3>" . htmlspecialchars($row['titel']) . "</h3>";
        echo "<p>" . nl2br(htmlspecialchars($row['bericht'])) . "</p>";
        echo "<small>" . $mooieDatum . "</small>";
        echo "<hr>";
    }
    ?>
</section>

</body>
</html>