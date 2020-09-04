<?php

namespace App\Filters;

use App\Core\AbstractFilter;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

/**
 * Class ArticleFilter
 * @package App\Filters
 */
class ArticleFilter extends AbstractFilter
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public $allowedFilters = [
        'id' => self::FILTER_IN_TYPE,
        'link' => self::FILTER_IN_TYPE,
        'status' => self::FILTER_IN_TYPE,
        'name' => self::FILTER_LIKE_TYPE
    ];

    public function getQuery($query)
    {
        dd($this->filter);
    }
}
