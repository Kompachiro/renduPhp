<?php

spl_autoload_register(function($classe_name){
    include $classe_name . '.php';
});

try{
    $pdo = new PDO('mysql:host=db;dbname=player', 'root', 'example');
}
catch(Exception $e){
    die('ERROR: '.$e->getMessage());
}

$chara = $pdo->prepare("INSERT INTO jeu (`name`, classe, pv, def, atk) VALUES (:`name`,:classe,:pv,:def,:atk");
$chara->bindValue(":name",$_GET["name"], PDO::PARAM_STR);
$chara->bindValue(":classe",$_GET["classe"], PDO::PARAM_STR);
$chara->bindValue(":pv",$_GET["pv"], PDO::PARAM_INT);
$chara->bindValue(":def",$_GET["def"], PDO::PARAM_INT);
$chara->bindValue(":atk",$_GET["atk"], PDO::PARAM_INT);


?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>Magic & Steel</title>
    <meta name="description" content="Une phrase d'environ 170 caractères">
    <meta charset="UTF-8">
    <meta name="viewport" content="height=device-height width=device-width, initial-scale=1.0, minimum-scale=1.0 maximum-scale=1.0, user-scalable=no target-densitydpi=device-dpi">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <header>
        <h1>Magic & Steel</h1>
    </header>
    <h2>Choisir personnage</h2>
    <div id="flex">
        <button><input type="radio"> Guerrier</button>
        <button><input type="radio"> Magicien</button>
    </div>
    <section id="flex">
        <div id="container">
            <h3>Magicien</h3>
            <p id="stat">Statistique :</p>
            <div class="flex">
                <p>Point de vie</p>
                <p>20</p>
            </div>
            <div class="flex">
                <p>Attaque</p>
                <p>20</p>
            </div>
            <div class="flex">
                <p>Défense</p>
                <p>20</p>
            </div>
        </div>
        <div id="container_action">
            <a href=""><button class="button_action">Attaque</button></a>
            <a href=""><button class="button_action">Sorts</button></a>
            <a href=""><button class="button_action">Passer son tour</button></a>
        </div>
        <div id="container">
            <h3>Magicien</h3>
            <p id="stat">Statistique :</p>
            <div class="flex">
                <p>Point de vie</p>
                <p>20</p>
            </div>
            <div class="flex">
                <p>Attaque</p>
                <p>20</p>
            </div>
            <div class="flex">
                <p>Défense</p>
                <p>20</p>
            </div>
        </div>
    </section>
</body>
</html>
