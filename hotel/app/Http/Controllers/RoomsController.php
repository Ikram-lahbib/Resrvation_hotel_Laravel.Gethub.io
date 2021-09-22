<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Book;
use App\User;
use App\Hotel;
class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms=Room::all();
        return view('admin.rooms.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels=Hotel::all();
        return view('admin.rooms.add',compact('hotels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'number' => 'required',
            'floor' => 'required',
            'desponible' => 'required',
            'hotel' => 'required',

        ]);
        $room = new Room();
        $room->number=$request->number;
        $room->floor=$request->floor;
        $room->desponible=$request->desponible;
        $room->id_hotel=$request->hotel;
        $room->save();
        //Room::create(['number'=>$request->number,'floor'=>$request->floor,'desponible'=>$request->desponible])
        return redirect('/room')->with(['sucesse'=>'Room is added']);
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
        $rooms=Room::findOrFail($id);
        $hotels=Hotel::all();
        return view('admin.rooms.edit',compact('rooms','hotels'));
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

        $this->validate($request,[
            'number' => 'required',
            'floor' => 'required',
            'desponible' => 'required',
            'hotel' => 'required',

        ]);
        $room =Room::findOrFail($id);
        $room->number=$request->number;
        $room->floor=$request->floor;
        $room->desponible=$request->desponible;
        $room->id_hotel=$request->hotel;
        $room->update();
        //Room::update(['number'=>$request->number,'floor'=>$request->floor,'desponible'=>$request->desponible])
        return redirect('/room')->with(['sucesse'=>'Room is Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return redirect('/admin')->with(['sucesse'=>'Room is Deleted']);
    }
    public function admin(Request $request){
        $rooms=Room::all();
        $books=Book::all();
        $users=User::all();
        $hotels=Hotel::all();
        return view('admin.adminSpace',compact('rooms','books','users','hotels'));
    }
    public function desactivate($id)
    {
          $room = Room::findOrFail($id);
          $room->is_deleted=1;
          $room->update();
          return redirect('/room')->with(['sucesse'=>'Room is Desactivated']);
    }
}
