@extends('layouts.app')
@push('css')
    
@endpush
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-clipboard"></i> Data ikan</h3>
    
              <div class="box-tools">
                <a href="/superadmin/ikan/create" class="btn btn-sm btn-success "><i class="fa fa-plus-circle"></i> Tambah</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Nama</th>
                    <th>harga</th>
                    <th>jenis</th>
                    <th>keadaan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $key => $item)
                <tr>
                    <td class="text-center">{{1 + $key}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->jenis}}</td>
                    <td>{{$item->keadaan}}</td>
                    <td>
                        <a href="/superadmin/ikan/edit/{{$item->id}}" class="btn btn-xs btn-flat  btn-success"><i class="fa fa-edit"></i></a>
                        <a href="/superadmin/ikan/delete/{{$item->id}}"
                            onclick="return confirm('Yakin ingin di hapus');"
                            class="btn btn-xs btn-flat  btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
          
        </div>
    </div>
</section>


@endsection
@push('js')

<!-- DataTables -->

@endpush

