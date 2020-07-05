@extends('layouts.master')

@section('content')
    <div class="container bg-white p-3">
        <h1>Judul : {{$item->judul}}</h1>
        <p>Slug : {{$item->slug}}</p>
        <p>{{$item->isi}}</p>
        @php
            $array_tag = explode(',',$item->tag)
        @endphp
        @foreach ($array_tag as $value)
            <button type="button" class="btn btn-success">{{$value}}</button>
        @endforeach
    </div>
@endsection