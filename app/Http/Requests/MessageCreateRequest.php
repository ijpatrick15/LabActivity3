<?php

namespace App\Http\Requests;

    

use Illuminate\Foundation\FormRequest;



class MessageCreateRequest extends FormRequest
{
    public function authorize()
    {
        return $this->route('chatRoom')->members()->where('member_id', $this->user()->id->exists();

    }
}
    public function rules()
{
    return[
        'content' => 'requered|min:1|max:4096'

    ];
}
public function validated()
{
    $data = $this->valdator->validated();

     $data ['chat_room_id'] = $this->route('chatRoom')->id;

    return $data;
}
}