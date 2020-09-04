<?php

namespace App\Contracts;

use Illuminate\Http\Request;

/**
 * Interface ServiceInterface
 * @package App\Contracts
 */
interface ServiceInterface
{
    /**
     * @param Request|null $request
     * @return mixed
     */
    public function save(?Request $request);

    /**
     * @param int|null $id
     * @return mixed
     */
    public function delete(?int $id);

    /**
     * @param Request|null $request
     * @return mixed
     */
    public function list(Request $request);

    /**
     * @param $id
     * @param Request|null $request
     * @return mixed
     */
    public function get($id, ?Request $request);
}
