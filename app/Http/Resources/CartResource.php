<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'status' => new StatusResource($this->status),
            'products' => $this->whenPivotLoaded('cart_products', function () {
                return $this->quantity;
             })
            //'products' => ProductResource::collection($this->products)
        ];
    }
}
