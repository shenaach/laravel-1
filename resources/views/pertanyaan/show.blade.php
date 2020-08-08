@extends('adminlte.master')
@section('content')
    <div class="mt-3 ml-3">
        <h4>{{ $tanya->judul }}</h4> 
        <p> {{ $tanya->isi }} </p> 
    </div> 
@endsection