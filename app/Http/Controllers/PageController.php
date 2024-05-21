<?php

namespace App\Http\Controllers;
use App\Models\Weapon;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        $weapons = Weapon::all();
        return view('guests.weapons.index', compact('weapons'));
    }

    public function show(Weapon $weapon)
    {
        return view('guests.weapons.show', compact('weapon'));
    }


}
