@extends('layouts.home')

@section('main')
<div>
  testo di prova
  <div class="container">
    <div class="card">
      @foreach($fumetti as $fumetto)
        <img src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}">
        <div>
          <h2>
            {{$fumetto['title']}}
          </h2>
        </div>
        <p>{{$fumetto['description']}}</p>
      @endforeach

    </div>
  </div>
</div>
@endsection

