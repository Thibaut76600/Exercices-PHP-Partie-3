<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ExericesPartie3PHP</title>
</head>
<body>
    <?php
    $table = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
    echo $table[5];
    ?>

    <hr>

    <?php
    $table = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
   foreach ($table as $month) {
    ?>
       <p><?= $month; ?></p>
       <?php
   }
    ?>

    <hr>

    <?php
    $departement = array (
    01 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas de calais',
    80 => 'Somme');
    foreach ($departement as $key => $nameDepart) {
        ?>
        <p><?= $nameDepart; ?></p>
        <?php
    }
   ?>

   <hr>

   <?php
    $departement = array (
    01 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas de calais',
    80 => 'Somme');
    foreach ($departement as $key => $nameDepart) {
        ?>
        <p>Le département <?= $nameDepart; ?> a le numéro <?= $key ?>.</p>
        <?php
    }
   ?>
    

</body>
</html>