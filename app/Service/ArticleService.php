<?php

namespace App\Service;

use App\Contracts\ServiceInterface;
use App\Filters\ArticleFilter;
use App\Repository\ArticleRepository;
use Illuminate\Http\Request;

/**
 * Class ArticleService
 * @package App\Service
 */
class ArticleService
{
    /**
     * @var ArticleRepository
     */
    public $articleRepository;

    /**
     *
     */
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }
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

    public function get($id, ?Request $request)
    {
        // TODO: Implement get() method.
    }

    public function list(Request $request)
    {
        return $this->articleRepository->list(new ArticleFilter($request));
    }
}
