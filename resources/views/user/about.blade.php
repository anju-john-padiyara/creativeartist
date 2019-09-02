@extends('user.view')

@section('title', 'About Me')
@section('main-wrapper-class', 'page-about-3')
@section('style')
<style>
.skillbar-title,
.skill-bar-percent {
    font-size: 13px;
    color: #333;
    display: inline-block;
    margin-bottom: 7px;
}
.skill-bar-percent {
    float: right;
}
.skillbar {
    position: relative;
    display: block;
    margin-bottom: 15px;
    width: 100%;
    background: #ccc;
    height: 7px;
    border-radius: 22px;
    -moz-border-radius: 22px;
    -webkit-border-radius: 22px;
    -webkit-transition: 0.2s linear;
    -moz-transition: 0.2s linear;
    -ms-transition: 0.2s linear;
    -o-transition: 0.2s linear;
    transition: 0.2s linear;
    -webkit-transition-property: width, background-color;
    -moz-transition-property: width, background-color;
    -ms-transition-property: width, background-color;
    -o-transition-property: width, background-color;
    transition-property: width, background-color;
}
.skillbar-bar {
    height: 7px;
    width: 0px;
    background: #1488CC;
    background: linear-gradient(to right, #1488CC, #c471ed, #f64f59);
    border-radius: 22px;
    -moz-border-radius: 22px;
    -webkit-border-radius: 22px;
}
</style>
@endsection

@section('content')

<section class="page about-2">
  <div class="container">
    <img src="/images/cover.png" class="img-responsive scroll-reveal" alt="" />

    <div class="sub-section about-intro">
      <div class="row">
        <div class="col-md-3 scroll-reveal">
          <h2>About</h2>
        </div> 

        <div class="col-md-9 scroll-reveal">
        <p>A big Hi to all who love the world of beauty and art!  I’m Sai Kiran – a prolific creative artist with more than 5+ years of expertise in the Designing industry.</p>

        <p>I specialize in areas like UI UX, Digital Branding, Illustrations, Photography, Animation videos, Packaging, Video Editing and Motion graphics. During this time, I have worked with many top design firms and clients from different parts of the world. If you are looking for stunning and customized design works, then I would be your best bet.</p>

        <p>I have excelled in both manual and digital platforms. The tools that I use frequently are Photoshop, Illustrator, Premier Pro, After Effects, Autodesk Maya, ToonBoom, and Procreate. I also do have a passion for artistic photography.</p>

        <h2>What you can expect from me?</h2>

        <p>Since I have an eye for detail, and the thirst for perfection, I do brainstorm each project handed to me. My past works are evidence of my skill. I have been able to combine the fine lines of creative vibes with strategic thinking. I do update and research myself on the best tools that can be used for each project per se. My customized works are known for their professionalism, time management, clarity, and the works are highly message driven.</p>

        <p>If you would like to know me better, I would be happy to have a quick chat! </p>
        </div> <!-- /.col-md-9 -->
      </div> <!-- /.row -->
    </div> <!-- /.sub-section -->

    <div class="sub-section skills">
      <div class="row">
         <!-- Experience Start -->
        <div class="col-md-3 scroll-reveal">
          <h2>Skills</h2>
        </div> 

         <!-- Skills Start -->
         <div class="col-md-9 scroll-reveal">
            <div class="row">
              <div class="col-md-6">
                  <div class="clearfix">
                     <span class="skillbar-title">Photoshop</span> 
                     <span class="skill-bar-percent">90%</span>
                     <div class="skillbar" data-percent="90%">
                        <div class="skillbar-bar" style="width: 90%;"></div>
                     </div>
                  </div>
                  <div class="clearfix">
                     <span class="skillbar-title">Illustrator </span> 
                     <span class="skill-bar-percent">95%</span>
                     <div class="skillbar" data-percent="95%">
                        <div class="skillbar-bar" style="width: 95%;"></div>
                     </div>
                  </div>
                  <div class="clearfix">Premier Pro               
                    <span class="skill-bar-percent">80%</span>
                     <div class="skillbar" data-percent="80%">
                        <div class="skillbar-bar" style="width: 80%;"></div>
                     </div>
                  </div>
                  <div class="clearfix">
                     <span class="skillbar-title">After effects</span> 
                     <span class="skill-bar-percent">70%</span>
                     <div class="skillbar" data-percent="70%">
                        <div class="skillbar-bar" style="width: 70%;"></div>
                     </div>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="clearfix">
                   <span class="skillbar-title">Autodesk Maya</span> 
                   <span class="skill-bar-percent">70%</span>
                   <div class="skillbar" data-percent="70%">
                      <div class="skillbar-bar" style="width: 70%;"></div>
                   </div>
                </div>
                <div class="clearfix">
                   <span class="skillbar-title">ToonBoom</span> 
                   <span class="skill-bar-percent">70%</span>
                   <div class="skillbar" data-percent="70%">
                      <div class="skillbar-bar" style="width: 70%;"></div>
                   </div>
                </div>
                <div class="clearfix">
                   <span class="skillbar-title">Procreate </span> 
                   <span class="skill-bar-percent">95%</span>
                   <div class="skillbar" data-percent="95%">
                      <div class="skillbar-bar" style="width: 95%;"></div>
                   </div>
                </div>
                <div class="clearfix">
                   <span class="skillbar-title">Photography</span> 
                   <span class="skill-bar-percent">70%</span>
                   <div class="skillbar" data-percent="70%">
                      <div class="skillbar-bar" style="width: 70%;"></div>
                   </div>
                </div>
              </div>
            </div>
         </div>
         <!-- Skills Ends -->
      </div> 
    </div> <!-- /.sub-section -->
  </div> <!-- /.container -->
</section> <!-- /.about-2 -->
@endsection
