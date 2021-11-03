@extends('layouts.app')

@section('content')
<b-container>
 <section>
        <b-jumbotron>
           <template v-slot:header>{{$series->title}}</template>
           <template v-slot:lead>{{$series->description}}</template>

           <hr class="my-4">
           <b-button variant="primary" href="">Start Series</b-button>
           <b-button variant="primary" href="">Subscribe </b-button>
        </b-jumbotron>
</section>

 <section class="mb-5"> 
  <h3 class="mb-3 text-center">Episodes</h3>
  <b-card no-body class="overflow-hidden mb-2">
    <episode :videos="{{$series->videos}}"></episode>
   
 </section>



</b-container>
@endsection