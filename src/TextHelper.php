<?php

namespace GeoKav\Helpers;

class TextHelper
{
    public function fullName(
        string $firstName,
        string $lastName
    ): string {
        return trim($firstName . ' ' . $lastName);
    }
}
