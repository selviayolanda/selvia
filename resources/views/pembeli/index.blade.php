@extends('template.main')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Data pembeli</h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id pembeli</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>No telp</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pembeli as $data)
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$data->id_pembeli}}</td>
                                                <td>{{$data->nama}}</td>
                                                <td>{{$data->alamat}}</td>
                                                <td>{{$data->no_telp}}</td>
                                                <td>
                                                    <a href="{{url('/pembeli/edit/'.$data->id_pembeli)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil" ></i>Edit</a>
                                                    <a href="{{url('/pembeli/destroy/'.$data->id_pembeli)}}" class="btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
	</div>
</div>
@endsection