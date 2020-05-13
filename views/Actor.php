<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Films</title>
</head>
<body>
<?php
include("../php/dbConnect.php");

$actorSql = 'SELECT `name` FROM `actor`';

echo '<form method="get" action= "../php/getFilmsByActor.php">';

echo "<select name='name'><option> Выбрать фильмы по актеру </option>";

foreach($db->query($actorSql) as $row) {
    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
}

echo "</select>";
echo '<input type="submit" value="ОК"><br>'
?>
</body>
</html>



