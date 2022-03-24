<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id',
            'user_id',
            'title',
            'contents_sum',
            'target',
            'contents_detail',
            'crclm',
            'cate_main',
            'cate_sub',
            'class_type',
            't_type',
            'run_time',
            'run_count',
            'region_main',
            'region_sub',
            'created_at',
            'updated_at'
        ]; 
        // return parent::toArray($request);
    }
}
