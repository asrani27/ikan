@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Edit pemasaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="/superadmin/pemasaran/edit/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal" class="form-control" required value="{{$data->tanggal}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Pemasaran</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" required value="{{$data->nama}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Usaha</label>
                    <div class="col-sm-10">
                      <input type="text" name="usaha" class="form-control" required value="{{$data->usaha}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control" required value="{{$data->alamat}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Produk Ikan</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="ikan_id">
                        <option value="">-pilih-</option>
                        @foreach ($ikan as $item)
                            <option value="{{$item->id}}" {{$data->ikan_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">tujuan</label>
                    <div class="col-sm-10">
                      <input type="text" name="tujuan" class="form-control" required value="{{$data->tujuan}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">jumlah</label>
                    <div class="col-sm-10">
                      <input type="text" name="jumlah" class="form-control" required value="{{$data->jumlah}}" onkeypress="return hanyaAngka(event)">
                    </div>
                  </div>
                
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Update</button>
                      <a href="/superadmin/pemasaran" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                  </div>
              </div>
            </form>
          </div>
    </div>
   </div>
    
</section>


@endsection
@push('js')


<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))

      return false;
    return true;
  }
</script>
@endpush

