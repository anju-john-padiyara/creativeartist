@extends('admin.app')

@section('content')
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Project</h3>
      </div>
    <!-- Default box -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>S.No</th>
            <th>Project Title</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>View</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($projects as $project)
            <tr>
              <td>{{ $loop->index + 1}}</td>
              <td>{{ $project->project_title }}</td>
              <td><a href="{{ route('project.edit', $project->id)}}"><i class="far fa-edit"></i> Edit</a></td>
              <td>
                <form method="post" id="form-delete-{{$project->id}}" action="{{ route('project.destroy', $project->id) }}" style="display:none;">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                </form>
                <a href="{{ route('project.index') }}" 
                  onClick="if(confirm('Are you sure, you want to delete this?'))
                  {
                    event.preventDefault();
                    document.getElementById('form-delete-{{ $project->id }}').submit();
                  }else{
                    event.preventDefault();
                  }">
                  <i class="fa fa-trash"></i> Delete</a>
              </td>
              <td><a href="{{ $project->project_pathname }}"><i class="fas fa-eye"></i> View</a></td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>S.No</th>
            <th>Project Title</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>View</th>
          </tr>
          </tfoot>
        </table>
      </div>
    <!-- /.box -->
    </div>

  </section>
  <!-- /.content -->

</div>

@endsection