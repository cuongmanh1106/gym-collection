@extends('admin.include.layout')
@section('title','List of Bills')
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
                      <th><i class="icon_calendar"></i>Customer</th>
                      <th><i class="icon_mail_alt"></i>Total</th>
                      <th><i class="icon_cogs"></i> Action</th>
                    </tr>
                    @foreach($bills as $bill)
                    <?php 
                      $cus = DB::table('users')->where('id',$bill->member_id)->first();
                    ?>
                    <tr
                    @if($bill->status == 0)
                    	style ="font-weight:bold; font-size: 18px"
                    @endif
                    >
                      <td>{{ $bill->id }}</td>
                      <td>{{ $cus->name }}</td>
                      <td>${{ $bill->total }}</td>
                      <td>
                        <div class="btn-group">
                         
                          <a class="btn btn-success" href="{{ route('admin.bills.detail',$bill->id) }}"><i class="icon_check_alt2"></i></a>
                         
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
        {{$bills->links()}}
      </section>
    </section>
@endsection