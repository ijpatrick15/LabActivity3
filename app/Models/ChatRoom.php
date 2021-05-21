<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ChatRoom extends Model
{

    protected $guarded = [];

    /**  
     * @return \Illuminated\Database\Eloquent\BelongsToMany
    */

    public function members() : BelongsToMany
    {
        return $this->belongsToMany(User::class, table:'chat_room_members');
    }

        /**  
     * @return \Illuminated\Database\Eloquent\HasMany
    */
    public function message() : HasMany
    {
        return $this->hasMany(Message::class);
    }


}