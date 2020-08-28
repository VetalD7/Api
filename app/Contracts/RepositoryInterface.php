<?php

namespace App\Contracts;


use Illuminate\Http\Request;
use Intervention\Image\Filters\FilterInterface;

/**
 * Interface RepositoryInterface
 * @package App\Contracts
 */
interface RepositoryInterface
{
    /**
     * @param FilterInterface|null $filter
     * @return mixed
     */
    public function list(?FilterInterface $filter);

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
