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
    <a href="nieuws.php">Nieuws</a>
</nav>

<section>
    <h2>Laatste updates</h2>

    <?php include 'nieuws_tonen.php'; ?>

</section>

</body>
</html>


<?php
include 'db.php';
?>

<h1>Nieuws beheren</h1>

<form method="POST">
    <input type="text" name="tekst" maxlength="128" placeholder="Nieuws bericht" required>
    <button type="submit">Toevoegen</button>
</form>

<hr>

<?php
// toevoegen
if (isset($_POST['tekst'])) {
    $tekst = $_POST['tekst'];
    $sql = "INSERT INTO nieuws (tekst) VALUES ('$tekst')";
    $conn->query($sql);
}

// ophalen
$result = $conn->query("SELECT * FROM nieuwsbrief ORDER BY id DESC");

while ($row = $result->fetch_assoc()) {
    echo "<p>" . $row['tekst'] . "</p>";
}
?>