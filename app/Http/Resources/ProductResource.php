<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class ProductResource extends JsonResource
{
    public mixed $id = 0;
    public String $type = "Car";
    public String $name = "Volvo";
    public String $created_at = "30.09.2020";
    public String $updated_at = "30.09.2022";

    #[ArrayShape(['id' => "mixed", 'product_name' => "String", 'product_type' => "String", 'created_at' => "String", 'updated_at' => "String"])] public function toArray($request): array
    {
        $id = 0;
        return [
            'id' => $this->$id,
            'product_name' => $this->name,
            'product_type' => $this->type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    #[ArrayShape(['version' => "string", 'author_url' => "string", 'year' => "string"])] public function with($request): array
    {
        return [
            'version' => "1.0",
            'author_url' => "Dmitriy S. Porollo",
            'year' => "2022"
        ];
    }
}
