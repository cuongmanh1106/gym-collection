@extends('admin.include.layout')
@section('title','Lsit of size')
@section('content')
<section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Basic Table</li>
            </ol>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                List sizes of {{ $product->name }}
              </header>


              @foreach(['success','danger','info','warning'] as $msg)
                @if(Session::has('alert-'.$msg))
                  <h4 class="alert alert-{{ $msg }}">{{ Session::get('alert-'.$msg) }}<button class="close" data-dismiss="alert" aria-label="close">&times;</button></h4>
                @endif
              @endforeach
              <div id="show_cate"><!--show search-->
                <table class="table table-striped table-advance table-hover">
                  <tbody>
                    <tr>
                      <th><i class="icon_profile"></i> ID</th>
                      <th><i class="icon_calendar"></i> Size</th>
                      <th><i class="icon_cogs"></i> Action</th>
                    </tr>
                   
                    @foreach($sizes as $size)
                    <tr>
                      <td>{{ $size->id }}</td>
                      
                      <td>{{ $size->size }}</td>
                      <td>
                        <div class="btn-group">
                         
                          <a class="btn btn-danger" onclick="return check_delete()" href="{{ route('admin.sizes.delete',$size->id)}}"><i class="icon_close_alt2"></i></a>
                        </div>
                      </td>
                    </tr>
                   @endforeach
                  </tbody>

                </table>

              </div>
            </section>
          </div>
        </div>
        <a class="btn btn-success" href="{{ route('admin.sizes.create',$product_id) }}">Insert</a>
        <a class="btn btn-success" href="{{ route('admin.products.list') }}">Back</a>
      </section>
    </section>
@endsection