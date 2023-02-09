<h1>Intro PHP (07/02/2023)</h1>

<?php



// DECLARATION DE VARIABLES

$chaineDeCaracteres = "mon texte"; //string
$chaineDeCaracteres02 = "mon prix est très intéressant";
$chaineDeCaracteres03 = "mon prix est de";
$entier = 50; //integer
$flottant = 9.99; //float
$booleen = true; //boolean (true or false)
$tableau1 = array("texte 1", "text 2", "texte 3");
$tableau2 = ["texte 1", "texte 2"]; // array
$date = new DateTime(); // Prog orientée objet (POO)

// AFFICHAGE

echo "Test<br>";
echo $chaineDeCaracteres."<br>";
echo $chaineDeCaracteres02."<br>";
echo $chaineDeCaracteres03." ".$entier." euros<br>";

echo "$chaineDeCaracteres03 $entier euros<br>";

// FONCTIONS CHAINES DE CARACTERES

// TIME CODE 43:31