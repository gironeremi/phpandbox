<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" /> 
    <title>Sandbox PHP</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <h2>Blagues</h2>
    <main>
    <?php
    $blagues= [
        ["Jacques","comment on nomme un boomerang qui ne revient pas?", "un cintre"],
        ["Hervé", "qu'est-ce qui est jaune et qui attend?", "un poussin patient"],
        ["Muriel", "quel animal fait Toin Toin?", "le Tanard, évidemment!"],
        ["Sophie", "qu'est-ce qui est vert et qui monte et qui descend?", "un petit pois dans un ascenseur"]
    ];
    ?>
    <?php
            foreach($blagues as $blague) {
        ?>
        <div class="blague">
            <h3>Devinette de <?= $blague[0] ?></h3>
            <p class="devinette"> <?= $blague[1] ?> </p>
            <p class="reponse"> <?= $blague[2] ?> </p>
        </div>
        <?php    
            }
        ?>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>