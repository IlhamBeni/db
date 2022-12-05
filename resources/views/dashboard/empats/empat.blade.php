@extends('dashboard.layout.main')

@section('abc')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Template IBSLITE</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

    <div class="table-responsive col-lg-10">
      <a href="/dashboard/empat/create" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> </a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th scope="col">ID Template IBSLITE</th>
              <th scope="col">Deskripsi Template IBSLITE</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $p)
            <tr>
              <td>{{ $loop -> iteration }}</td>
              <td>{{ $p -> id_template_ibslite }}</td>
              <td>{{ $p -> deskripsi_template_ibslite }}</td>
              <td>
              <form action="/dashboard/empat/{{ $p->id_template_ibslite }}/edit" method="get" class="d-inline">
                  <button class="badge bg-warning border-0"><i class="fa fa-edit"></i></button>
              </form>
                <form action="/dashboard/empat/{{ $p->id_template_ibslite }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Mau Menghapus Data?')"><i class="fa fa-trash-alt"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
@endsection