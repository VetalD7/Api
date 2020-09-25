<?php

namespace App\Models\Product;

/**
 * Class Status
 * @package App\Models\Product
 */
class Status
{
    /**
     * Statuses product
     */
    public const NEW = 1;
    public const SALE  = 2;
    public const TOP = 3;

    /**
     * @var string[]
     */
    public $statuses = [
        self::NEW => 'New',
        self::SALE => 'Sale',
        self::TOP => 'Top'
    ];

    /**
     * @return string[]
     */
    public function getStatuses(): array
    {
        return $this->statuses;
    }

    /**
     * @param string[] $statuses
     */
    public function setStatuses(array $statuses): void
    {
        $this->statuses = $statuses;
    }
}
