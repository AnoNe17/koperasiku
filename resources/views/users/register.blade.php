@extends('main')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class=" rounded text-center mt-3 pt-3 pb-3 mb-3 px-4" style="background-color: white">
                <h2 class="text-center">Registrasi Koperasi Ku</h2>
            </div>

            <div class="d-flex rounded justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 px-4" style="background-color: white">
                <img src="{{ asset('assets_landing/logo.png') }}" class="img-fluid">
            </div>


            {{-- <div class="d-flex rounded justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 px-4" style="background-color: white">
                Bersamaan dengan mengisi Form Registrasi ulang ini, Saya bersedia menjadi pengurus Nasional UKM IKM Nusantara dan siap menjalankan Amanah serta Tanggung Jawab sesuai dengan yang saya pilih, dan selanjutnya akan di terbitkan surat keputusan (SK) dan surat mandat untuk tanggung jawab yang saya jalankan dalam organisasi. <br>
                <br>
                Syarat menjadi Pengurus: <br><br>
                1. Mohon untuk meluangkan Waktu untuk Mengikuti setiap Pertemuan baik yang di laksanakan secara Offline ( Tatap Muka ) ataupun Online ( Zoom Meeting ) yang berkaitan dengan Program kerja UKM IKM Nusantara. <br><br>
                2. Memberikan dan Menjalankan Program Kerja kepada UKM IKM Nusantara demi kemajuan dan berkembangnya UKM IKM Nusantara. <br><br>
                3. Wajib Membayar Iuran bulanan sebesar Rp.200.00,- ke Rekening UKM IKM Nusantara 006-00 10033006-0 ( bank Mandiri ). <br><br>
                4. Wajib memberikan Laporan pertanggung jawaban atas Program kerja yang di jalankan. <br><br>

                ttd<br><br><br><br>
                Hj. Chandra Manggih Rahayu <br>
                Ketua Umum UKM IKM Nusantara <br><br>

                WA : 0812-8444-9534 (Hj. Chandra Manggih R) <br>
                        0812-9051-1888  (Bayu Adhie Sunu) <br>
            </div> --}}

            {{-- <div class="d-flex rounded justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-3 mb-3 px-4" style="background-color: white">
                <img src="{{ asset('assets/images/logo.jpeg') }}" style="width: 400px" height="400px">
            </div> --}}

                <form method="post" action="{{ route('users.store')}}" enctype="multipart/form-data">
                @csrf 
                    <h6 class="ms-1">Nomor KTP</h6>
                    <div class="form-floating">
                        <input type="number" name="no_ktp" class="form-control mb-3" id="no_ktp" value="{{ old('no_ktp') }}" placeholder="Nomor KTP" required>
                        <label for="floatingInput">Nomor KTP</label>
                        @error('no_ktp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <h6 class="ms-1">Email akan digunakan untuk token dan akses masuk</h6>
                    <div class="form-floating">
                        <input type="text" name="email" class="form-control mb-3" value="{{ old('email') }}" id="email" placeholder="Email" required>
                        <label for="floatingInput">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <h6 class="ms-1">Masukan nomor handphone yang aktif digunakan</h6>
                    <div class="form-floating">
                        <input type="number" name="no_hp" class="form-control mb-3" value="{{ old('no_hp') }}" id="no_hp" placeholder="No Handphone" required>
                        <label for="floatingInput">No Handphone (Contoh : 081234567890)</label>
                        @error('no_hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <h4 class="ms-1 mt-5 mb-2">Kemanan Akun</h4>

                    <h6 class="ms-1 ">PIN akan digunakan untuk setiap transaksi </h6>
                    <div class="form-floating">
                        <input type="number" name="pin" class="form-control mb-4" id="pin" value="{{ old('pin') }}" placeholder="Terdiri 6 angka" required>
                        <label for="floatingInput">PIN (Terdiri 6 angka)</label>
                        @error('pin')
                            <div class="invalid-feedback">
                                {{ $no_telp }}
                            </div>
                        @enderror
                    </div>
                    

                    <h6 class="ms-1 ">Ulangi PIN</h6>
                    <div class="form-floating">
                        <input type="number" name="konfir_pin" class="form-control mb-4" id="konfir_pin" value="{{ old('konfir_pin') }}" placeholder="Ulangi PIN" required>
                        <label for="floatingInput">Ulangi PIN</label>
                        @error('konfir_pin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    

                    <br>
                    <button class="w-100 btn btn-lg btn-primary mb-5" type="submit">Submit</button>

                </form>
            </div>
        <div class="col-md-2"></div>
    </div>
</div>

<style>
    body{
        background-color: rgb(219, 230, 236)
    }
</style>

@endsection