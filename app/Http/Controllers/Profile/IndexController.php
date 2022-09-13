<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $today_schedulers =
            Schedule::where('user_id', Auth::user()->id)->
            whereDate('date', Carbon::today())
                ->get();
        $future_schedulers =
            Schedule::where('user_id', Auth::user()->id)
                ->whereDate('date', '!=', Carbon::today())
                ->orderBy('date', 'ASC')
                ->whereDate('date', '>', Carbon::today())
                ->get();

        return view('profile.index', compact('future_schedulers', 'today_schedulers'));
    }
}
