<style>

@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap');

* {
  font-family: 'Source Sans Pro', sans-serif;
}

body {
  background-color: #F6E3CE;
}

table, th, td {
  width: 60%;
  border: 1px solid grey;
  border-collapse: collapse;
  background-color: #FFE99E;
  border-radius: 8px;
  text-align: center;
  white-space: nowrap;
}

h1{
  color: #F79F81;
  text-transform: uppercase;
}

h2{
  color: #A9A9F5;
  text-decoration: underline;
}

fieldset{
  background-color: #FFE99E;
}

.resultat {
  background-color: white;
}

</style>

<!-- 13.02.2023 -->


<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>

<fieldset class="resultat">

<legend><h2>Résultat</h2></legend>

<?php

$texte = "Mon texte en parametre";

function convertirMajRouge ($texte){
    // return $texte = strtoupper($texte); (AFFICHAGE CAPS)
    echo "<span style = 'color:red'>". strtoupper($texte)."</span>";
}

convertirMajRouge($texte);

?>
</fieldset>

<h1>Exercice 2</h1>

<p>Soit le tableau suivant :
$capitales = array<br>
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays<br>
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à<br>
une fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
</p>

<fieldset class="resultat">

<legend><h2>Résultat</h2></legend>


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

afficherTableHTML($capitales);

?>
</fieldset>

<h1>Exercice 3</h1>

<p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir
dans un nouvel onglet (_blank).
</p>

<fieldset class="resultat">

<legend><h2>Résultat</h2></legend>


<?php

echo '<a href="https://www.elan-formation.fr/" target="_blank">Elan Formation</a>';

?>
</fieldset>



<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra<br>
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un<br>
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>
https://fr.wikipedia.org/wiki/<br>
Le tableau passé en argument sera le suivant :<br>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",<br>
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>

<fieldset class="resultat">

<legend><h2>Résultat</h2></legend>

<?php

echo "cf. exo 2"."<br>";

?>
  
</fieldset>

<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);
</p>

<fieldset class="resultat">
  
<legend><h2>Résultat</h2></legend>

<!-- <label for="Name">Name:</label><br>
<input type="text" id="Name" name="Name" placeholder="Jane Doe">
<br> -->

<?php

$nomsInput = array("Nom","Prénom","Ville");

function afficherInput($nomsInput){
  echo '<form>';
  foreach ($nomsInput as $name){
    echo '<label for="'.$name.'">'.$name.'</label><br>';
    echo '<input type="text" name="'.$name.'" id="'.$name.'"><br>';                    
  }
  echo '</form>';
}

afficherInput($nomsInput);

?>
</fieldset>

<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.
Exemple :<br>
$elements = array("Monsieur","Madame","Mademoiselle");<br>
alimenterListeDeroulante($elements)
</p>

<fieldset class="resultat">
  
<legend><h2>Résultat</h2></legend>

<!--
EXEMPLE MENU DEROULANT 
 <label for="pet-select">Choose a pet:</label>

<select name="pets" id="pet-select">
  <option value="">--Please choose an option--</option>
  <option value="dog">Dog</option>
  <option value="cat">Cat</option>
  <option value="hamster">Hamster</option>
  <option value="parrot">Parrot</option>
  <option value="spider">Spider</option>
  <option value="goldfish">Goldfish</option>
</select>
-->

<?php

$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($elements){
  echo '<select>';
  foreach ($elements as $civil){
    echo '<option value="">'.$civil.'</option>';
  }
  echo '</select>';
}

alimenterListeDeroulante($elements);

?>
</fieldset>

<!-- 15/02/2032 -->


<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non
</p>

<fieldset class="resultat">
  
<legend><h2>Résultat</h2></legend>

<?php

$elements = array(
  'Choix 1' => false,
  'Choix 2' => false,
  'Choix 3' => false,
);

function genererCheckbox($elements) {
  echo '<form>';
  foreach($elements as $key => $value) {
  $coche = ($value == true) ? 'checked' : '';
  echo '<input type="checkbox" name="'.$key.'" '.$coche.'>'.$key.'<br>';
  }
  echo '</form>';
}

echo genererCheckbox($elements)

?>
</fieldset>

<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
</p>

<fieldset class="resultat">
  
<legend><h2>Résultat</h2></legend>

<?php

function repeterImage($img,$n){
  for ($i=1; $i<=$n; $i++){
    echo '<img src="'.$img.'" title="Oh le petit toutou !" alt ="Petit chien"/>';
  }
}

repeterImage('http://my.mobirise.com/data/userpic/764.jpg', 4);

?>

</fieldset>

<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>
Exemple :<br>
afficherRadio($nomsRadio);
</p>

<fieldset class="resultat">
  
<legend><h2>Résultat</h2></legend>

<!-- <fieldset>
    <legend>Select a maintenance drone:</legend>

    <div>
      <input type="radio" id="huey" name="drone" value="huey"
             checked>
      <label for="huey">Huey</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="drone" value="dewey">
      <label for="dewey">Dewey</label>
    </div>

    <div>
      <input type="radio" id="louie" name="drone" value="louie">
      <label for="louie">Louie</label>
    </div>
