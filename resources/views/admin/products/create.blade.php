@extends('admin.include.layout');
@section('title','Insert a product');
@section('content')
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
              <form class="form-validate form-horizontal" enctype="multipart/form-data" id="feedback_form" method="post" action="{{ route('admin.products.store') }}">
              	{{ csrf_field() }}
              	@if (count($errors) > 0)
                <ul>
                  @foreach($errors->all() as $err)
                    <li style="color: red">{{ $err }}</li>
                  @endforeach
                </ul>
                @endif
                
                <div class="form-group ">
                  <label for="cname" class="control-label col-lg-2">Name <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control" name="name" id="name" name="fullname" minlength="1" type="text"  />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="curl" class="control-label col-lg-2">Parent Category <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <select class="form-control" name="cate_id">
                      <?php cate_parent($cates); ?>
                	</select>
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cemail" class="control-label col-lg-2">Price <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control " id="price" type="text" name="price" />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="cemail" class="control-label col-lg-2">Introduce <span class="required">*</span></label>
                  <div class="col-lg-10">
                    <input class="form-control " id="intro" type="text" name="intro" />
                  </div>
                </div>
                <div class="form-group ">
                  <label for="ccomment" class="control-label col-lg-2">Description Detail</label>
                  <div class="col-lg-10">
                    <textarea class="form-control " id="description" name="description" required style="
height: 214px;""></textarea>
                  </div>
                </div>
                <div class="form-group">
                	<label for="cemail" class="control-label col-lg-2">Image <span class="required">*</span></label>
	                <div class="col-lg-10">
	                	<input type="file" name="image" id="exampleInputFile">
	                </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn btn-default" type="button" onclick="window.location='{{ route('admin.products.list') }}'">Cancel</button>
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
@endsection