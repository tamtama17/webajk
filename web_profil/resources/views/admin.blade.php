@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    @if ($message = Session::get('success'))
                      <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                          <strong>{{ $message }}</strong>
                      </div>
                    @endif

                    @if ($message = Session::get('error'))
                      <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                      </div>
                    @endif

                    @if ($message = Session::get('warning'))
                      <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    @if ($message = Session::get('info'))
                      <div class="alert alert-info alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                      </div>
                    @endif                    
                    <h3>Admin AJK</h3>
                    <br>
                    <div class="container" style="text-align: center;">
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-dark">
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>NRP</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <p hidden>{{$i=1}}</p>
                                @foreach($var as $var)
                                <tr>
                                    <td> {{$i++}} </td>
                                    <td><a data-toggle="modal" data-target="#editModal{{$var->id}}" style="cursor: pointer;">{{$var->nama_admin}}</a></td>
                                    <td>{{$var->NRP}}</td>
                                    <td>{{$var->jabatan_admin}}</td>
                                </tr>
                                <div class="modal" id="editModal{{$var->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Data Admin</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                              @if( $var->foto_admin == NULL )
                                              <img src="default.png" style="width: 50%;">
                                              @else
                                              <img src="/foto_profil/{{$var->foto_admin}}" style="width: 50%;">
                                              @endif
                                              <form action="{{ url('/edit_admin',['id' => $var->id]) }}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <fieldset>
                                                <input type="file" name="foto_admin" accept=".png, .jpg, .jpeg">
                                                <br><br>
                                                <input class="form-control" placeholder="Nama Lengkap" name="nama_admin" value="{{$var->nama_admin}}">
                                                <br>
                                                <input class="form-control" placeholder="NRP" name="NRP" value="{{$var->NRP}}">
                                                <br>
                                                <input class="form-control" placeholder="Jabatan" name="jabatan_admin" value="{{$var->jabatan_admin}}">
                                                </fieldset>
                                            </div>
                                            <div class="modal-footer">
                                              <button class="btn btn-info">Simpan</button>
                                              </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal tambah item -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Input Data Barang</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{ url('/input_barang') }}" method="POST">
        {{ csrf_field() }}
            <fieldset>
            <div class="form-group">
              <label for="exampleInputPassword1">Jenis Barang</label>
              <input class="form-control" id="exampleInputPassword1" placeholder="Jenis" type="text" name="jenis_barang">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Merk Barang</label>
              <input class="form-control" id="exampleInputPassword1" placeholder="Merk" type="text" name="merek_barang">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Jumlah Barang</label>
              <input class="form-control" id="exampleInputPassword1" placeholder="Jumlah" type="number" min="1" name="jumlah_barang">
            </div>
            </fieldset>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection