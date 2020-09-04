<?php

namespace App\Contracts;


use App\Core\AbstractFilter;
use Illuminate\Http\Request;

/**
 * Interface RepositoryInterface
 * @package App\Contracts
 */
interface RepositoryInterface
{
    const PAGINATE = 15;
    /**
     * @param FilterInterface|null $filter
     * @return mixed
     */
    public function list(?AbstractFilter $filter);

    /**
     * @param int|null $id
     * @return mixed
     */
    public function delete(?int $id);

    /**
     * @param int|null $id
     * @param Request|null $request
     * @return mixed
     */
    public function find(?int $id, ?Request $request);
}
