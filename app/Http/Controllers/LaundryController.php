<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $rows = Laundry::all();
        return view('laundry.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laundry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lan_kode' => 'bail|required|unique:tb_laundry',
            'lan_nama' => 'required'
            ],
            [
                'lan_kode.required' => 'KODE wajib diisi',
                'lan_kode.unique' => 'KODE sudah ada',
                'lan_nama.required' => 'Nama wajib diisi'
            ]);
            
            Laundry::create([
                'lan_kode' => $request->lan_kode,
                'lan_nama' => $request->lan_nama
                ]);
                
                return redirect('laundry');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Laundry::findOrFail($id);
        return view('laundry.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
            'lan_kode' => 'bail|required',
            'lan_nama' => 'required'
            ],
            [
            'lan_kode.required' => 'KODE wajib diisi',
            'lan_nama.required' => 'NAMA wajib diisi'
            ]
            );
            
            $row = Laundry::findOrFail($id);
            $row->update([
            'lan_kode' => $request->lan_kode,
            'lan_nama' => $request->lan_nama,
            ]);
            
            return redirect('laundry');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Laundry::findOrFail($id);
        $row->delete();

        return redirect('laundry');
    }
}
