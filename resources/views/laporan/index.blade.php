@extends('template.main')
@section('content')
<div class="container-fluid">
	<div class="row">
	                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Pencarian laporan perbulan</h4>
                                <div class="col-md-6">
                            <a href="{{url('/laporan/cetak?bulan='.Request::get('bulan'))}}" target="_blank" class="btn btn-primary key">Cetak</a> <br><br>
                            <form class="navbar-from navbar-right" role="search" action="{{url('laporan')}}">
                                <div class="input-group">
                                    <select class="form-control custom-select" name="bulan" tabindex="1">
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                        <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>id penjualan</th>
                                                <th>pembeli</th>
                                                <th>nama barang</th>
                                                <th>jumlah beli</th>
                                                <th>sub total</th>
                                                <th>total</th>
                                                <th>bayar</th>
                                                <th>Tanggal dan waktu transaksi</th>
                                                <th>petugas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($data as $query)
                                            <tr>
                                                <th>{{$loop->iteration}}</th>
                                                <th>{{$query->id_penjualan}}</th>
                                                <th>{{$query->nama}}</th>
                                                <th>{{$query->nama_barang}}</th>
                                                <th>{{$query->jumlah_beli}}</th>
                                                <th>{{$query->sub_total}}</th>
                                                <th>{{$query->total}}</th>
                                                <th>{{$query->bayar}}</th>
                                                <th>{{$query->created_at}}</th>
                                                <th>{{$query->username}}</th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
    </div>
</div>
@endsection