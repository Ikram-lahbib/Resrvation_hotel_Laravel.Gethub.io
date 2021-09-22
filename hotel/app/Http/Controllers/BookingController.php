<?php

namespace App\Http\Controllers;
use App\Room;
use App\Book;
use Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms=Room::all();
        $books=Book::all();
        // return view("booking",[$rooms=>Room::all()]);
        if(Auth::user())
            if(Auth::user()->is_admin)
                return view("admin.booking.booked",compact('books'));
            else
                return view("booking",compact('rooms'));
        else
            return view('users.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'datedebut'=>'required|date',
            'datefin'=>'required|date',
            'room_id'=>'required'
        ]);
        $book =new Book();
        $book->date_in=$request->datedebut;
        $book->date_out=$request->datefin;
        $book->room_id=$request->room_id;
        $book->user_id=Auth::user()->id;
        $book->save();
        $room=Room::findOrFail($request->room_id);
        $room->desponible=1;
        $room->update();
        return redirect('/booking')->with(['success'=>"Room is Booked"]);
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
        $book = Book::findOrFail($id);
        $room = Room::findOrFail($book->room_id);
        $book->delete();
        $room->desponible=0;
        $room->update();
        return redirect('/booking')->with(['success'=>'Book is cansled']);
    }
}
