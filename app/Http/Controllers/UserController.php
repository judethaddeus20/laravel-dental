<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = User::all();
        $user = auth()->user();
        if($user->role == "admin"){
          return view('users.index',compact('user','data'));
        }else{
          return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = new User();
      $user['name'] = $request->name;
      $user['age'] = $request->age;
      $user['email'] = $request->email;
      $user['number'] = $request->number;
      $user['location'] = $request->location;
      $user['role'] = $request->role;
      $user['password'] = bcrypt($request->password);
      $user->save();
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = User::findOrFail($id);
      return view('users.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::findOrFail($id);
      return view('users.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $user = User::findOrFail($id);
      $user['name'] = $request->name;
      $user['age'] = $request->age;
      $user['email'] = $request->email;
      $user['location'] = $request->location;
      $user['number'] = $request->number;
      $user['role'] = $request->role;
      $user->save();
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::findOrFail($id);

      $user->delete();

      return redirect()->route('users.index');
    }
}
