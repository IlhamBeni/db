<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Lembaga</h1>

<table id="customers">
  <tr>
    <th>Nama Lembaga</th>
    <th>PIC</th>
    <th>Alamat</th>
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
    <th>status service ereg</th>
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
  @foreach($data as $p)
  <tr>
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
    <td>{{ $p -> status_service_ereg }}</td>
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
  <tr>
</table>
</body>
</html>


