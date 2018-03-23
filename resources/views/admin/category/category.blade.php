@extends('admin/layouts/app')

@section('main-content')


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

                  <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            @include('includes/messages')
            
            <form role="form" action = "{{ route('category.store') }}" method = "post">

              {{ csrf_field() }}

              <div class="box-body">

                <div class="form-group">
                  <label for="name">category</label>
                  <input type="text" class="form-control" name = "name" id="name" placeholder="category">
                </div>

                

                <div class="form-group">
                  <label for="slug">tag slug</label>
                  <input type="text" class="form-control" name = "slug" id="slug" placeholder="slug">
                </div>



              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href = "{{ route('category.index') }}" class="btn btn-warning">Back</a>

              </div>
            </form>
          </div>
          <!-- /.box -->
          

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection