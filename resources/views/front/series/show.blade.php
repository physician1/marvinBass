@extends('layouts.app')

@section('content')
{{-- <b-container> --}}
 {{-- <section>
        <b-jumbotron>
           <template v-slot:header>{{$series->title}}</template>
           <template v-slot:lead>{{$series->description}}</template>

           <hr class="my-4">
           <b-button variant="primary" href="">Start Series</b-button>
           <b-button variant="primary" href="">Subscribe </b-button>
        </b-jumbotron>
</section> --}}

 {{-- <section class="mb-5"> 
  <h3 class="mb-3 text-center">Episodes</h3>
  <b-card no-body class="overflow-hidden mb-2">
    <episode :videos="{{$series->videos}}"></episode>
 </section> --}}
{{-- </b-container> --}}
 <div class="site-section" id="features-section">
      <div class="container-fluid">
       <div class="row justify-content-center main_div" >
          <div class="col-7 text-center  mb-5">
          </div>
        </div>
        </div>

          <div class="container2">
       <div class="row justify-content-center text-center"  style="background-color: #fff; height: 40px;">
          <div class="col-7 text-center  mb-5">
          </div>
        </div>
        </div>


 <div class="container2">
        <div class="row align-items-stretch">
         
         
         
          <div class="col-md-9 col-lg-9 mb-4 mb-lg-4" >
             <div class="myshade">
             <p>
            <h2>{{$series->title}}</h2>
          </p>
          </div>

           
          <section id="tabs">
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Course Contents</a>
      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Course Description</a>
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="lesson-list">
              {{-- <ul class="lesson-list__items">
                <li class="lesson-list__item">
                  <h2 class="lesson-list__title">
                    <a href="">Lesson 1: Major Scales (Performed as formulas)</a>
                  </h2>
                  <div class="lesson-list__meta"><span class="lesson-list__meta-item"><i class="fa fa-play" aria-hidden="true"></i> 20:29</span></div>
                  <ul class="lesson-list__actions">
                    <li class="lesson-list__action">
                      <a href="" class="btn lesson-list__action btn--start video-btn" data-toggle="modal" data-src="" data-target="#myModal" id="openModalBtn">Start</a>
                    </li>
                  </ul>
                  
                </li>
                
              </ul> --}}

              <episode :videos="{{$series->videos}}"></episode>
              
            </div>

 <!-- Button trigger modal -->

             
          </div>

          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <p class="p-5">
            {{$series->description}}
            </p>
          </div>
         
     <!--    </div> -->

     <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              
              <div class="modal-body">

               <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
                  <span aria-hidden="true">&times;</span>
                </button>        
                <!-- 16:9 aspect ratio -->
              <div class="embed-responsive embed-responsive-16by9">
                    <video controls controlsList="nodownload">
                      <source class="embed-responsive-item" src="images/pics/MARVINVIDEO.MOV" id="video"  allowscriptaccess="always" allow="autoplay" type="video/mp4">
                    </video> 
              </div>
      </div>

    </div>
  </div>
</div> 

<!-- SECOND MODAL -->
 <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              
              <div class="modal-body">

               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>        
                <!-- 16:9 aspect ratio -->
              <div class="embed-responsive embed-responsive-16by9">
                    <video controls controlsList="nodownload">
                      <source class="embed-responsive-item" src="images/pics/AMAZING.mp4" id="video"  allowscriptaccess="always" allow="autoplay" type="video/mp4">
                    </video> 
              </div>
      </div>

    </div>
  </div>
</div> 
  
  
  
</div>




</section>


</div>


          <div class="col-md-3 col-lg-3 mb-4 mb-lg-4" style="background-color: #F4F4F4;">
            <aside class="section__sidebar section__sidebar--dark section__sidebar--padded">
              <h5 class="sidebar__title mt-2">Course details</h5> 
              <dl class="meta-list"><dt class="meta-list__key">Level</dt>
               <dd class="meta-list__value">Beginner</dd> 
               <dt class="meta-list__key">Duration</dt>
                <dd class="meta-list__value">02:24:32</dd>
                 <dt class="meta-list__key">Released</dt>
                  <dd class="meta-list__value">12 December 2017</dd>
                </dl> <hr class="sidebar__divider"> 
                <div class="instructor">
                  <img src="https://scottsbasslessons.imgix.net/avatars/_avatar/phil-mann.jpg" alt="Phil Mann" class="instructor__avatar" height="70" width="70">
                   <h5 class="instructor__label mt-1">Instructor</h5>
                    <div class="instructor__name">Phil Mann</div> 
                    <p class="instructor__bio">An SBL regular and author of Chord Tone Concepts.</p></div> 
                    <div class="sidebar__ctas"><a href="" class="btn btn--inverted btn--branded btn--large btn--full-width">About</a></div>
              </aside>
          
          </div>


          </div>
        </div>
      </div>
@endsection