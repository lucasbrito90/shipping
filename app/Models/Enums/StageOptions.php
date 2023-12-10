<?php

namespace App\Models\Enums;

enum StageOptions : string
{
    case Fitting = 'Fitting';
    case Welding = 'Welding';
    case Passivation = 'Passivation';
    case Shipping = 'Shipping';
}
