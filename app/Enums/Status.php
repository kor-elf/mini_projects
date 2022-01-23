<?php
namespace App\Enums;

class Status implements IEnum
{
    public const AVAILABLE = 'available';
    public const UNAVAILABLE = 'unavailable';

    public function getList(): array
    {
        return [
            self::AVAILABLE => 'available',
            self::UNAVAILABLE => 'unavailable',
        ];
    }
}
