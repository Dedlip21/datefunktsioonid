<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kuupäeva funktsioonid</title>
    <link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>
<h1>Kuupäeva funktsioonid</h1>

<ol>
    <li>time()</li>
    <li>date()</li>
    <li>mktime()</li>
    <li>strtotime()</li>
    <li>date_default_timezone_set()</li>
</ol>

<h1>Ülesanded</h1>
<section>
    <h2>Kuupaäev ja aeg formaadis m/d/y h:i</h2>
    <?php
    echo date('m/d/Y G:i');
    ?>
</section>

<section>
<h2>Kasutaja vanus 16:11.2021</h2>
    <?php
    include('funktsioonid.php');
    echo getVanus();
    ?>

</section>

<section>
    <h2>Jargmine kooli vaheaeg on 20.12.2021</h2>
    <?php
    echo getKoolivaheajani();
    ?>
    <h2> 2022 uuse aastani on </h2>
    <?php
    //tänane aasta
    $year=date('Y');
    $last_day=strtotime('last day of December');
    $date_today=strtotime("now");
    $diff_to_last_day=$last_day-$date_today;
    echo "<br>";
    echo $year." aasta lõpuni ". floor($diff_to_last_day/(60*60*24)). " päeva";
    ?>

</section>

<section>
    <h2>Hooaja pilt</h2>
    <img src="<?php getHooaeg() ?>" alt="pilt">
</section>

</body>
</html>
