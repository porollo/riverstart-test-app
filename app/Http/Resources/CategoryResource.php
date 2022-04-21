<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Date;
use JetBrains\PhpStorm\ArrayShape;

class CategoryResource extends JsonResource
{
    private String $name;
    private String $type;
    private Date $date;
    private Date $created_at;
    private date $updated_at;

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

    #[ArrayShape(['version' => "string", 'author_url' => "string", 'year' => "string"])] public function with($request){
        return [
            'version' => "1.0",
            'author_url' => "Dmitriy S. Porollo",
            'year' => "2022"
        ];
    }
}
