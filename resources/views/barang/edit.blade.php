@extends('template.main')
@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Edit data barang</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{url('barang/update/'.$barang->id_barang)}}">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label>Nama barang</label>
                                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{$barang->nama_barang}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" class="form-control" id="harga" name="harga" value="{{$barang->harga}}">
                                        </div> 
                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input type="text" class="form-control" id="stok" name="stok" value="{{$barang->stok}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tgl Expired</label>
                                            <input type="date" class="form-control" id="tgl_expired" name="tgl_expired" value="{{$barang->tgl_expired}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis barang</label>
                                            <select class="form-control" id="id_jenis" name="id_jenis">
                                            <option>--pilih--</option>
                                            @foreach ($jenis as $data)
                                            <option @if ($data->id_jenis==$barang->id_jenis) selected="" @endif  value="{{$data->id_jenis}}">{{$data->nama_jenis}}</option>
                                            @endforeach
                                       		</select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
	</div>
</div>
@endsection