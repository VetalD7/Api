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
    public $allowedFilters;
    /**
     * @var array
     */
    public $filter;
    /**
     * @var Request
     */
    public $request;

    public function __construct(Request  $request)
    {
        $this->request = $request->all();
    }

    public function filterRequest()
    {
        foreach ( $this->request->all() as $item) {
            if (in_array($item, $this->allowedFilters)) {
                $allowed[] = $item;
            }
        }
        $this->setFilter($allowed);
    }

    public function setFilter(array $array)
    {
        $this->filter = $array;

        return $this;
    }

    public function getFilter()
    {
        return $this->filter;
    }

    abstract public function getQuery($query);
}
