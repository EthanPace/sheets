<?php

namespace App\Enums;

enum Role: string
{
    case Admin = 'admin';
    case Runner = 'runner';
    case Player = 'player';
}