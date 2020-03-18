@extends('product.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new product</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('product.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama">

                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kategori" class="col-md-4 control-label">Kategori</label>

                            <div class="col-md-6">
                                <select name="kategori" class="form-control" id="kategori">
                                    
                                    <option value="P">P</option>
                                    <option value="L">L</option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi" class="col-md-4 control-label">Deskripsi</label>
                            <div class="col-md-6">
                                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="stok" class="col-md-4 control-label">Jumlah Stok</label>

                            <div class="col-md-6">
                                <input id="stok" type="number" class="form-control" name="stok">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah Data
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
