@extends('layouts.home')

@section('main')
<div>
  testo di prova
  <div class="container">
    <div class="card">
      @foreach($fumetti as $key => $fumetto)
        <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}">
        <div>
          <h2>
            <a href="{{route('comic' , ['id' => $key])}}">{{$fumetto->title}}</a>
          </h2>
        </div>
        <p>{{$fumetto->description}}</p>
      @endforeach

    </div>
  </div>
</div>
@endsection

