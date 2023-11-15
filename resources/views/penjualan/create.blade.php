@extends('template.main')
@section('content')
<div class="container-fluid">
	<div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Tambah data penjualan</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('simpan_transaksi')}}" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-body">
                                        <h3 class="card-title m-t-15">silahkan isi form berikut</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">No penjualan</label>
                                                    <input type="text" id="id_penjualan" name="id_penjualan" class="form-control" value="{{$nomat}}" readonly="">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Id pembeli</label>
                                                        <input type="text" class="form-control" name="id_pembeli" id="id_pembeli" onkeyup="pembeli()">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nama pembeli</label>
                                                    <input type="text" class="form-control" id="nama" name="nama">
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Id barang</label>
                                                    <input type="text" class="form-control" name="id_barang" id="id_barang" onkeyup="barang()">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Nama barang</label>
                                                    <input type="text" class="form-control" name="nama_barang" id="nama_barang">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Harga</label>
                                                    <input type="text" class="form-control" name="harga" id="harga">
                                                </div>
                                            </div>
                                           
                                            <!--/span-->
                                        </div>
                                        <div class="row">
                                        	 <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Jumlah beli</label>
                                                    <input type="text" class="form-control" name="jumlah_beli" id="jumlah_beli" onkeyup="jml_beli()">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Sub total</label>
                                                    <input type="text" class="form-control" name="sub_total" id="sub_total">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                            	<div class="form-group">
                                            		<label class="control-label">&nbsp;</label><br>
                                            	<a href="javascript:void(0)" onclick="TambahRow()" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                                            	</div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    
                                <div class="table-responsive m-t-40">
                                    <div class="kotak_detail">
                                        <table id="myTable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama barang</th>
                                                    <th>Harga</th>
                                                    <th>Jumlah beli</th>
                                                    <th>Sub total</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="add-row">
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label>Total</label>
                                                    <input type="text" class="form-control" name="total" id="total">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label>Bayar</label>
                                                    <input type="text" class="form-control" name="bayar" id="bayar" onkeyup="kembalian()">
                                                </div>
                                            </div>
                                            <div class="col-md-4 ">
                                                <div class="form-group">
                                                    <label>Kembali</label>
                                                    <input type="text" class="form-control" name="kembali" id="kembali">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    
                </div>
</div>
@endsection
@push('bottom')
<script type="text/javascript">
	function pembeli(){
		idd = $("#id_pembeli").val()
		if (idd==''){
			$('#nama').val('');
		}
		$.ajax({
			url:"{{route('pembeli/cari')}}",
			type:"GET",
			dataType:"json",
			data:{
				id:$("#id_pembeli").val()
			},
			success:function(hasil){
				if (hasil.val==0) {
					// alert('data tidak ditemukan ');
					$('#nama').val('');

				}else if(hasil.val==2){
					// alert('data tidak ditemukan 2');
					$('#nama').val('');
				}else{
					//alert('data tidak ditemukan 3');
					$('#nama').val(hasil.data.nama);
				}
			}
		});
	}

    function barang(){
        idd = $("#id_barang").val()
        if (idd==''){
            $('#nama_barang').val('');
            $('#harga').val('');
        }
        $.ajax({
            url:"{{route('barang/cari')}}",
            type:"GET",
            dataType:"json",
            data:{
                id:$("#id_barang").val()
            },
            success:function(hasil){
                if (hasil.val==0) {
                    // alert('data tidak ditemukan ');
                    $('#nama_barang').val('');
                    $('#harga').val('');
                }else if(hasil.val==2){
                    // alert('data tidak ditemukan 2');
                    $('#nama_barang').val('');
                    $('#harga').val('');
                }else{
                    //alert('data tidak ditemukan 3');
                    $('#nama_barang').val(hasil.data.nama_barang);
                    $('#harga').val(hasil.data.harga);
                }
            }
        });
    }

    function jml_beli(){
        hrg=document.getElementById('harga').value;
        jml=document.getElementById('jumlah_beli').value;
        total = hrg*jml;
        document.getElementById('sub_total').value=total;
    }

    function TambahRow(){
        var jumlah = parseInt($('#jumlah_beli').val())
        var jumlah_pinjam =parseInt($('#jumlah_beli').val())
        if (jumlah_pinjam>jumlah) {
            alert('stok data tidak mencukupi untuk dibeli')
            $('#jumlah_beli').val('')
        }else{
            val = $('#nama').val()
            if (val=='') {
                alert('data kosong')
            }else{
                i = 1;
                elem  = '<tr>'+
                '<td>'+i+'<input type="hidden" name="dt_id_barang[]" id="dt_id_barang" value="'+$('#id_barang').val()+'"></td>'+
                '<td>'+$('#nama').val()+'<input type="hidden" value="'+$('#jumlah_beli').val()+'" name="dt_jumlah_beli[]" id="dt_jumlah_beli"></td>'+
                '<td>'+$('#harga').val()+'<input type="hidden" name="dt_harga[]" id="dt_harga" value="'+$('#harga').val()+'"></td>'+
                '<td>'+$('#jumlah_beli').val()+'</td>'+
                '<td>'+$('#sub_total').val()+ '<input type="hidden" name="dt_sub_total[]" id="dt_sub_total" value="'+$('#sub_total').val()+'"></td>'+

                '<td>'+
                    '<a href="javascript:void(0)" onclick="Delete(this)"class="btn btn-danger btn-sm">Hapus</a>'+
                '</td>'+
            '</tr>'

            $('#add-row').append(elem);

            totsb=0;
                sbt=$('#sub_total').val();
                var table =document.getElementById("add-row");
                for(var t=0;t<table.rows.length;t++){
                    totsb=parseInt(totsb)+parseInt(table.rows[t].cells[4].innerHTML);
                }
                $("#total").val(totsb);

                Clean();
                i=i+1;
            }
        }
    }

    function Clean(){
        $('#id_barang').val('')
        $('#nama_barang').val('')
        $('#harga').val('')
        $('#jumlah_beli').val('')
        $('#sub_total').val('')
    }
    function Delete(e){
        $(e).parent().parent().remove()
    }
    function kembalian(){
        total=document.getElementById('total').value;
        bayar=document.getElementById('bayar').value;
        kembali = bayar-total;
        document.getElementById('kembali').value=kembali;

    }
    function simpan_transaksi(){
        $.ajax({
        url:"{{route('simpan_transaksi')}}",
        type:'POST',
        dataType:'json',
        data:{
            "_token":"{{csrf_token()}}",
            id_penjualan:$('#id_penjualan').val(),
            id_pembeli:$('#id_pembeli').val(),
            total:$('#total').val(),
            bayar:$('#bayar').val(),
            dt_id_barang:$('#dt_id_barang').val(),
            dt_jumlah_beli:$('#dt_jumlah_beli').val(),
            dt_sub_total:$('#dt_sub_total').val()
        },
        success:function(hasil){
            alert(hasil);
            return hasil;

            bersih();
        },
        error:function(jqXHR, textStatus, errorThrown) {
            alert('gagall');
        }
    });
    }

</script>
@endpush