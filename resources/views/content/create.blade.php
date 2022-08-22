@extends('main')


@section('container')

<div class="container mt-5">
    <form method="post" action="{{ route('content.store')}}" enctype="multipart/form-data">
        @csrf 
            <div class="form-floating">
                <input type="text" name="nama" class="form-control mb-3" id="nama" value="{{ old('nama') }}" placeholder="Nama" required>
                <label for="floatingInput">Nama</label>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group rounded pt-2 pb-4 mb-3 px-4" style="background-color: white">
                <label for="logo" class="col-form-label">Logo Koperasi</label>
                <input type="file" class="form-control" id="logo" name="logo">
                @error('logo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="alamat" class="form-control mb-3" value="{{ old('alamat') }}" id="alamat" placeholder="Alamat" required>
                <label for="floatingInput">Alamat</label>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="email" class="form-control mb-3" value="{{ old('email') }}" id="email" placeholder="Email" required>
                <label for="floatingInput">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="no_telp" class="form-control mb-3" value="{{ old('no_telp') }}" id="no_telp" placeholder="No Telephone" required>
                <label for="floatingInput">No Telephone</label>
                @error('no_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="instagram" class="form-control mb-3" value="{{ old('instagram') }}" id="instagram" placeholder="Instagram" required>
                <label for="floatingInput">Instagram</label>
                @error('instagram')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="facebook" class="form-control mb-3" value="{{ old('facebook') }}" id="facebook" placeholder="Facebook" required>
                <label for="floatingInput">facebook</label>
                @error('facebook')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="twitter" class="form-control mb-3" value="{{ old('twitter') }}" id="twitter" placeholder="Twitter" required>
                <label for="floatingInput">Twitter</label>
                @error('twitter')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" name="youtube" class="form-control mb-3" value="{{ old('youtube') }}" id="youtube" placeholder="Youtube" required>
                <label for="floatingInput">Youtube</label>
                @error('youtube')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <h2>Landing Page</h2>

            <div class="form-floating">
                <input type="text" name="tittle_1" class="form-control mb-3" value="{{ old('tittle_1') }}" id="tittle_1" placeholder="Tittle landing page" required>
                <label for="floatingInput">Tittle landing page</label>
                @error('tittle_1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="text" name="content_1" class="form-control mb-3" value="{{ old('content_1') }}" id="content_1" placeholder="Content landing page" required>
                <label for="floatingInput">Content landing page</label>
                @error('content_1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="text" name="content_about" class="form-control mb-3" value="{{ old('content_about') }}" id="content_about" placeholder="Content About" required>
                <label for="floatingInput">Content About</label>
                @error('content_about')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            

            <h2 class="mb-3">Popular Bisnis</h2>

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
                @for ($i = 1; $i <= 8; $i++)
                    @if ($i === 1)
                        <div class="tab-pane fade show active" id="bisnis{{ $i }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <div class="form-floating">
                                    <input type="text" name="name_bisnis[{{ $i }}]" class="form-control mb-3" value="" id="tittle_fitur" placeholder="Tittle Fitur">
                                    <label for="floatingInput">Name Bisnis {{ $i }}</label>
                                    @error('tittle_fitur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group rounded pb-4 mb-3 px-4" style="background-color: white">
                                    <label for="logo" class="col-form-label">Logo Bisnis {{ $i }}</label>
                                    <input type="file" class="form-control" id="logo_bisnis" name="logo_bisnis[{{ $i }}]">
                                    @error('logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="tab-pane fade show" id="bisnis{{ $i }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <div class="form-floating">
                                    <input type="text" name="name_bisnis[{{ $i }}]" class="form-control mb-3" value="" id="tittle_fitur" placeholder="Tittle Fitur" required>
                                    <label for="floatingInput">Name Bisnis {{ $i }}</label>
                                    @error('tittle_fitur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group rounded pb-4 mb-3 px-4" style="background-color: white">
                                    <label for="logo" class="col-form-label">Logo Bisnis {{ $i }}</label>
                                    <input type="file" class="form-control" id="logo_bisnis" name="logo_bisnis[{{ $i }}]">
                                    @error('logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
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

            <div class="tab-content" id="myTabContent1">
                @for ($i = 1; $i <= 8; $i++)
                    @if ($i === 1)
                        <div class="tab-pane fade show active" id="fitur{{ $i }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <div class="form-floating">
                                    <input type="text" name="tittle_fitur[{{ $i }}]" class="form-control mb-3" value="" id="tittle_fitur[{{ $i }}]" placeholder="Tittle Fitur {{ $i }}" required>
                                    <label for="floatingInput">Tittle Fitur {{ $i }}</label>
                                    @error('tittle_fitur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="content_fitur[{{ $i }}]" class="form-control mb-3" value="" id="content_fitur" placeholder="Content Fitur {{ $i }}" required>
                                    <label for="floatingInput">Content Fitur {{ $i }}</label>
                                    @error('content_fitur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="tab-pane fade show" id="fitur{{ $i }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <div class="form-floating">
                                    <input type="text" name="tittle_fitur[{{ $i }}]" class="form-control mb-3" value="" id="tittle_fitur[{{ $i }}]" placeholder="Tittle Fitur {{ $i }}" required>
                                    <label for="floatingInput">Tittle Fitur {{ $i }}</label>
                                    @error('tittle_fitur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="content_fitur[{{ $i }}]" class="form-control mb-3" value="" id="content_fitur" placeholder="Content Fitur {{ $i }}" required>
                                    <label for="floatingInput">Content Fitur {{ $i }}</label>
                                    @error('content_fitur')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
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
            <div class="tab-content" id="myTabContentasd">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i === 1)
                        <div class="tab-pane fade show active" id="keunggulan{{ $i }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <div class="form-floating">
                                    <input type="text" name="tittle_keunggulan[{{ $i }}]" class="form-control mb-3" value="" id="tittle_keunggulan" placeholder="Tittle Keunggulan {{ $i }}" required>
                                    <label for="floatingInput">Tittle Keunggulan {{ $i }}</label>
                                    @error('tittle_keunggulan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="content_keunggulan[{{ $i }}]" class="form-control mb-3" value="" id="content_keunggulan" placeholder="Content Keunggulan {{ $i }}" required>
                                    <label for="floatingInput">Content Keunggulan {{ $i }}</label>
                                    @error('content_keunggulan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="tab-pane fade show" id="keunggulan{{ $i }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <div class="form-floating">
                                    <input type="text" name="tittle_keunggulan[{{ $i }}]" class="form-control mb-3" value="" id="tittle_keunggulan" placeholder="Tittle Keunggulan {{ $i }}" required>
                                    <label for="floatingInput">Tittle Keunggulan {{ $i }}</label>
                                    @error('tittle_keunggulan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="text" name="content_keunggulan[{{ $i }}]" class="form-control mb-3" value="" id="content_keunggulan" placeholder="Content Keunggulan {{ $i }}" required>
                                    <label for="floatingInput">Content Keunggulan {{ $i }}</label>
                                    @error('content_keunggulan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
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

            <div class="tab-content" id="myTabContentasd">
                @for ($i = 1; $i <= 8; $i++)
                    @if ($i === 1)
                        <div class="tab-pane fade show active" id="keuntungan{{ $i }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <div class="form-floating">
                                    <input type="text" name="tittle_keuntungan[{{ $i }}]" class="form-control mb-3" value="" id="tittle_keuntungan" placeholder="Tittle Keuntungan {{ $i }}" required>
                                    <label for="floatingInput">Tittle Keuntungan {{ $i }}</label>
                                    @error('tittle_keuntungan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="tab-pane fade show" id="keuntungan{{ $i }}" role="tabpanel" aria-labelledby="home-tab">
                            <div class="container mt-4">
                                <div class="form-floating">
                                    <input type="text" name="tittle_keuntungan[{{ $i }}]" class="form-control mb-3" value="" id="tittle_keuntungan" placeholder="Tittle Keuntungan {{ $i }}" required>
                                    <label for="floatingInput">Tittle Keuntungan {{ $i }}</label>
                                    @error('tittle_keuntungan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                            </div>
                        </div>
                    @endif
                @endfor
            </div>
            

            
            <br>
            <button class="w-100 btn btn-lg btn-primary mb-5" type="submit">Submit</button>

        </form>
</div>
@endsection