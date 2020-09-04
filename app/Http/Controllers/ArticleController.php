<?php

namespace App\Http\Controllers;

use App\Responses\Article\ListArticleResponse;
use App\Service\ArticleService;
use Illuminate\Http\Request;

/**
 * Class ArticleController
 * @package App\Http\Controllers
 */
class ArticleController extends Controller
{
    /**
     * @var ArticleService
     */
    public $service;

    public function __construct(ArticleService $service)
    {
        $this->service = $service;
    }

    /**
     * @param Request $request
     * @return ListArticleResponse
     */
    public function index(Request $request)
    {
        return new ListArticleResponse($this->service->list($request));
    }
}
