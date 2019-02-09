<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // $this->validate(request(),[

           'name' => 'required',

           'email' => 'required|email',

           'password' => 'required|confirmed',


        // ]);

        // $user = new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $role = Role::find($request->roles);
        // $user->save();
        //  $role->users()->attach($user);  
        // ];
    }
}
