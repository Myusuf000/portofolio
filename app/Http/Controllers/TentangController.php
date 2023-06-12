<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tentangs=Tentang::all();
        $title = 'Deskripsi';
        return view('deskripsi.index',compact('tentangs','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'tentang1' => ['required' , 'max:255'],
            'tentang2' => ['required']
        ]);
        Tentang::create($data);
        return redirect()->route('tentang.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function show(Tentang $tentang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function edit(Tentang $tentang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tentang $tentang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tentang $tentang)
    {
        //
        $tentang->delete();

        return redirect()->route('tentang.index');
    }
}
