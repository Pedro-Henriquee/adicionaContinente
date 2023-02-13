<?php

include_once 'class_continente.php';

$oChile = new Pais('0', 'Chile', 28119919);
$oChile->setAFronteira(['Guiana Francesa', 'Colombia', 'Uruguai']);

$oBrasil = new Pais('BRA', 'Brasil', 2);
$oBrasil->setAFronteira(['Argentina', 'Colombia', 'Uruguai']);
$oBrasil->setPopulacao(2);

$oContinente = new Continente('América do Sul');
$oContinente->adicionaPaises($oBrasil);
$oContinente->adicionaPaises($oChile);
echo "----------DADOS CONTINENTE-------------<br><br>";
echo $oContinente->getNomeContinente();
echo "<br><br>";
echo "A dimensão do continente é de: " . $oContinente->dimensaoTotal() . "km";
echo "<br><br>";
echo "A maior população é de: " . $oContinente->maiorPopulacao() . "habitantes";
echo "<br><br>";
echo "A menor população é de: " . $oContinente->menorPopulacao() . "habitantes";
echo "<br><br>";
echo "O país de maior território é de: " . $oContinente->maiorDimensao() . "km";
echo "<br><br>";
echo "O país de menor território é de: " . $oContinente->menorDimensao() . "km";
echo "<br><br>";
echo "A diferença territorial entre o maior e o menor país é de: " . $oContinente->diferencaTerritorial() . "km";
echo "<br><br>";
$oContinente->getAPaises();
?>