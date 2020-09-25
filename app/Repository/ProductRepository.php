<?php

namespace App\Repository;

use App\Contracts\FilterInterface;
use App\Contracts\RepositoryInterface;
use App\Core\AbstractFilter;
use Illuminate\Http\Request;

/**
 * Class ProductRepository
 * @package App\Repository
 */
class ProductRepository implements RepositoryInterface
{
    /**
     * @param AbstractFilter|null $filter
     * @return mixed|void
     */
    public function list(?AbstractFilter $filter)
    {
        // TODO: Implement list() method.
    }

    /**
     * @param int|null $id
     * @return mixed|void
     */
    public function delete(?int $id)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param int|null $id
     * @param Request|null $request
     * @return mixed|void
     */
    public function find(?int $id, ?Request $request)
    {
        // TODO: Implement find() method.
    }
}
