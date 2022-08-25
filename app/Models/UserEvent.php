<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'event_id'
    ];

    protected function getUsersToEmail()
    {
        $nextEvents = DB::table('events')->where('date',date('Y-m-d h:i:s', strtotime('tomorrow')->value('id')));
        $userEvents = DB::table('user_events');
        $users = DB::table('users');

        $userIds = [];

        foreach ($nextEvents as $event) {
            foreach ($userEvents as $entry) {
                if ($event->id == $entry->event_id) {
                    array_push($userIds, $entry->user_id);
                }
            }
        }

        $userEmails = [];
        foreach ($users as $user) {
            if (in_array($userIds, $user->user_id)){
                array_push($user->email);
            }

        }
        return view('MyTestMail', ['userEmails'=>$userEmails]);
    }

    }

