@extends('template.main')
@section('content')
<div class="container-fluid">
	 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Edit data Pengguna</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form  action="{{url('/pengguna/update/'.$pengguna->id_user)}}" method="post" class="form-horizontal">
                                    	{{csrf_field()}}
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" id="username" value="{{$pengguna->username}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" name="password" id="password" value="{{$pengguna->password}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" id="level">
                                            <option @if ($pengguna->level==$pengguna->level)selected=""@endif value="{{$pengguna->level }}">{{$pengguna->level }}</option>
                                            <option>--pilih--</option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="kasir">Kasir</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Edit</button>
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