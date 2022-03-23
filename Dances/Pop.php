<?php

namespace Dances;

class Pop implements Dance
{

    public function bodyMove(): string
    {
        return 'плавные движения туловищем';
    }

    public function handsMove(): string
    {
        return 'плавные движения руками';
    }

    public function legsMove(): string
    {
        return 'плавные движения ногами';
    }

    public function headMove(): string
    {
        return 'плавные движения головой';
    }

    public function getMusicStyles(): array
    {
        return ['Pop'];
    }

    public function getDanceName(): string
    {
        return 'Pop';
    }
}