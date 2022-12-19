@extends ('dashboard.layout.main')

@section('abc')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">App Lembaga</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif
<div class="row">
    <div class="col-auto">
        <a href="/dashboard/satu/create" class="btn btn-primary mb-3"><i class="fa fa-plus"></i></a>
    </div>
</div>
  <form action="/dashboard/satu" method="get">
      <div class="input-group mb-3 col-lg-5" style="margin-left: -10px;">
        <input type="text" name="search" placeholder="Search...">
      </div>
  </form>
  <style>
input[type=text] {
  width: 150px;
  height: 50px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
  </style>
    <div class="table-responsive col-12">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Lembaga</th>
              <th scope="col">PIC</th>
              <th scope="col">Alamat</th>
              <th scope="col">No Handphone</th>
              <th scope="col" style="min-width:100px; max-width:150">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $key => $p)
            <tr>
              <td>{{ $posts->firstItem() + $key }}</td>
              <td>{{ $p -> nama_lembaga }}</td>
              <td>{{ $p -> nama_pic }}</td>
              <td>{{ $p -> alamat }}</td>
              <td>{{ $p -> no_hp_pic }}</td>
              <td>
              <form action="/dashboard/satu/{{ $p -> id_app_lembaga}}" method="get" class="d-inline">
                  <button class="badge bg-info border-0"><i class="fa fa-eye"></i></button>
              </form>
              <form action="/dashboard/satu/{{ $p->id_app_lembaga }}/edit" method="get" class="d-inline">
                  <button class="badge bg-warning border-0"><i class="fa fa-edit"></i></button>
              </form>
                <form action="/dashboard/satu/{{ $p -> id_app_lembaga }}" method="post" class="d-inline">
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
    <div class="mb-3">
      {{ $posts->links('pagination::bootstrap-5') }}
    </div>
@endsection
