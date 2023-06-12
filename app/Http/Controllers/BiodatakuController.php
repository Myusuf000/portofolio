<?php

namespace App\Http\Controllers;

use App\Models\Biodataku;
use Illuminate\Http\Request;

class BiodatakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $biodatakus=Biodataku::all();
        $title = 'Biodata Diri';
        return view('biodata.index',compact('biodatakus','title'));
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
            'nama' => ['required', 'max:255'],
            'wa' => ['required']
        ]);
        $data['alamat'] = $request->alamat;
        $data['ig'] = $request->ig;
        $data['github'] = $request->github;
        Biodataku::create($data);

        // Alert::success('Berhasil', 'Data pendidikan berhasil ditambahkan');
        return redirect()->route('biodataku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biodataku  $biodataku
     * @return \Illuminate\Http\Response
     */
    public function show(Biodataku $biodataku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biodataku  $biodataku
     * @return \Illuminate\Http\Response
     */
    public function edit(Biodataku $biodataku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biodataku  $biodataku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biodataku $biodataku)
    {
        //
        $biodataku->update([
            'nama' => $request->nama,
            'wa' =>  $request->wa,
            'alamat' => $request->alamat,
            'ig' => $request->ig,
            'github' => $request->github,
        ]);

        return redirect()->route('biodataku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biodataku  $biodataku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biodataku $biodataku)
    {
        //
        $biodataku->delete();

        return redirect()->route('biodataku.index');
    }
}
