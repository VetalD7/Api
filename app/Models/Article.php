<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App\Models
 */
class Article extends Model
{
    protected $table = 'articles';
    /**
     * @var string[]
     */
    protected $fillable = [
        'link',
        'status',
        'publication_at',
        'updated_at'
    ];
}
