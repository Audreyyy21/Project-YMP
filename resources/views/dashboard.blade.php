@extends('layouts.main')

@section('content')
<div class="row">
  @foreach($courses as $course)
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="{{ asset('images/'.$course->image) }}" class="card-img-top" alt="{{ $course->title }}">
      <div class="card-body">
        <h5 class="card-title">{{ $course->title }}</h5>
        <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
