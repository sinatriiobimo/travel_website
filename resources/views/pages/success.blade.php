@extends('layouts.success')
@section('title', 'Success Transaction | NOMADS ID')

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
      <div class="col text-center">
        <img src="{{ url('/frontend/frontend/images/ic_message.png')}}" alt="">
        <h1>Yay! Success</h1>
        <p>We've sent you email for trip<br>instruction please read it as well</p>
        <a href="{{ route('home')}}" class="btn btn-home-page mt-3 px-5">
          Homepage
        </a>
      </div>
    </div>
  </main>
@endsection
