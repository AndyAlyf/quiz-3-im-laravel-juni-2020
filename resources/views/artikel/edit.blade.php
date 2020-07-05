@extends('layouts.master')

@section('content')
<div class="card card-primary mx-auto" style="width: 90%;">
    <div class="card-header">
    <h3 class="card-title">Buat Artikel</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/artikel/{{$item[0]->id}}" method="POST">
        <div class="card-body">  
                @csrf
                @method('PUT')
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value={{$item[0]->judul}}>
                <label for="isi">Isi Artikel</label>
                <textarea class="form-control" rows="5" id="isi" name="isi" value={{$item[0]->isi}}></textarea>
                <label for="judul">Tag</label>
                <input type="text" class="form-control" id="judul" name="tag" value={{$item[0]->tag}}>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection