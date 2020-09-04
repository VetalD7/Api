<?php

namespace App\Contracts;

/**
 * Interface FilterInterface
 * @package App\Contracts
 */
interface FilterInterface
{
    public const FILTER_LIKE_TYPE = 1;
    public const FILTER_IN_TYPE = 2;
    public const FILTER_NOT_IN_TYPE = 3;
    public const FILTER_CUSTOM = 4;

    /**
     * @param array $array
     * @return mixed
     */
    public function setFilter(array $array);

    /**
     * @return mixed
     */
    public function getFilter();
}
