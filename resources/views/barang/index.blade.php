@extends('template.main')
@section('content')
<div class="container fluid">
	<div class="row">
		 <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Data Barang</h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover ">
                                        <thead>                               	
                                            <tr>
                                                <th>#</th>
                                                <th>Id barang</th>
                                                <th>Nama barang</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Tanggal Expired</th>
                                                <th>Jenis barang</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach ($barang as $data)
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$data->id_barang}}</td>
                                                <td>{{$data->nama_barang}}</td>
                                                <td>{{$data->harga}}</td>
                                                <td>{{$data->stok}}</td>
                                                <td>{{$data->tgl_expired}}</td>
                                                <td>{{$data->jenis->nama_jenis}}</td>
                                                <td>
                                                	<a href="{{url('/barang/edit/'.$data->id_barang)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                	<a href="{{url('/barang/destroy/'.$data->id_barang)}}" onclick="return confirm('apakah anda yakin hapus data ini')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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