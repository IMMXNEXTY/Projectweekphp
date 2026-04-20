<?php
$id = $_GET['id'];

?>

<html>
    <body>
        <a href='../index.php'>Index pagina</a><br>
        <form action="create.php" method="POST">
            
            <p>Identifier</p>
            <input type="text" name = "id" value="<?php echo $id; ?>"></input>

            <p>Naam</p>
            <input type="text" name="name">

            <p>Provider</p>
            <input type="text" name="provider">

            <p>Medium</p>
  
            
            <?php
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "plop";

$dblink = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
          or die("niet mogelijk om te verbinden");

$query = "SELECT Id, naam FROM types";

$preparedquery = $dblink->prepare($query);
if(!$preparedquery){
    die("Prepare niet gelukt: " . $dblink->error);
}



$preparedquery->execute();
$result = $preparedquery->get_result();

$levels = array();

while ($row = $result->fetch_assoc()){

$levels[$row['Id']] = $row['naam'];

};
?>
<select name="medium">

<?php
foreach ($levels as $key => $value) {
echo "<option value =\"" .$key. "\">".$value. "</option>";

};
?>
    </select>

<?php
$preparedquery->close();
$dblink->close();


?>

            <p>Prijs</p>
            <input type="text" name="price"><br><br>

            <button type="submit">Versturen</button>

        </form>
    </body>
</html>

