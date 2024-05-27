<?php
echo "Hello World!\n";


$i = 2;
if ($i % 2 == 0) {
    echo "Le chiffre est pair\n";
} else {
    echo "Le chiffre est impair\n";
}


for ($j = 1; $j <= 10; $j++) {
    echo $j;
}

$semaine = array("\nlundi ", "mardi ", "mercredi ", "jeudi ", "vendredi ", "samedi ", "dimanche ");
foreach ($semaine as $jour) {
    echo $jour;
}
;

function saluer($nom)
{
    echo "\nBonjour, " . $nom . "!\n";
}

saluer("Clément");

function additionner($a, $b)
{
    return $a + $b;
}

$resultat = additionner(2, 3);
echo $resultat;

// Tableau associatif
$fruits = array("Pomme" => 2.50, "orange" => 1.50, "pêche" => 2.90, "ananas" => 5);
function prixMoyen($fruits)
{
    $somme = 0;
    $nombre = count($fruits);
    foreach ($fruits as $fruit) {
        $somme += $fruit;
    }
    return $somme / $nombre;
}

$moyenne = prixMoyen($fruits);
echo "\nLe prix moyen des fruits est de " . $moyenne . " euros.\n";

//Fonction et manipulation de chaînes

//Fonction pour compter le nombre de caractéres dans une chaine
function compterLettres($phrase)
{
    return strlen($phrase);
}

$texte = "Le PHP c'est super !";
echo compterLettres($texte);


//Fonction pour remplacer un mot dans une chaine
function remplacerMot($chaine, $mot, $motRemplace)
{
    return str_replace($mot, $motRemplace, $chaine);
}
$texteAremplace = "\nSalut Clément \n";
$texteModifie = remplacerMot($texteAremplace, "Clément", "Thomas");
echo $texteModifie;

//Fonction avec des tableaux associatifs

function villePeuple($villes)
{
    $villeMax = "";
    $popMax = 0;
    foreach ($villes as $ville => $population) {
        if ($population > $popMax) {
            $popMax = $population;
            $villeMax = $ville;
        }
    }
    return $villeMax;
}

$villes = array("Bordeaux" => 250000, "Montpellier" => 300000, "Marseille" => 870000, "Menton" => 28000, "Parempuyre" => 8200, "Prague" => 1300000, "Gijon" => 271000);
$villeLaPlusPeuplee = villePeuple($villes);
echo "La ville la plus peuplée est " . $villeLaPlusPeuplee;

//Fonction qui utilise un fichier .txt externe

$nomFichier = "test.txt";
$chaine = "WAKE UP NEO !";
function ecrireDansLeFichier($nomFichier, $chaine)
{
    $fichier2 = fopen($nomFichier, "w");
    if ($fichier2) {
        fwrite($fichier2, $chaine);
        fclose($fichier2);
        echo "\nCa marche. \n";
    } else {
        echo "Impossible";
    }
}

ecrireDansLeFichier($nomFichier, $chaine);

function lireDansLeFichier($nomFichier){
    $fichier2 = fopen($nomFichier,"r");
    if ($fichier2) {
        $numeroLigne = 1;
        while (($ligne = fgets($fichier2)) !== false) {
            echo "Ligne $numeroLigne: " . $ligne . "\n";
            $numeroLigne++;
        }
            fclose($fichier2);
} else {
    echo "Ca bug";
}
}
lireDansLeFichier($nomFichier);

