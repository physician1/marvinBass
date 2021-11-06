@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')
{{-- <div class="container"> --}}
   
  
{{-- <b-row>
@foreach($series as $s)
 <b-col cols="4">
  <b-card title="{{$s->title}}" class="text-center" img-src="{{$s->ímage? asset('storage/'.$s->ímage) : 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSPOs4jT_cgp2si_Jeaz7glQ-l5zJ9PpjQSj4WjG3vMW-1jtCe3'}}" img-alt="Image" img-top
                            >
      @php $excerpt = \Str::words($s->description, 10) @endphp
      {!! $excerpt !!}
    </b-card-text>
    
  <template v-slot:footer>
      <b-button  href="{{route('series.show', $s->id)}}" variant="primary">Play</b-button>
  </template>
    </b-card>
  </b-col>
  @endforeach
</b-row> --}}
{{-- </section> --}}
{{-- </div> --}}


{{-- <div class="shell">
  <div class="container">
   <div class="row">
    @foreach($series as $s) 
            <div class="col-md-4">
            <a href="{{route('series.show', $s->id)}}">
               <div class="wsk-cp-product">
                <div class="wsk-cp-img"><img src="https://images.unsplash.com/photo-1605020420620-20c943cc4669?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Z3VpdGFyfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" alt="Product" class="img-responsive" /></div>
                <div class="wsk-cp-text">
                  <div class="category">
                    <span>PLAY</span>
                  </div>
                  <div class="title-product">
                    <h3>{{$s->title}}</h3>
                  </div>
                </div>
              </div>
              </a>
            </div>
           @endforeach 

          
   </div>
  </div>
</div> --}}

<div class="site-section" id="features-section">
      <div class="container-fluid">
       <div class="row justify-content-center main_div"  data-aos="fade-up" 
      >
          <div class="col-7 text-center  mb-5">
            <!-- <h2 class="section-title">Imagine</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.</p> -->
          </div>
        </div>
        </div>

          <div class="container2">
       <div class="row justify-content-center text-center"  data-aos="fade-up" style="background-color: #fff; height: 40px;">
          <div class="col-7 text-center  mb-5">
           <!--  <h2 class="section-title">Imagine</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.</p> -->
          </div>
        </div>
        </div>

         <div class="container-fluid">
       <div class="row justify-content-center text-center"  data-aos="fade-up" style="background-color:; height: 25em;">
        <!--   <div class="col-7 text-center  mb-5"> -->
           <!--  <h2 class="section-title">Imagine</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga quos quaerat sapiente nam, id vero.</p> -->
         <!--  </div> -->
         <div class="container2" style="">
          <div class="row">
             <div class="col-md-12 text-left">
              <!-- <div id="artist_header">
  
             <h1>Electric Bass <br><span class="subtitle regular">with Marvin Thoaks</span></h1>
             <p>Marvin Thoaks, over the years, has taken bass playing to a distinctive level by creating series of electric bass guitar lessons which is available to his audience online on YouTube and Facebook. Students enrolled in this course will have access to video lessons, backing tracks, breakdown of bass lines in songs.</p>
             <p><span class="fa fa-check-circle"></span>&nbsp;Gospel, Funk, Pop and Highlife bass lessons  </p>
             <p><span class="fa fa-check-circle"></span>&nbsp;Chord and Arpeggio exercises</p>
            </div> -->
            <div class="main-card mb-3 card">
            <div class="card-header">
                 <div class="form-group lessons" style="float: left; width: 30%;">
                  <div class="col-md-9 mx-auto center">
                  <select class="form-select" aria-label="Default select example">
                      <option class="input-group"  value="0" selected="" >Filter Courses</option>
                      <option class="input-group"  value="1" >Electric Bass</option>
                        <option class="input-group" value="2" >African bass</option>
                        <option class="input-group" value="3" >Jazz Bass</option>
                </select>
    </div>
                 </div>
                <div class="btn-actions-p-ane-right" style="float: right !important;">
                    <div class="nav">
                        <a data-toggle="tab" href="#tab-eg6-0" class="border-0 btn-transition btn btn-outline-primary show active">All</a>
                        <a data-toggle="tab" href="#tab-eg6-1" class="mr-1 ml-1 border-0 btn-transition btn btn-outline-primary show">Beginner</a>
                        <a data-toggle="tab" href="#tab-eg6-2" class="border-0 btn-transition btn btn-outline-primary show">Intermediate</a>
                        <a data-toggle="tab" href="#tab-eg6-3" class="border-0 btn-transition btn btn-outline-primary show">Advanced</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane show active" id="tab-eg6-0" role="tabpanel">
                      <p>
                        <div class="row">
                       @foreach($series as $s) 
                        <div class="col-md-4 mt-5">
                         <div class="card profile-card-2 profile-card-2">
                          <div class="card-img-block">
                          <img class="img-fluid" src="{{$s->ímage? asset('storage/'.$s->ímage) : 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSPOs4jT_cgp2si_Jeaz7glQ-l5zJ9PpjQSj4WjG3vMW-1jtCe3'}}" alt="Card image cap">
                         </div>
                        <div class="card-body pt-5" style="padding-bottom: 0.5rem !important;">
                        <img src={{asset('css/site/logoimage/marvin1.jpg')}} alt="profile-image" width="90" height="80" class="profile">
                   
                        <h6 class="card-title">{{$s->title}}</h6>
                         <p class="card-text center">
                          @php $excerpt = \Str::words($s->description, 10) @endphp
                          {!! $excerpt !!}
                        </p>
                    </div>
                    <footer class="activity-summary__footer">
                     
                     <div class="activity-summary__start"  style="text-align: center !important;">
                        {{-- <a href="" class="btn-sm btn-warning" >Preview course</a> --}}
                      <b-button  href="{{route('series.show', $s->id)}}" variant="primary">Play</b-button>
                    </div>
                   </footer>
                  </div>
              </div>
              @endforeach 
  {{-- end --}}

          </div>
                     
            </div> 
           
       </div>
         </div>
        </div>
        </div>

       

    </div>

       
       
@endsection