<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Room;
use App\Book;
use Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::where('is_admin','=','0')->get();
        return view('admin.client.clients',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // request all
        // print_r($request->all());
        $this->validate($request,[
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'zipcode' => 'required|min:3',
            'city' => 'required|min:3',
            'email'=>'required|email',
            'password'=>'required|min:6',

        ]);

        $user = new User();
        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->adress=$request->adress;
        $user->zipcode=$request->zipcode;
        $user->city=$request->city;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);

        $user->save();
        return redirect('/register')->with(['success'=>'Compte create it with success']);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =User::findOrFail($id);
        if (count($user->booking) > 0) {
            for ($i=0; $i <$user->booking ; $i++) { 
                Room::findOrFail($user->booking[$i]['room_id'])->update(['desponible'=>0]);
            }
        }
        $user->booking()->delete();
        $user->delete();
        return redirect('/listClient')->with(['success'=>"Client is deleted"]);
    }

    public function login(){
        return view('users.login');
    }
    public function auth(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6',

        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/index');
        }
        else{
            return redirect()->back()->with(['fail'=>'Email or Password not Correct']);
        }

    }
    public function logout(){
        Auth::logout();
        return redirect('/index');
    }
    // public function admin(Request $request){
    //     return view('admin.rooms.index');
    // }
    public function profil(){
        return view('users.profile');
    }

    
}
