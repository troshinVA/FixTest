<?php

namespace Dances;

class RandB implements Dance
{

    public function bodyMove(): string
    {
        return 'покачивание телом вперед назад';
    }

    public function handsMove(): string
    {
        return 'руки согнуты в локтях';
    }

    public function legsMove(): string
    {
        return 'ноги в полуприседе';
    }

    public function headMove(): string
    {
        return 'головой вперед-назад';
    }

    public function getMusicStyles(): array
    {
        return ['RandB'];
    }

    public function getDanceName(): string
    {
        return 'RandB';
    }
}