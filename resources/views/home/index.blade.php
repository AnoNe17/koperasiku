@extends('main')

@section('container')

<a href="{{ route('content.edit')}}" class=" btn btn-primary m-3" >Edit Content</a>
<a href="{{ route('content.create')}}" class=" btn btn-primary m-3" >Create Content</a> <br>

{{ $content->nama }} <br>
{{ $content->logo }} <br>
{{ $content->tittle }} <br>
{{ $content->content }} <br>
{{ $content->alamat }} <br>
{{ $content->email }} <br>
{{ $content->no_telp }} <br>
{{ $content->content_about }} <br>
{{ $content->instagram }} <br>
{{ $content->facebook }} <br>
{{ $content->twitter }} <br>
{{ $content->youtube }} <br>

@foreach ($popular_bisnis as $popular)
    {{ $popular->name_bisnis }} <br>
    {{ $popular->logo_bisnis }} <br>
@endforeach

@foreach ($fitur_koperasi as $fitur)
    {{ $fitur->tittle_fitur }} <br>
    {{ $fitur->content_fitur }} <br>
@endforeach

@foreach ($keuntungan_koperasi as $keuntungan)
    {{ $keuntungan->tittle_keuntungan }} <br>
@endforeach

@foreach ($keunggulan_koperasi as $keunggulan)
    {{ $keunggulan->tittle_keunggulan }} <br>
    {{ $keunggulan->content_keunggulan }} <br>
@endforeach








@endsection