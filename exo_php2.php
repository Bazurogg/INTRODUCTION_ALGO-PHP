<!-- 13.02.2023 -->


<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>

<h2>Résultat</h2>

<?php

$texte = "Mon texte en parametre";

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
  width: 60%;
  border:1px solid white;
  border-collapse: collapse;
  background-color: #FFE99E;
  border-radius: 8px;
  text-align: center;
}
</style>

<!-- TEST TABLE TO UNDERSTAND HOW IT WORKS IN HTML -->
<!-- <table style="width:40%">
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
</table> -->

<?php

$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

function afficherTableHTML($capitales) {
  
  ksort($capitales);
  echo '<table>';
  echo '<tr><th>Pays</th><th>Capitale</th><th>Lien Wiki</th></tr>';
  foreach ($capitales as $pays => $capitale) {
    $pays = strtoupper($pays);
    $lien_wiki = '<a href="https://fr.wikipedia.org/wiki/' . urlencode($capitale).'" target="_blank">Lien</a>';
    echo "<tr><td>$pays</td><td>$capitale</td><td>$lien_wiki</td></tr>";
  }
  echo '</table>';
}

echo afficherTableHTML($capitales);

?>

<h1>Exercice 3</h1>

<p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir
dans un nouvel onglet (_blank).
</p>

<h2>Résultat</h2>


<?php

echo '<a href="https://www.elan-formation.fr/" target="_blank">Elan Formation</a>';

?>



<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra<br>
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un<br>
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>
https://fr.wikipedia.org/wiki/<br>
Le tableau passé en argument sera le suivant :<br>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",<br>
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>

<h2>Résultat</h2>

<?php

echo "cf. exo 2"."<br>";

?>

<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);
</p>

<h2>Résultat</h2>

<!-- <label for="Name">Name:</label><br>
<input type="text" id="Name" name="Name" placeholder="Jane Doe">
<br> -->

<?php

$nomsInput = array("Nom","Prénom","Ville");

function afficherInput($nomsInput){
  foreach ($nomsInput as $name){
    echo '<label for="'.$name.'">'.$name.':</label><br>';
    echo '<input type="text" name="'.$name.'" id="'.$name.'"><br>';                    
  }
}
echo afficherInput($nomsInput);

?>


<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.
Exemple :<br>
$elements = array("Monsieur","Madame","Mademoiselle");<br>
alimenterListeDeroulante($elements);
</p>

<h2>Résultat</h2>


<!-- EXEMPLE MENU DEROULANT -->
<!-- <label for="pet-select">Choose a pet:</label>

<select name="pets" id="pet-select">
  <option value="">--Please choose an option--</option>
  <option value="dog">Dog</option>
  <option value="cat">Cat</option>
  <option value="hamster">Hamster</option>
  <option value="parrot">Parrot</option>
  <option value="spider">Spider</option>
  <option value="goldfish">Goldfish</option>
</select> -->
  
<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($elements){
  echo '<select>';
  foreach ($elements as $gender){
    echo '<option value="">'.$gender.'</option>';
  }
  echo '</select>';
}

echo alimenterListeDeroulante($elements);

?>

<!-- 15/02/2032 -->


<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non
</p>

<h2>Résultat</h2>

<?php

$elements = array(
  'Choix 1' => false,
  'Choix 2' => false,
  'Choix 3' => false,
);

function genererCheckbox($elements) {
  foreach($elements as $key => $value) {
  $coche = ($value == true) ? 'checked' : '';
  echo '<input type="checkbox" name="'.$key.'" '.$coche.'>'.$key.'<br>';
  }
}

echo genererCheckbox($elements)

?>

<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
</p>

<h2>Résultat</h2>

<?php
