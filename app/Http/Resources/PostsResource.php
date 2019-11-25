<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostsResource extends JsonResource
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
            'id' => (int) $this->id,
            'users' => [
                'id' => $this->users['id'],
                'user_name' => $this->users['user_name'],
                'first_name' => $this->users['first_name'],
                'email' => $this->users['email'],
            ],
            'tags' => [
                'id' => (int) $this->tags['id'],
                'title' => $this->tags['title'],
            ],
            'title' => $this->title,
            'alias' => $this->alias,
            'description' => $this->description,
            'image_post' => $this->image_post,
            'image_banner' => $this->image_banner,
            'tag_title' => $this->tag_title,
            'meta_description' => $this->meta_description,
            'created_at' => date('Y-m-d', strtotime($this->created_at))
        ];
    }
}
