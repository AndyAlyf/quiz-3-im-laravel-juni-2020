@extends('layouts.master')

@section('content')
<div class="card card-primary mx-auto" style="width: 90%;">
    <div class="card-header">
    <h3 class="card-title">Buat Artikel</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/artikel" method="POST">
        <div class="card-body">  
                @csrf
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Artikel" required>
                <label for="isi">Isi Artikel</label>
                <textarea class="form-control" rows="5" id="isi" name="isi" placeholder="Masukkan Isi Artikel" required></textarea>
                <label for="judul">Tag</label>
                <input type="text" class="form-control" id="judul" name="tag" placeholder="Masukkan Tag Artikel, pisahkan dengan spasi" required>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection