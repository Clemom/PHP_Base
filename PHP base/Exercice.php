<?php

// EXERCICE BASE
/*
$tableau = array("Clément" => 15, "Noémie" => 20, "Thomas" => 18);

function moyenneNote($tableau){
    $somme = 0;
    $classe = count($tableau);
    foreach ($tableau as $note) {
        $somme += $note;
    }
    return $somme / $classe;
}

$moyenneClasse = moyenneNote($tableau);
echo "\nLa moyenne est de " . $moyenneClasse . "!";


function tableauChaine($nomFichier){

}

$nomFichier = "test.txt";
$chaineTableau = array("\nWake up Neo !", "Follow the white rabbit !");

function ecrireTableau($nomFichier, $chaineTableau){
    $fichier3 = fopen($nomFichier,"a");
    if ($fichier3) {
        foreach($chaineTableau as $ligne4){
            fwrite($fichier3, $ligne4 ."\n");
        }
        fclose($fichier3);
        echo "\nEcriture reussi";
    } else {
        echo "Pas top";
    }
}

ecrireTableau($nomFichier, $chaineTableau);

function liretableau ($nomFichier){
    $tableau = array();
    $fichier4 = fopen($nomFichier,"r");
    if ($fichier4){
        while (($ligne4 = fgets($fichier4)) !== false) {
            $tableau[] = trim($ligne4);
    }
    fclose($fichier4);
} else {
    echo "impossible";
}
return $tableau;
}

$contenu = liretableau($nomFichier);
print_r($contenu);
*/

echo "Hello World !";

function chiffrePair($chiffre)
{
    if ($chiffre % 2 == 0) {
        echo "\nPair\n";
    } else {
        echo "\nImpair\n";
    }
}

chiffrePair(1);

function compter($chiffre)
{
    for (; $chiffre <= 10; $chiffre++) {
        echo $chiffre;
    }
    echo "\n";
}
compter(0);

$semaine = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");

function retournerSemaine($semaine)
{
    $jour = "\n ";
    foreach ($semaine as $jour) {
        echo $jour . " ";
    }
}
retournerSemaine($semaine);

function afficherNom($nom)
{
    echo "\nSalut " . $nom . "!\n";
}

afficherNom("Clément");

function somme($a, $b)
{
    return $a + $b;
}
$resultat = somme(2, 5);
echo $resultat;

$fruitsTableau = array("Pomme" => 1.50, "Orange" => 1.90, "Kiwi" => 2.20, "Pasteque" => 4.50, "Melon" => 2.99, "Cerise" => 1.25);

function moyenneFruits($fruitsTableau)
{
    $sommePrix = 0;
    $nombreFruits = count($fruitsTableau);
    foreach ($fruitsTableau as $prix) {
        $sommePrix += $prix;
    }
    return $sommePrix / $nombreFruits;
}
$resultatMoyenne = moyenneFruits($fruitsTableau);
echo "\nle prix moyen est de " . $resultatMoyenne;

function compterLettre($chaine)
{
    $nombreCaractere = strlen($chaine);
    return $nombreCaractere;
}
$nombreCaractere = compterLettre("Salut, c'est Clément !");
echo "\nil y a " . $nombreCaractere . " caracteres dans cette chaine";

function remplacerMot($chaineBase, $motDeBase, $MotNouveau)
{
    return str_replace($motDeBase, $MotNouveau, $chaineBase);
}
$texteAremplace = "\nSalut Clément !";
$texteModifie = remplacerMot($texteAremplace, "Clément", "Thomas");
echo $texteModifie;



function calculVille($villeTableau)
{
    $villeMax = "";
    $populationMax = 0;
    foreach ($villeTableau as $ville => $population) {
        if ($population > $populationMax) {
            $populationMax = $population;
            $villeMax = $ville;
        }
    }
    return $villeMax;
}

$villeTableau = array("Bordeaux" => 250000, "Montpellier" => 300000, "Marseille" => 870000, "Menton" => 28000, "Parempuyre" => 8200, "Prague" => 1300000, "Gijon" => 271000);
$plusGrandeVille = calculVille($villeTableau);
echo "La ville la plus peuplé est " . $plusGrandeVille . "!";

$nomFichier = "test.txt";
$texte = " \nBien mauvais Matrix 4";
function ecrireFichier($nomFichier, $texte)
{
    $fichierLecture = fopen($nomFichier, "a");
    if ($fichierLecture) {
        fwrite($fichierLecture, $texte);
        fclose($fichierLecture);
        echo "\nCa fonctionne !\n";
    } else {
        echo "Ca fonctionne pas !";
    }
}

ecrireFichier($nomFichier, $texte);




function lireFichier($nomFichier)
{
    $fichierLecture = fopen($nomFichier, "r");
    if ($fichierLecture) {
        $numeroLigne = 1;
        while (($ligne = fgets($fichierLecture)) !== false) {
            echo "ligne $numeroLigne: " . $ligne . "\n";
            $numeroLigne++;
        }
        fclose($fichierLecture);
    } else {
        echo "Ca marche pas";
    }
}
lireFichier($nomFichier);

