<?php

namespace App\Filters;

use App\Core\AbstractFilter;
use Illuminate\Database\Query\Builder;

/**
 * Class ArticleFilter
 * @package App\Filters
 */
class ArticleFilter extends AbstractFilter
{

    public $allowedFilters = [
        'id' => self::FILTER_IN_TYPE,
        'link' => self::FILTER_IN_TYPE,
        'status' => self::FILTER_IN_TYPE,
        'name' => self::FILTER_LIKE_TYPE
    ];

    public function getQuery($query)
    {

        foreach ($this->filter as $key => $filter) {
            switch ($this->allowedFilters[$key]) {
                case self::FILTER_IN_TYPE:
                    if (!is_array($filter)) {
                        $query->whereIn($key, [$filter]);
                    } else {
                        $query->whereIn($key, $filter);
                    }

                    break;
                case self::FILTER_LIKE_TYPE:
                    $query->where($key, 'LIKE', '%'.$filter.'%');
                    break;
//                case self::FILTER_NOT_IN_TYPE:
//                    $query->whereNotIn($key, $filter);
//                    break;
            }
        }
        return $query;
    }
}
