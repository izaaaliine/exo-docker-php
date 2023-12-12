<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>
    <!-- Exercice 1 :

Créer 4 variables : nom, prenom, age, taille

affichez dans le navigateur les 4 variables à l'aide de echo
Ajoutez 2 à l'age
affichez de nouveau les 4 variables dans la page
PHP Intelephense -->
    <?php
    $nom = 'Dhalluin';
    $age = 26;
    $prenom = 'Izaline';
    $taille = 172;
    echo "$nom, $prenom, $age, $taille";
    echo "<br>";
    echo $nom. ' ' . $prenom. ' ' . $age. ' ' . $taille;
    echo "<br>";
    echo "$age" +2;
 
//     Exercice 2 :

// Reprenez le premier exercice et à l'aide de la concaténation, affectez le tout à une nouvelle variable.
// Affichez cette nouvelle variable à l'aide de la fonction var_dump()
//     

    $information = $nom. ' ' . $prenom. ' ' . $age. ' ' . $taille;
     echo "<br>";
    var_dump($information);

//     Exercice 3 :

// Mathéo a une moyenne de 15,4 , Nathan de 9,2 , Léo de 16,1 et Maxime de 12,6. Calculez la moyenne de ces 4 personnes

    $matheo = 15.4;
    $nathan = 9.2;
    $leo = 16.1;
    $maxime = 12.6;
    $moyenneTotale = ($matheo + $nathan + $leo + $maxime)/4;
    echo "<br>";
    echo "$moyenneTotale";

//     Exercice 4 :

// Affichez moi dans la page de votre navigateur un chiffre aléatoire compris entre 1 et 12000
    echo "<br>";
    echo rand(1, 12000);
?>


</body>
</html>