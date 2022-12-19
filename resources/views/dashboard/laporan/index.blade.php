@extends('dashboard.layout.main')

@section('abc')
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Laporan Lembaga</h1>
</div>

<style>
.customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.customers td, .customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.af{
    width: 50px;
    height: 50px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    border: 2px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=text] {
  width: 130px;
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

<div class="card">
    <div class="card-header">
        <div class="">
            <h1 class="h4">Filter Lembaga</h1>
        </div>
    </div>
<form class="row" style="margin-top: 10px;" action="/dashboard/laporan" method="GET">
    @csrf
<div class="row mb-3">
            <div class="col-md-2 mb-3">
                <label>Ref Produk</label>
                <select class="form-control filter mb-3"  name="produk" id="produk">
                <option value="">- Ref Produk -</option>
                    @foreach($dua as $p)
                    <option value="{{ $p -> id_ref_produk }}">
                        {{ $p -> deskripsi_ref_produk }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 mb-3">
                <label>Server Service</label>
                <select class="form-control filter" name="serverService" id="server">
                <option value="">- Server Service -</option>
                    @foreach($tiga as $p)
                    <option value="{{ $p -> id_server_service }}">
                        {{ $p -> deskripsi_server }}
                    </option>
                    @endforeach
                </select>
            </div>
</div>

<div class="row border-bottom">
    <div class="col-md-2 mb-3">
        <label>Status Service Gwlite</label>
        <select class="form-control filter"  name="gwlite" id="gwlite">
        <option value="">- Pilih -</option>
            <option value="UP">Up</option>
            <option value="DOWN">Down</option>
            <option value="TIDAK ADA">Tidak Ada</option>
        </select>
    </div>

    <div class="col-md-2 mb-3">
        <label>Status Service Gwlkm</label>
        <select class="form-control filter"  name="gwlkm" id="gwlkm">
        <option value="">- Pilih -</option>
            <option value="UP">Up</option>
            <option value="DOWN">Down</option>
            <option value="TIDAK ADA">Tidak Ada</option>
        </select>
    </div>

    <div class="col-md-2 mb-3">
        <label>Status Service Gwibslite</label>
        <select class="form-control filter"  name="gwibslite" id="gwibslite">
        <option value="">- Pilih -</option>
            <option value="UP">Up</option>
            <option value="DOWN">Down</option>
            <option value="TIDAK ADA">Tidak Ada</option>
        </select>
    </div>

    <div class="col-md-2 mb-3">
        <label>Status Service Ereg</label>
        <select class="form-control filter"  name="ereg" id="ereg">
        <option value="">- Pilih -</option>
            <option value="UP">Up</option>
            <option value="DOWN">Down</option>
            <option value="TIDAK ADA">Tidak Ada</option>
        </select>
    </div>

    <div class="col-md-2 mb-3">
        <label>Status Service Core</label>
        <select class="form-control filter"  name="core" id="core">
        <option value="">- Pilih -</option>
            <option value="UP">Up</option>
            <option value="DOWN">Down</option>
            <option value="TIDAK ADA">Tidak Ada</option>
        </select>
    </div>

    <div class="col-md-2 mb-3">
        <label>Status Service Marketplace</label>
        <select class="form-control filter"  name="marketplace" id="marketplace">
        <option value="">- Pilih -</option>
            <option value="UP">Up</option>
            <option value="DOWN">Down</option>
            <option value="TIDAK ADA">Tidak Ada</option>
        </select>
    </div>

    <div class="col-md-2 mb-3">
        <label>Status Va</label>
        <select class="form-control filter"  name="va" id="va">
        <option value="">- Pilih -</option>
            <option value="UP">Up</option>
            <option value="DOWN">Down</option>
            <option value="TIDAK ADA">Tidak Ada</option>
        </select>
    </div>

    <div class="col-md-2 mb-3">
        <label>Status Kartu Santri</label>
        <select class="form-control filter"  name="santri" id="santri">
        <option value="">- Pilih -</option>
            <option value="UP">Up</option>
            <option value="DOWN">Down</option>
            <option value="TIDAK ADA">Tidak Ada</option>
        </select>
    </div>

    <div class="col-md-2 mb-3">
        <label>Status Mikropay</label>
        <select class="form-control filter"  name="mikropay" id="mikropay">
        <option value="">- Pilih -</option>
            <option value="UP">Up</option>
            <option value="DOWN">Down</option>
            <option value="TIDAK ADA">Tidak Ada</option>
        </select>
    </div>

    <div class="col-md-2 mb-3">
        <label>Status Qris</label>
        <select class="form-control filter"  name="qris" id="qris">
        <option value="">- Pilih -</option>
            <option value="UP">Up</option>
            <option value="DOWN">Down</option>
            <option value="TIDAK ADA">Tidak Ada</option>
        </select>
    </div>
    <div class="col-sm-3">
        <button type="submit" name="runFilter" value="Multiple" class="btn btn-success" style="margin-top: 31px; margin-left: 50px">Filter</button>
    </div>
</form>
</div>
<div>
<div class="mb-3 border-bottom">
    <a href="/exportpdf" class="btn btn-info mb-3 float-right" style="margin-right: 30px;"><i class="fas fa-download"></i> Export PDF</a>
    <form action="/dashboard/laporan" method="get" style="margin-top: 20px;">
        @csrf
          <div class="input-group mb-3 col-lg-5" style="margin-left: -10px;">
                <div class="input-group-append">
                  <div class="input-group-text af">
                    <span class="fas fa-search" style="width: 100px;"></span>
                  </div>
                </div>
            <input type="text" name="search" placeholder="Search...">
          </div>
    </form>
</div>

</div>
<!-- <div class="input-group mb-3 col-lg-5" style="margin-left: -10px;">
    <input id="myInput" type="text" placeholder="Search.." class="form-control">
</div> -->


    <div class="table table-responsive">
        <table class="customers" id="myTable">
          <thead>
            <tr>
                <th>#</th>
                <th>Nama Lembaga</th>
                <th>PIC</th>
                <th style="max-width: 150px !important;">Alamat</th>
                <th>No Handphone</th>
                <th>Ref Produk</th>
                <th>Server Service</th>
                <th>Ip Address</th>
                <th>Template IBSLITE</th>
                <th>Sister Company</th>
                <th>Sub Domain</th>
                <th>Nama Database</th>
                <th>User Database</th>
                <th>Kode LKM</th>
                <th>Type koperasi</th>
                <th>Port</th>
                <th>Tanggal Set Up</th>
                <th>status service gwlite</th>
                <th>status service gwlkm</th>
                <th>status service gwibslite</th>
                <th>status service ereg</th>
                <th>status service core</th>
                <th>status service marketplace</th>
                <th>status va</th>
                <th>status kartu santri</th>
                <th>status mikropay</th>
                <th>status qris</th>
                <th>kabupaten</th>
                <th>provinsi</th>
                <th>Data Migrasi</th>
                <th>status pks</th>
                <th>kode ikm</th>
                <th>kode Prefix va</th>
            </tr>
          </thead>
          <tbody id="myTable">
            @foreach($posts as $key => $p)
            <tr>
                <td>{{ $posts->firstItem() + $key }}</td>
                <td>{{ $p -> nama_lembaga }}</td>
                <td>{{ $p -> nama_pic }}</td>
                <td>{{ $p -> alamat }}</td>
                <td>{{ $p -> no_hp_pic }}</td>
                <td>{{ $p -> post -> deskripsi_ref_produk }}</td>
                <td>{{ $p -> tiga -> deskripsi_server }}</td>
                <td>{{ $p -> tiga -> ip_address }}</td>
                <td>{{ $p -> empat -> deskripsi_template_ibslite }}</td>
                <td>{{ $p -> lima -> deskripsi_sc }}</td>
                <td>{{ $p -> sub_domain }}</td>
                <td>{{ $p -> nama_database }}</td>
                <td>{{ $p -> user_database }}</td>
                <td>{{ $p -> kode_lkm }}</td>
                <td>{{ $p -> type_koperasi }}</td>
                <td>{{ $p -> port }}</td>
                <td>{{ $p -> tgl_setup }}</td>
                <td>{{ $p -> status_service_gwlite }}</td>
                <td>{{ $p -> status_service_gwlkm }}</td>
                <td>{{ $p -> status_service_gwibslite }}</td>
                <td>{{ $p -> status_service_ereg }}</td>
                <td>{{ $p -> status_service_core }}</td>
                <td>{{ $p -> status_service_marketplace}}</td>
                <td>{{ $p -> status_va }}</td>
                <td>{{ $p -> status_kartu_santri }}</td>
                <td>{{ $p -> status_mikropay }}</td>
                <td>{{ $p -> status_qris }}</td>
                <td>{{ $p -> kabupaten }}</td>
                <td>{{ $p -> provinsi }}</td>
                <td>{{ $p -> data_migrasi }}</td>
                <td>{{ $p -> status_pks }}</td>
                <td>{{ $p -> kode_ikm }}</td>
                <td>{{ $p -> kode_bon_va }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    <div class="mb-3">
        {{ $posts->links('pagination::bootstrap-5') }}
    </div>
</div>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    //   $("#produk").on("keyup", function() {
    //     var value = $(this).val().toLowerCase();
    //     $("#myTable tr").filter(function() {
    //       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    //     });
    //   });
    });
</script>

@endsection
