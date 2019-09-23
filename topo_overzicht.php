<?php

echo "Hoeveel landen ga je toevoegen?" . PHP_EOL;
$aantal = readline("> ");
$topo = [];

if(is_numeric($aantal)){
    for($i=0;$i < $aantal;$i++) {
        echo "Welk land wil je toevoegen?" .PHP_EOL;
        $land = readLine("> ");
        echo "Wat is de hoofdstad van " . $land . "?" . PHP_EOL;
        $topo[$land] = readline("> ");
    }
    echo "De volgende landen en steden zitten in de database" . PHP_EOL;
    foreach($topo as $hoofdstad) {
        $land = array_search($hoofdstad, $topo);
        echo $land . ", " . $hoofdstad . PHP_EOL;
}
} else {
     exit("'$aantal' is geen getal probeer het opnieuw");
}
