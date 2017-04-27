<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frasilina</title>
</head>
<body>

    <h2>Ola <?php print $titulo[rand(0,2)]." ".$nome.", ".$qualidades[rand(0,2)]; ?></h2>

</body>
</html>

<?php
$titulo = ["Dom","Magnifico","Merda"];
$qualidades = ["Formador","esteticista","Usuario SAM"];
$nome = "Irineu";


?>