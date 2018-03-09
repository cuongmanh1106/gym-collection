@extends('admin.include.layout')
@section('title','List of Detail Bill')
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

             <!--  <div class="nav search-row" id="top_menu">
              <ul class="nav top-menu">
                <li>
                  <form class="navbar-form">
                    <input class="form-control" placeholder="Name of category" type="text" onkeyup="search(this.value,'show_cate','{{ route('admin.categories.search') }}')">
                  </form>
                </li>
              </ul>
            
            </div> -->

             
              <div id="show_cate"><!--show search-->
                <table class="table table-striped table-advance table-hover">
                  <tbody>
                    <tr>
                      <th><i class="icon_profile"></i> ID</th>
                      <th><i class="icon_calendar"></i>Product</th>
                      <th><i class="icon_mail_alt"></i>Size</th>
                      <th><i class="icon_cogs"></i> Quanlity</th>
                      <th><i class="icon_cogs"></i> Price</th>
                      <th><i class="icon_cogs"></i> Total</th>
                    </tr>
                    <?php
                    	$total = 0;
                    ?>
                    @foreach($details as $d)
                    <?php 
                      $pro = DB::table('products')->where('id',$d->product_id)->first();
                      $total +=  $d->total*$d->quanlity;
                    ?>
                    <tr>
                      <td>{{ $d->id }}</td>
                      <td>{{ $pro->name }}</td>
                      <td>{{ $d->size }}</td>
                      <td>{{ $d->quanlity }}</td>
                      <td>${{ $d->total }}</td>
                      <td>${{ $d->total*$d->quanlity }}</td>
                    </tr>
                    @endforeach
                  </tbody>

                </table>
                <h2>Total: ${{ $total }}</h2>
              </div>
            </section>
          </div>
        </div>
        <a class="btn btn-success" href="{{route('admin.bills.list')}}">Back</a>
      </section>
    </section>
@endsection