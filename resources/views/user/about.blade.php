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
          <p>Hi there! I'm Sai Kiran, 
I have been working in Designing industry for last 5 years and I have worked in different firms and department of UI UX, Digital Branding, Packaging, Video Editing and Motion graphics industry, I have sharpened my skills of illustration and art in both digital and manual platforms. I have worked with tools like Wacoms, Apple pencil in procreate for my illustrations and brainstorming activities. My iPad and apple pencil is my daily companion. I used to draw in my sketchbook but switched to iPad and apple pencil for my easy workflow and portability. I have keen observation for tiny detail to finish every projects at its most quality to satisfy my every clients! I have worked for may clients and industries.</p>
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
