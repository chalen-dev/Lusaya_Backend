<?php

namespace App\Enums;

enum Categories : string
{
    case NONE = 'None';
    case SPORTS = 'Sports';
    case PRODUCTREVIEW = 'Product Review';
    case LIFESTYLE = 'Lifestyle';
    case OTHERS = 'Others';
}
