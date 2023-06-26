<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::with('kategori')->get();
        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        // proses validasi
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'descraption' => 'required',
            'price' => 'required',
            'category_id' => 'required|min:5',
        ]);

        if ($validate->fails()) {
            return $validate->errors();
        }

        // proses simpan data
        $data = Category::create($request->all());
        return response()->json([
            'pesan' => 'Data berhasil disimpan',
            'data' => $data
        ], 201);
    }

    public function show($id)
    {
        $data = Category::where('id', $id)->first();
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data tidak ditemukan',
                'data' => $data
            ], 404);
        }

        return response()->json([
            'pesan' => 'Data ditemukan',
            'data' => $data
        ], 200);
    }



    public function update(Request $request, $id)
    {
        $data = Category::where('id', $id)->first();

        // cek data dengan id yg dikirimkan
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data tidak ditemukan',
                'data' => $data
            ], 404);
        }

        // proses validasi
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'descraption' => 'required',
            'price' => 'required',
            'category_id' => 'required|min:5',
        ]);

        if ($validate->fails()) {
            return $validate->errors();
        }

        // proses simpan perubahan data
        $data->update($request->all());

        return response()->json([
            'pesan' => 'Data berhasil di update',
            'data' => $data
        ], 201);
    }

    public function delete($id)
    {
        $data = Category::where('id', $id)->first();
        // cek data dengan id yg dikirimkan
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data tidak ditemukan',
                'data' => $data
            ], 404);
        }

        $data->delete();

        return response()->json([
            'pesan' => 'Data berhasil di hapus',
            'data' => $data
        ], 200);
    }
}
