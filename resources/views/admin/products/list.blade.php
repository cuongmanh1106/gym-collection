@extends('admin.include.layout');
@section('title','List of products');
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
                Advanced Table
              </header>
              <div class="nav search-row" id="top_menu">
              <ul class="nav top-menu">
                <li>
                  <form class="navbar-form">
                    <input class="form-control" placeholder="Search" type="text" onkeyup="search(this.value,'show','{{ route('admin.products.search') }}')">
                  </form>
                </li>
              </ul>
            
            </div>
              @foreach(['success','danger','info','warning'] as $msg)
                @if(Session::has('alert-'.$msg))
                  <h4 class="alert alert-{{ $msg }}">{{ Session::get('alert-'.$msg) }}<button class="close" data-dismiss="alert" aria-label="close">&times;</button></h4>
                @endif
              @endforeach
              <div id="show">
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> ID</th>
                    <th><i class="icon_calendar"></i> Name</th>
                    <th><i class="icon_mail_alt"></i> Category</th>
                    <th><i class="icon_pin_alt"></i> Price</th>
                    <th><i class="icon_pin_alt"></i> Introduce</th>
                    <th><i class="icon_pin_alt"></i> Description</th>
                    <th><i class="icon_pin_alt"></i> Image</th>
                    <th><i class="icon_pin_alt"></i> View</th>
                    <th><i class="icon_pin_alt"></i> date</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  @foreach($products as $product)
                  <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>
                    <?php
                      $cate = DB::table('categories')->where('id',$product->cate_id)->first();
                      echo $cate->name;
                    ?>
                    </td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->intro }}</td>
                    <td>{{ $product->description }}</td>
                    <td><img src="{{ asset('/public/img/') }}/{{ $product->image }}" width="150px" /> </td>
                    <td>{{ $product->view }}</td>
                    <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->diffForHumans()}}</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="{{ route('admin.products.edit',$product->id) }}" title="Edit"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="{{ route('admin.sizes.list',$product->id) }}"><i class="icon_check_alt2" title="sizes"></i></a>
                        <a class="btn btn-danger" onclick="return check_delete()" href="{{ route('admin.products.delete',$product->id) }}"><i class="icon_close_alt2"></i></a>
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
        {{ $products->links() }}
      </section>
    </section>
@endsection