@extends('layouts.app')

@section('title')
Data Pembeli
@endsection

@section('content')

<body>
    <h1>Data Pembeli<img align="right" src="https://i.ibb.co/DpbskFt/Ud-Wangi-Agung.png" alt="Ud-Wangi-Agung" border="0" width="200" height="80"></h1>
    <form class="form-inline my-2 my-lg-3" action="/keuangan/data_pembeli/search" method="GET">
      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Cari Nama Pembeli" aria-label="Search" value="{{ old('search') }}">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> 
    <div align="right">
    <a href="/keuangan/tambahpembeli" class="btn btn-link mb-3"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Pembeli</a>
    <a href="/keuangan/grafik" class="btn btn-success mb-3">Modal</a>
    </div>
    

    

    <table class="table table-hover" align="center">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pembeli</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">Email</th>
                <th scope="col">Kode Pembeli</th>
                <th scope="col"></th>
            </tr>
  </thead>
  <tbody>
    @foreach($data_pembelis as $pembeli)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
            <td>{{$pembeli->nama_pembeli}}</td>
            <td>{{$pembeli->alamat_pembeli}}</td>
            <td>{{$pembeli->nomor_hp}}</td>
            <td>{{$pembeli->email_pembeli}}</td>
            <td>{{$pembeli->kode_pembeli}}</td>
        <td>
        <a href="/keuangan/{{$pembeli->id}}/riwayat" class="btn btn-success btn-sm">Riwayat</a>
        </td>
    </tr>
    @endforeach



    </tbody>
    </table>
    <P class="font-weight-bold">
    Halaman :  {{ $data_pembelis->currentPage() }}<br/>
    Jumlah Seluruh Pembeli :  {{ $data_pembelis->total() }}<br/>
    </P>
    {{ $data_pembelis->links() }}
</body>

@endsection