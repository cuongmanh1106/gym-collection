@extends('admin.include.layout');
@section('title','Categories');
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
              @foreach(['success','danger','info','warning'] as $msg)
                @if(Session::has('alert-'.$msg))
                  <h4 class="alert alert-{{ $msg }}">{{ Session::get('alert-'.$msg) }}<button class="close" data-dismiss="alert" aria-label="close">&times;</button></h4>
                @endif
              @endforeach
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> ID</th>
                    <th><i class="icon_calendar"></i> Name</th>
                    <th><i class="icon_mail_alt"></i> Parent</th>
                    <th><i class="icon_pin_alt"></i> Description</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  @foreach($cates as $cate)
                  <tr>
                    <td>{{ $cate->id }}</td>
                    <td>{{ $cate->name }}</td>
                    <td>
                      @if($cate->parent_id == 0)
                        {{"None"}}
                      @else
                        <?php
                          $parent = DB::table('categories')->where('id',$cate->parent_id)->first();
                          echo $parent->name;
                        ?>
                      @endif

                    </td>
                    <td>{{ $cate->description }}</td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="{{ route('categories.edit',$cate->id) }}"><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                        <a class="btn btn-danger" onclick="return check_delete()" href="{{ route('categories.delete',$cate->id) }}"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>

              </table>
              
            </section>
          </div>
        </div>
        
      </section>
    </section>
@endsection