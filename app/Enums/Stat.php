<?php

namespace App\Enums;

enum Stat: string
{
    case Strength = 'strength';
    case Dexterity = 'dexterity';
    case Constitution = 'constitution';
    case Intelligence = 'intelligence';
    case Wisdom = 'wisdom';
    case Charisma = 'charisma';

    public function short(): string
    {
        return strtoupper(substr($this->value, 0, 3));
    }
}