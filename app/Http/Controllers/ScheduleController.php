<?php

namespace App\Http\Controllers;


use App\Models\Schedule;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function approvedSchedule() {
        $schedules = Schedule::all()->where('confirmation','==',1);
        return $schedules->count();
    }
    public function index()
    {
      $schedules = Schedule::all();
      return view('schedules.index')->with('schedules',$schedules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedules.create');
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
        $schedule = new Schedule();
        $schedule['customer_id'] = rand(1,1000);
        $schedule['customer_name'] = $request->name;
        $schedule['patient_status'] = $request->status;
        $schedule['email'] = $request->email;
        $schedule['contact_number'] = $request->number;
        $schedule['dateTime'] = $request->dateTime;
        $schedule->save();
        return redirect()->route('schedules.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        $schedule = Schedule::findOrFail($schedule->id);
        return view('schedules.show')->with('schedule',$schedule);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
      $schedule = Schedule::findOrFail($schedule->id);
      $schedule->dateTime = Carbon::parse($schedule->dateTime)->format('Y-m-d\TH:i');
      return view('schedules.edit')->with('schedule',$schedule);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
      $schedule = Schedule::findOrFail($schedule->id);
      $schedule['customer_name'] = $request->name;
      $schedule['patient_status'] = $request->status;
      $schedule['service'] = $request->service;
      $schedule['email'] = $request->email;
      $schedule['contact_number'] = $request->number;
      $schedule['dateTime'] = $request->dateTime;
      $schedule->save();
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
      $schedule = Schedule::findOrFail($schedule->id);
      $schedule->delete();
      return redirect()->route('schedules.index');
    }

    public function approve(Schedule $schedule)
    {
      $schedule = Schedule::findOrFail($schedule->id);
      DB::table('schedules')->where('id', $schedule->id)->update(['confirmation' => 1]);
      return redirect()->back();
    }

    public function decline(Schedule $schedule)
    {
      $schedule = Schedule::findOrFail($schedule->id);
      DB::table('schedules')->where('id', $schedule->id)->update(['confirmation' => 2]);
      return redirect()->back();
    }
}
