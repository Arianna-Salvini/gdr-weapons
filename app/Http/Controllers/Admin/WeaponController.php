<?php

namespace App\Http\Controllers\Admin;

use App\Models\Weapon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Requests\StoreWeaponRequest;
use App\Http\Requests\UpdateWeaponRequest;



class WeaponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $weapons = Weapon::all();
        return view('admin.weapons.index', ['weapons' => Weapon::orderByDesc('id')->paginate(20)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.weapons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWeaponRequest $request)
    {
        //dd($request);
        $val_data = $request->validated();

        $slug = Str::slug($request->name);

        $val_data['slug'] = $slug;

        Weapon::create($val_data);

        return to_route('admin.weapons.index')->with('message', "Hai creato un nuovo progetto, congratulazioni");
    }

    /**
     * Display the specified resource.
     */
    public function show(Weapon $weapon)
    {
        return view('admin.weapons.show', compact('weapon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Weapon $weapon)
    {
        return view('admin.weapons.edit', compact('weapon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWeaponRequest $request, Weapon $weapon)
    {
        $val_data = $request->validated();

        $slug = Str::slug($request->name);

        $val_data['slug'] = $slug;

        $weapon->update($val_data);

        return to_route('admin.weapons.index')->with('message', "Hai modificato l'arma con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weapon $weapon)
    {
        $weapon->delete();

        return to_route('admin.weapons.index');
    }
}
