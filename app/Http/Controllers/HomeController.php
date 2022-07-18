<?php

namespace App\Http\Controllers;

use App\User;
use App\Reservation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        $user = User::first();
        return view('welcome', compact('user'));
    }

    public function index()
    {
        $user = User::first();
        $reservation = Reservation::orderBy('date', 'asc')->get();
        return view('index', compact('user', 'reservation'));
    }
}
