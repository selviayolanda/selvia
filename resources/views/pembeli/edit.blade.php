@extends('template.main')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Edit data</h4>

                            </div>
                            <div class="card-body">
                                <div class="horizontal-form">
                                    <form class="form-horizontal" method="POST" action="{{url('/pembeli/update/'.$pembeli->id_pembeli)}}">
                                    	{{csrf_field()}}
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label">Nama</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="nama" name="nama" value="{{$pembeli->nama}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Alamat</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{$pembeli->alamat}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">No telp</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{$pembeli->no_telp}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
	</div>
</div>
@endsection