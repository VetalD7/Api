<?php

namespace App\Service;

use App\Contracts\ServiceInterface;
use Illuminate\Http\Request;

/**
 * Class ProductService
 * @package App\Service
 */
class ProductService implements ServiceInterface
{
    /**
     * @param Request|null $request
     * @return mixed|void\
     */
    public function save(?Request $request)
    {
        return true;
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
     * @param Request $request
     * @return mixed|void
     */
    public function list(Request $request)
    {
        // TODO: Implement list() method.
    }

    /**
     * @param $id
     * @param Request|null $request
     * @return mixed|void
     */
    public function get($id, ?Request $request)
    {
        // TODO: Implement get() method.
    }
}
