<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels=Hotel::all();
        return view('admin.hotel.hotel',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hotel.add');
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
            'image' => 'required',
            'room' => 'required',
            'name' => 'required',
            'city' => 'required',

        ]);
        
        // $file=$request->image;
        // $name=time().'-'.$file->getClientOriginalName();
        // $file->move(public_path().'/images/'.$name);
        // $hotel = new Hotel();
        // $hotel->image=$name;
        $hotel->image=$request->image;
        $hotel->name=$request->name;
        $hotel->room=$request->room;
        $hotel->city=$request->city;
        $hotel->save();
        //Room::create(['number'=>$request->number,'floor'=>$request->floor,'desponible'=>$request->desponible])
        return redirect('/hotel')->with(['sucesse'=>'Hotel is added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel=Hotel::findOrFail($id);
        return view('admin.hotel.show',compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel=Hotel::findOrFail($id);
        return view('admin.hotel.edit',compact('hotel'));
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
            'image' => 'required',
            'room' => 'required',
            'name' => 'required',
            'city' => 'required',

        ]);
        $hotel =Hotel::findOrFail($id);
        $hotel->image=$request->image;
        $hotel->name=$request->name;
        $hotel->room=$request->room;
        $hotel->city=$request->city;
        $hotel->update();
        //Room::create(['number'=>$request->number,'floor'=>$request->floor,'desponible'=>$request->desponible])
        return redirect('/hotel')->with(['sucesse'=>'Hotel is updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel =Hotel::findOrFail($id);
        $hotel->delete();
        return redirect('/hotel')->with(['sucesse'=>'Hotel is deleted']);
    }
    public function listhotel()
    {
        $hotels=Hotel::all();
        return view('admin.hotel.listhotel',compact('hotels'));
    }
    public function search(Request $request)
    {
        $hotels=Hotel::where('name',$request->hotel)->get();
        return view('admin.hotel.search',compact('hotels'));
    }
}
