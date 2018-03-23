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
            <form role="form">
              <div class="box-body">

                <div class="form-group">
                  <label for="title">title</label>
                  <input type="text" class="form-control" name = "title" id="title" placeholder="title">
                </div>

                <div class="form-group">
                  <label for="subtitle">sub title</label>
                  <input type="text" class="form-control" name = "subtitle" id="subtitle" placeholder="sub title">
                </div>

                <div class="form-group">
                  <label for="slug">slug</label>
                  <input type="text" class="form-control" name = "slug" id="slug" placeholder="slug">
                </div>


                <div class="box">
            <div class="box-header">
              <h3 class="box-title">WRITE POST HERE
                <small>Simple and fast</small>
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea" placeholder="Place some text here" name = "body"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
          </div>

                <div class="form-group">
                  <label for="image">File input</label>
                  <input type="file" name = "image" id="image">
                </div>



             
              
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name = "status"> Publish
                  </label>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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