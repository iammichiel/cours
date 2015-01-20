<?php

$europe = array(
    array(
        'nom' => 'France',
        'capitale' => 'Paris',
        'population' => 65000000
    ),
    array('nom' => 'Belgique', 'capitale' => 'Bruxelles', 'population' => 11200000),
    array('nom' => 'Espagne', 'capitale' => 'Madrid', 'population' => 46500000),
);


print_r($europe);

usort($europe, function($a, $b) {
    return $a['population'] > $b['population'];
});

print_r($europe);

usort($europe, function($a, $b) {
    return $a['nom'] > $b['nom'];
});

print_r($europe);
