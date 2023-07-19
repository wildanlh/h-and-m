<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use PDF;
use Storage;

class ProdukController extends Controller
{

    public function viewPDF()
    {
        $produk = Produk::latest()->get();

        $data = [
            'title' => 'Data Produk',
            'date' => date('m/d/Y'),
            'produk' => $produk,
        ];

        $pdf = PDF::loadView('produk.export-pdf', $data)
            ->setPaper('a2', 'landscape');
        return $pdf->stream();
    }

    public function index()
    {
        $produk = Produk::latest()->paginate(5);
        return view('produk.index', compact('produk'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'shirt_size' => 'required',
            'shirt_color' => 'required',
            'shirt_type' => 'required',
            'shirt_pattern' => 'required',
            'price' => 'required',
            'quantity' => 'required|min:1',
        ]);

        $produk = new Produk();
        $produk->first_name = $request->first_name;
        $produk->last_name = $request->last_name;
        $produk->age = $request->age;
        $produk->email = $request->email;
        $produk->phone = $request->phone;
        $produk->address = $request->address;
        $produk->city = $request->city;
        $produk->country = $request->country;
        $produk->shirt_size = $request->shirt_size;
        $produk->shirt_color = $request->shirt_color;
        $produk->shirt_type = $request->shirt_type;
        $produk->shirt_pattern = $request->shirt_pattern;
        $produk->price = $request->price;
        $produk->quantity = $request->quantity;
        $produk->save();
        return redirect()->route('produk.index');
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'shirt_size' => 'required',
            'shirt_color' => 'required',
            'shirt_type' => 'required',
            'shirt_pattern' => 'required',
            'price' => 'required',
            'quantity' => 'required|min:1',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->first_name = $request->first_name;
        $produk->last_name = $request->last_name;
        $produk->age = $request->age;
        $produk->email = $request->email;
        $produk->phone = $request->phone;
        $produk->address = $request->address;
        $produk->city = $request->city;
        $produk->country = $request->country;
        $produk->shirt_size = $request->shirt_size;
        $produk->shirt_color = $request->shirt_color;
        $produk->shirt_type = $request->shirt_type;
        $produk->shirt_pattern = $request->shirt_pattern;
        $produk->price = $request->price;
        $produk->quantity = $request->quantity;
        $produk->save();
        return redirect()->route('produk.index');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        Storage::delete('public/produks/' . $produk->image);
        $produk->delete();
        return redirect()->route('produk.index');
    }
}
