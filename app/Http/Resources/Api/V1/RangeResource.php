<?php

declare(strict_types=1);

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class RangeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request):array
    {
        return [
            'id' => $this->id,
            'type' => 'range',
            'attributes' => [
                'key' => $this->key,
                'name' => $this->name,
                'description' => $this->description,
                'active' => $this->active
            ],
            'relationships'=>[
                'products'=>ProductResource::collection($this->whenLoaded('products'))
            ]
        ];
    }
}
