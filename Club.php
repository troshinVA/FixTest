<?php

use Dances\Dance;

class Club
{
    private $clients;
    private $currentTrack = 'RandB';
    private $playList = [
        'song1' => 'RandB',
        'song2' => 'Electrohouse',
        'song3' => 'Pop',
        'song4' => 'RandB',
        'song5' => 'Electrohouse',
        'song6' => 'Pop',
        'song7' => 'RandB',
        'song8' => 'Electrohouse',
        'song9' => 'Pop',
        'song10' => 'RandB',
        'song11' => 'Electrohouse',
        'song12' => 'Pop',
    ];

    /**
     * @return mixed
     */
    public function getCurrentTrack(): mixed
    {
        return $this->currentTrack;
    }

    public function setRandomTrack()
    {
        $this->currentTrack = $this->playList['song' . random_int(1, count($this->playList))];
        $this->changeClientsActions();
    }

    /**
     * @param Client $client
     */
    public function clientEnter(Client $client): void
    {
        $this->changeClientAction($client);
        $this->clients[] = $client;
    }

    private function changeClientAction(Client $client)
    {
        /** @var Dance $dance */
        foreach ($client->getDances() as $dance) {
            if (array_flip($dance->getMusicStyles())[$this->currentTrack]) {
                $matchDances[] = $dance;
            }
        }

        if ($matchDances) {
            $client->dancing($matchDances[array_rand($matchDances)]);
            return;
        }

        $client->drinking();
    }

    private function changeClientsActions()
    {
        /** @var Client $client */
        foreach ($this->clients as $client) {
            $this->changeClientAction($client);
        }
    }
}