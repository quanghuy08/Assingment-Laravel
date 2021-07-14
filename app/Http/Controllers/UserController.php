<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList()
    {
        return view('UserList');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userForm()
    {
        return view('UserForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'identityNumber' => 'required|size:10',
                'firstname' => 'required',
                'lastname' => 'required',
                'phone' => 'required'
            ],
            [
                'identityNumber.required' => '* Please enter identity number.',
                'identityNumber.size' => '* Must be 10 character.',
                'firstname.required' => '* Please enter first name.',
                'lastname.required' => '* Please enter last name.',
                'phone.required' => '* Please enter phone.',
            ]
        );
        $request->$this->validate();
        $obj = new account();
        $obj->identityNumber = $request->get('identityNumber');
        $obj->firstname = $request->get('firstname');
        $obj->lastname = $request->get('lastname');
        $obj->phone = $request->get('phone');
        $obj->save();
        return redirect('UserForm');
    }
}
