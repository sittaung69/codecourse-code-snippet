<?php

namespace App\Transformers\Users;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class PublicUserTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'joined' => $user->created_at->toDateTimeString(),
        ];
    }
}
