<?php
/**
 * Created by PhpStorm.
 * User: yavuz
 * Date: 2019-03-27
 * Time: 10:48
 */

/**
Démarrage
Créer un dossier revisions contenant le fichier index.php
Lancer le fichier PHP en CLI ==>  php -S localhost:8000
Affiche le message "Hello fellowship"
 */
echo "<h1>Démarrage</h1>";
echo "Hello fellowship";

echo "<h1>Variables</h1>";
/**
Déclarer des variables pour y mettre ces données (attention au nommage des variables !)
Le nom du porteur de l'anneau puis affiche le
Le nom du créateur de l'anneau puis affiche le
Le nombre de membres de la compagnie
Si l'anneau est au doigt ou non
Réassigne un nouveau porteur à l'anneau et affiche le.
Ajoute un au nombre de membres et affiche le résultat
Affiche la variable $middleEarth (qui n'existe pas) et observe le message d'erreur
Initialiser la variable avec une chaîne vide avant de l'afficher. Tu n'as maintenant plus d'erreur
 *
 */

// Le nom du porteur de l'anneau puis affiche le
$ringBearer = "Frodon";
echo $ringBearer;

// Séparation
echo "<hr/>";

// Le nom du créateur de l'anneau puis affiche le
$ringCreator = "Sauron";
echo $ringCreator;

// Séparation
echo "<hr/>";

// Le nombre de membres de la compagnie
$numberMembers = 9;
echo $numberMembers;

//Si l'anneau est au doigt ou non
$ringOnFinger = false; // L'anneau n'est pas au doigt par défault
if($ringOnFinger==true) {
 echo "L'anneau est au doigt";
}

// Séparation
echo "<hr/>";

// Réassigne un nouveau porteur à l'anneau et affiche le
$ringBearer = "Yavuz";
echo $ringBearer;

// Séparation
echo "<hr/>";

// Le nouveau nombre de membres de la compagnie
$numberMembers = $numberMembers + 1;
echo $numberMembers;

// Affiche la variable $middleEarth (qui n'existe pas) et observe le message d'erreur
echo $middleEarth;

// Initialiser la variable avec une chaîne vide avant de l'afficher. Tu n'as maintenant plus d'erreur
$middleEarth = "";
echo $middleEarth;


echo "<h1>Strings</h1>";
/**
affiche la phrase suivante : Le porteur est "nom du porteur"
enregistre la phrase suivante dans une variable puis affiche la : L'anneau est porté par "nom du porteur"
affiche la concatènation de cette dernière variable avec la phrase : et "nom du créateur" le recherche
affiche la variable contenant le nom du créateur, en majuscule
modifie la variable contenant le nom du créateur pour qu'elle contienne toujours le nom en majuscule et affiche le résultat
 */

//affiche la phrase suivante : Le porteur est "nom du porteur"
echo "Le porteur est ".$ringBearer;

// Séparation
echo "<hr/>";

// enregistre la phrase suivante dans une variable puis affiche la : L'anneau est porté par "nom du porteur"
$phraseBearer = "L'anneau est porté par ".$ringBearer;

//affiche la concatènation de cette dernière variable avec la phrase : et "nom du créateur" le recherche
echo $phraseBearer. " et ".$ringCreator." le recherche";

// Séparation
echo "<hr/>";

// modifie la variable contenant le nom du créateur pour qu'elle contienne toujours le nom en majuscule et affiche le résultat
echo $phraseBearer. " et ".strtoupper($ringCreator)." le recherche";

echo"<h1>Include/require</h1>";

/**
démarrer un serveur HTTP sur le dossier revisions et ouvrir le fichier index.php dans le navigateur
crée un fichier header.php contenant la phrase "I love PHP"
crée un fichier footer.php contenant la phrase "and Lord of the rings !"
utilise include pour afficher le header et le footer respectivement au début et à la fin de ton fichier index.php
fais un include du fichier wizard.php (sans créer le fichier), puis utilise require au lieu d'include pour observer la différence
crée le fichier wizard.php contenant echo 'Hello', tu devrais voir le texte apparaître
ajoute la ligne suivante au fichier wizard.php echo $wizard, il y a une erreur
crée une variable $wizard = 'Gandalf' dans index.php, AVANT d'include/require le fichier wizard.php, tu ne dois plus avoir d'erreur

 */
include('./header.php');
// Séparation
echo "<hr/>";

include('./footer.php');
$wizard = 'Gandalf';
require('./wizard.php');