<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teszt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesztController extends Controller
{
    public function index()
    {
        $tesztek = Teszt::all();
        return $tesztek;
    }
    public function show($id)
    {
        $teszt = Teszt::all($id);
        return $teszt;
    }
    public function destroy($id)
    {
        Teszt::find($id)->delete();
    }

    public function store(Request $request)
    {
        $teszt = new Teszt();
        $teszt->kerdes = $request->kerdes;
        $teszt->v1= $request->v1;
        $teszt->v2 = $request->v2;
        $teszt->v3 = $request->v3;
        $teszt->v4 = $request->v4;
        $teszt->helyes = $request-> helyes;
        $teszt->kategoriaId = $request-> kategoriaId;
        $teszt->save();
    }

    public function update(Request $request, $id)
    {
        $teszt = new Teszt($id);
        $teszt->kerdes = $request->kerdes;
        $teszt->v1= $request->v1;
        $teszt->v2 = $request->v2;
        $teszt->v3 = $request->v3;
        $teszt->v4 = $request->v4;
        $teszt->helyes = $request-> helyes;
        $teszt->kategoriaId = $request-> kategoriaId;
        $teszt->save();
    }
}
