@extends('user.view')

@section('title', 'About Me')

@section('style')
@endsection

@section('content')

<section class="page about-2">
  <div class="container">

    <img src="/images/image-5.jpg" class="img-responsive scroll-reveal" alt="" />

    <div class="sub-section about-intro">
      <div class="row">
        <div class="col-md-3 scroll-reveal">
          <h2>About</h2>
        </div> 

        <div class="col-md-9 scroll-reveal">
          <p>There's so many poorly chosen words in that sentence. No, I did not kill Kitty. However, I am going to oblige and answer the nice officer's questions because I am an honest man with no secrets to hide. First place chick is hot, but has an attitude, doesn't date magicians. I don't understand the question, and I won't respond to it. Did you enjoy your meal, Mom? You drank it fast enough. Say goodbye to these, because it's the last time!</p>
        </div> <!-- /.col-md-9 -->
      </div> <!-- /.row -->
    </div> <!-- /.sub-section -->

    <div class="sub-section skills">
      <div class="row">
        <div class="col-md-3 scroll-reveal">
          <h2>Skills</h2>
        </div> <!-- /.col-md-3 -->

        <div class="col-md-9">
          <div class="row">

            <div class="col-md-4 match-height scroll-reveal">
              <i class="fa fa-heart"></i>
              <h3>Identity</h3>
              <p>No, I did not kill Kitty. However, I am going to oblige and answer the nice officer's questions because I am an honest man with no secrets to hide.</p>
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 match-height scroll-reveal">
              <i class="fa fa-pencil"></i>
              <h3>Design</h3>
              <p>No, I did not kill Kitty. However, I am going to oblige and answer the nice officer's questions because I am an honest man with no secrets to hide.</p>
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 match-height scroll-reveal">
              <i class="fa fa-camera"></i>
              <h3>Photography</h3>
              <p>No, I did not kill Kitty. However, I am going to oblige and answer the nice officer's questions because I am an honest man with no secrets to hide.</p>
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 match-height scroll-reveal">
              <i class="fa fa-keyboard-o"></i>
              <h3>Development</h3>
              <p>No, I did not kill Kitty. However, I am going to oblige and answer the nice officer's questions because I am an honest man with no secrets to hide.</p>
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 match-height scroll-reveal">
              <i class="fa fa-wordpress"></i>
              <h3>WordPress</h3>
              <p>No, I did not kill Kitty. However, I am going to oblige and answer the nice officer's questions because I am an honest man with no secrets to hide.</p>
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 match-height scroll-reveal">
              <i class="fa fa-mobile"></i>
              <h3>Mobile</h3>
              <p>No, I did not kill Kitty. However, I am going to oblige and answer the nice officer's questions because I am an honest man with no secrets to hide.</p>
            </div> <!-- /.col-md-4 -->

          </div> <!-- /.row -->
        </div> <!-- /.col-md-9 -->
      </div> <!-- /.row -->
    </div> <!-- /.sub-section -->

    <div class="sub-section testimonials">
  <div class="container">

    <h2 class="scroll-reveal">Testimonials</h2>
    <p class="sub-heading scroll-reveal">Army had half a day</p>

    <div id="testimonials-carousel" class="carousel slide scroll-reveal" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#testimonials-carousel" data-slide-to="1"></li>
        <li data-target="#testimonials-carousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <p>“But I bought a yearbook ad from you, doesn't that mean anything anymore? Army had half a day. Not tricks, Michael, illusions.”</p>
          <img src="/images/author-1.jpg" class="img-circle img-responsive" alt="" />
          <p class="author">Rich Benes - CEO</p>
        </div> <!-- /.item -->

        <div class="item">
          <p>“But I bought a yearbook ad from you, doesn't that mean anything anymore? Army had half a day. Not tricks, Michael, illusions.”</p>
          <img src="/images/author-1.jpg" class="img-circle img-responsive" alt="" />
          <p class="author">Rich Benes - CEO</p>
        </div> <!-- /.item -->

        <div class="item">
          <p>“But I bought a yearbook ad from you, doesn't that mean anything anymore? Army had half a day. Not tricks, Michael, illusions.”</p>
          <img src="/images/author-1.jpg" class="img-circle img-responsive" alt="" />
          <p class="author">Rich Benes - CEO</p>
        </div> <!-- /.item -->

      </div> <!-- /.carousel-inner -->
    </div> <!-- /carousel-inner -->
  </div> <!-- /.container -->
</div> <!-- /.testimonials -->


  </div> <!-- /.container -->
</section> <!-- /.about-2 -->
@endsection

@section('script')
<script src="/js/validator.min.js"></script>
<script src="/js/form-scripts.js"></script>
@endsection