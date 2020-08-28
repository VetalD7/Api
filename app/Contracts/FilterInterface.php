<?php

namespace App\Contracts;

/**
 * Interface FilterInterface
 * @package App\Contracts
 */
interface FilterInterface
{
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
