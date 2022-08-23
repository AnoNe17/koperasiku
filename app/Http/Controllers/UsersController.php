<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Fitur;
use App\Models\Keunggulan;
use App\Models\Keuntungan;
use App\Models\Popular;
use App\Models\User;
use Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function register()
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'no_ktp'    => 'required',
            'email'     => 'required',
            'no_hp'     => 'required|max:15',
            'pin'       => 'required|min:6|max:6',
        ]);

        if ($validator->fails()) {
            return back()->with('failed', 'Pin terdiri 6 angka');
        }

        if ($request->pin === $request->konfir_pin) {
            $data = new User();
            $data->no_ktp = $request->no_ktp;
            $data->email = $request->email;
            $data->no_hp = $request->no_hp;
            $data->pin = $request->pin;
            if ($data->save()) {
                return back()->with('success', 'Data Berhasil di Input');
            } else {
                return back()->with('failed', 'Data Gagal di Input');
            }
        } else {
            return back()->with('failed', 'PIN yang dimasukan tidak sama');
        }
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
