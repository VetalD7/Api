<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleLang
 * @package App\Models
 */
class ArticleLang extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;
    /**
     * @var bool
     */
    public $incrementing = false;
    /**
     * @var string
     */
    protected $table = 'articles_lang';
    /**
     * @var string[]
     */
    protected $fillable = [
        'article_id',
        'lang',
        'title',
        'description',
        'content',
    ];
}
