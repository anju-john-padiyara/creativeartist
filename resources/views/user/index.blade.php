@extends('user.view')

@section('title', 'creativeArtist')

@section('style')
@endsection
@section('main-wrapper-class', 'home-page')

@section('content')
<div class="portfolio-home">
  <section class="intro intro-1">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <header class="scroll-reveal">
            <h1>Hello,<br />
            I'm Sai Kiran</h1>
          </header>
        </div> <!-- /.col-md-6 -->

        <div class="col-md-6">
          <p class="scroll-reveal">Designing  with subtle details and brand guidelines with the combination of innovative visualization and artistic touch  became my daily companion. I’m a professional Graphic Designer, Website Designer, Photographer and experienced Freelancer.</p>
        </div> <!-- /.col-md-6 -->

      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </section> <!-- /.intro -->


  <div class="portfolio portfolio-2">
    <div class="container">
      <div class="row no-gutter">
        @foreach($projects as $project)
          <div class="col-md-4 col-sm-6 match-height scroll-reveal">
            <a href="/project/{{$project['project_pathname']}}">
              <img src="{{ Storage::disk('local')->url($project->thumbnailImage[0]['photo_pathname']) }}" width="710" height="590" class="img-responsive" alt="" />
              <div class="overlay">
                <div class="overlay-content">
                  <h3>{{$project['project_title']}}</h3>
                  <p>View Details</p>
                </div> <!-- /.overlay-content -->
              </div> <!-- /.overlay -->
            </a>
          </div> <!-- /.col-md-4 -->
        @endforeach
      </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
  </div> <!-- /.portfolio-2 -->
</div>
@endsection