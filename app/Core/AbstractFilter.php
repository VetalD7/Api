<?php

namespace App\Core;

use App\Contracts\FilterInterface;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

/**
 * Class AbstractFilter
 * @package App\Core
 */
abstract class AbstractFilter implements FilterInterface
{
    /**
     * @var
     */
    public $allowedFilters;
    /**
     * @var array
     */
    public $filter;

    /**
     * AbstractFilter constructor.
     * @param Request $request
     */
    public function __construct(Request  $request)
    {
        $this->filterRequest($request->all());
    }

    /**
     * @param $request
     */
    public function filterRequest(array $request): void
    {
        foreach ($request as $key => $item) {
            if (array_key_exists($key, $this->allowedFilters)) {
                $allowed[$key] = $item;
            }
        }
        $this->setFilter($allowed);
    }

    public function setFilter(array $array):self
    {
        $this->filter = $array;

        return $this;
    }

    /**
     * @return $this
     */
    public function getFilter():array
    {
        return $this->filter;
    }

    abstract public function getQuery($query);
}
