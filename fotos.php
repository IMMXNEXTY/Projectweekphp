<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>KVW Middeleeuwen</title>

    <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'MedievalSharp', cursive;
            background-color: #f3e6c9;
            color: #3b2a1a;
        }

        header {
            background-color: #5a3a1b;
            color: white;
            text-align: center;
            padding: 20px;
        }

        nav {
            background-color: #3b2a1a;
            text-align: center;
            padding: 12px;
            position: sticky;
            top: 0;
        }

        nav a {
            color: #f3e6c9;
            text-decoration: none;
            margin: 10px 15px;
            font-weight: bold;
        }

        nav a:hover {
            color: gold;
        }

        .hero {
            text-align: center;
            padding: 40px;
        }

        h3 {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            line-height: 1.6;
        }

        /* FOTO GALERIJ */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 30px;
        }

        .gallery img {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            border: 4px solid #5a3a1b;
            box-shadow: 0 4px 10px rgba(0,0,0,0.4);
            transition: transform 0.3s;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

    </style>
</head>

<body>

<header>
    <h1>🏰 KVW Middeleeuwen</h1>
    <p>Welkom ridder! ⚔️</p>
</header>

<!-- NAVIGATIE -->
<nav>
    <a href="index.php">Home</a>
    <a href="dagplanning.php">Dagprogramma</a>
    <a href="nieuws.php">Nieuws</a>
    <a href="fotos.php">Foto's</a>
    <a href="admin.php">Admin</a>
</nav>

<!-- HERO -->
<section class="hero">
    <h2>Welkom bij de KVW week!</h2>
    <p>Doe mee aan epische avonturen!</p>
</section>

<!-- TEKST -->
<h3>
🏰 Welkom bij KVW Middeleeuwen<br><br>

Stap terug in de tijd en beleef een spannend avontuur in de wereld van ridders, kastelen en jonkvrouwen! Tijdens KVW Middeleeuwen verandert het hele kampterrein in een echt middeleeuws dorp vol geheimen, opdrachten en avonturen.<br><br>

Kinderen worden opgeleid tot dappere ridders, slimme ambachtslieden of hofjonkvrouwen. Samen beleven ze een week vol spel, creativiteit, teamwork en onvergetelijke momenten.<br><br>

Van het trainen als ridder tot het oplossen van mysterieuze opdrachten: alles draait om samenwerken, plezier maken en fantasie!<br><br>

📍 Mollenburgseweg 82, DaVinci Colleges ⚔️
</h3>

<!-- FOTO GALERIJ -->
<h2 style="text-align:center;">📸 Foto's</h2>

<div class="gallery">
    <img src="foto1.jpg" alt="Foto 1">
    <img src="foto2.jpg" alt="Foto 2">
    <img src="foto3.jpg" alt="Foto 3">
    <img src="foto4.jpg" alt="Foto 4">
</div>

</body>
</html>