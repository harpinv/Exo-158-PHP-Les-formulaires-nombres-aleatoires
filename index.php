<?php
/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()

http://php.net/manual/fr/function.mt-rand.php
*/
?>

<h1>Générateur de nombre aléatoire</h1>

<form method="post" action="form.php">
    <div>
        <label for="nombre1">Nombre 1:</label>
        <input type="text" name="nombre1" id="nombre1" required>
    </div>
    <div>
        <label for="nombre2">Nombre 2:</label>
        <input type="text" name="nombre2" id="nombre2" required>
    </div>
    <div>
        <input type="submit" value="Envoyer" name="submit">
    </div>
</form>
