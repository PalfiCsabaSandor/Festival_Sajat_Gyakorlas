<?php

namespace App\Console\Commands;

use App\Models\Event;
use App\Models\Festival;
use App\Models\User;
use DateTime;
use App\Models\UserEvent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use function Sodium\add;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $now = date('Y-m-d');
        $tomorrow = date('Y-m-d', strtotime('+2 days'));
        $events = Event::where('start_time', '>=', $now)->where('start_time','<=',$tomorrow ) ->get();
        $users = User::all();
        $festivals = Festival::all();
        $userevents = UserEvent::all();

        $details = [
            'title' => 'Mail from SummerPlanner',
            'body' => "You have new concerts coming up in your event list"

        ];

        foreach ($events as $event) {
            Log::alert($event->name);
            foreach ($userevents as $userevent){

                if ($event->id == $userevent->event_id){
                    $id = $userevent->user_id;
                    $user = $users->where('id','=', $id)->first();
                    $email = $user->email;
                    $festival = $event->festival_id;
                    $fest_id = $festivals->where('id','=',$festival)->first()->name;


                    $details['event_name'] = $event->name;
                    $details['picture'] = $event->picture;
                    $details['artist'] = $event->artist_name;
                    $details['start_time'] = $event->start_time;
                    $details['latitude'] = $event->latitude;
                    $details['longitude'] = $event->longitude;
                    $details['fest_id'] = $fest_id;
                    Log::alert($details);
                    Mail::to($email)->send(new \App\Mail\MyTestMail($details));

                }
            }
        }


  }
}
