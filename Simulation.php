<?php

use Dances\Electrodance;
use Dances\HipHop;
use Dances\House;
use Dances\Pop;
use Dances\RandB;

$club = new Club();

$clients[] = new Client('male', 'Misha');
$clients[0]->addDances([new HipHop(), new Pop()]);

$clients[] = new Client('female', 'Marsha', [new RandB(), new House()], 'Pro');
$clients[] = new Client('female', 'Juli', [new Electrodance()]);
$clients[] = new Client('male', 'Sasha', [new House(), new HipHop(), new Electrodance()]);

foreach ($clients as $client) {
    $club->clientEnter($client);
}

$club->setRandomTrack();
print_r($club->getCurrentTrack());

foreach ($clients as $client) {
    print_r($client->getAction());
}



