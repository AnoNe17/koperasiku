@extends('main')


@section('container')
<div class="container mt-5">
    <form method="post" action="{{ route('content.update')}}" enctype="multipart/form-data">
        @csrf 
        
            {{-- <input type="file" name="photo_new"> <br> --}}
            <input type="hidden" value="{{ $content->id }}" name="id_content">
            <div class="form-floating">
                <input type="text" name="nama" class="form-control mb-3" id="nama" value="{{ $content->nama }}" placeholder="Nama" required>
                <label for="floatingInput">Nama</label>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <input type="hidden" name="logo_old" value="{{ $content->logo }}" readonly>
            <div class="form-group rounded pt-2 pb-4 mb-3 px-4" style="background-color: white">
                <label for="logo" class="col-form-label">Logo Koperasi</label>
                <input type="file" class="form-control" id="logo" name="logo_new" value="{{ $content->logo }}">
                @error('logo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="alamat" class="form-control mb-3" value="{{ $content->alamat }}" id="alamat" placeholder="Alamat" required>
                <label for="floatingInput">Alamat</label>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="email" class="form-control mb-3" value="{{ $content->email }}" id="email" placeholder="Email" required>
                <label for="floatingInput">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="no_telp" class="form-control mb-3" value="{{ $content->no_telp }}" id="no_telp" placeholder="No Telephone" required>
                <label for="floatingInput">No Telephone</label>
                @error('no_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="instagram" class="form-control mb-3" value="{{ $content->instagram }}" id="instagram" placeholder="Instagram" required>
                <label for="floatingInput">Instagram</label>
                @error('instagram')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="facebook" class="form-control mb-3" value="{{ $content->facebook }}" id="facebook" placeholder="Facebook" required>
                <label for="floatingInput">facebook</label>
                @error('facebook')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="twitter" class="form-control mb-3" value="{{ $content->twitter }}" id="twitter" placeholder="Twitter" required>
                <label for="floatingInput">Twitter</label>
                @error('twitter')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="youtube" class="form-control mb-3" value="{{ $content->youtube }}" id="youtube" placeholder="Youtube" required>
                <label for="floatingInput">Youtube</label>
                @error('youtube')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <h2>Landing Page</h2>

            <div class="form-floating">
                <input type="text" name="tittle_1" class="form-control mb-3" value="{{ $content->tittle }}" id="tittle_1" placeholder="Tittle landing page" required>
                <label for="floatingInput">Tittle landing page</label>
                @error('tittle_1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="text" name="content_1" class="form-control mb-3" value="{{ $content->content }}" id="content_1" placeholder="Content landing page" required>
                <label for="floatingInput">Content landing page</label>
                @error('content_1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="text" name="content_about" class="form-control mb-3" value="{{ $content->content_about }}" id="content_about" placeholder="Content About" required>
                <label for="floatingInput">Content About</label>
                @error('content_about')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            

            <h2>Popular Bisnis</h2>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @for ($i = 1; $i <= 8; $i++)
                    @if ($i == 1)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="bisnis{{ $i }}-tab" data-bs-toggle="tab" data-bs-target="#bisnis{{ $i }}" type="button" role="tab" aria-controls="tab{{ $i }}" aria-selected="true">Bisnis {{ $i }}</button>
                        </li>
                    @else
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bisnis{{ $i }}-tab" data-bs-toggle="tab" data-bs-target="#bisnis{{ $i }}" type="button" role="tab" aria-controls="tab{{ $i }}" aria-selected="true">Bisnis {{ $i }}</button>
                        </li>
                    @endif
                @endfor
            </ul>

            <div class="tab-content" id="myTabContent">
                @foreach ($popular_bisnis as $key => $popular)
                    @if ($key === 0)
                        <div class="tab-pane fade show active" id="bisnis{{ $key+1 }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <input type="hidden" name="id_popular[{{ $key }}]" value="{{ $popular->id }}">
                                <div class="form-floating">
                                    <input type="text" name="name_bisnis[{{ $key }}]" class="form-control mb-3" value="{{ $popular->name_bisnis }}" id="name_bisnis" placeholder="Nama Bisnis" required>
                                    <label for="floatingInput">Nama Bisnis {{ $key+1 }}</label>
                                    @error('name_bisnis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- {{ $popular->logo_bisnis }} --}}
                                <input type="hidden" name="logo_bisnis_old[{{ $key }}]" value="{{ $popular->logo_bisnis }}">
                                <div class="form-group rounded pt-2 pb-4 mb-3 px-4" style="background-color: white">
                                    <label for="logo" class="col-form-label">Logo Bisnis</label>
                                    <input type="file" name="logo_bisnis_new[{{ $key }}]">
                                    @error('logo_bisnis_new')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="tab-pane fade show" id="bisnis{{ $key+1 }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <input type="hidden" name="id_popular[{{ $key }}]" value="{{ $popular->id }}">
                                <div class="form-floating">
                                    <input type="text" name="name_bisnis[{{ $key }}]" class="form-control mb-3" value="{{ $popular->name_bisnis }}" id="name_bisnis" placeholder="Nama Bisnis {{ $key+1 }}" required>
                                    <label for="floatingInput">Nama Bisnis {{ $key+1 }}</label>
                                    @error('name_bisnis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <input type="hidden" name="logo_bisnis_old[{{ $key }}]" value="{{ $popular->logo_bisnis }}">
                                <div class="form-group rounded pb-4 mb-3 px-4" style="background-color: white">
                                    <label for="logo" class="col-form-label">Logo Bisnis {{ $key }}</label>
                                    <input type="file" class="form-control" id="logo_bisnis" name="logo_bisnis_new[{{ $key }}]">
                                    @error('logo_bisnis_new')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <h2 class="mb-3">Fitur Koperasi</h2>
            
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @for ($i = 1; $i <= 8; $i++)
                    @if ($i == 1)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="fitur{{ $i }}-tab" data-bs-toggle="tab" data-bs-target="#fitur{{ $i }}" type="button" role="tab" aria-controls="tab{{ $i }}" aria-selected="true">Fitur {{ $i }}</button>
                        </li>
                    @else
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fitur{{ $i }}-tab" data-bs-toggle="tab" data-bs-target="#fitur{{ $i }}" type="button" role="tab" aria-controls="tab{{ $i }}" aria-selected="true">Fitur {{ $i }}</button>
                        </li>
                    @endif
                @endfor
            </ul>

            <div class="tab-content" id="myTabContent">
                @foreach ($fitur_koperasi as $key => $fitur)
                    @if ($key === 0)
                        <div class="tab-pane fade show active" id="fitur{{ $key+1 }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <input type="hidden" name="id_fitur[{{ $key }}]" value="{{ $fitur->id }}">
                                <div class="form-floating">
                                    <input type="text" name="tittle_fitur[{{ $key }}]" class="form-control mb-3" value="{{ $fitur->tittle_fitur }}" id="tittle_fitur" placeholder="Tittle Fitur {{ $key+1 }}" required>
                                    <label for="floatingInput">Tittle Fitur {{ $key+1 }}</label>
                                    @error('name_bisnis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="content_fitur[{{ $key }}]" class="form-control mb-3" value="{{ $fitur->content_fitur }}" id="content_fitur" placeholder="Content Fitur {{ $key+1 }}" required>
                                    <label for="floatingInput">Tittle Fitur {{ $key+1 }}</label>
                                    @error('name_bisnis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="tab-pane fade show" id="fitur{{ $key+1 }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <input type="hidden" name="id_fitur[{{ $key }}]" value="{{ $fitur->id }}">
                                <div class="form-floating">
                                    <input type="text" name="tittle_fitur[{{ $key }}]" class="form-control mb-3" value="{{ $fitur->tittle_fitur }}" id="tittle_fitur" placeholder="Tittle Fitur {{ $key+1 }}" required>
                                    <label for="floatingInput">Tittle Fitur {{ $key+1 }}</label>
                                    @error('tittle_fitur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="content_fitur[{{ $key }}]" class="form-control mb-3" value="{{ $fitur->content_fitur }}" id="content_fitur" placeholder="Content Fitur {{ $key+1 }}" required>
                                    <label for="floatingInput">Tittle Fitur {{ $key+1 }}</label>
                                    @error('content_fitur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <h2 class="mb-3">Keunggulan Koperasi</h2>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i == 1)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="keunggulan{{ $i }}-tab" data-bs-toggle="tab" data-bs-target="#keunggulan{{ $i }}" type="button" role="tab" aria-controls="tab{{ $i }}" aria-selected="true">Keunggulan {{ $i }}</button>
                        </li>
                    @else
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="keunggulan{{ $i }}-tab" data-bs-toggle="tab" data-bs-target="#keunggulan{{ $i }}" type="button" role="tab" aria-controls="tab{{ $i }}" aria-selected="true">Keunggulan {{ $i }}</button>
                        </li>
                    @endif
                @endfor
            </ul>

            <div class="tab-content" id="myTabContent">
                @foreach ($keunggulan_koperasi as $key => $keunggulan)
                    @if ($key === 0)
                        <div class="tab-pane fade show active" id="keunggulan{{ $key+1 }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <input type="hidden" name="id_keunggulan[{{ $key }}]" value="{{ $keunggulan->id }}">
                                <div class="form-floating">
                                    <input type="text" name="tittle_keunggulan[{{ $key }}]" class="form-control mb-3" value="{{ $keunggulan->tittle_keunggulan }}" id="tittle_keunggulan" placeholder="Tittle Keunggulan {{ $key+1 }}" required>
                                    <label for="floatingInput">Tittle Keunggulan {{ $key+1 }}</label>
                                    @error('name_bisnis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="content_keunggulan[{{ $key }}]" class="form-control mb-3" value="{{ $keunggulan->content_keunggulan }}" id="content_keunggulan" placeholder="Content Keunggulan {{ $key+1 }}" required>
                                    <label for="floatingInput">Content Keunggulan {{ $key+1 }}</label>
                                    @error('name_bisnis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="tab-pane fade show" id="keunggulan{{ $key+1 }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <input type="hidden" name="id_keunggulan[{{ $key }}]" value="{{ $keunggulan->id }}">
                                <div class="form-floating">
                                    <input type="text" name="tittle_keunggulan[{{ $key }}]" class="form-control mb-3" value="{{ $keunggulan->tittle_keunggulan }}" id="tittle_keunggulan" placeholder="Tittle Keunggulan {{ $key+1 }}" required>
                                    <label for="floatingInput">Tittle Keunggulan {{ $key+1 }}</label>
                                    @error('name_bisnis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="content_keunggulan[{{ $key }}]" class="form-control mb-3" value="{{ $keunggulan->content_keunggulan }}" id="content_keunggulan" placeholder="Content Keunggulan {{ $key+1 }}" required>
                                    <label for="floatingInput">Content Keunggulan {{ $key+1 }}</label>
                                    @error('name_bisnis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <h2 class="mb-3">Keuntungan Koperasi</h2>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @for ($i = 1; $i <= 8; $i++)
                    @if ($i == 1)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="keuntungan{{ $i }}-tab" data-bs-toggle="tab" data-bs-target="#keuntungan{{ $i }}" type="button" role="tab" aria-controls="tab{{ $i }}" aria-selected="true">Keuntungan {{ $i }}</button>
                        </li>
                    @else
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="keuntungan{{ $i }}-tab" data-bs-toggle="tab" data-bs-target="#keuntungan{{ $i }}" type="button" role="tab" aria-controls="tab{{ $i }}" aria-selected="true">Keuntungan {{ $i }}</button>
                        </li>
                    @endif
                @endfor
            </ul>

            <div class="tab-content" id="myTabContent">
                @foreach ($keuntungan_koperasi as $key => $keuntungan)
                    @if ($key === 0)
                        <div class="tab-pane fade show active" id="keuntungan{{ $key+1 }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <input type="hidden" name="id_keuntungan[{{ $key }}]" value="{{ $keuntungan->id }}">
                                <div class="form-floating">
                                    <input type="text" name="tittle_keuntungan[{{ $key }}]" class="form-control mb-3" value="{{ $keuntungan->tittle_keuntungan }}" id="tittle_fitur" placeholder="Tittle Keuntungan {{ $key+1 }}" required>
                                    <label for="floatingInput">Tittle Keuntungan {{ $key+1 }}</label>
                                    @error('name_bisnis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="tab-pane fade show " id="keuntungan{{ $key+1 }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <input type="hidden" name="id_keuntungan[{{ $key }}]" value="{{ $keuntungan->id }}">
                                <div class="form-floating">
                                    <input type="text" name="tittle_keuntungan[{{ $key }}]" class="form-control mb-3" value="{{ $keuntungan->tittle_keuntungan }}" id="tittle_fitur" placeholder="Tittle Keuntungan {{ $key+1 }}" required>
                                    <label for="floatingInput">Tittle Keuntungan {{ $key+1 }}</label>
                                    @error('name_bisnis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>


                    
            

            {{-- <h2>Fitur Koperasi</h2>
            
            <input type="hidden" name="id_fitur" value="{{ $fitur_koperasi->id }}">
            <div class="form-floating">
                <input type="text" name="tittle_fitur" class="form-control mb-3" value="{{ $fitur_koperasi->tittle_fitur }}" id="tittle_fitur" placeholder="Tittle Fitur" required>
                <label for="floatingInput">Tittle Fitur</label>
                @error('tittle_fitur')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="content_fitur" class="form-control mb-3" value="{{ $fitur_koperasi->content_fitur }}" id="content_fitur" placeholder="Content Fitur" required>
                <label for="floatingInput">Content Fitur</label>
                @error('content_fitur')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <h2>Keunggulan Koperasi</h2>
            <input type="hidden" name="id_keunggulan" value="{{ $keunggulan_koperasi->id }}">
            <div class="form-floating">
                <input type="text" name="tittle_keunggulan" class="form-control mb-3" value="{{ $keunggulan_koperasi->tittle_keunggulan }}" id="tittle_keunggulan" placeholder="Tittle Keunggulan" required>
                <label for="floatingInput">Tittle Keunggulan</label>
                @error('tittle_keunggulan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="content_keunggulan" class="form-control mb-3" value="{{ $keunggulan_koperasi->content_keunggulan }}" id="content_keunggulan" placeholder="Content Keunggulan" required>
                <label for="floatingInput">Content Keunggulan</label>
                @error('content_keunggulan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> --}}
            <br>
            <button class="w-100 btn btn-lg btn-primary mb-5" type="submit">Submit</button>

        </form>
</div>
@endsection