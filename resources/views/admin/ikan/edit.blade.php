@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Edit ikan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="/superadmin/ikan/edit/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" required value="{{$data->nama}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
                    <div class="col-sm-10">
                      <input type="text" name="harga" class="form-control" required value="{{$data->harga}}" onkeypress="return hanyaAngka(event)"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">jenis</label>
                    <div class="col-sm-10">
                      <input type="text" name="jenis" class="form-control" required value="{{$data->jenis}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">keadaan</label>
                    <div class="col-sm-10">
                      <input type="text" name="keadaan" class="form-control" required value="{{$data->keadaan}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Simpan</button>
                      <a href="/superadmin/ikan" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
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

@endpush

