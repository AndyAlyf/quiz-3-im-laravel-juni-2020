@extends('layouts.master')

@section('content')
<div class="container-fluid">
    
</div>


    <div class="card-header">
        <h3 class="card-title">Daftar Artikel</h3>
    </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Slug</th>
        <th>Tag</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>

      @foreach ($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->isi}}</td>
            <td>{{$item->slug}}</td>
            <td>{{$item->tag}}</td>
            <td><a class="btn btn-info my-2" href="/artikel/{{$item->id}}" role="edit">Show</a>
                <a class="btn btn-primary my-2" href="/artikel/{{$item->id}}/edit" role="edit">Edit</a>
                <form action="/artikel/{{$item->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger my-2">Delete</button></form>
            </td>
                
        </tr>
      @endforeach

      </tbody>
      <tfoot>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Slug</th>
        <th>Tag</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
@endsection

@push('scripts')
  <script src="{{ asset('/plugins/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
  <script>
  $(function () {
      $("#example1").DataTable();
  });
  </script>

<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool' 
    })
</script>
@endpush