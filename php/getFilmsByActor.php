<?php 
include("dbConnect.php");

$name = $_GET['name'];

$stmt = $db->prepare("SELECT * FROM film WHERE ID_FILM IN (SELECT FID_FILM FROM FILM_ACTOR WHERE FID_Actor = (SELECT ID_Actor FROM Actor Where name = ?));");
$stmt->execute(array($name));

print "<table border='1'><tr><caption> Films with $name <br></caption><th> Film </th></tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    print "<tr><td>$row[name]</td></tr>";
}
?>