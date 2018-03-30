<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'id'            =>  $this->id,
            'title'         =>  str_limit($this->title, 200, ''),
            'time'          =>  $this->created_at->toDateTimeString(),
            'avatar'        =>  $this->user->avatar,
        ];
    }
}
