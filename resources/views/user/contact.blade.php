@extends('user.view')

@section('title', 'Contact Me')

@section('head')
@endsection
@section('style')
@endsection
@section('main-wrapper-class', 'page-contact-2')
@section('content')

<section class="page contact contact-2">
  <div class="container">

    <header>
      <h1 class="scroll-reveal">Contact</h1>
      <p class="sub-heading scroll-reveal">Let's talk some business!</p>
      <p class="scroll-reveal">Keep in touch for any enquiries regarding projects through email or phone, feel free to contact! Thank you :)</p>
    </header>
    @include('admin.message')
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
          <form id="contactForm" method="post" action="/contact" data-toggle="validator" class="shake">
             {{csrf_field()}}
            <div class="form-group">
              <label for="name">Name</label>
              <input name="name" type="text" class="form-control" id="name" placeholder="Your name" required value="{{ old('name') }}" >
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Your email" required value="{{ old('email') }}">
              <div class="help-block with-errors"></div>
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" class="form-control" rows="6" placeholder="Write your message here" required>{{ old('message') }}</textarea>
              <div class="help-block with-errors"></div>
            </div>
            <div class="g-recaptcha" 
              data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
            </div>
            <button type="submit" id="form-submit" class="btn btn-default ">Send</button>

          </form>

        </div> <!-- /.contact-form -->
      </div> <!-- /.col-md-8 -->

    </div> <!-- /.row -->


  </div> <!-- /.container -->
</section> <!-- /.contact -->
@endsection

@section('script')
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection