<?php

namespace Dances;

class Electrodance implements Dance
{

    public function bodyMove(): string
    {
        return 'покачивание туловищем вперед-назад';
    }

    public function handsMove(): string
    {
        return 'круговые движения-вращения руками';
    }

    public function legsMove(): string
    {
        return 'ноги двигаются в ритме';
    }

    public function headMove(): string
    {
        return 'почти нет движения головой';
    }

    public function getMusicStyles(): array
    {
        return ['Electrohouse'];
    }

    public function getDanceName(): string
    {
       return 'Electrodance';
    }
}