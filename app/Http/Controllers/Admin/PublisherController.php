<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\PhoneNumber;
use App\PublisherInfo;
use App\Address;
use Illuminate\Support\Facades\Hash;


class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $users = Role::where('name', 'publisher')->first()->users;
       // dd($users);
       return view('admin.publisher.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      if ($request->User()->isAdmin('admin')) {
          $users = User::paginate(15);
          return view('admin.publisher.create', compact('users'));
        } 
          elseif ($request->User()->isModerator('moderator')) {
          $users = User::paginate(15);
          return view('admin.publisher.create', compact('users'));
        } else {
           return redirect('/');
          }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {

     $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required|confirmed',
        // 'contact_person' => 'required',
        'contact_person' => 'required',
        'publisher_name' => 'required',
        'number'=> 'required',
        'opening_time'=> 'required',
        'closing_time'=> 'required',
        'street_1'=> 'required',
        'street_2' => 'required',
        'state' => 'required',
        'country_name'=> 'required',

    ]);

    $data = $request->only('name','email','password');
    // dd($data);
     $user = User::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "password" => bcrypt($data['password']),
        ]);
     // dd($user);
        $user_id = $user->id;  
        // dd($user_id);
    $details = $request->only('contact_person','publisher_name','opening_time', 'closing_time');
          // dd($details);

      PublisherInfo::create([
            "user_id" => $user_id,
            "contact_person" => $details['contact_person'],
            "publisher_name" => $details['publisher_name'],
            "opening_time" =>  $details['opening_time'],
            "closing_time" => $details['closing_time'],
        ]);
      // dd($details);

    $addresses = $request->only('street_1','street_2','state', 'country_name');
      Address::create([
            "user_id" => $user_id,
            "street_1" => $addresses['street_1'],
            "street_2" => $addresses['street_2'],
            "state" =>  $addresses['state'],
            "country_name" => $addresses['country_name'],
        ]);

    $numbers = $request->only('number');
      PhoneNumber::create([
             "user_id" => $user_id,
             "number" => $numbers['number'],
        ]); 
        $role = Role::where('name', 'publisher')->first();
        $user->save();
        $user->roles()->attach($role);
        return redirect()->route('publisher.index');




    
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.publisher.edit', compact('id'));
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
         $user = User::find($id); 
         $user->update($request->all());

        return redirect()->route('publisher.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $User = User::find($id);
      $User->delete();
       return redirect()->route('publisher.index');
    }
}
