<?php

namespace Dances;

interface Dance
{
    public function getDanceName(): string;

    public function bodyMove(): string;

    public function handsMove(): string;

    public function legsMove(): string;

    public function headMove(): string;

    public function getMusicStyles(): array;
}