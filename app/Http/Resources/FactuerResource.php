<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FactuerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $value= parent::toArray($request);
        unset($value['created_at']);
        unset($value['updated_at']);
        unset($value['deleted_at']);
       return $value;
    }
}
