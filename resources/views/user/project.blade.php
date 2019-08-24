@extends('user.view')

@section('title', 'creativeArtist')

@section('style')
@endsection
@section('main-wrapper-class', 'page-single-portfolio')
@section('content')

<div class="single-portfolio">
  <div class="container">

    <img src="{{ Storage::disk('local')->url($project->bannerImage[0]['photo_pathname']) }}" class="img-responsive scroll-reveal" alt="" width="1140" height="700"/>

    <h1 class="scroll-reveal">{{$project->project_title}}</h1>
    <p class="info scroll-reveal">{{$project->project_link}}</p>

    <p class="scroll-reveal">{{$project->project_description}}</p>

    <div class="row images">
      @foreach($project->projectImage as $projectImage)
      <div class="col-md-6 scroll-reveal">
          <img src="{{ Storage::disk('local')->url( $projectImage->photo_pathname) }}" class="img-responsive" alt="" />
      </div> <!-- /.col-md-6 -->
      @endforeach
    </div> <!-- /.row -->

    <p class="scroll-reveal">{{$project->about_client}}</p>

  </div> <!-- /.container -->
</div> <!-- /.single-portfolio -->
@endsection