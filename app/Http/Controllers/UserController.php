<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            $users = User::select('id', 'name', 'email', 'phone')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //according to instructions, this function creates and stores user details
    public function store(Request $request)
    {
        $name = $request->get('username');
        $email = $request->get('useremail');
        $phone = $request->get('usercontact');

        // return $request->input();

        $userdata = new User();
        $userdata->name = $name;
        $userdata->email = $email;
        $userdata->phone = $phone;
        $userdata->save();
        return redirect('/');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $userDetails = User::all();
        return view('user', ['data'=> $userDetails]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      
        // $user = User::whereId($id)->first();

        // if(!$user){
        //     return back()->with('error', 'User not found');
        // }
        // return view('users.edit')->with([
        //     'user' => $user
        // ]);
    
    }

    function updateordelete(Request $request){
        $id = $request->get('id');
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('contact');

        if($request->get('update') == 'Update'){
            return view('editUser', ['id'=>$id, 'name'=> $name, 'email'=>$email, 'phone'=>$phone]);
        }
        else{
           $userr = User::find($id);
           $userr->delete();
        }
        return redirect('/');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function update(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');

        $user = User::find($id);
        $user->name = $name;
        $user->email = $email;
        $user->phone = $phone;
        $user->save();
        return redirect('/');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
