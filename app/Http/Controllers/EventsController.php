<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\Event;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Date;

class EventsController extends BaseController
{
    public function getEventsWithWorkshops() {
        return Event::with('workshops')->get();
    }

    public function getFutureEventsWithWorkshops() {
        return Event::whereHas('workshops', function($w){
            return $w->where('start', '>', Carbon::now());
        })->get();
    }
}
