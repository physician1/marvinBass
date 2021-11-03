@extends('layouts.app')

@section('content')
<div class="container">
   
  
<b-row>
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
</b-row>
</section>



{{-- <section>
<Pricing></Pricing>
</section> --}}


</div>
@endsection