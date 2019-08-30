@if (count($errors) > 0)

  @foreach ($errors->all() as $err)
      <p class="alert alert-danger">{{ $err }} </p>
  @endforeach
  
@endif


@if (session()->has('message'))

	<p class="alert alert-success justify-content-center">{{ session('message') }} </p>

@endif