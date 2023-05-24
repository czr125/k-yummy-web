<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reservation;
use App\Models\User;

class ReservationController extends Controller
{
    public function index(){
        $reservations = Reservation::all();

        return view('reservation',['reservations' => $reservations]);
    
    }

    public function create(){
        return view('reservations.create');
    }

    public function store(Request $request){

        $reservation = new Reservation;

        $reservation->name = $request->name;
        $reservation->date = $request->date;
        $reservation->hour = $request->hour;
        $reservation->number_table = $request->number_table;
        $reservation->number_of_people = $request->number_of_people;

    $user = auth()->user();
    $reservation->user_id = $user->id;

    $reservation->save();
        
    return redirect('/reservations')->with('msg','Reservation created sucessfully !' );

    

    }

    

    public function show($id){
        
        $reservation = Reservation::findOrFail($id);

        $reservationOwner = User::where('id', $reservation->user_id)->first()->toArray();

        return view('reservations.show', ['reservation' => $reservation, 'reservationOwner' => $reservationOwner]);

    }

    public function dashboard(){

        $user = auth()->user();

        $reservations = $user->reservations;

        return view('reservations.dashboard', ['reservations' => $reservations]);

    }

    public function destroy($id) {
        Reservation::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Reservation canceled with sucess !');
    }

    public function edit($id){
        
        $reservation = Reservation::findOrFail($id);

        return view('reservations.edit', ['reservation' => $reservation]);
    }

    public function update(Request $request) {

        Reservation::findOrFail($request->id)->update($request->all());
        
        return redirect('/dashboard')->with('msg', 'Reservation updated with success!');
    }
}

