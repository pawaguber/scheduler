<?php

namespace App\Http\Controllers\Profile\Schedule;

use App\Http\Controllers\Controller;
use App\Http\Requests\Schedule\StoreRequest;
use App\Models\Schedule;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;
        Schedule::create($data);

        return redirect('/profile');
    }
}
