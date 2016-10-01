<?php

namespace TodoApi\Transformers;

use League\Fractal\TransformerAbstract;
use TodoApi\Models\User;

class UserTransformer extends TransformerAbstract
{
    /**
     * Transform User Model into array
     *
     * @param  User   $user
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'id' => $user->uuid,
            'name' => $user->name,
            'email' => $user->email,
            'created_at' => $user->created_at,
            'updated_at' => $user->updated_at,
        ];
    }
}
