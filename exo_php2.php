<!-- 13.02.2023 -->


<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>

<h2>Résultat</h2>

<?php

$texte = "Mon texte en parametre";
// $texte = strtoupper($texte);

// echo $texte ."<br>";+5

function convertirMajRouge ($texte){
    // return $texte = strtoupper($texte); (AFFICHAGE CAPS)
    ?><span style = color:red><?php echo $texte= strtoupper($texte); ?></span>
    <?php
}

echo convertirMajRouge($texte);

?>


<h1>Exercice 2</h1>

<p>Soit le tableau suivant :
$capitales = array<br>
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays<br>
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à<br>
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
</p>

<h2>Résultat</h2>

<html>

<style>
table, th, td {
  border:1px solid white;
  border-collapse: collapse;
  background-color: #FFE99E;
  border-radius: 8px;
  text-align: center;
}
</style>

<table style="width:40%">
  <tr>
    <th>Pays</th>
    <th>Capitale</th>
  </tr>
  <tr>
    <td>France</td>
    <td>Paris</td>
  </tr>
  <tr>
    <td>Allemagne</td>
    <td>Berlin</td>
  </tr>
  <tr>
    <td>USA</td>
    <td>Washington</td>
  </tr>
  <tr>
    <td>Italie</td>
    <td>Rome</td>
  </tr>
</table>

<?php

$capitales = array("France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome");




