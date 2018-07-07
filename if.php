<?php
$nome = "Rafael";
$sobrenome = "Gonçalves";
$matematica = 10;
$portugues = 7;
$geografia = 2;
$ciencias = 9;
$mediadiv  /4 ;

$media = $matematica + $geografia + $portugues + $ciencias;
$mediaTotal = $media /4;

echo "sua média total é ". $mediaTotal;
echo "<br>";


if ($mediaTotal >= 7 )

{
 echo "Parabéns, você foi APROVADO♥";
}
else {
    echo "Tente estudar mais, você foi REPROVADO!";
}


?>