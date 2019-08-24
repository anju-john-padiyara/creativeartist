@extends('admin.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Add project</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    @include('admin.message')
    <form role="form" action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="box-body row">
        <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="project-title">Title</label>
            <input type="string" name="project_title" class="form-control" id="project-title" placeholder="Enter Title" value="{{ old('project_title') }}">
          </div>
          <div class="form-group">
            <label for="project-description">Description</label>
            <textarea rows = "5" cols = "50" name = "project_description" class="form-control" id="project-description" placeholder="Enter Description">{{ old('project_description') }}</textarea>
          </div> 
          <div class="form-group">
            <label for="project-link">Project Link</label>
            <input type="string" name="project_link" class="form-control" id="project-link" placeholder="Enter Project Link" value="{{ old('project_link') }}">
          </div>
           <div class="form-group">
            <label for="about-client">About Client</label>
            <textarea rows = "5" cols = "50" name = "about_client" class="form-control" id="about-client" placeholder="Enter details about client">{{ old('about_client') }}</textarea>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="exampleInputFile1">Thumbnail Image (710x590)</label> <br>
            <input type="file" name="thumbnail_image" id="exampleInputFile1">
          </div>
          <div class="form-group">
            <label for="exampleInputFile2">Banner Image (1140x700)</label> <br>
            <input type="file" name="banner_image" id="exampleInputFile2">
          </div>
          <div class="form-group">
            <label>Number of project images</label>
            <select name="number" id="image-number" class="form-control select2" style="width: 100%;" placeholder="Select Number">
                <option value="0">Select Number</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
          </div>
          <div id="image-input"></div>
        </div>
      </div>
      <!-- /.content -->
      <div class="box-footer text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-warning" href="/admin/home">Show project List</a>
      </div>
    </form>
  </div>
</div>
@endsection

@section('script')
<script> 
    $(document).ready(function() { 
        $("#image-number").change(function() { 
            this.parentElement.style.display = "none";
            var image_number = $("#image-number").val();
            var code = '';
            for (var i = 1; i <= image_number; i++) {
                code = code + '<div class="form-group"><label for="exampleInputprojectFile'+i+'">Project Detail Image '+i+' (555x400)</label> <br><input type="file" name="project_image['+i+']" id="exampleInputprojectFile'+i+'"></div>'; 
            }
            $('#image-input').html(code);
        }); 
    }); 
</script> 

@endsection