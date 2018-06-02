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
                    <h3>Inventaris AJK</h3>
                    <button type="button" class="btn btn-success btn-sm mr-3" style="float: right;" data-toggle="modal" data-target="#myModal">
                      Add Item
                    </button>
                    <br><br>
                    <div class="container" style="text-align: center;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Barang</th>
                                    <th>Merk Barang</th>
                                    <th>Jumlah</th>
                                    <th style="column-span: 2;">Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <p hidden>{{$i=1}}</p>
                                @foreach($var as $var)
                                <tr>
                                    <td> {{$i++}} </td>
                                    <td>{{$var->jenis_barang}}</td>
                                    <td>{{$var->merek_barang}}</td>
                                    <td>{{$var->jumlah_barang}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-info" data-toggle="modal" style="color: white" data-target="#editModal{{$var->id}}">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="{{ url('/deled',['id' => $var->id]) }}">Delte</a>
                                    </td>
                                </tr>
                                <div class="modal" id="editModal{{$var->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Data Barang</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>                
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ url('/edit_barang',['id' => $var->id]) }}" method="POST">
                                                {{ csrf_field() }}
                                                <fieldset>
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1">Jenis Barang</label>
                                                  <input class="form-control" id="exampleInputPassword1" placeholder="Jenis" type="text" name="jenis_barang" value="{{$var->jenis_barang}}">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1">Merk Barang</label>
                                                  <input class="form-control" id="exampleInputPassword1" placeholder="Merk" type="text" name="merek_barang" value="{{$var->merek_barang}}">
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputPassword1">Jumlah Barang</label>
                                                  <input class="form-control" id="exampleInputPassword1" placeholder="Jumlah" type="number" min="1" name="jumlah_barang" value="{{$var->jumlah_barang}}">
                                                </div>
                                                </fieldset>                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-info">Save</button>
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