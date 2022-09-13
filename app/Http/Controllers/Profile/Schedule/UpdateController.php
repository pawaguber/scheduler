<?php

namespace App\Http\Controllers\Profile\Schedule;

use App\Http\Controllers\Controller;
use App\Http\Requests\Schedule\UpdateRequest;
use App\Models\Schedule;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Schedule $schedule, UpdateRequest $request)
    {
        $data = $request->validated();
        $schedule->update($data);

        return redirect('/profile');
    }
}
