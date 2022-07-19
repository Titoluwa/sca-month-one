<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReservationController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Reservation::create($this->validateRequest());
        return back()->with('message',"New Reservation Added!");
    }
    private function validateRequest()
    {
        return request()->validate([
            'name'=> 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|digits_between:9,16',
            'no_of_guests' => 'required|integer',
            'date' => 'required|date',
            'type_of_menu' => 'required|string',
            'description' =>'string',
        ]);
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $reserved = Reservation::where('id', $id)->first();
        return view('edit', compact('reserved'));
    }

    public function update(Request $request)
    {
        $reserve = Reservation::where('id', $request->id)->first();
        $reserve->name = $request->name;
        $reserve->email = $request->email;
        $reserve->phone_number = $request->phone_number;
        $reserve->no_of_guests = $request->no_of_guests;
        $reserve->type_of_menu = $request->type_of_menu;
        $reserve->date = $request->date;
        $reserve->description = $request->description;
        $reserve->update();
        return redirect('/index')->with('message',"$request->name reservation has been updated!");
    }

    public function destroy($id)
    {
        $reserve = Reservation::findOrFail($id);
        $reserve->delete();
        return redirect('/index')->with('message',"Reservation has been Deleted!");
    }
}