</fieldset>
 -->


<?php
$nomsRadio = array("Monsieur","Madame","Mademoiselle");

function afficherRadio($nomsRadio) {
  echo '<form>';
  foreach ($nomsRadio as $gender){
    echo '<input type="radio" id='.$gender.' name="nomsRadio" value='.$gender.'>';
    echo '<label for = "'.$gender.'">'.$gender.'</label><br>';
  }
  echo '</form>';
}

afficherRadio($nomsRadio);

?>

</fieldset>


<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire<br>
complet qui contient les informations suivantes : champs de texte avec nom,<br> prénom, adresse email, ville, sexe et une liste de choix parmi lesquels<br> on pourra sélectionner un intitulé de formation :<br>
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).<br>

</p>

<fieldset class="resultat">
  
<legend><h2>Résultat</h2></legend>

<?php

echo '<fieldset>';
  echo '<legend><h3>Formulaire d\'inscription :</h3></legend>';
  
  $etatCivil = array("Monsieur","Madame","Mademoiselle");

  echo '<p>Civilité :</p>';

  function listeEtatCivil($etatCivil){
    foreach ($etatCivil as $civilite){
      echo '<input type="radio" id='.$civilite.' name="civiliteRadio" value='.$civilite.'>';
      echo '<label for = "'.$civilite.'">'.$civilite.'</label>';
    }
  }
  echo listeEtatCivil($etatCivil);
  echo '<br>';
  echo '<br>';

  $forms = array("Nom","Prénom","Ville", "Adesse email");

  function form($forms){
    foreach ($forms as $input){
      echo '<label for="'.$input.'">'.$input.'</label><br>';
      echo '<input type="text" name="'.$input.'" id="'.$input.'"><br>';                    
    }
  }
  echo form($forms);

  echo '<br>';

  $genderRadio = array("Masculin","Féminin","Ne pas renseigné");

  echo '<label>Sexe :</label><br>';

  function afficherGenre($genderRadio) {
    foreach ($genderRadio as $genre){
      echo '<input type="radio" id='.$genre.' name="genreRadio" value='.$genre.'>';
      echo '<label for = "'.$genre.'">'.$genre.'</label>';
    }
  }
  echo afficherGenre($genderRadio);

  echo '<br>';
  echo '<br>';

  $formation = array("Développeur Logiciel","Designer web","Intégrateur", "Chef de projet");

  function listeFormation($formation){
    echo 'Veuillez indiquer le titre de la formation souhaitée :'.'<br>';
    echo '<br>';
    echo '<select >';
    foreach ($formation as $titreFormation){
      echo '<option value="">'.$titreFormation.'</option>';
    }
    echo '</select><br>';
  }

  echo listeFormation($formation);

  echo '<br>';
  echo '<button type="submit">Envoyer</button>';

echo '</fieldset>';

?>
</fieldset>

<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français<br>
(en toutes lettres) à partir d’une chaîne de caractère représentant une date.</p>

<fieldset class="resultat">
  
<legend><h2>Résultat</h2></legend>

<?php

// TEST #1 : ! NE FONCTIONNE PAS LA DATE S'AFFICHE TOUJOURS EN ANGLAIS !
// function formaterDateFR($date){
  //   $dateObj = new DateTime($date);
  //   $jour = $dateObj->format('l');
//   $jourNb = $dateObj->format('j');
//   $mois = $dateObj->format('F');
//   $annee = $dateObj->format('Y');
//   echo $jour.' '.$jourNb.' '.$mois.' '.$annee;
// }
// echo formaterDateFR("2018-02-23");
// echo '<br>';

function formaterDateFr($date) {
  $dateObj = new DateTime($date);
  $dateFormat = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
  // IntlDateFormatter est une class qui posséde plusieurs constantes qui permet de spécifier le style de format pour la date et l'heure 
  // IntlDateFormatter::LONG (Configure la date, ici en long format. ("LONG, MEDIUM, Etc.")
  // IntlDateFormatter::NONE (Indique que l'on ne veux pas que l'heure soit afficher)
  $dateFormat -> setPattern('EEEE d MMMM y');
  echo $dateFormat -> format($dateObj);
}

formaterDateFr("2018-02-23");

?>
</fieldset>

<h1>Exercice 12</h1>

<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.<br>
Soit le tableau suivant :<br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.
</p>

<fieldset class="resultat">
  
<legend><h2>Résultat</h2></legend>

<?php

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

foreach ($tableauValeurs as $valeur) {
  var_dump($valeur);
  echo "<br>";
}

?>
</fieldset>

<!-- 16/02/2023 -->

<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.<br>
v1 ➔ "Peugeot","408",5<br>
v2 ➔ "Citroën","C4",3<br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
suivants :
</p>

<fieldset class="resultat">
  
  <legend><h2>Résultat</h2></legend>
  
  <?php

  ?>
</fieldset>
