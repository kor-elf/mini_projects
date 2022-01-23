<?php
namespace App\Helpers;

class ConvertHelper
{
    /**
     * $name = 'field[key]' return 'field.key'
     */
    public static function formatAttributeNameToRequestName(string $name): string
    {
        return \str_replace(
            [
                '.', '[', ']'
            ],
            [
                '_', '.', ''
            ],
            $name
        );
    }
}
