<?php


namespace App\Core;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

/**
 * Class AbstractResponse
 * @package App\Core
 */
abstract class AbstractResponse extends  JsonResource
{
    /**
     * @param Collection $collection
     */
    public function __constructor(Collection $collection)
    {
        $this->collection = $collection;
    }
}