$glaces = array("Chocolat" => 1.50, "Vanille" => 1.60, "Fraise" => 1.80, "Coco" => 1.40, "Menthe" => 2, "Kinder" => 2.5, "Mangue" => 3);
function glaceCher($glaces)
{
    $prixMax = 0;
    $glaceMax = "";
    foreach ($glaces as $produit => $prixGlace) {
        if ($prixGlace > $prixMax) {
            $prixMax = $prixGlace;
            $glaceMax = $produit;
        }
    }
    return $glaceMax;
}
$glaceLaPLusChere = glaceCher($glaces);
echo "\nLa glace la plus chere est la glace à la " . $glaceLaPLusChere . "!";

function moins10Pourcent($glaces)
{
    foreach ($glaces as $produit => &$prixGlace) {
        $prixGlace *= 0.9;
    }
    return $glaces;
}
$porduitsReduits = moins10Pourcent($glaces);
print_r($porduitsReduits);

$nomText = "test.txt";
$text = "Les 3 premiers Matrix sont vraiment bien, qu'on me parle pas du 4ème...";

function remplirLeFichier($nomText, $text)
{
    $motText = explode(" ", $text);
    $document = fopen($nomText, "w");
    if ($document) {
        foreach ($motText as $mot) {
            fwrite($document, $mot . "\n");
        }
        fclose($document);
        echo "Ecriture réussie \n";
    } else {
        echo "Impossible d'ouvrir le fichier\n";
    }
}

remplirLeFichier($nomText, $text);

function lireMotsDuFichier($nomText)
{
    $tableau = array();
    $document = fopen($nomText, "r");
    if ($document) {
        while (($mot = fgets($document)) !== false) {
            $tableau[] = trim($mot);
        }
        fclose($document);
    } else {
        echo "Impossible d'ouvrir le fichier";
    }
    return $tableau;
}

$mots = lireMotsDuFichier($nomText);
print_r($mots);



$prenom = 'Clément';
$nom = 'Moreau';
$note1 = 10;
$note2 = 20;
$note3 = ($note1 + $note2) / 2;
echo "Bonjour $prenom $nom vous avez eu $note3 de moyenne \n";

$notes = [10, 20, 8, 17, 13, 'etudiant'];
echo $notes[4];
$eleve = [
    'nom' => 'Moreau',
    'prenom' => 'Clément',
    'notes' => [10, 13, 17, 12]
];

$note = 12;

if ($note >= 10) {
    if ($note === 10) {
    }
    echo "\nBravo vous avez la moyenne\n";
} elseif ($note === 10) {
    echo "\nvous avez juste la moyenne\n";
} else {
    echo "\nDommage pas la moyenne\n";
};


/*$action = (int)readline("\nEntrez votre action : (1: attaquer, 2: défendre, 3: passer mon tour)");

switch ($action){
    case 1:
        echo"J'attaque !";
        break;
    case 2: echo "Je défends !";
        break;
    case 3: echo "Je ne fais rien !";
        break;
    default:
        echo "Commande Inconnue";
};


$heure = (int)readline("\nEntrez une heure : ");

if((9 <= $heure && 12 <= $heure) || (14 <= $heure && 19 <= $heure)){
    echo "Le magasin est ouvert";
} else{
    echo "Le magasin est fermé";
};




while ($chiffre !== 10){
    $chiffre = (int)readline("Entrez une valeur :");
}

echo"Bravo vous avez gagné";

$chiffre = null;

for($i = 0; $i <= 10; $i += 2){
    echo"- $i \n";
}


$notes = [10, 15, 18, 17];
$eleves = [
    'CP'=> ['Clément', 'Mathis', 'Alex', 'Justine'], 
    'CE1'=> ['Thomas','Corine','Tof','Clém'],
    'CE2'=> ['Lily','Lou','Liam','Andre'],
    'CM1'=> ['Noémie','JM','Francoise','Angela'],
    'CM2'=> ['Alicia','Lolly','Max','Olaf']
];

foreach($eleves as $classe => $classes){
    echo "la classe de $classe est constitué de: \n";
    foreach($classes as $eleve){
        echo " - $eleve\n";
    }
    echo "\n";
};


$notes = [];

while(true){
    $user = readline("Entrez une note:");
    if ($user === "fin"){
        break;
    }else{
        $notes[] =(int)$user;
    }
}

foreach($notes as $note){
echo " - $note\n";
}
*/
$creneaux = [];

while (true) {
    $horaireOuverture = (int)readline("Entrez l'heure d'ouverture:");
    $horaireFermeture = (int)readline("Entrez l'heure de fermeture:");
    if ($horaireOuverture >= $horaireFermeture) {
        echo " le créneaux ne peux pas être enregistré car l'heure d'ouverture ($horaireOuverture) est supérieur à l'heure de fermeture ($horaireFermeture)";
    } else {
        $creneaux[] = [$horaireOuverture, $horaireFermeture];
        $user = readline("Voulez vous rajouter un nouveau créneau ? (oui ou non)");
        if ($user === "non") {
            break;
        }
    }
}

$heure = readline("A quelle heure voulez vous venir au magasin ?");
$creneauTrouve = false;

foreach ($creneaux as $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneauTrouve = true;
        break;
    }
}

if ($creneauTrouve){
    echo "Votre magasin est ouvert";
} else {
    echo "Le magasin sera fermé";
}


