<?php

namespace App\Enums;

enum ItemType: string
{
    case Pack = 'Equipment Pack';
    case Ammo = 'Ammunition';
    case Magic = 'Magic Item';
    case Food = 'Food and Drink';

    case Gear = 'Adventuring Gear';
    case Container = 'Container';
    case Light = 'Light Source';
    case Clothing = 'Clothing';

    case Focus = 'Spellcasting Focus';
    case Arcane = 'Arcane Focus';
    case Druidic = 'Druidic Focus';
    case Holy = 'Holy Symbol';

    public static function focuses(): array
    {
        return [ItemType::Focus, ItemType::Arcane, ItemType::Druidic, ItemType::Holy];
    }
}