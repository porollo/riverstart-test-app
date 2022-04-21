<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class ProductResource extends JsonResource
{
    public mixed $type;
    public mixed $name;
    public mixed $created_at;
    public mixed $updated_at;

    #[ArrayShape(['product_id' => "mixed", 'product_name' => "mixed", 'product_type' => "mixed", 'created_at' => "mixed", 'updated_at' => "mixed"])]

    public function toArray($request): array
    {
        return [
            'product_id' => $this->id,
            'product_name' => $this->name,
            'product_type' => $this->type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    public function with($request){
        return [
            'version' => "1.0",
            'author_url' => "Dmitriy S. Porollo",
            'year' => "2022"
        ];
    }
}
