<?php
    $titelpagina = "wallwallace and gromit";
    $image = "https://i.pinimg.com/originals/1d/ee/ad/1deead9f96c8289b7ce81c878d19f6a7.jpg";
    $Titel = "wallace and gromit";
    $auteur = "puck"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php & HTML</title>
</head>
<body>
    <main>
    <h1><?php echo $titelpagina; ?></h1>
    <img src="<?php echo $image?>" alt="<?php echo $Titel?>" />
    <h2><?php echo $auteur; ?></h2>
    </main>
</body>
</html>