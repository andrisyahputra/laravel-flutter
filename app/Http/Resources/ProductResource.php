<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'deskripsi' => $this->deskripsi,
            'price' => $this->price,
            'image_product' => $this->image_url,
            'kategori' => new CategoryResource($this->whenLoaded('category')),
            'user' => new UserResource($this->whenLoaded('user'))

        ];
    }
}