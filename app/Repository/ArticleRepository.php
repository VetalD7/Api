<?php

namespace App\Repository;

use App\Contracts\FilterInterface;
use App\Contracts\RepositoryInterface;
use App\Core\AbstractFilter;
use App\Models\Article;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * Class ArticleRepository
 * @package App\Repository
 */
class ArticleRepository implements RepositoryInterface
{

    /**
     * @var Article
     */
    private $model;

    public function __construct()
    {
         $this->model = new Article();
    }


    public function delete(?int $id)
    {
        // TODO: Implement delete() method.
    }

    public function find(?int $id, ?Request $request)
    {
        // TODO: Implement find() method.
    }

    public function list(?AbstractFilter $filter)
    {
        $query = $filter->getQuery($this->model::query());



       return $query->paginate(self::PAGINATE);
    }
}
