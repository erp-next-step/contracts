<?php

namespace Contracts\Helpers;

class PhoneHelper
{
    public static function normalize(string $phone): string
    {
        return preg_replace('/[^0-9]/', '', $phone);
    }
}
