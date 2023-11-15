@extends('template.main')
@section('content')
<div class="container-fluid">
	<div class="row">
	                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Data penjualan </h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>id penjualan</th>
                                                <th>pembeli</th>
                                                <th>total</th>
                                                <th>bayar</th>
                                                <th>petugas</th>
                                                <th>Tanggal dan waktu transaksi</th>
                                                <th>aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($query as $data)
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$data->id_penjualan}}</td>
                                                <td>{{$data->nama}}</td>
                                                <td>{{$data->total}}</td>
                                                <td>{{$data->bayar}}</td>
                                                <td>{{$data->level}}</td>
                                                <td>{{$data->created_at}}</td>
                                                <td>
                                                	<a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i>Detail</a>
                                                </td>
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