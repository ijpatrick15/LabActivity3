<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    public function sender() : BelongsTo
    {
        return $this->belongsTo(User::class,'sender_ID');
    }

}   