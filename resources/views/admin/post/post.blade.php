@extends('admin/layouts/app')

@section('headsection')

<link rel="stylesheet"  href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">

@endsection

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

            <form role="form" action = "{{ route('post.store') }}" method = "post">

              {{ csrf_field() }}
              
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

                <div class="form-group">
                  <label>Select Tags</label>
                  <select class="form-control select2 select2-hidden-accessible" multiple="" 
                  data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true"
                  name = "tags[]">
                    
                    @foreach($tags as $tag)
                      <option value = "{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach

                  </select>
                </div>

                <div class="form-group">
                  <label>Select Category</label>
                  <select class="form-control select2 select2-hidden-accessible" multiple="" 
                  data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true"
                  name = "categories[]">
                    @foreach($categories as $category)
                      <option value = "{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>


                <div class="box">
            <div class="box-header">
              <h3 class="box-title">WRITE POST HERE
                <small>Simple and fast</small>
              </h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
            
                <textarea  id = "editor1" name = "body"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
             
            </div>
          </div>

                <div class="form-group">
                  <label for="image">File input</label>
                  <input type="file" name = "image" id="image">
                </div>



             
              
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name = "status" value = "1"> Publish
                  </label>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href = "{{ route('post.index') }}" class="btn btn-warning">Back</a>

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

@section('footersection')

<script src = " {{ asset('admin/bower_components/select2/dist/js/select2.full.min.js')}} "></script>


<!-- CK Editor -->
  <script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script>

  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
  </script>

  
<script>

$(document).ready(function(){

  $('.select2').select2();

});

</script>

@endsection
