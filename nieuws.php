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
    $sql = "INSERT INTO nieuwsbrief  VALUES ('$tekst')";
    $conn->query($sql);
}

// ophalen
$result = $conn->query("SELECT * FROM nieuwsbrief");

while ($row = $result->fetch_assoc()) {
    echo "<p>" . $row['tekst'] . "</p>";
}
?>