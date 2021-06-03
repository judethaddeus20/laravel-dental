<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use DateTime;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function schedule()
    {
      $carbonToday = \Carbon\Carbon::now();
      $dateToday = Carbon::parse($carbonToday)->format('Y-m-d\TH:i');
      $maxDate = Carbon::parse($dateToday)->addDays(7);
        return view('schedule',compact('maxDate'));
    }
    public function services()
    {
        return view('services');
    }
    public function store(Request $request)
    {
      $carbonToday = \Carbon\Carbon::now();
      $dateToday = Carbon::parse($carbonToday)->format('Y-m-d\TH:i');
      $maxDate = Carbon::parse($dateToday)->addDays(7);
      try{
        $request->validate([
          'status' => 'required','in:New Patient,Old Patient',
          'service' => 'required','in:Root Canal Treatment,Cosmetic Dentist,Dental Implants',
          'email' => 'required','string', 'email', 'max:255',
          'number' => 'required', 'numeric','digits:11',
          'first_name' => 'required','string',
          'last_name' => 'required','string',
          'number' => 'required', 'numeric','digits:11',
          'dateTime' => 'required|after:'.$dateToday,'unique:schedules','exists:schedules',
        ]);
        $schedule = new Schedule();
        $schedule['confirmation'] = 0;
        $schedule['customer_id'] = rand(0,1000);
        $schedule['customer_name'] = $request->first_name.' '.$request->last_name;
        $schedule['patient_status'] = $request->status;
        $schedule['email'] = $request->email;
        $schedule['contact_number'] = $request->number;
        $schedule['service'] = $request->service;
        $schedule['dateTime'] = $request->dateTime;
        $schedule->save();
        return redirect()->back();

      }catch(Exception $e){
        dd($e);
        return redirect()->back();
      }
    }




}
