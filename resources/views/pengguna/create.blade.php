@extends('template.main')
@section('content')

<div class="container-fluid">
	 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Tambah Data</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{url('/pengguna/store')}}" method="post" class="from-horizontal">
                                    	{{csrf_field()}}
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="masukkan Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" id="level" name="level" name="level">
                                            <option>--pilih--</option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="kasir">Kasir</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <!-- /# column -->
                </div>
</div>
@endsection