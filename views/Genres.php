<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Films</title>
</head>
<body>
<?php
include("../php/dbConnect.php");

$genreSql = 'SELECT `title` FROM `genre`';

echo '<form method="get" action= "../php/getFilmsByGenres.php">';

echo "<select name='name'><option> Выбрать фильмы по жанру </option>";

foreach($db->query($genreSql) as $row) {
    echo "<option value='" . $row['title'] . "'>" . $row['title'] . "</option>";
}

echo "</select>";
echo '<input type="submit" value="ОК"><br>'
?>
</body>
</html>



