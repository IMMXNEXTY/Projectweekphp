<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title>Weekplanning Ridderweek</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f4f4f4;
    margin:0;
    padding:0;
}

header{
    background:#8b0000;
    color:white;
    text-align:center;
    padding:20px;
}

nav{
    background:#333;
    text-align:center;
    padding:10px;
}

nav a{
    color:white;
    margin:0 15px;
    text-decoration:none;
}

nav a:hover{
    text-decoration:underline;
}

table{
    width:80%;
    margin:40px auto;
    border-collapse:collapse;
    background:white;
}

th, td{
    border:1px solid #ccc;
    padding:15px;
    text-align:center;
}

th{
    background:#333;
    color:white;
}

tr:nth-child(even){
    background:#f2f2f2;
}
</style>

</head>

<body>

<header>
<h1>🏰 Ridderweek Planning</h1>
<p>Activiteiten van maandag t/m vrijdag</p>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="dagplanning.php">Dagprogramma</a>
    <a href="nieuws.php">Nieuws</a>
    <a href="fotos.php">Bekijk foto's</a>
    <a href="admin.php">Admin</a>
</nav>

<table>
<tr>
<th>Dag</th>
<th>Ochtend</th>
<th>Middag</th>
</tr>

<tr>
<td>Maandag</td>
<td contenteditable="true">Knutselen – ridderslingers</td>
<td contenteditable="true">Zandkastelen maken</td>
</tr>

<tr>
<td>Dinsdag</td>
<td contenteditable="true">Kastelen tekenen</td>
<td contenteditable="true">Levend Stratego</td>
</tr>

<tr>
<td>Woensdag</td>
<td contenteditable="true">Bond-trefbal</td>
<td contenteditable="true">Bomtikkertje</td>
</tr>

<tr>
<td>Donderdag</td>
<td contenteditable="true">Mike vertelt (Ridder Mike)</td>
<td contenteditable="true">Capture the Flag</td>
</tr>

<tr>
<td>Vrijdag</td>
<td contenteditable="true">Bouncy Castle</td>
<td contenteditable="true">VrijMiBo</td>
</tr>

</table>

</body>
</html>