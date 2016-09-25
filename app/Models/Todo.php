<?php

namespace TodoApi\Models;

use Illuminate\Database\Eloquent\Model;
use TodoApi\Models\User;

/**
 * Todo Model
 */
class Todo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'is_active',
        'is_completed',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
        'is_completed' => 'boolean',
    ];

    /**
     * Get author of the todo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
