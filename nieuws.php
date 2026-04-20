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
    <a href="dagprogramma.html">Dagprogramma</a>
    <a href="nieuws.php">Nieuws</a>
    <a href="foto's.html">Bekijk foto's</a>
</nav>

<section>
    <h2>Laatste updates</h2>
</section>

<hr>

<h1>Nieuws beheren</h1>

<form method="POST">
    <input type="text" name="tekst" maxlength="128" placeholder="Nieuws bericht" required>
    <button type="submit">Toevoegen</button>
</form>

<hr>

<form action="create.php" method="POST">
    <p>E-mail</p>
    <input type="text" name="email">
    <button type="submit">Versturen</button>
</form>

</body>
</html>