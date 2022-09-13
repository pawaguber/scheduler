<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $today_scheldulers =
            Schedule::whereDate('created_at', Carbon::today())
            ->get();
        $future_scheldulers =
            Schedule::where('user_id', Auth::user()->id)
            ->whereDate('created_at', '!=', Carbon::today())
            ->orderBy('created_at', 'ASC')
            ->whereDate('created_at', '>', Carbon::today())
            ->get();

        return view('home', compact('future_scheldulers', 'today_scheldulers'));
    }
}
