<style>   
@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

* {
  font-family: 'Open Sans', sans-serif;
}

body {
  background-color: #F6E3CE;
}

h1{
  color: #F79F81;
  text-transform: uppercase;
}

h2{
  color: #DF3A01;
  text-decoration: underline;
}

fieldset{
    width:70%;
    background-color: white;
}
</style>


<!-- 09.02.2023 -->

<h1>Exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui ». Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).</p>

<fieldset>

<legend><h2>Résultat</h2></legend>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbCaracteres = strlen($phrase);
echo "La phrase \" $phrase \" contient $nbCaracteres caractères.<br>";

?>

</fieldset>

<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>

<fieldset>
    
<legend><h2>Résultat</h2></legend>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$nbDeMots = str_word_count($phrase);
echo "La phrase \" $phrase \" contient $nbDeMots mots.<br>";

?>

</fieldset>

<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<fieldset>
    
<legend><h2>Résultat</h2></legend>

<?php

$phrase1 = "Notre formation DL commence aujourd'hui";
$phrase2 = str_replace("aujourd'hui", "demain", $phrase1);

echo "$phrase1.<br>";
echo "$phrase2.<br>";

?>

</fieldset>

<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<fieldset>
    
<legend><h2>Résultat</h2></legend>


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

</fieldset>

<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<fieldset>
    
<legend><h2>Résultat</h2></legend>

<?php

$taux_conv = "0.12";
$franc = "350";
$euro = round($franc * $taux_conv, 2);
echo "\"$franc\" francs = \"$euro\" euros.<br>";

?>

</fieldset>

<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<fieldset>
    
<legend><h2>Résultat</h2></legend>

<?php

$prixArticle = "9.99";
$nbArticle = "5";
$prixTotalHt = $prixArticle * $nbArticle;
$tva = $prixTotalHt * 0.2;
$prixTotalTtc = $prixTotalHt + $tva;

echo "vous devez régler la somme de $prixTotalTtc euros.<br>";

?>

</fieldset>

<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</p>

    <ul>
        <li>Poussin : entre 6 et 7 ans</li>
        <li>Pupille : entre 8 et 9 ans</li>
        <li>Minime : entre 10 et 11 ans</li>
        <li>Cadet : à partir de 12 ans</li>
    </ul>
<p>Si la catégorie n’est pas gérée, merci de le préciser.</p>

<fieldset>
    
<legend><h2>Résultat</h2></legend>

<?php

function categorie($age){
    if ($age >= 6 && $age <= 7){
        return "poussin";
    } elseif ($age >= 8 && $age<= 9){
        return "pupille";
    } elseif ($age >= 10 && $age <= 11){
        return "minime";   
    } elseif ($age <= 12){
        return "cadet";
    } else {
        return "catégorie non gérée";
    }
}

$age = "9";

echo "L'enfant qui a " . $age . " ans appartient à la catégorie : " . categorie($age) .".<br>";

?>

</fieldset>

<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :</p>

<fieldset>
    
<legend><h2>Résultat</h2></legend>

<?php

$nb = "6";

echo "Table de " .$nb ." :<br>";

for ($i = 1; $i <= 10;$i++){
    $produit = $nb * $i;
    
    echo "$nb * $i = $produit" ."<br>"; 
}

?>

<p>Solution avec la boucle "While".</p> 

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
</fieldset>

<h1>Exercice 9</h1>


<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<fieldset>

<legend><h2>Résultat</h2></legend>

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

</fieldset>

<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1 €.</p>

<fieldset>

<legend><h2>Résultat</h2></legend>

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

</fieldset>

<!-- 10.02.2023 -->

<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<fieldset>

<legend><h2>Résultat</h2></legend>

<?php


$carStock = array("Peugeot", "Renault", "BMW", "Mercedes");

$nbcar = count($carStock);

echo "Il y a : " .$nbcar ." marques de voitures dans la concession.<br>";

echo '<ul>';
foreach($carStock as $stck){
    echo '<li>'.$stck.'</li><br>';
}
echo '</ul>';


