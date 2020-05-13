<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Films</title>
</head>
<body>
<?php

// устанавливаем первый и последний год диапазона
$yearArray = range(2000, 2050);
echo '<form method="get" action= "../php/getFilmsByYears.php">';

echo "<select name= 'yearStart'><option> Выберите год начала выборки</option>";

  foreach ($yearArray as $year) {
    echo '<option '.$year.' value="'.$year.'">'.$year.'</option>';
  }
    echo "</select>";

echo "<select name='yearEnd'><option> Выберите год конца выборки</option>";

    foreach ($yearArray as $year) {
        echo '<option '.$year.' value="'.$year.'">'.$year.'</option>';
    }
    echo "</select>";
echo '<input type="submit" value="ОК"><br>'
?>
</body>
</html>



