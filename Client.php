<?php

use Dances\Dance;

class Client
{
    private $sex;
    private $name;
    private $danceLevel;
    private $dances;
    private $action;

    public function __construct($sex, $name, $dances = [], $danceLevel = 'Amateur')
    {
        $this->sex = $sex;
        $this->name = $name;
        $this->danceLevel = $danceLevel;
        $this->dances = $dances;
    }

    public function dancing(Dance $dance)
    {
        $this->action = 'dancing ' . $dance->getDanceName();
        $dance->bodyMove();
        $dance->handsMove();
        $dance->headMove();
        $dance->legsMove();
    }

    public function drinking()
    {
        $this->action = 'drinking';
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDanceLevel()
    {
        return $this->danceLevel;
    }

    /**
     * @return mixed
     */
    public function getDances()
    {
        return $this->dances;
    }

    /**
     * @param string $danceLevel
     */
    public function setDanceLevel(string $danceLevel): void
    {
        $this->danceLevel = $danceLevel;
    }

    public function setDances(array $dances): void
    {
        $this->dances = $dances;
    }

    public function addDances(array $dances): void
    {
        foreach ($dances as $dance) {
            $this->addDance($dance);
        }
    }

    private function addDance(Dance $dance): void
    {
        $this->dances[] = $dance;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }
}