<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class CategoryResource extends JsonResource
{
    private mixed $name;
    private mixed $type;
    private mixed $date;
    private mixed $created_at;
    private mixed $updated_at;

    #[ArrayShape(['category_id' => "mixed", 'category_name' => "mixed", 'category_type' => "mixed",'category_date' => "mixed", 'created_at' => "mixed", 'updated_at' => "mixed"])]

    public function toArray($request): array
    {
        return [
            'category_id' => $this->id,
            'category_name' => $this->name,
            'category_type' => $this->type,
            'category_date' => $this->date,
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
