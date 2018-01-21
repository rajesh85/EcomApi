<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
           'id' => $this->id,
          'title' => $this->title,
          'description' => $this->description,
          'price' => $this->price,
          'stock' => ($this->stock > 0) ? $this->stock : 'Out of stock',
          'rating' => ($this->reviews->count() > 0)
                        ? round($this->reviews->sum('star_rating')/$this->reviews->count(),2)
                        : 'No rating',
          'href' => [
              'reviews' => route('review.index', $this->id)
          ]
        ];

    }
}
