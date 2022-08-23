<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Fitur;
use App\Models\Keunggulan;
use App\Models\Keuntungan;
use App\Models\Popular;
use Illuminate\Http\Request;
use Validator;

class ContentController extends Controller
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
        $content = Content::first();

        if ($content = null) {
            $content->nama = "Koperasiku";
            $content->logo = "asd";
        }

        return view('content.create', [
            'content' => $content,
        ]);
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
        // $ext_logo = $request->logo->extension();
        // return $ext_logo;
        $validator = Validator::make($request->all(), [
            'nama'                  => 'required',
            'alamat'                => 'required',
            'email'                 => 'required',
            'no_telp'               => 'required',
            'instagram'             => 'required',
            'facebook'              => 'required',
            'twitter'               => 'required',
            'youtube'               => 'required',
            'logo'                  => 'required',
            'tittle_1'              => 'required',
            'content_1'             => 'required',
            'content_about'         => 'required',
            // 'name_bisnis'           => 'required',
            // 'logo_bisnis'           => 'required',
            // 'tittle_fitur'          => 'required',
            // 'content_fitur'         => 'required',
            // 'tittle_keunggulan'     => 'required',
            // 'content_keunggulan'    => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('failed', 'Data Gagal di Input');
        }

        $ext_logo = $request->logo->extension();
        if ($ext_logo == 'jpeg' || $ext_logo == 'png' || $ext_logo == 'jpg') {
            $logoName = rand() . '.' . $ext_logo;
            $request->logo->move(public_path('assets_landing/logo'), $logoName);
        } else {
            return back()->with('failed', 'Harap periksa logo anda');
        }

        $data = new Content();
        $data->nama = $request->nama;
        $data->logo = $logoName;
        $data->tittle = $request->tittle_1;
        $data->content = $request->content_1;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->no_telp = $request->no_telp;
        $data->content_about = $request->content_about;
        $data->instagram = $request->instagram;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->youtube = $request->youtube;

        if ($data->save()) {

            for ($i = 1; $i <= 8; $i++) {
                $ext_logo_bisnis[$i] = $request->logo_bisnis[$i]->extension();
                if ($ext_logo_bisnis[$i] == 'jpeg' || $ext_logo_bisnis[$i] == 'png' || $ext_logo_bisnis[$i] == 'jpg') {
                    $logoBisnisName[$i] = rand() . '.' . $ext_logo_bisnis[$i];
                    $request->logo_bisnis[$i]->move(public_path('assets_landing/logo_bisnis'), $logoBisnisName[$i]);
                } else {
                    return back()->with('failed', 'Harap periksa extensi logo bisnis anda');
                }

                $data_bisnis = new Popular();
                $data_bisnis->name_bisnis = $request->name_bisnis[$i];
                $data_bisnis->logo_bisnis = $logoBisnisName[$i];

                $data_bisnis->save();
            }

            for ($i = 1; $i <= 8; $i++) {
                $data_fitur = new Fitur();
                $data_fitur->tittle_fitur = $request->tittle_fitur[$i];
                $data_fitur->content_fitur = $request->content_fitur[$i];

                $data_fitur->save();
            }

            for ($i = 1; $i <= 8; $i++) {
                $data_keuntungan = new Keuntungan();
                $data_keuntungan->tittle_keuntungan = $request->tittle_keuntungan[$i];

                $data_keuntungan->save();
            }

            for ($i = 1; $i <= 5; $i++) {
                $data_keunggulan = new Keunggulan();
                $data_keunggulan->tittle_keunggulan = $request->tittle_keunggulan[$i];
                $data_keunggulan->content_keunggulan = $request->content_keunggulan[$i];

                $data_keunggulan->save();
            }

            return back()->with('success', 'Data Berhasil di Input');
        } else {
            return back()->with('failed', 'Data Gagal di Input');
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
    public function edit()
    {
        $content = Content::first();
        $popular_bisnis = Popular::all();
        $fitur_koperasi = Fitur::all();
        $keuntungan_koperasi = Keuntungan::all();
        $keunggulan_koperasi = Keunggulan::all();

        // return $keunggulan_koperasi;
        return view('content.edit', [
            'content' => $content,
            'popular_bisnis' => $popular_bisnis,
            'fitur_koperasi' => $fitur_koperasi,
            'keuntungan_koperasi' => $keuntungan_koperasi,
            'keunggulan_koperasi' => $keunggulan_koperasi,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return $request->logo_bisnis_new;
        $validator = Validator::make($request->all(), [
            'nama'                  => 'required',
            'alamat'                => 'required',
            'email'                 => 'required',
            'no_telp'               => 'required',
            'instagram'             => 'required',
            'facebook'              => 'required',
            'twitter'               => 'required',
            'youtube'               => 'required',
            'logo'                  => 'required',
            'tittle_1'              => 'required',
            'content_1'             => 'required',
            'content_about'         => 'required',
            // 'name_bisnis'           => 'required',
            // 'logo_bisnis'           => 'required',
            // 'tittle_fitur'          => 'required',
            // 'content_fitur'         => 'required',
            // 'tittle_keunggulan'     => 'required',
            // 'content_keunggulan'    => 'required',
        ]);


        // $id_fitur = $request->id_fitur;
        // $id_popular = $request->id_popular;
        // $id_keunggulan = $request->id_keunggulan;

        // $ext_logo = $request->logo->extension();
        // if ($ext_logo == 'jpeg' || $ext_logo == 'png' || $ext_logo == 'jpg') {
        //     $logoName = rand() . '.' . $ext_logo;
        //     $request->logo->move(public_path('assets_landing/logo'), $logoName);
        // } else {
        //     return back()->with('failed', 'Harap periksa logo anda');
        // }

        if ($request->hasFile('logo_new')) {
            $extension = $request->logo_new->extension();

            if ($extension == 'jpeg' || $extension == 'png' || $extension == 'jpg') {
                $logoName = rand() . '.' . $request->logo_new->extension();
                $request->logo_new->move(public_path('assets_landing/logo'), $logoName);
            } else {
                $message = 'Invalid image extention format';
            }
        } else {
            $logoName = $request->input('logo_old');
        }

        $id_content = $request->id_content;
        $data = Content::find($id_content);
        $data->nama = $request->nama;
        $data->logo = $logoName;
        $data->tittle = $request->tittle_1;
        $data->content = $request->content_1;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->no_telp = $request->no_telp;
        $data->content_about = $request->content_about;
        $data->instagram = $request->instagram;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->youtube = $request->youtube;

        // return $request->logo_new;

        if ($data->save()) {

            if ($request->hasfile('logo_bisnis_new')) {
                // $logoBisnis = rand() . '.' . $request->logo_bisnis_new[0]->extension();
                // $request->logo_bisnis_new[0]->move(public_path('assets_landing/logo'), $logoBisnis);
                $logoBisnis = "Ada";
                // $request->file('filenames')[$i]->move(public_path() . '/photos/', $name);
            } else {
                // $logoBisnis = $request->input('logo_bisnis_old')[1];
                $logoBisnis = "Tidak ada";
                // asd
            }

            return $logoBisnis;
            // for ($i = 0; $i <= 7; $i++) {
            //     // $ext_logo_bisnis[$i] = $request->logo_bisnis[$i]->extension();
            //     // if ($ext_logo_bisnis[$i] == 'jpeg' || $ext_logo_bisnis[$i] == 'png' || $ext_logo_bisnis[$i] == 'jpg') {
            //     //     $logoBisnisName[$i] = rand() . '.' . $ext_logo_bisnis[$i];
            //     //     $request->logo_bisnis[$i]->move(public_path('assets_landing/logo_bisnis'), $logoBisnisName[$i]);
            //     // } else {
            //     //     return back()->with('failed', 'Harap periksa extensi logo bisnis anda');
            //     // }
            //     // $ext_logo_bisnis[$i] = $request->logo_bisnis_new[$i]->extension();
            //     // $asd[$i] = $ext_logo_bisnis[$i];
            //     if ($request->hasfile('logo_bisnis_new')) {
            //         $logoBisnis = rand() . '.' . $request->logo_bisnis_new[$i]->extension();
            //         $request->logo_bisnis_new[$i]->move(public_path('assets_landing/logo'), $logoBisnis);
            //         // $request->file('filenames')[$i]->move(public_path() . '/photos/', $name);
            //     } else {
            //         $logoBisnis = $request->input('logo_bisnis_old')[$i];
            //     }

            //     // if ($request->hasfile('logo_bisnis_new')[$i]) {
            //     //     $logoBisnis = rand() . '.' . $request->logo_bisnis_new[$i]->extension();
            //     //     $request->logo_bisnis_new[$i]->move(public_path('assets_landing/logo'), $logoBisnis[$i]);

            //     //     if ($ext_logo_bisnis[$i] == 'jpeg' || $ext_logo_bisnis[$i] == 'png' || $ext_logo_bisnis[$i] == 'jpg') {
            //     //         $logoBisnis[$i] = rand() . '.' . $request->logo_bisnis_new[$i]->extension();
            //     //         $request->logo_bisnis_new[$i]->move(public_path('assets_landing/logo'), $logoBisnis[$i]);
            //     //     } else {
            //     //         $message = 'Invalid image extention format';
            //     //     }
            //     // } else {
            //     //     $logoBisnis = $request->input('logo_bisnis_old');
            //     // }
            //     $id_popular[$i] = $request->id_popular[$i];

            //     // $data_bisnis = Popular::find($id_popular[$i]);
            //     // $data_bisnis->name_bisnis = $request->name_bisnis[$i];
            //     // $data_bisnis->logo_bisnis = $logoBisnis[$i];

            //     // $data_bisnis->save();
            // }
            // return $logoBisnis;

            for ($i = 0; $i <= 7; $i++) {

                $id_fitur[$i] = $request->id_fitur[$i];

                $data_fitur = Fitur::find($id_fitur[$i]);
                $data_fitur->tittle_fitur = $request->tittle_fitur[$i];
                $data_fitur->content_fitur = $request->content_fitur[$i];

                $data_fitur->save();
            }

            for ($i = 0; $i <= 7; $i++) {

                $id_keuntungan[$i] = $request->id_keuntungan[$i];

                $data_keuntungan = Keuntungan::find($id_keuntungan[$i]);
                $data_keuntungan->tittle_keuntungan = $request->tittle_keuntungan[$i];

                $data_keuntungan->save();
            }

            for ($i = 0; $i <= 4; $i++) {

                $id_keunggulan[$i] = $request->id_keunggulan[$i];

                $data_keunggulan = Keunggulan::find($id_keunggulan[$i]);
                $data_keunggulan->tittle_keunggulan = $request->tittle_keunggulan[$i];
                $data_keunggulan->content_keunggulan = $request->content_keunggulan[$i];

                $data_keunggulan->save();
            }
            return back()->with('success', 'Data Berhasil di Edit');
        } else {
            return back()->with('failed', 'Data Gagal di Edit');
        }
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
