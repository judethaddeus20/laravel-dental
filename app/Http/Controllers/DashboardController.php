<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Schedule;

class DashboardController extends Controller
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

      $users = User::all();
      $schedules = Schedule::all();
      $route = 'Dashboard';
      return view('dashboard.index',compact('route','users','schedules'));
    }
    public function profile()
    {
      $user = auth()->user();
      $user->created_at->timezone('Asia/Hong_Kong')->format('H:i');
      $route = 'Profile';
      return view('dashboard.profile',compact('user','route'));
    }

}
