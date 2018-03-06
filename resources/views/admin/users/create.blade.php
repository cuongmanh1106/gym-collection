@extends('admin.include.layout')
@section('title','Insert a user')
@section('content')

<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
          <li><i class="icon_document_alt"></i>Forms</li>
          <li><i class="fa fa-files-o"></i>Form Validation</li>
        </ol>
      </div>
    </div>
    <!-- Form validations -->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Insert a user
          </header>
          @foreach(['danger', 'warning', 'success', 'info'] as $msg)
          	@if(Session::has('alert-'.$msg))
          	<h4 class="alert alert-{{ $msg }}">{{ Session::get('alert-'.$msg) }}<button class="close" data-dismiss="alert" aria-label="close">&times;</button></h4>
          	@endif
          @endforeach
          <div class="panel-body">
            <div class="form">
              <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{ route('admin.users.store') }}">
              	{{ csrf_field() }}
              	@if (count($errors) > 0)
                <ul>
                  @foreach($errors->all() as $err)
                    <li style="color: red">{{ $err }}</li>
                    <!--<script type="text/javascript">alert('{!! $err !!}')</script>-->
                  @endforeach
                </ul>
                @endif
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Name <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" name="name" id="name" name="fullname" minlength="5" type="text" required />
                  </div>
                </div>
                 <div class="form-group ">
                  <label for="curl" class="control-label col-lg-2">Role  <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <select class="form-control" name="role">
                      @foreach($roles as $role)
                      <option value="{{ $role->id }}">{{ $role->name }}</option>
                      @endforeach
                	</select>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control " id="cemail" type="email" name="email" required />
                  </div>
                </div>
               
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Password <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="password" name="password" minlength="5" type="password" required />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Confirm-Password <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" id="conf-password" name="conf-password" minlength="5" type="password" required />
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-primary" onclick="return check_login()" type="submit">Save</button>
                    <button class="btn btn-default" type="button" onclick="window.location='{{ route('admin.users.list') }}'">Cancel</button>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </section>
      </div>
    </div>
    <!-- page end-->
  </section>
</section>
<!--main content end-->
    
@endsection
