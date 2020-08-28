<?php

namespace App\Service;

use App\Contracts\ServiceInterface;
use Illuminate\Http\Request;

/**
 * Class ArticleService
 * @package App\Service
 */
class ArticleService implements ServiceInterface
{
    /**
     * @param Request|null $request
     * @return mixed|void
     */
    public function save(?Request $request)
    {
        // TODO: Implement save() method.
    }

    public function delete(?int $id)
    {
        // TODO: Implement delete() method.
    }

    public function list(?Request $request)
    {
        // TODO: Implement list() method.
    }

    public function get($id, ?Request $request)
    {
        // TODO: Implement get() method.
    }
}
