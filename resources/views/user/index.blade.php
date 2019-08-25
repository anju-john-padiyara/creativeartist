@extends('user.view')

@section('title', 'creativeArtist')

@section('style')
<style>
/*--- 04.02. Animated Title ---*/

.cd-words-wrapper {
    display: inline-block;
    position: relative;
    text-align: left;
}
.cd-words-wrapper b {
    display: inline-block;
    position: absolute;
    white-space: nowrap;
    left: 0;
    top: 0;
}
.cd-words-wrapper b.is-visible {
    position: relative;
}
.no-js .cd-words-wrapper b {
    opacity: 0;
}
.no-js .cd-words-wrapper b.is-visible {
    opacity: 1;
}
/* -------------------------------- 
clip effect
-------------------------------- */
.cd-headline{
  font-size: 25px;
  font-weight: 700;
  margin-top: 0px;
}

.cd-headline.clip span {
    display: inline-block;
}
.cd-headline.clip .cd-words-wrapper {
    overflow: hidden;
    vertical-align: top;
    height: 29px;
}
.cd-headline.clip .cd-words-wrapper::after {
    /* line */
    
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 1px;
    height: 100%;
    background-color: #aebcb9;
}
.cd-headline.clip b {
    opacity: 0;
}
.cd-headline.clip b.is-visible {
    opacity: 1;
}
/* -------------------------------- */

.intro-personal {
  padding-top: 60px;
  text-align: center;
}

.intro-personal .intro-text {
  padding: 0 40px;
}

.intro-personal .intro-text h1 {
  font-size: 48px;
  font-weight: 600;
  letter-spacing: -2px;
  line-height: 1.2;
}

.btn-contact {
  font-size: 16px;
  font-weight: 600;
  color: #f44336;
  display: inline-block;
  text-transform: uppercase;
  background: transparent;
  border: 3px solid;
  border-color: #f44336;
  padding: 10px 20px;
  margin-top: 40px;
  margin-bottom: 40px;
  -webkit-transform: 0.5s;
  -moz-transform: 0.5s;
  transition: 0.5s;
}

.btn-contact:hover, .btn-contact:focus {
  color: #FFFFFF;
  background: #f44336;
  border-color: #f44336;
  text-decoration: none;
}
</style>
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
            <h3 class="cd-headline clip is-full-width"><span class="cd-words-wrapper"> <b class="is-visible">Graphic Designer</b> <b>Animation Artist</b> <b>Photographer</b><b>Artist</b> </span> </h3>
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
@section('script')
<script src="/js/plugin.js"></script>
@endsection