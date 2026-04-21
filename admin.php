<?php
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "plop";

$dblink = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
    or die("Niet mogelijk om te verbinden");

// verwijderen
if (isset($_POST['verwijder_id'])) {
    $id = $_POST['verwijder_id'];

    $stmt = $dblink->prepare("DELETE FROM nieuws WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

// toevoegen
if (isset($_POST['nieuws_toevoegen'])) {
    $titel = $_POST['titel'];
    $bericht = $_POST['bericht'];
    $datum = date("Y-m-d", strtotime($_POST['datum']));

    $stmt = $dblink->prepare("INSERT INTO nieuws (titel, bericht, datum) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $titel, $bericht, $datum);
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Admin Nieuws</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>⚙️ Admin - Nieuws</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="dagplanning.php">Dagprogramma</a>
    <a href="nieuws.php">Nieuws</a>
    <a href="fotos.php">Foto's</a>
    <a href="admin.php">Admin</a>
</nav>

<section>
    <h2>Nieuw bericht toevoegen</h2>

    <form method="POST" class="admin-form">
        <input type="text" name="titel" placeholder="Titel" required><br><br>
        <textarea name="bericht" placeholder="Nieuwsbericht" required></textarea><br><br>
        <input type="date" name="datum" required><br><br>
        <button type="submit" name="nieuws_toevoegen">Plaatsen</button>
    </form>
</section>

<section>
    <h2>Beheer nieuws</h2>

    <?php
    $result = $dblink->query("SELECT * FROM nieuws ORDER BY datum DESC");

    while ($row = $result->fetch_assoc()) {
        echo "<div class='nieuws-blok'>";
        echo "<h3>" . htmlspecialchars($row['titel']) . "</h3>";
        echo "<p>" . nl2br(htmlspecialchars($row['bericht'])) . "</p>";

        echo "<form method='POST'>
                <input type='hidden' name='verwijder_id' value='" . $row['id'] . "'>
                <button type='submit'>🗑️ Verwijder</button>
              </form>";

        echo "</div>";
    }
    ?>
</section>

</body>
</html>

<?php
$dblink->close();
?>