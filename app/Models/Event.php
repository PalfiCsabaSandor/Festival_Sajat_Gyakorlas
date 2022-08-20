<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Event extends Model
{
    use HasFactory;


    public function festival()
    {
        return $this->belongsTo(Festival::class);
    }

    public function isUserSubscribed()
    {
        $user = Auth::user();
        if (!$user) {
            return false;
        }

        $userEvent = UserEvent::where('user_id','=',$user->id)->where('event_id', '=', $this->id)->first();
        return !!$userEvent;
    }
}


