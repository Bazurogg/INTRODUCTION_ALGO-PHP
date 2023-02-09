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

