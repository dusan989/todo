<?php

namespace TodoApi\Transformers;

use League\Fractal\TransformerAbstract;
use TodoApi\Models\Todo;

class TodoTransformer extends TransformerAbstract
{
    public function transform(Todo $todo)
    {
        return [
            'id' => $todo->uuid,
            'content' => $todo->content,
            'is_active' => $todo->is_active,
            'is_completed' => $todo->is_completed,
            'created_at' => $todo->created_at,
            'updated_at' => $todo->updated_at,
        ];
    }
}
