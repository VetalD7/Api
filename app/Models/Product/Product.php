<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

/**
 * Class Product
 * @package App\Models\Product
 */
class Product extends Model
{
    /**
     * @var string
     */
    protected $table = 'products';

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'link',
        'published',
        'availability',
        'code',
        'price',
        'old_price',
        'category_id',
        'sort',
        'created_at',
        'updated_at'
    ];

    public function getLangs()
    {
        return $this->HasMany(ProductLang::class,'id', 'product_id');
    }

    public function getActiveLang()
    {
        return $this->hasOne(ProductLang::class,'id','product_id')->where(App::getLocale());
    }
}
