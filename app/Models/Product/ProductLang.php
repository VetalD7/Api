<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductLang
 * @package App\Models\Product
 */
class ProductLang extends Model
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
    protected $table = 'product_strings';

    /**
     * @var string[]
     */
    protected $fillable = [
        'product_id',
        'lang',
        'title',
        'description',
        'content',
    ];
}
