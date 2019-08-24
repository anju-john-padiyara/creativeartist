@extends('admin.app')

@section('content')
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">

    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Messages</h3>
      </div>
    <!-- Default box -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Message</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($messages as $message)
            <tr>
              <td>{{ $loop->index + 1}}</td>
              <td>{{ $message->name }}</td>
              <td>{{ $message->email }}</td>
              <td>{{ $message->message }}</td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>S.No</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Message</th>
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