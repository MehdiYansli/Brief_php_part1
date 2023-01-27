<?php 

// Ex 0: 

$var = 5;
echo ($var)."\n";

// Ex 1:
$word = "c'est ";
$word2 = "vie.";
$word3 = "Simplon";
$word4 = "la";

// echo $word3 . $word . $word4 . $word2
echo ("$word3 $word $word4 $word2")."\n";


// Ex 2: Obtenir 3

$variable1=12;
$variable2=4;

echo ($variable1 / $variable2)."\n";

// Ex 3: obtenir 20

$var="clement";
$var1= "extrapolation";
echo strlen("$var$var1")."\n";
//echo strlen($var . $var1)."\n";

// Ex 4: Faire apparaître la phrase 

$maîtrise_du_code = 1000;

if ( $maîtrise_du_code >= $maîtrise_du_code) {
    echo ("je maîtrise tellement le code maintenant")."\n";
};

// Ex 5 : intervertissez le chiffre de sandrine avec celui de Xavier. 
// Retirer ensuite le chiffre de Xavier concatÃ©nÃ© avec celui de Andre Ã  celui de Sandrine. 
// Affichez ensuite le rÃ©sultat si celui-ci est infÃ©rieur Ã  50 uniquement.

$chiffre_fetiche_sandrine = 7;
$chiffre_fetiche_xavier = 130;
$chiffre_fetiche_andre = 8;

$chiffre_fetiche_sandrine_New = &$chiffre_fetiche_xavier;
$chiffre_fetiche_xavier = &$chiffre_fetiche_sandrine;
$chiffre_fetiche_sandrine = &$chiffre_fetiche_sandrine_New;

echo ($chiffre_fetiche_sandrine)."\n";
echo ($chiffre_fetiche_xavier)."\n";

if ($chiffre_fetiche_sandrine < 50) {
    echo $chiffre_fetiche_sandrine - ($chiffre_fetiche_xavier . $chiffre_fetiche_andre);
};

// Ex 6: 
$compte = -100;

if ($compte> 100) {
    echo "bravo, vous Ãªtes un bon gestionnaire";
} else {
    echo "Vous faites vraiment n'importe quoi avec votre argent";
};

// Ex 7

$vent = 20;
$houle = 30;
$cadence_vague = 10;

if ($vent > 30 && $houle <= 20 && $cadence_vague >= 10 ) {
    echo "Surf autorisé";

} else if ($vent < 30 && $houle <= 30 && $cadence_vague <= 8 ) {
    echo "Surf autorisé";
} else {
    echo "Surf interdit";
};

// Ex 8

$nombre_1 = 88;
$nombre_2 = 7;
$nombre_3 = 23;
$nombre_4 = 5;
$nombre_5 = 45;
$nombre_6 = 12;

// $div2 = 0;
// $nondiv2 = 0;

// $array = array($nombre_1, $nombre_2, $nombre_3, $nombre_4, $nombre_5, $nombre_6);

// for ($i=0; $i < count($array); $i++) {
//     if ($array[$i] % 2 == 0) {
//     $div2 += $array[$i];
//     } else {
//     $nondiv2 += $array[$i];
// } 
// };

// echo $div2 - $nondiv2

function isMultiple($nbr1, $nbr2) {
    if($nbr1 % $nbr2 == 0) {
        return $nbr1;
    } else {
        return $nbr1 * -1;
    }
}

$result = isMultiple($nombre_1, 2) + isMultiple($nombre_2, 2) + isMultiple($nombre_3, 2) + isMultiple($nombre_4, 2) + isMultiple($nombre_5, 2) + isMultiple($nombre_6, 2);

echo $result
?>