<?php 

// Declarer une variable et assigner une valeur 
$a = 56;
$b = "56";
$c = '56';

// Les types speciaux
$ar = [ 'a' => 2 ];
$br = array('a' => 2, 'b' => 5);

// var_dump permet d'afficher le contenu d'une ou plusieurs variables
var_dump($a, $b, $c, $ar, $br);

// Afficher du contenu (constatez les differences entre la console et la navigateur)
echo PHP_EOL;
print("Hello<br />");
echo "Hello!<br />";
echo PHP_EOL;
echo "$a + $b = " . ($a + intval($b));
echo "\n";
echo '$a + $b = ' . ($a + intval($b));
echo PHP_EOL;

/*
Resultat:
int(56) string(2) "56" string(2) "56" array(1) { ["a"]=> int(2) } array(2) { ["a"]=> int(2) ["b"]=> int(5) } 

Qu'est-ce que cela veut dire ?
Sachant que c'est l'instruction `var_dump(..)` qui affiche cela,
On peut en déduire que :
Notre variable $a est un `int` avec la valeur 56.
Notre variable $b est une `string` de longueur `2` avec la valeur "56"
pareil pour $c 
Ensuite nous avons array(1) { ["a"]=> int(2) }
Un tableau de taille 1, contenant la valeur `2` à l'indice "a"
Et notre $br 2e tableau: array(2) { ["a"]=> int(2) ["b"]=> int(5) } 
Un tableau de taille 2, contenant 1 valeur sur la clé "a" et une sur la cle "b".

*/


// Acceder aux valeurs d'un tableau
$ar["a"] = 2;
$ar["b"] = 5;

// Ajouter une entree dans un tableau
$ar[] = "value";
array_push($ar, "value");

// Conditions
if ($ar["a"] == 2) {
    print("vrai, a = 2\n");
}
else {
    print("faux, a != 2\n");
}



echo "ok\nIci l'utilisateur va pouvoir ecrire: ";
// Recuperer l'entree utilisateur dans la console
$userInput = trim(fgets(STDIN));
echo "Utilisateur à écrit: " . $userInput;
// la fonction trim permet de 'trimer' la string reçue, Supprime les espaces (ou d'autres caractères) en début et fin de chaîne 
// voir https://www.php.net/manual/fr/function.trim.php
// Comment trouver facilement la doc php : Google `php trim` par exemple - ou sur le site php.net

// Declarer une fonction
function multiply($a, $b) {
    return $a * $b;
}

if (CONDITION) {

}
else if () {

}
else {

}


//

while() {

}

for($i = 0; $i < x; $i++) {

}

foreach($list as $key => $value) {
    
}



?>
