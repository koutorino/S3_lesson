<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function likes()
    {
        return $this->hasMany(Like::class, 'post_id');
    }

    public function is_liked_by_auth_user()
    {
        $id = 1;

        return $this->likes()
            ->where('user_id', $id)
            ->exists();
    }
}
