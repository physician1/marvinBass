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


<div class="shell">
  <div class="container">

  
  <div class="row">
   <div class="col-md-9 mx-auto center">
          <select class="form-select" aria-label="Default select example">
               <option class="input-group"  value="0" selected="" >Filter Courses</option>
               <option class="input-group"  value="1" >Electric Bass</option>
                <option class="input-group" value="2" >African bass</option>
                <option class="input-group" value="3" >Jazz Bass</option>
         </select>
    </div>

          
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
</div>

@endsection