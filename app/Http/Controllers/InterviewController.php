<?php

namespace App\Http\Controllers;

use App\Interview;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Calendar;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = [];
        $nterviews = Interview::get();

        if ($nterviews->count()) {
            foreach ($nterviews as $key => $nterview) {
                $events[] = Calendar::event(
                    $nterview->name,
                    true,
                    new \DateTime($nterview->from),
                    new \DateTime($nterview->to),
                    null,
                    [
                        'color' => '#ff0000',
                        'url' => route('interviews.edit', ['interview' => $nterview->id]),
                    ]
                );
            }
        }

        $calendar = \Calendar::addEvents($events);

        return view('interviews.index', compact('calendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function show(Interview $interview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function edit(Interview $interview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interview $interview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interview $interview)
    {
        //
    }
}
