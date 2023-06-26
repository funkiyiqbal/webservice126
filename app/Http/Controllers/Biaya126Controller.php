<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Biaya126;
use Illuminate\Http\Request;


class Biaya126Controller extends Controller
{
    public function index()
    {
        $biaya126s = Biaya126::all();
        return view('Menu.index', compact('biaya126s'));
    }

    public function add()
    {
        return view('Menu.add');
    }

    public function simpan(Request $request)
    {
        Biaya126::create($request->all());
        return redirect('index');
    }
}