?>

</fieldset>

<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée<br>
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue<br>
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)<br>
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG</p>

<fieldset>

<legend><h2>Résultat</h2></legend>

<?php

$ppl = array('mickaël' => 'bonjour' , 'virgile' => 'hola' , 'marie-claire' => 'hello');

var_dump($ppl);
echo ".<br>";

foreach ($ppl as $ppl => $greetings){
    echo $greetings ." ". $ppl ."<br>";
}

?>

</fieldset>

<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<fieldset>

<legend><h2>Résultat</h2></legend>

<?php

$notes = ["10", "12", "8", "19", "3", "16", "11","13", "9"];
$listeNotes = implode(', ', $notes);
$nbDeNotes = count($notes);
$sumNotes = array_sum($notes);
$moyNotes = round($sumNotes / $nbDeNotes, 2);

echo "Les notes obtenues pas l'élèves sont : " .$listeNotes ."."."<br>";

echo "Sa moyenne générale est de :" .$moyNotes."."."<br>";

?>

</fieldset>

<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<fieldset>

<legend><h2>Résultat</h2></legend>

<?php

// TEST FONCTIONNEMENT AFFICHAGE DATE DU JOUR :
// $aujourdhui = new DateTime('now');
// echo  $aujourdhui->format('Y-m-d H:i:s');

$birthDate = ("2-9-1964");
$today = date('d-m-Y');
$age = date_diff(date_create($birthDate), date_create($today));

echo "Age de la personne : ". $age->format('%y ans, %m mois, et %d jours');

?>

</fieldset>

<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance)<br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<fieldset>

<legend><h2>Résultat</h2></legend>

<?php

class Personne {

    private string $_name;
    private string $_firstname;
    private DateTime $_birthD;

    public function __construct(string $name, string $firstname, string $birthD){
        $this->_name = $name;
        $this->_firstname = $firstname;
        $this->_birthD = new DateTime($birthD);

    }
    
    public function getName(){
        return $this ->_name;
    }
    public function getFirstname(){
        return $this ->_firstname;
    }
    public function getBirthdate(){
        return $this ->_birthD;
    }
    public function age(){
        $_birthD = $this->_birthD;
        $today = new DateTime();
        $age = $_birthD -> diff($today);
        return $age->format('%y');
    }
}

$p1 = new Personne("DUPONT", "Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice","1985-01-17");

echo $p1->getName() ." ". $p1->getFirstname() ." a ".  $p1->age()."<br>";
echo $p2->getName() ." ". $p2->getFirstname() ." a ".  $p2->age()."<br>";

?>

</fieldset>


<!-- classe : Concept de Programmation orienté objet. C'est la structure de l'ensemble des entités qui composent un "Objet". Elle est composée de 2 parties :
Une classe c'est un ensembre d'états et de comportements 
_ les attributs
_ les méthodes

elle sert de "moul" à la creation d'un objet

objet : Représentation d'une chose tangible et intangible à laquelle est associées des propriétés et des actions.

Un objet est une instance d'une classe

methode magique : méthode spéciale qui écrase l'action par défaut de PHP quand certaines actions sont réalisées sur un objet. Elles sont prédéfinies et préindexées par un double underscore "__", dans une class PHP et sont appelées automatiquement.

getters et setters : Méthode publique qui permets d'avoir accés (modifications et/ou récupérerations) au contenu des propriétés privé d'un objet.

methode to string : Méthode qui définit comment un objet de la classe est traité lorsqu'il est affiché comme une chaîne de caractères. Change la manière dont l'objet s'affichera lorsque l'on utilise echo par exemple.

principe d'encaspuslation en POO : Correspond au groupement des données (propriétés, etc.) permettant de les manipuler au sein d’une classe. Grâce à ce groupement on empêche que certaines propriétés soient manipulées depuis l'extérieur d'une classe. Pour accéder aux différentes propriétés il faut utiliser des "Limiteurs d'accés" ou des "Niveaux de visibilité". (public, private, protected). -->