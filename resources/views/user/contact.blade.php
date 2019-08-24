@extends('user.view')

@section('title', 'Contact Me')

@section('style')
@endsection
@section('main-wrapper-class', 'page-contact-2')
@section('content')

<section class="page contact contact-2">
  <div class="container">

    <header>
      <h1 class="scroll-reveal">Contact</h1>
      <p class="sub-heading scroll-reveal">Army had half a day</p>
      <p class="scroll-reveal">Now, when you do this without getting punched in the chest, you'll have more fun. I hear the jury's still out on science.</p>
    </header>

    <div class="row row-centered">

      <div class="col-md-3 col-centered scroll-reveal">
        <div class="contact-2-info">
          <div class="content">
            <i class="fa fa-home"></i>
            <p>Ramanilayam<br /> Puthupally <br /> Kottayam
            Kerala - 686011</p>
          </div> <!-- /.content -->
        </div> <!-- /.contact-2-info -->
      </div> <!-- /.col-md-3 -->

      <div class="col-md-3 col-centered scroll-reveal">
        <div class="contact-2-info">
          <div class="content">
            <i class="fa fa-phone"></i>
            <p>+91 80754 98627</p>
          </div> <!-- /.content -->
        </div> <!-- /.contact-2-info -->
      </div> <!-- /.col-md-3 -->

      <div class="col-md-3 col-centered scroll-reveal">
        <div class="contact-2-info">
          <div class="content">
            <i class="fa fa-envelope"></i>
            <p>imthecreativeartist@gmail.com</p>
          </div> <!-- /.content -->
        </div> <!-- /.contact-2-info -->
      </div> <!-- /.col-md-3 -->
    </div> <!-- /.row -->


    <div class="row row-centered">
      <div class="col-md-9 col-centered">
        <div class="contact-form scroll-reveal">
           @include('admin.message')
          <form id="contactForm" method="post" action="/contact" data-toggle="validator" class="shake">
             {{csrf_field()}}
            <div class="form-group">
              <label for="name">Name</label>
              <input name="name" type="text" class="form-control" id="name" placeholder="Your name" required data-error="Name missing">
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Your email" required>
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" class="form-control" rows="6" placeholder="Write your message here" required></textarea>
              <div class="help-block with-errors"></div>
            </div>

              <button type="submit" id="form-submit" class="btn btn-default ">Send</button>

          </form>

        </div> <!-- /.contact-form -->
      </div> <!-- /.col-md-8 -->

    </div> <!-- /.row -->


  </div> <!-- /.container -->
</section> <!-- /.contact -->
@endsection
