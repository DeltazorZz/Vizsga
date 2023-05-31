<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class KategoriaController extends Controller
{
    public function index()
    {
        $kategoriak = Kategoria::all();
        return $kategoriak;
    }
    public function show($id)
    {
        $kategoria = Kategoria::all($id);
        return $kategoria;
    }
    public function destroy($id)
    {
        Kategoria::find($id)->delete();
    }

    public function store(Request $request)
    {
        $kategoria = new Kategoria();
        $kategoria->kategorianev = $request->kategorianev;
        $kategoria->save();
    }

    public function update(Request $request, $id)
    {
        $kategoria = new Kategoria($id);
        $kategoria->kategorianev = $request->kategorianev;
        $kategoria->save();
    }
   
   
    public function tesztkateg()
    {
            $tesztkateg = DB::select("select * from teszts t, kategorias k where t.kategoriaId = k.kateg_id");
            return $tesztkateg;
    }
}
