<?php

// namespace App\Http\Controllers;

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;



class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::all();
        return response()->json($data, 200);
    }

    public function show($id)
    {
        $data = Customer::where('id', '$id')->first();
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data Tidak Ada',
                'data' => null
            ], 404);
        }
        return response()->json([
            'pesan' => 'data ditemukan',
            'data' => $data
        ], 200);
    }
}
