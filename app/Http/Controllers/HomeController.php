<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Fitur;
use App\Models\Keunggulan;
use App\Models\Keuntungan;
use App\Models\Popular;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Content::first();
        $popular_bisnis = Popular::all();
        $fitur_koperasi = Fitur::all();
        $keuntungan_koperasi = Keuntungan::all();
        $keunggulan_koperasi = Keunggulan::all();

        if ($content != null) {
            return view('home.index', [
                'content' => $content,
                'popular_bisnis' => $popular_bisnis,
                'fitur_koperasi' => $fitur_koperasi,
                'keuntungan_koperasi' => $keuntungan_koperasi,
                'keunggulan_koperasi' => $keunggulan_koperasi,
            ]);
        } else {
            return view('content.create');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
