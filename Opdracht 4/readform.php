<?php
$naam = $_POST ['naam'];
$leeftijd = $_POST ['leeftijd'];
$woonplaats = $_POST ['woonplaats'];


switch ($naam) {
    case "Taran":
        echo "Wait, dat is mijn naam";
        break;
    case "Joey":
        echo "hallo Meneer";
        break;
    case "Tariq ":
        echo "Wack ass Ni..a";
        break;
    case "Anwar":
        echo "Anwar wat doe je op me laptop";
        break;
    case "Ramses ":
        echo "Hoe de fuck?";
        break;
    default:
        echo $naam." is echt een mooie naam";
}
echo "<br>";
switch ($leeftijd) {
    case "17":
        echo "Nog een jaartje te gaan";
        break;
    case "16":
        echo "je bent wel jong";
        break;
    case "18 ":
        echo "Je bent officieel volwassen";
        break;
    case "20 ":
        echo "Mooi rond getal";
        break;
    case "30 ":
        echo "Oud";
        break;
    default:
        echo "Mooie leeftijd";
}
echo "<br>";
switch ($woonplaats) {
    case "Almere":
        echo "Oh je woont in " . $woonplaats . " daar woon ik ook toevallig.";
        break;
    case "Lelystad":
        echo "In Lelystad zou ik ook wel willen wonen";
        break;
    case "Utrecht ":
        echo $woonplaats . " klinkt als een leuke stad";
        break;
    case "Amsterdam ":
        echo $woonplaats . "Je woont in" . $woonplaats . "? Dan moet je wat weed op je hebben";
        break;
    case "Denhaag ":
        echo $woonplaats . "Je klonk al als een politike type";
        break;
    default:
        echo "Oh je woont in " . $woonplaats . "? Nice";
}


