@extends('product.base')
@section('action-content')
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header">
            <div class="row">
                <div class="col-sm-8">
                <h3 class="box-title">List of product</h3>
                </div>
                <div class="col-sm-4">
                <a class="btn btn-primary" href="{{ route('product.create') }}">Add new product</a>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
  <div class="box-body">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6"></div>
      </div>
      <form method="POST" action="{{ route('user-management.search') }}">
         {{ csrf_field() }}
         @component('layouts.search', ['title' => 'Search'])
          @component('layouts.two-cols-search-row', ['items' => ['User Name', 'First Name'], 
          'oldVals' => [isset($searchingVals) ? $searchingVals['username'] : '', isset($searchingVals) ? $searchingVals['firstname'] : '']])
          @endcomponent
          </br>
          @component('layouts.two-cols-search-row', ['items' => ['Last Name', 'Department'],
          'oldVals' => [isset($searchingVals) ? $searchingVals['lastname'] : '', isset($searchingVals) ? $searchingVals['department'] : '']])
          @endcomponent
        @endcomponent
      </form>
    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-12">
          <table id="example1" class="table table-bordered table-hover" role="grid" aria-describedby="example1">
            <thead>
              <tr role="row">
                <th>Nama</th>
                <th>Kategori</th>
                <th>Deskripsi</th>
                <th>Stok</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data_product as $product)
                <tr>
                    <td>{{$product->nama}}</td>
                    <td>{{$product->kategori}}</td>
                    <td>{{$product->deskripsi}}</td>
                    <td>{{$product->stok}}</td>
                    <td>
                        <a href="{{ route('product.edit', ['id' => $product->id]) }}" type="button" class="btn btn-warning  col-sm-3  btn-margin">
                        Update
                        </a>
                        <a href="{{ route('product.destroy', ['id' => $product->id]) }}" type="button" class="btn btn-danger col-sm-3 btn-margin">
                        Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th width="10%" rowspan="1" colspan="1">Nama</th>
                <th width="20%" rowspan="1" colspan="1">Kategori</th>
                <th class="hidden-xs" width="20%" rowspan="1" colspan="1">Deskripsi</th>
                <th class="hidden-xs" width="20%" rowspan="1" colspan="1">Stok</th>
                <th rowspan="1" colspan="2">Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
      <div class="row">
      <div class="col-sm-5">
          <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($data_product)}} of {{count($data_product)}} entries</div>
        </div>
        <div class="col-sm-7">
          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-body -->
  
</div>
    </section>
    <!-- /.content -->
  </div>
@endsection