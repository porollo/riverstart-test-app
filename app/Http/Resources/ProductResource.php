<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class ProductResource extends JsonResource
{
    private mixed $type;
    private mixed $name;
    private mixed $created_at;
    private mixed $updated_at;

    #[ArrayShape(['id' => "mixed", 'name' => "mixed", 'type' => "mixed", 'created_at' => "mixed", 'updated_at' => "mixed"])] public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->type,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
