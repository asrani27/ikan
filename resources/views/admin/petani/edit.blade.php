@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
   <div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Edit petani</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="/superadmin/petani/edit/{{$data->id}}" method="post">
                @csrf
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nomor</label>
                    <div class="col-sm-10">
                      <input type="text" name="nomor" class="form-control" required value="{{$data->nomor}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" required value="{{$data->nama}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jkel</label>
                    <div class="col-sm-10">
                          <select name="jkel" class="form-control" required>
                              <option value="L" {{$data->jkel == 'L' ? 'selected':''}}>L</option>
                              <option value="P" {{$data->jkel == 'P' ? 'selected':''}}>P</option>
                          </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tgl LAhir</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal" class="form-control" required value="{{$data->tanggal}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control" required value="{{$data->alamat}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">keterangan</label>
                    <div class="col-sm-10">
                      <input type="text" name="keterangan" class="form-control" required value="{{$data->keterangan}}">
                    </div>
                  </div>
                
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-success btn-block"><i class="fa fa-save"></i> Update</button>
                      <a href="/superadmin/petani" class="btn bg-gray btn-block"><i class="fa fa-arrow-left"></i> Kembali</a>
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

