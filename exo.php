<!-- 09.02.2023 -->

<h1>Exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui ». Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbCaracteres = strlen($phrase);
echo "La phrase \" $phrase \" contient $nbCaracteres caractères.<br>";

?>

<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbDeMots = str_word_count($phrase);
echo "La phrase \" $phrase \" contient $nbDeMots mots.<br>";

?>

<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<h2>Résultat</h2>

<?php

$phrase1 = "Notre formation DL commence aujourd'hui";
$phrase2 = str_replace("aujourd'hui", "demain", $phrase1);

echo "$phrase1.<br>";
echo "$phrase2.<br>";

?>

<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>


<?php

$phrase = "engage le jeu que je le gagne";

function palindrome($string){
    if (strrev($string) == $string){
        return 1;
    }
else{
        return 0;
    }
}

echo "$phrase.<br>";

if (palindrome($phrase)){
    echo "C'est un palindrome";
}
else{
    echo "Ce n'est pas un palindrome";
}

?>


<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>


<?php

$taux_conv = "0.12";
$franc = "350";
$euro = round($franc * $taux_conv, 2);
echo "\"$franc\" francs = \"$euro\" euros.<br>";

?>


<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

$prixArticle = "9.99";
$nbArticle = "5";
$prixTotalHt = $prixArticle * $nbArticle;
$tva = $prixTotalHt * 0.2;
$prixTotalTtc = $prixTotalHt + $tva;

echo "vous devez régler la somme de $prixTotalTtc euros.<br>";

?>

<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>

    <ul>
        <li>Poussin : entre 6 et 7 ans</li>
        <li>Pupille : entre 8 et 9 ans</li>
        <li>Minime : entre 10 et 11 ans</li>
        <li>Cadet : à partir de 12 ans</li>
    </ul>
<p>Si la catégorie n’est pas gérée, merci de le préciser.</p>

<h2>Résultat</h2>

<?php

function categorie($age){
    if ($age >= 6 && $age <= 7){
        return "poussin";
    } elseif ($age >= 8 && $age<= 9){
        return "pupille";
    } elseif ($age >= 10 && $age <= 11){
        return "minime";   
    } elseif ($age >= 12){
        return "cadet";
    } else {
        return "catégorie non gérée";
    }
}

$age = "12";

echo "L'enfant qui a " . $age . " ans appartient à la catégorie : " . categorie($age) .".<br>";


?>


<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :</p>


<h2>Résultat</h2>

<?php

$nb = "6";

echo "Table de " .$nb ." :<br>";

for ($i = 1; $i <= 10;$i++){
    $produit = $nb * $i;
    
    echo "$nb * $i = $produit" ."<br>"; 
}
?>

<p>Solution avec la boucle while.</p> 

<?php

$nb = "6";
$i = "1";

echo "Table de " .$nb ." :<br>";

while ($i <= 10){
    $produit = $nb * $i;
    echo "$nb * $i = $produit" ."<br>";
    $i++;
}

?>


<h1>Exercic 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<h2>Résultat</h2>

<?php

$age = "17";
$sexe = "homme";

function impot($age, $sexe){
    if ($sexe == "femme" && ($age >= 18 && $age <= 35)){
        return "imposable";
    } elseif ($sexe == "homme" && $age > 20){
        return "imposable";
    } else {
        return "non imposable";
    }
}
echo "$age.<br>";
echo "$sexe.<br>";
echo "Cette personne est " .impot($age, $sexe).".<br>";

?>

<h1>Exercic 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>

<h2>Résultat</h2>

<?php

function Monnaie($aPayer, $sommeVersee){
    $monnaie = $sommeVersee - $aPayer;
    
    $nbBillets10 = floor($monnaie / 10);
    $monnaie1 = $monnaie - $nbBillets10 * 10;

    $nbBillets5 = floor($monnaie1 / 5);
    $monnaie1 = $monnaie1 - $nbBillets5 * 5;

    $nbPieces2 = floor($monnaie1 / 2);
    $monnaie1 = $monnaie1 - $nbPieces2 * 2;

    $nbPieces1 = floor($monnaie1/1);


    echo "Le montant à payer est de : " .$aPayer.".<br>";
    echo "La somme versée est de : " .$sommeVersee.".<br>";
    echo "Votre monnaie est de : " .$monnaie.".<br>";
    echo "Dont : " .$nbBillets10 ." billets de 10, " .$nbBillets5 ." billets de 5, " .$nbPieces2 ." de piéces de 2 et " .$nbPieces1 ." de pièces de 1.<br>";

}

$aPayer = "152";
$sommeVersee = "200";
Monnaie($aPayer, $sommeVersee);

?>

<h1>Exercic 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<h2>Résultat</h2>

<?php















